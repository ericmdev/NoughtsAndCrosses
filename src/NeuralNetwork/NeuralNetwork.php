<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayerInterface;
use stdClass;

/**
 * NeuralNetwork
 *
 * @package noughtsandcrosses
 */
class NeuralNetwork implements NeuralNetworkInterface
{
    /**
     * @access protected
     * @var    stdClass
     */
    protected  $layers;

    /**
     * Constructor.
     * 
     */
    public function __construct()
    {
        $this->layers = new stdClass();
    }

    /**
     * Returns the input layer property.
     * 
     * @return InputLayerInterface
     */
    public function getInputLayer()
    {
    	return $this->layers->input;
    }

    /**
     * Set input layer.
     * 
     * @param  InputLayerInterface $layer Input layer.
     * @return InputLayerInterface
     */
    public function setInputLayer(InputLayerInterface $layer)
    {
        $this->layers->input = $layer;
        return $this->layers->input;
    }
}
