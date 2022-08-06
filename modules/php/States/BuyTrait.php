<?php
namespace RB\States;

use RB\Core\Game;
use RB\Managers\Players;

trait BuyTrait {

	function argBuyUnit() {
		$player = Players::getActive();
		$cities = Game::get()->cities;
		$home_cities = [];
		foreach ($cities as $city_id => $city) {
			if ($city['home_power'] == $player->power) {
				$home_cities[] = $city_id;
			}
		}
		return [
			'valid_city_ids' => $home_cities,
		];
	}

}
