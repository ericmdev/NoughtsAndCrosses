<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetworkServiceProvider;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\OutputLayerInterface;
use PHPUnit_Framework_TestCase;
use Pimple\Container;

/**
 * NeuralNetwork unit test.
 *
 * @package noughtsandcrosses
 * @group   specification
 */
class NeuralNetwork_UnitTest extends NoughtsAndCrossesTestCase
{
    /**
     * Test createStandard creates a standard fully connected backpropagation neural network.
     *
     */
    public function testCreateStandard()
    {
        $container = new Container();
        $container->register(new NeuralNetworkServiceProvider());
        $neuralNetwork = new NeuralNetwork($container);
        $this->assertSame(true, $neuralNetwork->createStandard());
    }

    /**
     * @dataProvider neuralNetworkLayersProvider
     */
    public function testSetLayers(array $layers)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layers, $neuralNetwork->setLayers($layers));
    }

    /**
     * @dataProvider neuralNetworkInputLayerProvider
     */
    public function testSetInputLayer(InputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layer, $neuralNetwork->setInputLayer($layer));
    }

    /**
     * @dataProvider neuralNetworkInputLayerProvider
     */
    public function testGetInputLayer(InputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setInputLayer($layer);
        $this->assertSame($layer, $neuralNetwork->getInputLayer());
    }

    /**
     * @dataProvider neuralNetworkHiddenLayerProvider
     */
    public function testSetHiddenLayer(HiddenLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layer, $neuralNetwork->setHiddenLayer($layer));
    }

    /**
     * @dataProvider neuralNetworkHiddenLayerProvider
     */
    public function testGetHiddenLayer(HiddenLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setHiddenLayer($layer);
        $this->assertSame($layer, $neuralNetwork->getHiddenLayer());
    }

    /**
     * @dataProvider neuralNetworkOutputLayerProvider
     */
    public function testSetOutputLayer(OutputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layer, $neuralNetwork->setOutputLayer($layer));
    }
    
    /**
     * @dataProvider neuralNetworkOutputLayerProvider
     */
    public function testGetOutputLayer(OutputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setOutputLayer($layer);
        $this->assertSame($layer, $neuralNetwork->getOutputLayer());
    }
}
