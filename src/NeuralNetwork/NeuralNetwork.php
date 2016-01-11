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
     * Get Input Layer.
     * 
     * @return InputLayerInterface
     */
    public function getInputLayer()
    {
    	return $this->layers->input;
    }

    /**
     * Set Input Layer.
     * 
     * @param  InputLayerInterface $layer Input layer.
     * @return InputLayerInterface
     */
    public function setInputLayer(InputLayerInterface $layer)
    {
        $this->layers->input = $layer;
        return $this->layers->input;
    }

    /**
     * Get Hidden Layer.
     * 
     * @return HiddenLayerInterface
     */
    public function getHiddenLayer()
    {

    }

    /**
     * Set Hidden Layer.
     * 
     * @param  HiddenLayerInterface $layer Hidden layer.
     * @return HiddenLayerInterface
     */
    public function setHiddenLayer(HiddenLayerInterface $layer)
    {

    }
}
