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
        # Create game.
        if(!empty($container['create_game']) 
            && $container['create_game'] === true)
            $this->createFromFile();
    }

    /**
     * Get Config.
     * 
     * @return ConfigInterface
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Set Config.
     * 
     * @param  ConfigInterface $config Configuration object.
     * @return ConfigInterface
     */
    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
        return $this->config;
    }

    /**
     * Get Game.
     * 
     * @return GameInterface
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set Game.
     * 
     * @param  GameInterface $game Game object.
     * @return GameInterface
     */
    public function setGame(GameInterface $game)
    {
        $this->game = $game;
        return $this->game;
    }

    /**
     * Train Player.
     * 
     * @param int $number Player number.
     */
    public function trainPlayer($number = 1)
    {
        
    } 

    /**
     * Run.
     * 
     */
    public function run()
    {
        
    } 
}
