<?php
namespace RB\Managers;
use RB\Core\Game;
use RB\Managers\Tokens;
use RB\Models\City;

/*
 * Cities: all utility functions concerning cities
 */

class Cities {
	public static function getAll() {
		$cities = [];
		$tokens = Tokens::getAll();
		foreach (Game::get()->cities as $city_id => $city) {
			$cities[] = new City($city, $tokens);
		}
	}
}
