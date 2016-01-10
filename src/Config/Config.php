<?php
namespace NoughtsAndCrosses\Config;
use Symfony\Component\Yaml\Yaml;
use Exception;

/**
 * Config.
 *
 * @package noughtsandcrosses
 */
class Config implements ConfigInterface
{
    /**
     * @access protected
     * @var    stdClass
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
     * Get Game.
     * 
     * @return stdClass
     */
    public function getGame()
    {
        
    }

    /**
     * Set Game.
     * 
     * @param  array    $game Game configuration data.
     * @return stdClass
     */
    public function setGame(array $data)
    {

    }
}
