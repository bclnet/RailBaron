
-- ------
-- BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
-- RailBaron implementation : © Sky Morey <sky.morey@merklecxm.com>
-- 
-- This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
-- See http://en.boardgamearena.com/#!doc/Studio for more information.
-- -----

-- dbmodel.sql

ALTER TABLE `player`
  ADD `player_cash` int(10) unsigned NOT NULL,
  ADD `player_city` varchar(30) DEFAULT NULL,
  ADD `player_location` varchar(30) DEFAULT NULL,
  ADD `player_engine` varchar(10) NOT NULL;

CREATE TABLE IF NOT EXISTS `global_variable` (
  `name` varchar(255) NOT NULL,
  `value` JSON,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user_preference` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_id` int(10) NOT NULL,
  `pref_id` int(10) NOT NULL,
  `pref_value` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `card` (
  `card_id` int(10) unsigned NOT NULL,
  `card_location` varchar(32) NOT NULL,
  `card_state` int(10) DEFAULT 0,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `token` (
  `token_id` varchar(32) NOT NULL,
  `token_location` varchar(32) NOT NULL,
  `token_state` int(10) DEFAULT 0,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `rail` (
  `rail_id` varchar(8) NOT NULL,
  `rail_player` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`rail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
