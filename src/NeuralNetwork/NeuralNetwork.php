<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\LayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\OutputLayerInterface;
use stdClass;
use Exception;

/**
 * NeuralNetwork
 *
 * @package noughtsandcrosses
 */
class NeuralNetwork implements NeuralNetworkInterface
{

    /**
     * Input Layer.
     *
     */
    const INPUT_LAYER = 1;

    /**
     * Hidden Layer.
     *
     */
    const HIDDEN_LAYER = 2;

    /**
     * Output Layer.
     *
     */
    const OUTPUT_LAYER = 3;

    /**
     * @access protected
     * @var    obj
     */
    protected  $ann;

    /**
     * @access protected
     * @var    str
     */
    protected  $trainfile;

    /**
     * @access protected
     * @var    array
     */
    protected  $layers = [
        'input'  => 1,
        'hidden' => 1,
        'output' => 1,
    ];

    /**
     * @access protected
     * @var    array
     */
    protected  $neurons = [
        'input'  => 1,
        'hidden' => 1,
        'output' => 1,
    ];

    /**
     * @access protected
     * @var    InputLayerInterface
     */
    protected  $inputLayer;

    /**
     * @access protected
     * @var    HiddenLayerInterface
     */
    protected  $hiddenLayer;

    /**
     * @access protected
     * @var    OutputLayerInterface
     */
    protected  $outputLayer;

    /**
     * Constructor.
     * 
     * @param array $container DI.
     */
    public function __construct($container = null)
    {
        # Set layers.
        if(!empty($container['layers']))
            $this->setLayers($container['layers']);

        # Set train file.
        if(!empty($container['train_filename'])
            && !empty($container['train_filename']))
            $this->setTrainFile($container['train_filename']);

        # Set input layer.
        if(!empty($container['input_layer']))
            $this->setInputLayer($container['input_layer']);

        # Set hidden layer.
        if(!empty($container['hidden_layer']))
            $this->setHiddenLayer($container['hidden_layer']);

        # Set output layer.
        if(!empty($container['output_layer']))
            $this->setOutputLayer($container['output_layer']);

        # Create standard ann.
        if(!empty($container['create_standard']) 
            && $container['create_standard'] === true)
            $this->createStandard();
    }

    /**
     * Create Standard.
     * 
     * @return bool
     */
    public function createStandard()
    {
        # Create standard fully connected backpropagation neural network.
        $this->ann = fann_create_standard(
            $this->getLayers(),
            $this->inputLayer->getNeurons(),
            $this->hiddenLayer->getNeurons(),
            $this->outputLayer->getNeurons());

        if($this->ann === false)
            return false;
        else
            return true;
    }

    /**
     * Set Activation Function.
     * 
     * @param  int  $layer Layer.
     * @return bool
     */
    public function setActivationFunction(LayerInterface $layer)
    {
        $result = fann_set_activation_function_hidden($this->ann, $layer::ACTIVATION_FUNCTION);
        return $result;
    }

    /**
     * Get Train File.
     * 
     * @return str
     */
    public function getTrainFile()
    {
        return $this->trainfile;
    }

    /**
     * Set Train File.
     * 
     * @param  str  Path to the file containing train data.
     * @return bool
     */
    public function setTrainFile($filename)
    {
        if(!is_file($filename))
            throw new Exception(
                "Train file not found: $filename", 
                1
            );
        $this->trainfile = $filename;
        return true;
    }

    /**
     * Train On File.
     * 
     * @return bool
     */
    public function trainOnFile()
    {
        return $this->trainfile;
    }

    /**
     * Get Layers.
     * 
     * @return int
     */
    public function getLayers()
    {
        return $this->layers['input'] + $this->layers['hidden'] + $this->layers['output'];
    }

    /**
     * Set Layers.
     * 
     * @param  array $layers Array of layer types and number.
     * @return array
     */
    public function setLayers(array $layers)
    {
        $this->layers = $layers;
        return $this->layers;
    }

    /**
     * Get Input Layer.
     * 
     * @return InputLayerInterface
     */
    public function getInputLayer()
    {
    	return $this->inputLayer;
    }

    /**
     * Set Input Layer.
     * 
     * @param  InputLayerInterface $layer Input layer.
     * @return InputLayerInterface
     */
    public function setInputLayer(InputLayerInterface $layer)
    {
        $this->inputLayer = $layer;
        return $this->inputLayer;
    }

    /**
     * Get Hidden Layer.
     * 
     * @return HiddenLayerInterface
     */
    public function getHiddenLayer()
    {
        return $this->hiddenLayer;
    }

    /**
     * Set Hidden Layer.
     * 
     * @param  HiddenLayerInterface $layer Hidden layer.
     * @return HiddenLayerInterface
     */
    public function setHiddenLayer(HiddenLayerInterface $layer)
    {
        $this->hiddenLayer = $layer;
        return $this->hiddenLayer;
    }

    /**
     * Get Output Layer.
     * 
     * @return OutputLayerInterface
     */
    public function getOutputLayer()
    {
        return $this->outputLayer;
    }

    /**
     * Set Output Layer.
     * 
     * @param  OutputLayerInterface $layer Output layer.
     * @return OutputLayerInterface
     */
    public function setOutputLayer(OutputLayerInterface $layer)
    {
        $this->outputLayer = $layer;
        return $this->outputLayer;
    }
}
