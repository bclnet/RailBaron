
-- ------
-- BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
-- RailBaron implementation : © <Your name here> <Your email address here>
-- 
-- This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
-- See http://en.boardgamearena.com/#!doc/Studio for more information.
-- -----

-- dbmodel.sql

ALTER TABLE `player`
  ADD `player_cash` int(10) unsigned NOT NULL DEFAULT 20000,
  ADD `player_city` varchar(30) DEFAULT NULL,
  ADD `player_location` varchar(30) DEFAULT NULL,
  ADD `player_engine` varchar(10) DEFAULT 'Normal';

CREATE TABLE IF NOT EXISTS `rail` (
  `rail_id` varchar(8) NOT NULL,
  `rail_player` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`rail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
