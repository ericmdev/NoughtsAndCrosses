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
     * Returns the config property.
     * 
     * @return ConfigInterface
     */
    public function getConfig();

    /**
     * Sets the config property.
     * 
     * @param  ConfigInterface Config.
     * @return ConfigInterface
     */
    public function setConfig(ConfigInterface $config);

    /**
     * Returns the game property.
     * 
     * @return GameInterface
     */
    public function getGame();

    /**
     * Sets the game property.
     * 
     * @param  GameInterface Game.
     * @return GameInterface
     */
    public function setGame(GameInterface $game);

    /**
     * Train Player.
     * 
     * @param int $number Player number.
     */
    public function trainPlayer($number = 1);

    /**
     * Runs the application.
     * 
     * @return bool
     */
    public function run();
}
