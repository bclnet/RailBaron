<?php

namespace RB\Core;

class Notifications
{
	protected static function notifyAll($name, $msg, $data)
	{
		self::updateArgs($data);
		Game::get()->notifyAllPlayers($name, $msg, $data);
	}

	protected static function notify($player, $name, $msg, $data)
	{
		$pId = is_int($player) ? $player : $player->getId();
		self::updateArgs($data);
		Game::get()->notifyPlayer($pId, $name, $msg, $data);
	}

	public static function message($txt, $args = [])
	{
		self::notifyAll('message', $txt, $args);
	}

	public static function messageTo($player, $txt, $args = [])
	{
		$pId = is_int($player) ? $player : $player->getId();
		self::notify($pId, 'message', $txt, $args);
	}

	/*
	* Automatically adds some standard field about player and/or card
	*/
	protected static function updateArgs(&$args)
	{
		if (isset($args['player'])) {
			$args['player_name'] = $args['player']->getName();
			$args['player_id'] = $args['player']->getId();
			unset($args['player']);
		}

		if (isset($args['rail'])) {
			$c = $args['rail'];
			$args['rail_name'] = $c['name'];
		}

		if (isset($args['city'])) {
			$c = $args['city'];
			$args['city_name'] = $c['name'];
		}

		if (isset($args['engine'])) {
			$c = $args['engine'];
			$args['engine_name'] = $c['name'];
		}
	}
}
