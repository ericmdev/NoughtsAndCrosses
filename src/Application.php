<?php
namespace NoughtsAndCrosses;
use NoughtsAndCrosses\Config\Config;
use NoughtsAndCrosses\Config\ConfigInterface;
use NoughtsAndCrosses\Game\Game;
use NoughtsAndCrosses\Game\GameInterface;

/**
 * Application.
 *
 * @package noughtsandcrosses
 */
class Application implements ApplicationInterface
{
    /**
     * @access protected
     * @var    Config
     */
    protected  $config;

    /**
     * @access protected
     * @var    Game
     */
    protected  $game;

    /**
     * Constructor.
     * 
     */
    public function __construct()
    {   

    }

    /**
     * Get config.
     * 
     * @return ConfigInterface
     */
    public function getConfig()
    {  

    }

    /**
     * Set config.
     * 
     * @param  ConfigInterface $config Configuration object.
     * @return ConfigInterface
     */
    public function setConfig(ConfigInterface $config)
    {  

    }

    /**
     * Get game.
     * 
     * @return GameInterface
     */
    public function getGame()
    {  

    }

    /**
     * Set game.
     * 
     * @param  GameInterface $game Game object.
     * @return GameInterface
     */
    public function setGame(GameInterface $game)
    {

    }

    /**
     * Runs the application.
     * 
     */
    public function run()
    {
        
    } 
}
