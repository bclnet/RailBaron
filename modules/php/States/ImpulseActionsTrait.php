<?php
namespace RB\States;

use RB\Core\Globals;

trait ImpulseActionsTrait {
	function argImpulseActions() {
		$cp = Globals::getRemainingCP();
		return [
			'remainingCP' => $cp,
		];
	}
}
