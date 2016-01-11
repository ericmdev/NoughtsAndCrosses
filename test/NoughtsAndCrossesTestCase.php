<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Config\Config;
use NoughtsAndCrosses\Game\Game;
use NoughtsAndCrosses\Game\Paper\Paper;
use NoughtsAndCrosses\Game\Pencil\Pencil;
use NoughtsAndCrosses\Game\Player\Player;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayer;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayer;
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
     * Game paper provider.
     *
     */
    public function gamePaperProvider()
    {
        $paper = new Paper();
        return [[$paper]];
    }

    /**
     * Game paper provider.
     *
     */
    public function gamePencilProvider()
    {
        $pencil = new Pencil();
        return [[$pencil]];
    }

    /**
     * Game player provider.
     *
     */
    public function gamePlayerProvider()
    {
        $player = new Player();
        return [[$player]];
    }

    /**
     * Neural network input layer provider.
     *
     */
    public function neuralNetworkInputLayerProvider()
    {
        $neurons = 1;
        $layer = new InputLayer($neurons);
        return [[$layer]];
    }

    /**
     * Neural network input layer provider.
     *
     */
    public function neuralNetworkHiddenLayerProvider()
    {
        $neurons = 1;
        $layer = new HiddenLayer($neurons);
        return [[$layer]];
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
