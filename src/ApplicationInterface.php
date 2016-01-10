<?php
namespace NoughtsAndCrosses;
use NoughtsAndCrosses\Config\ConfigInterface;
use NoughtsAndCrosses\Game\GameInterface;

/** 
 * Interface for Application.
 *
 * @package noughtsandcrosses
 */
interface ApplicationInterface
{
    /**
     * Sets the config property.
     * 
     * @param  ConfigInterface Config.
     * @return ConfigInterface
     */
    public function setConfig(ConfigInterface $config);

    /**
     * Sets the game property.
     * 
     * @param  GameInterface Game.
     * @return GameInterface
     */
    public function setGame(GameInterface $game);

    /**
     * Runs the application.
     * 
     * @return bool
     */
    public function run();
}
