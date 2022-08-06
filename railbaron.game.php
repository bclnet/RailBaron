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
 * railbaron.game.php
 *
 */

$swdNamespaceAutoload = function ($class) {
    $classParts = explode('\\', $class);
    if ($classParts[0] == 'RB') {
        array_shift($classParts);
        $file = dirname(__FILE__) . '/modules/php/' . implode(DIRECTORY_SEPARATOR, $classParts) . '.php';
        if (file_exists($file)) {
            require_once $file;
        } else {
            var_dump('Cannot find file : ' . $file);
        }
    }
};
spl_autoload_register($swdNamespaceAutoload, true, true);

require_once(APP_GAMEMODULE_PATH . 'module/table/table.game.php');

use RB\Core\Actions;
use RB\Core\Globals;
use RB\Core\Preferences;
use RB\Core\Stats;
use RB\Managers\Cards;
use RB\Managers\Players;
use RB\Managers\Tokens;

class RailBaron extends Table
{
    // use RB\DebugTrait;
    // use RB\States\NextPlayerTrait;
    // use RB\States\MovementTrait;
    // use RB\States\FieldBattleTrait;
    // use RB\States\InterceptionTrait;
    // use RB\States\AvoidBattleTrait;
    // use RB\States\WithdrawBattleTrait;
    // use RB\States\BuyTrait;
    // use RB\States\ImpulseActionsTrait;
    // use RB\SetupTrait;
    // use RB\AdditionalStaticTrait;

    public static $instance = null;
    function __construct()
    {
        // Your global variables labels:
        //  Here, you can assign labels to global variables you are using for this game.
        //  You can use any number of global variables with IDs between 10 and 99.
        //  If your game has options (variants), you also have to associate here a label to
        //  the corresponding ID in gameoptions.inc.php.
        // Note: afterwards, you can get/set the global variables with getGameStateValue/setGameStateInitialValue/setGameStateValue
        parent::__construct();
        self::$instance = $this;
        self::initGameStateLabels(array(
            "logging" => 10,
            "game_board" => 100,
        ));
    }

    public static function get()
    {
        return self::$instance;
    }

    protected function getGameName()
    {
        return "railbaron";
    }

    public function getStateName()
    {
        $state = $this->gamestate->state();
        return $state['name'];
    }

    // TODO:MOVE
    public function getBoardId()
    {
        switch ($this->getGameStateValue('game_board')) {
            case 1:
                return 'A';
            case 2:
                return 'NBR';
            default:
                throw new feException('Unknown game_board');
        }
    }

    /*
        setupNewGame:
    */
    protected function setupNewGame($players, $options = array())
    {
        Globals::setupNewGame($players, $options);
        Preferences::setupNewGame($players, $options);
        Players::setupNewGame($players, $options);
        Stats::setupNewGame($players, $options);
        Tokens::setupNewGame($players, $options);
        Cards::setupNewGame($players, $options);
        // Init global values with their initial values
        // self::setGameStateInitialValue('logging', 0);
        $this->activeNextPlayer();
    }

    function initTables()
    {
        $options = [];
        try {
            $players = $this->loadPlayersBasicInfos();
            Globals::setupNewGame($players, $options);
            Preferences::setupNewGame($players, $options);
            Players::setupNewGame($players, $options);
            Tokens::setupNewGame($players, $options);
            Cards::setupNewGame($players, $options);
        } catch (Exception $e) {
            // logging does not actually work in game init :(
            // but if your calling from php chat it will work
            self::dump("======EXCEPTION======", $e);
            self::error("Fatal error while creating game");
            var_dump($e);
        }
    }

    /*
        getAllDatas: 
        
        Gather all informations about current game situation (visible by the current player).
        
        The method is called each time the game interface is displayed to a player, ie:
        _ when the game starts
        _ when a player refreshes the game page (F5)
    */
    protected function getAllDatas()
    {
        $result = array();

        $current_player_id = self::getCurrentPlayerId();    // !! We must only return informations visible by this player !!

        // Get information about players
        // Note: you can retrieve some extra field you added for "player" table in "dbmodel.sql" if you need it.
        $sql = "SELECT player_id id, player_score score FROM player";
        $result['players'] = self::getCollectionFromDb($sql);

        // TODO: Gather all information about current game situation (visible by player $current_player_id).

        // Get rails
        $result['rails'] = self::getObjectListFromDB("SELECT rail_id id, rail_player player FROM rail WHERE rail_player IS NOT NULL");

        return $result;
    }

