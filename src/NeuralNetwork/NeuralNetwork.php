<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\OutputLayerInterface;

/**
 * NeuralNetwork
 *
 * @package noughtsandcrosses
 */
class NeuralNetwork implements NeuralNetworkInterface
{

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
        if(!empty($container['layers']))
            $this->layers = $container['layers'];

        if(!empty($container['inputLayer']))
            $this->setInputLayer($container['inputLayer']);

        if(!empty($container['hiddenLayer']))
            $this->setHiddenLayer($container['hiddenLayer']);

        if(!empty($container['outputLayer']))
            $this->setOutputLayer($container['outputLayer']);
    }

    /**
     * Creates a standard fully connected backpropagation neural network.
     * 
     * @return bool
     */
    public function createStandard()
    {
        $ann = fann_create_standard(
            ($this->layers['input'] + $this->layers['hidden'] + $this->layers['output']),
            $this->neurons['input'],
            $this->neurons['hidden'],
            $this->neurons['output']);
        if($ann === false)
            return false;
        else
            return true;
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
