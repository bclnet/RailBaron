<?php
namespace RB\States;

trait WithdrawBattleTrait {
	function stFindWithdraw() {
		$this->gamestate->nextState("none");
	}

	function argWithdrawIntent() {
		return [];
	}
}
