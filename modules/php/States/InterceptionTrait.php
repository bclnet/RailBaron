<?php
namespace RB\States;

trait InterceptionTrait {
	function stFindInterceptions() {
		$this->gamestate->nextState("none");
	}

	function argInterceptIntent() {
		return [];
	}

	function stRollInterception() {
		$this->gamestate->nextState("done");
	}

}
