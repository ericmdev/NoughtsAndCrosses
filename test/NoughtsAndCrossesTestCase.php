<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Config\Config;
use NoughtsAndCrosses\Game\Game;
use PHPUnit_Framework_TestCase;

/** 
 * NoughtsAndCrosses test case.
 *
 * @package noughtsandcrosses
 */ 
abstract class NoughtsAndCrossesTestCase extends PHPUnit_Framework_TestCase
{
    public function provider()
    {
        return [[]];
    }

    public function badProvider()
    {
        return [[]];
    }

    public function configProvider()
    {
        return [[new Config()]];
    }

    public function gameProvider()
    {
        return [[new Game()]];
    }

    public function configDataProvider()
    {
        $game = ['name' => 'test_example', 'players' => 2];
        return [[$game]];
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
