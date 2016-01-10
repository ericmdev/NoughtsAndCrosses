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
     * Returns the game property.
     * 
     * @return stdClass
     */
    public function getGame();

    /**
     * Sets the game property.
     * 
     * @param  array    $game Game configuration data.
     * @return stdClass
     */
    public function setGame(array $game);
}
