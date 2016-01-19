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
        $result = $neuralNetwork->createStandard();
        $this->assertTrue($result);
    }

    /**
     * Test setActivationFunction returns true for hidden layer.
     *
     * @dataProvider neuralNetworkStandardProvider
     */
    public function testSetActivationFunctionForHiddenLayer($neuralNetwork)
    {
        $result = $neuralNetwork->setActivationFunction($neuralNetwork->getHiddenLayer());
        $this->assertTrue($result);
    }

    /**
     * Test setActivationFunction returns true for output layer.
     *
     * @dataProvider neuralNetworkStandardProvider
     */
    public function testSetActivationFunctionForOutputLayer($neuralNetwork)
    {
        $result = $neuralNetwork->setActivationFunction($neuralNetwork->getOutputLayer());
        $this->assertTrue($result);
    }

    /**
     * Test setActivationFunction throws exception if ann is null.
     *
     * @expectedException        Exception
     * @expectedExceptionMessage ANN is null:
     */
    public function testSetActivationFunctionThrowsExceptionIfAnnIsNull()
    {
        $container = new Container();
        $container->register(new NeuralNetworkServiceProvider());
        $neuralNetwork = new NeuralNetwork($container);
        $result = $neuralNetwork->setActivationFunction($neuralNetwork->getOutputLayer());
        $this->assertTrue($result);
    }

    /**
     * Test trainOnFile returns true.
     *
     * @dataProvider neuralNetworkActivatedProvider
     */
    public function testTrainOnFile($neuralNetwork)
    {
        $maxEpochs = 500000;
        $epochsBetweenReports = 1000;
        $desiredError = 0.001;
        $result = $neuralNetwork->trainOnFile($maxEpochs, $epochsBetweenReports, $desiredError);
        $this->assertTrue($result);
    }

    /**
     * Test save returns true.
     *
     * @dataProvider neuralNetworkActivatedProvider
     */
    public function testSave($neuralNetwork)
    {
        $maxEpochs = 500000;
        $epochsBetweenReports = 1000;
        $desiredError = 0.001;
        $neuralNetwork->trainOnFile($maxEpochs, $epochsBetweenReports, $desiredError);
        $result = $neuralNetwork->save();
        $this->assertTrue($result);
    }

    /**
     * Test createFromFile returns true.
     *
     * @dataProvider neuralNetworkForCreateFromFileProvider
     */
    public function testCreateFromFile($neuralNetwork)
    {
        $result = $neuralNetwork->createFromFile();
        $this->assertTrue($result);
    }

    /**
     * Test run returns calculated output.
     *
     * @dataProvider neuralNetworkFromFileProvider
     */
    public function testRun($neuralNetwork)
    {
        $input = [0, 1, -1, -1, -1, -1, -1, -1, -1];
        $result = $neuralNetwork->run($input);
        $expected = [0, 1, 0, -1, -1, -1, -1, -1, -1];
        # These values will not be equal while the ann is learning.
        # Let the build fail.
        $this->assertSame($expected, $result);
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
        $result = $neuralNetwork->getTrainFile();
        $this->assertSame($filename, $result);
    }

    /**
     * Test setTrainFile returns true.
     *
     * @dataProvider neuralNetworkTrainFileProvider
     */
    public function testSetTrainFile($filename)
    {
        $neuralNetwork = new NeuralNetwork();
        $result = $neuralNetwork->setTrainFile($filename);
        $this->assertTrue($result);
    }

    /**
     * Test setConfigurationFile returns true.
     *
     * @dataProvider neuralNetworkConfigurationFileProvider
     */
    public function testSetConfigurationFile($filename)
    {
        $neuralNetwork = new NeuralNetwork();
        $result = $neuralNetwork->setConfigurationFile($filename);
        $this->assertTrue($result);
    }

    /**
     * Test getConfigurationFile returns the path to the configuration file.
     *
     * @dataProvider neuralNetworkConfigurationFileProvider
     */
    public function testGetConfigurationFile($filename)
    {
        $neuralNetwork = new NeuralNetwork();
        $neuralNetwork->setConfigurationFile($filename);
        $result = $neuralNetwork->getConfigurationFile();
        $this->assertSame($filename, $result);
    }

    /**
     * Test setConfigurationFile throws exception if file not found.
     *
     * @expectedException        Exception
     * @expectedExceptionMessage Configuration file directory not found: 
     */
    public function testSetConfigurationFileThrowsExceptionIfDirectoryNotFound()
    {
        $neuralNetwork = new NeuralNetwork();
        $filename = './dummy-directory/dummy-configuration_file.net';
        $neuralNetwork->setConfigurationFile($filename);
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
        $filename = './dummy-train_file.data';
        $neuralNetwork->setTrainFile($filename);
    }

    /**
     * Test setLayers return layers array.
     *
     * @dataProvider neuralNetworkLayersProvider
     */
    public function testSetLayers(array $layers)
    {
        $neuralNetwork = new NeuralNetwork();
        $result = $neuralNetwork->setLayers($layers);
        $this->assertSame($layers, $result);
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
        $result = $neuralNetwork->getLayers();
        $this->assertSame($numLayers, $result);
    }

    /**
     * Test setInputLayer returns the input layer.
     *
     * @dataProvider neuralNetworkInputLayerProvider
     */
    public function testSetInputLayer(InputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $result = $neuralNetwork->setInputLayer($layer);
        $this->assertSame($layer, $result);
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
        $result = $neuralNetwork->getInputLayer();
        $this->assertSame($layer, $result);
    }

    /**
     * Test setHiddenLayer returns the hidden layer.
     *
     * @dataProvider neuralNetworkHiddenLayerProvider
     */
    public function testSetHiddenLayer(HiddenLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $result = $neuralNetwork->setHiddenLayer($layer);
        $this->assertSame($layer, $result);
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
        $result = $neuralNetwork->getHiddenLayer();
        $this->assertSame($layer, $result);
    }

    /**
     * Test setOutputLayer returns the output layer.
     *
     * @dataProvider neuralNetworkOutputLayerProvider
     */
    public function testSetOutputLayer(OutputLayerInterface $layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $result = $neuralNetwork->setOutputLayer($layer);
        $this->assertSame($layer, $result);
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
        $result = $neuralNetwork->getOutputLayer();
        $this->assertSame($layer, $result);
    }
    
    /**
     * Test destroy returns true.
     *
     * @dataProvider neuralNetworkActivatedProvider
     */
    public function testDestroy($neuralNetwork)
    {
        $result = $neuralNetwork->destroy();
        $this->assertTrue($result);
    }
}
