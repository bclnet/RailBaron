<?php
namespace RB\States;

use RB\Core\Globals;
use RB\Managers\Players;

trait NextPlayerTrait {
	function stNextPlayer() {
		Globals::setRemainingCP(0);
		Players::activeNext();
		$this->gamestate->nextState("nextPlayer");
	}
}
