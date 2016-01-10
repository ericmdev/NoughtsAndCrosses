<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Config\Config;
use NoughtsAndCrosses\Game\Game;
use NoughtsAndCrosses\Game\Paper\Paper;
use PHPUnit_Framework_TestCase;

/** 
 * NoughtsAndCrosses test case.
 *
 * @package noughtsandcrosses
 */ 
abstract class NoughtsAndCrossesTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Default provider.
     *
     */
    public function provider()
    {
        return [[]];
    }

    /**
     * Default bad provider.
     *
     */
    public function badProvider()
    {
        return [[]];
    }

    /**
     * Config provider.
     *
     */
    public function configProvider()
    {
        return [[new Config()]];
    }

    /**
     * Config data provider.
     *
     */
    public function configDataProvider()
    {
        $game = ['name' => 'test_example', 'players' => 2];
        return [[$game]];
    }

    /**
     * Game provider.
     *
     */
    public function gameProvider()
    {
        return [[new Game()]];
    }

    /**
     * Game data provider.
     *
     */
    public function gameDataProvider()
    {
        $paper = new Paper();
        return [[$paper]];
    }

    public function setUp()
    {
        // ...
    }

    public function tearDown()
    { 
        // ...
    }
}
