<?php

namespace RB\Core;

use railbaron;

/*
 * Game: a wrapper over table object to allow more generic modules
 */

class Game
{
	public static function get()
	{
		return railbaron::get();
	}
}
