<?php

namespace RB\Core;

class Stats
{
	protected static function init($type, $name, $value = 0)
	{
		Game::get()->initStat($type, $name, $value);
	}

	public static function inc($name, $player = null, $value = 1, $log = true)
	{
		$pId = is_null($player) ? null : (is_int($player) ? $player : $player->getId());
		Game::get()->incStat($value, $name, $pId);
	}

	protected static function get($name, $player = null)
	{
		Game::get()->getStat($name, $player);
	}

	protected static function set($value, $name, $player = null)
	{
		$pId = is_null($player) ? null : (is_int($player) ? $player : $player->getId());
		Game::get()->setStat($value, $name, $pId);
	}

	/*
	* Setup new game
	*/
	public static function setupNewGame()
	{
		// (note: statistics used in this file must be defined in your stats.inc.php file)
		//self::initStat('table', 'table_teststat1', 0);    // Init a table statistics
		//self::initStat('player', 'player_teststat1', 0);  // Init a player statistics (for all players)
	}
}