    /*
        getGameProgression:
        
        Compute and return the current game progression.
        The number returned must be an integer beween 0 (=the game just started) and
        100 (= the game is finished or almost finished).
    
        This method is called each time we are in a game state with the "updateGameProgression" property set to true 
        (see states.inc.php)
    */
    function getGameProgression()
    {
        // TODO: compute and return the game progression
        return 0;
    }


    //////////////////////////////////////////////////////////////////////////////
    //////////// Utility functions
    ////////////    

    /*
        In this space, you can put any utility methods useful for your game logic
    */

    //////////////////////////////////////////////////////////////////////////////
    //////////// Player actions
    //////////// 

    /*
        Each time a player is doing some game action, one of the methods below is called.
        (note: each method below must match an input method in railbaron.action.php)
    */

    /*
    
    Example:

    function playCard($card_id)
    {
        // Check that this is the player's turn and that it is a "possible action" at this game state (see states.inc.php)
        self::checkAction( 'playCard' ); 
        
        $player_id = self::getActivePlayerId();
        
        // Add your game logic to play a card there 
        ...
        
        // Notify all players about the card played
        self::notifyAllPlayers( "cardPlayed", clienttranslate( '${player_name} plays ${card_name}' ), array(
            'player_id' => $player_id,
            'player_name' => self::getActivePlayerName(),
            'card_name' => $card_name,
            'card_id' => $card_id
        ) );
          
    }
    
    */


    //////////////////////////////////////////////////////////////////////////////
    //////////// Game state arguments
    ////////////

    /*
        Here, you can create methods defined as "game state arguments" (see "args" property in states.inc.php).
        These methods function is to return some additional information that is specific to the current
        game state.
    */

    /*
    
    Example for game state "MyGameState":
    
    function argMyGameState()
    {
        // Get some values from the current game situation in database...
    
        // return values:
        return array(
            'variable1' => $value1,
            'variable2' => $value2,
            ...
        );
    }    
    */

    //////////////////////////////////////////////////////////////////////////////
    //////////// Game state actions
    ////////////

    /*
        Here, you can create methods defined as "game state actions" (see "action" property in states.inc.php).
        The action method of state X is called everytime the current game state is set to X.
    */

    /*
    
    Example for game state "MyGameState":

    function stMyGameState()
    {
        // Do some stuff ...
        
        // (very often) go to another gamestate
        $this->gamestate->nextState( 'some_gamestate_transition' );
    }    
    */

    //////////////////////////////////////////////////////////////////////////////
    //////////// Zombie
    ////////////

    /*
        zombieTurn:
        
        This method is called each time it is the turn of a player who has quit the game (= "zombie" player).
        You can do whatever you want in order to make sure the turn of this player ends appropriately
        (ex: pass).
        
        Important: your zombie code will be called when the player leaves the game. This action is triggered
        from the main site and propagated to the gameserver from a server, not from a browser.
        As a consequence, there is no current player associated to this action. In your zombieTurn function,
        you must _never_ use getCurrentPlayerId() or getCurrentPlayerName(), otherwise it will fail with a "Not logged" error message. 
    */

    function zombieTurn($state, $active_player)
    {
        $statename = $state['name'];

        if ($state['type'] === "activeplayer") {
            switch ($statename) {
                default:
                    $this->gamestate->nextState("zombiePass");
                    break;
            }
            return;
        }

        if ($state['type'] === "multipleactiveplayer") {
            // Make sure player is in a non blocking status for role turn
            $this->gamestate->setPlayerNonMultiactive($active_player, '');
            return;
        }

        throw new feException("Zombie mode not supported at this game state: " . $statename);
    }

    ///////////////////////////////////////////////////////////////////////////////////:
    ////////// DB upgrade
    //////////

    /*
        upgradeTableDb:
        
        You don't have to care about this until your game has been published on BGA.
        Once your game is on BGA, this method is called everytime the system detects a game running with your old
        Database scheme.
        In this case, if you change your Database scheme, you just have to apply the needed changes in order to
        update the game database and allow the game to continue to run with your new version.
    */

    function upgradeTableDb($from_version)
    {
        // if ($from_version <= 1404301345) {
        //     // ! important ! Use DBPREFIX_<table_name> for all tables
        //     $sql = "ALTER TABLE DBPREFIX_xxxxxxx ....";
        //     self::applyDbUpgradeToAllDB($sql);
        // }
        // if ($from_version <= 1405061421) {
        //     // ! important ! Use DBPREFIX_<table_name> for all tables
        //     $sql = "CREATE TABLE DBPREFIX_xxxxxxx ....";
        //     self::applyDbUpgradeToAllDB($sql);
        // }
        // // Please add your future database scheme changes here
    }
}
