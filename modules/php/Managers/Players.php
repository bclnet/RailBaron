<?php

namespace RB\Managers;

use RB\Core\Game;

/*
 * Players manager : allows to easily access players ...
 *  a player is an instance of Player class
 */

class Players extends \RB\Helpers\DB_Manager
{
	protected static $table = 'player';
	protected static $primary = 'player_id';
	protected static function cast($row)
	{
		return new \RB\Models\Player($row);
	}

	public function setupNewGame($players, $options)
	{
		// Create players
		$gameInfos = Game::get()->getGameinfos();
		$colors = $gameInfos['player_colors'];
		$query = self::DB()->multipleInsert([
			'player_id',
			'player_color',
			'player_canal',
			'player_name',
			'player_avatar',
			'player_score',
			'player_cash',
			'player_city',
			'player_engine',
		]);

		$values = [];
		foreach ($players as $pId => $player) {
			$color = array_shift($colors);
			$values[] = [$pId, $color, $player['player_canal'], $player['player_name'], $player['player_avatar'], 0, 20000, null, 'Normal'];
		}
		$query->values($values);

		Game::get()->reattributeColorsBasedOnPreferences($players, $gameInfos['player_colors']);
		Game::get()->reloadPlayersBasicInfos();
	}

	public function getActiveId()
	{
		return (int) Game::get()->getActivePlayerId();
	}

	public function getCurrentId()
	{
		return Game::get()->getCurrentPId();
	}

	public function isActive()
	{
		return Game::get()->gamestate->isPlayerActive(self::getCurrentId());
	}

	public function getAll()
	{
		$players = self::DB()->get(false);
		return $players;
	}

	// public function getFromPower($power)
	// {
	// 	return self::DB()
	// 		->where('player_power', $power)
	// 		->getSingle();
	// }

	/*
	* get : returns the Player object for the given player ID
	*/
	public function get($pId = null)
	{
		$pId = $pId ?: self::getActiveId();
		return self::DB()
			->where($pId)
			->getSingle();
	}

	public function getMany($pIds)
	{
		$players = self::DB()
			->whereIn($pIds)
			->get();
		return $players;
	}

	public function getActive()
	{
		return self::get();
	}

	public function getCurrent()
	{
		return self::get(self::getCurrentId());
	}

	public function getNextId($player)
	{
		$pId = is_int($player) ? $player : $player->getId();

		$table = Game::get()->getNextPlayerTable();
		return (int) $table[$pId];
	}

	public function getPrevId($player)
	{
		$pId = is_int($player) ? $player : $player->getId();

		$table = Game::get()->getPrevPlayerTable();
		$pId = (int) $table[$pId];

		return $pId;
	}

	/*
	* Return the number of players
	*/
	public function count()
	{
		return self::DB()->count();
	}

	/*
	* getUiData : get all ui data of all players
	*/
	public function getUiData($pId)
	{
		return self::getAll()->map(function ($player) use ($pId) {
			return $player->jsonSerialize($pId);
		});
	}

	/**
	 * This activate next player
	 */
	public function activeNext()
	{
		$pId = self::getActiveId();
		$nextPlayer = self::getNextId((int) $pId);

		Game::get()->gamestate->changeActivePlayer($nextPlayer);
		return $nextPlayer;
	}

	/**
	 * This allow to change active player
	 */
	public function changeActive($pId)
	{
		Game::get()->gamestate->changeActivePlayer($pId);
	}
}
