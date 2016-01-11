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
     */
    public function __construct()
    {

    }

    /**
     * Get Neurons.
     * 
     * @return array
     */
    public function getNeurons()
    {

    }

    /**
     * Set Neurons.
     * 
     * @param  int   $number Number of neurons. 
     * @return array
     */
    public function setNeurons($neurons)
    {

    }
}
