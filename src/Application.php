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
     * @param array $container DI.
     */
    public function __construct($container = null)
    {
        # Create game.
        if(!empty($container['game']))
            $this->setGame($container['game']);
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
        $this->game->getPlayer($number)->train();

    } 

    /**
     * Run.
     * 
     */
    public function run()
    {
        
    } 
}
