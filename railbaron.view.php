<?php

/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * RailBaron implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * railbaron.view.php
 *
 * This is your "view" file.
 *
 * The method "build_page" below is called each time the game interface is displayed to a player, ie:
 * _ when the game starts
 * _ when a player refreshes the game page (F5)
 *
 * "build_page" method allows you to dynamically modify the HTML generated for the game interface. In
 * particular, you can set here the values of variables elements defined in railbaron_railbaron.tpl (elements
 * like {MY_VARIABLE_ELEMENT}), and insert HTML block elements (also defined in your HTML template file)
 *
 * Note: if the HTML of your game interface is always the same, you don't have to place anything here.
 *
 */

require_once(APP_BASE_PATH . "view/common/game.view.php");

class view_railbaron_railbaron extends game_view
{
  function getGameName()
  {
    return "railbaron";
  }
  function build_page($viewArgs)
  {
    // Get players & players number
    $players = $this->game->loadPlayersBasicInfos();
    $players_nbr = count($players);

    /*********** Place your code below:  ************/

    $this->tpl['VAR_CASH'] = 'cash';

    // RAIL
    $this->page->begin_block("railbaron_railbaron", "rail");
    foreach ($this->game->data_rails as $key => $value) {
      $this->page->insert_block("rail", array(
        'X' => $key,
        'TITLE' => $value['name'],
        'LEFT' => $value['x'][0],
        'TOP' => $value['x'][1]
      ));
    }

    // STOP
    $this->page->begin_block("railbaron_railbaron", "stop");
    foreach ($this->game->data_rails as $key2 => $value2) {
      foreach ($value2['stops'] as $key => $value) {
        if ($key[0] == "#") continue;
        $this->page->insert_block("stop", array(
          'TITLE' => $key2 . ':' . $key,
          'LEFT' => $value[0],
          'TOP' => $value[1]
        ));
      }
    }

    // CITES
    $this->page->begin_block("railbaron_railbaron", "city");
    foreach ($this->game->data_cities as $key => $value) {
      $this->page->insert_block("city", array(
        'X' => $key,
        'TITLE' => $key,
        'LEFT' => $value['x'][0],
        'TOP' => $value['x'][1]
      ));
    }

    /*
        
        // Examples: set the value of some element defined in your tpl file like this: {MY_VARIABLE_ELEMENT}

        // Display a specific number / string
        $this->tpl['MY_VARIABLE_ELEMENT'] = $number_to_display;

        // Display a string to be translated in all languages: 
        $this->tpl['MY_VARIABLE_ELEMENT'] = self::_("A string to be translated");

        // Display some HTML content of your own:
        $this->tpl['MY_VARIABLE_ELEMENT'] = self::raw( $some_html_code );
        
        */

    /*
        
        // Example: display a specific HTML block for each player in this game.
        // (note: the block is defined in your .tpl file like this:
        //      <!-- BEGIN myblock --> 
        //          ... my HTML code ...
        //      <!-- END myblock --> 
        

        $this->page->begin_block( "railbaron_railbaron", "myblock" );
        foreach( $players as $player )
        {
            $this->page->insert_block( "myblock", array( 
                                                    "PLAYER_NAME" => $player['player_name'],
                                                    "SOME_VARIABLE" => $some_value
                                                    ...
                                                     ) );
        }
        
        */



    /*********** Do not change anything below this line  ************/
  }
}
