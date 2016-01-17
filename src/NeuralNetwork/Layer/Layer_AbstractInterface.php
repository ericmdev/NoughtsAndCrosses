<?php
namespace NoughtsAndCrosses\NeuralNetwork\Layer;
use NoughtsAndCrosses\NeuralNetwork\Neuron\NeuronInterface;

/** 
 * Interface for Abstract Layer.
 *
 * @package noughtsandcrosses
 */
interface Layer_AbstractInterface
{
    /**
     * Returns total number of neurons in layer.
     * 
     * @return int
     */
    public function getNeurons();

    /**
     * Sets the number of neurons in the layer.
     * 
     * @param  int $number Number of neurons. 
     * @return int
     */
    public function setNeurons($neurons);	
}
