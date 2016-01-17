<?php
namespace  NoughtsAndCrosses\NeuralNetwork\Layer;
use NoughtsAndCrosses\NeuralNetwork\Neuron\Neuron;

/**
 * Layer_Abstract
 *
 * @package noughtsandcrosses
 */
abstract class Layer_Abstract implements Layer_AbstractInterface
{

    /**
     * @access protected
     * @var    array
     */
    protected  $neurons = [];

    /**
     * Constructor.
     *
     * @param int $neurons Number of neurons in layer.
     */
    public function __construct($neurons = null)
    {
        if($neurons)
            $this->setNeurons($neurons);
    }

    /**
     * Get Neurons.
     * 
     * @return int
     */
    public function getNeurons()
    {
    	return count($this->neurons);
    }

    /**
     * Set Neurons.
     * 
     * @param  int   $number Number of neurons. 
     * @return array
     */
    public function setNeurons($neurons)
    {
        for($i = 1; $i <= $neurons; $i++)
            array_push($this->neurons, new Neuron());
        return count($this->neurons);
    }
}
