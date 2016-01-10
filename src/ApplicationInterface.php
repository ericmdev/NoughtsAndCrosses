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
    public function setConfig(ConfigInterface $config);
    public function setGame(GameInterface $game);
    public function run();
}
