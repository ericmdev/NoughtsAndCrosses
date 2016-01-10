<?php
namespace NoughtsAndCrosses\Config;

/** 
 * Interface for Config.
 *
 * @package noughtsandcrosses
 */
interface ConfigInterface
{
    /**
     * Gets the game property.
     * 
     * @return stdClass
     */
    public function getGame();

    /**
     * Sets the game property.
     * 
     * @param array $game Game configuration data.
     */
    public function setGame(array $game);
}
