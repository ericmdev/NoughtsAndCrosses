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
     * Test createStandard returns true.
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
     * Test setActivationFunction returns true for hidden layer.
     *
     */
    public function testSetActivationFunctionForHiddenLayer()
    {
        $container = new Container();
        $container->register(new NeuralNetworkServiceProvider());
        $container['create_standard'] = true;
        $neuralNetwork = new NeuralNetwork($container);
        $this->assertSame(true, 
            $neuralNetwork->setActivationFunction($neuralNetwork->getHiddenLayer()));
    }

    /**
     * Test setActivationFunction returns true for hidden layer.
     *
     */
    public function testSetActivationFunctionForOutputLayer()
    {
        $container = new Container();
        $container->register(new NeuralNetworkServiceProvider());
        $container['create_standard'] = true;
        $neuralNetwork = new NeuralNetwork($container);
        $this->assertSame(true, 
            $neuralNetwork->setActivationFunction($neuralNetwork->getOutputLayer()));
    }

    /**
     * Test getTrainFile returns the path to the train file.
     *
     * @dataProvider neuralNetworkTrainFileProvider
     */
    public function testGetTrainFile($filename)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setTrainFile($filename);
        $this->assertSame($filename, $neuralNetwork->getTrainFile());
    }

    /**
     * Test setTrainFile returns true.
     *
     * @dataProvider neuralNetworkTrainfileProvider
     */
    public function testSetTrainfile($filename)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame(true, $neuralNetwork->setTrainFile($filename));
    }

    /**
     * Test setTrainFile throws exception if file not found.
     *
     * @expectedException        Exception
     * @expectedExceptionMessage Train file not found: 
     */
    public function testSetTrainFileThrowsExceptionIfFileNotFound()
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setTrainFile('./dummy-trainfile.data');
    }

    /**
     * Test setLayers return layers array.
     *
     * @dataProvider neuralNetworkLayersProvider
     */
    public function testSetLayers(array $layers)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layers, $neuralNetwork->setLayers($layers));
    }

    /**
     * Test getLayers returns the total number layers.
     *
     * @dataProvider neuralNetworkLayersProvider
     */
    public function testGetLayers(array $layers)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setLayers($layers);
        $numLayers = $layers['input'] + $layers['hidden'] + $layers['output'];
        $this->assertSame($numLayers, $neuralNetwork->getLayers());
    }

    /**
     * Test setInputLayer returns the input layer.
     *
     * @dataProvider neuralNetworkInputLayerProvider
     */
    public function testSetInputLayer(InputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layer, $neuralNetwork->setInputLayer($layer));
    }

    /**
     * Test getInputLayer returns the input layer.
     *
     * @dataProvider neuralNetworkInputLayerProvider
     */
    public function testGetInputLayer(InputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setInputLayer($layer);
        $this->assertSame($layer, $neuralNetwork->getInputLayer());
    }

    /**
     * Test setHiddenLayer returns the hidden layer.
     *
     * @dataProvider neuralNetworkHiddenLayerProvider
     */
    public function testSetHiddenLayer(HiddenLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layer, $neuralNetwork->setHiddenLayer($layer));
    }

    /**
     * Test getHiddenLayer returns the hidden layer.
     *
     * @dataProvider neuralNetworkHiddenLayerProvider
     */
    public function testGetHiddenLayer(HiddenLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setHiddenLayer($layer);
        $this->assertSame($layer, $neuralNetwork->getHiddenLayer());
    }

    /**
     * Test setOutputLayer returns the output layer.
     *
     * @dataProvider neuralNetworkOutputLayerProvider
     */
    public function testSetOutputLayer(OutputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layer, $neuralNetwork->setOutputLayer($layer));
    }
    
    /**
     * Test getOutputLayer returns the output layer.
     *
     * @dataProvider neuralNetworkOutputLayerProvider
     */
    public function testGetOutputLayer(OutputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setOutputLayer($layer);
        $this->assertSame($layer, $neuralNetwork->getOutputLayer());
    }
}
