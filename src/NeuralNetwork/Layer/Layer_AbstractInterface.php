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
     * Returns neurons array.
     * 
     * @return array
     */
    public function getNeurons();

    /**
     * Sets the number of neurons.
     * 
     * @param  int   $number Number of neurons. 
     * @return int
     */
    public function setNeurons($neurons);	
}
