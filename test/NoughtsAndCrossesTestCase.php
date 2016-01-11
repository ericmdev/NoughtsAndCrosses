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
     * Default Provider.
     *
     */
    public function provider()
    {
        return [[]];
    }

    /**
     * Default Bad Provider.
     *
     */
    public function badProvider()
    {
        return [[]];
    }

    /**
     * Config Provider.
     *
     */
    public function configProvider()
    {
        return [[new Config()]];
    }

    /**
     * Config Data Provider.
     *
     */
    public function configDataProvider()
    {
        $game = ['name' => 'test_example', 'players' => 2];
        return [[$game]];
    }

    /**
     * Game Provider.
     *
     */
    public function gameProvider()
    {
        return [[new Game()]];
    }

    /**
     * Game Paper Provider.
     *
     */
    public function gamePaperProvider()
    {
        $paper = new Paper();
        return [[$paper]];
    }

    /**
     * Game Paper Provider.
     *
     */
    public function gamePencilProvider()
    {
        $pencil = new Pencil();
        return [[$pencil]];
    }

    /**
     * Game Player Provider.
     *
     */
    public function gamePlayerProvider()
    {
        $player = new Player();
        return [[$player]];
    }

    /**
     * Neural Network Input Layer Provider.
     *
     */
    public function neuralNetworkInputLayerProvider()
    {
        $neurons = 1;
        $layer = new InputLayer($neurons);
        return [[$layer]];
    }

    /**
     * Neural Network Input Layer Provider.
     *
     */
    public function neuralNetworkHiddenLayerProvider()
    {
        $neurons = 1;
        $layer = new HiddenLayer($neurons);
        return [[$layer]];
    }

    /**
     * Neurons Provider.
     *
     */
    public function neuronsProvider()
    {
        return [[1]];
    }

    /**
     * Set Up.
     *
     */
    public function setUp()
    {
        // ...
    }

    /**
     * Tear Down.
     *
     */
    public function tearDown()
    { 
        // ...
    }
}
