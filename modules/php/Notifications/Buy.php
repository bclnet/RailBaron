<?php
namespace RB\Notifications;
use RB\Core\Notifications;

class Buy extends \RB\Core\Notifications {
	public static function buyRail($player, $rail) {
		self::notifyAll('buyRail', '${player_name} bought ${rail_name}', [
			"player" => $player,
			"rail" => $rail,
		]);
	}

	public static function buyEngine($player, $engine) {
		self::notifyAll('buyRail', '${player_name} bought ${engine_name}', [
			"player" => $player,
			"engine" => $engine,
		]);
	}
}