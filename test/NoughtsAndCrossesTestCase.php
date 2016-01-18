<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Config\Config;
use NoughtsAndCrosses\Game\Game;
use NoughtsAndCrosses\Game\GameServiceProvider;
use NoughtsAndCrosses\Game\Paper\Paper;
use NoughtsAndCrosses\Game\Pencil\Pencil;
use NoughtsAndCrosses\Game\Player\Player;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetworkServiceProvider;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayer;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayer;
use NoughtsAndCrosses\NeuralNetwork\Layer\OutputLayer;
use PHPUnit_Framework_TestCase;
use Pimple\Container;

/** 
 * NoughtsAndCrosses test case.
 *
 * @package noughtsandcrosses
 */ 
abstract class NoughtsAndCrossesTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @access protected
     * @var    obj
     */
    protected  $stub;

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
        $container = new Container();
        $container->register(new GameServiceProvider());
        return [[new Game($container)]];
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
     * Game Player Number Provider.
     *
     */
    public function gamePlayerNumberProvider()
    {
        $numbers = [1, 2];
        return [[$numbers]];
    }

    /**
     * Game Player Neural Network Provider.
     *
     */
    public function gamePlayerNeuralNetworkProvider()
    {
        $container = new Container();
        $container->register(new NeuralNetworkServiceProvider());
        return [[new NeuralNetwork($container)]];
    }

    /**
     * Neural Network Layers Provider.
     *
     */
    public function neuralNetworkLayersProvider()
    {
        $container = new Container();
        $container->register(new NeuralNetworkServiceProvider());
        return [[$container['layers']]];
    }

    /**
     * Neural Network Trainfile Provider.
     *
     */
    public function neuralNetworkTrainfileProvider()
    {
        $container = new Container();
        $container->register(new NeuralNetworkServiceProvider());
        return [[$container['trainfile']]];
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
     * Neural Network Output Layer Provider.
     *
     */
    public function neuralNetworkOutputLayerProvider()
    {
        $neurons = 1;
        $layer = new OutputLayer($neurons);
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
