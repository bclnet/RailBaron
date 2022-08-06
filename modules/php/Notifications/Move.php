<?php
namespace RB\Notifications;
use RB\Core\Notifications;

class Move extends \RB\Core\Notifications {
	public static function moveRolls($dice) {
		self::notifyAll('travelRolls', '${player_name} rolls: [${dice}]', [
			"rolls" => implode(',', $dice),
		]);
	}

	public static function completeTravel($player, $city) {
		self::notifyAll('completeTravel', '${player_name} reached destination of ${city_name}', [
			"player" => $player,
			"city" => $city,
		]);
	}

	// public static function moveFormation($player, $formation, $from_city, $to_city) {
	// 	self::notifyAll('moveFormation', '${player_name} moved ${formation_count} formation from ${from_name} to ${city_name}', [
	// 		"player" => $player,
	// 		"formation_count" => count($formation),
	// 		"formation" => $formation,
	// 		"from_id" => $from_city['id'],
	// 		"from_name" => $from_city['name'],
	// 		"city" => $to_city,
	// 	]);
	// }
}