<?php
namespace NoughtsAndCrosses\NeuralNetwork;
namespace NoughtsAndCrosses\NeuralNetwork\Layer\InputLayerInterface;

/** 
 * Interface for NeuralNetwork.
 *
 * @package noughtsandcrosses
 */
interface NeuralNetworkInterface
{
    /**
     * Returns the input layer property.
     * 
     * @return InputLayerInterface
     */
    public function getInputLayer();

    /**
     * Set input layer.
     * 
     * @param  InputLayerInterface $layer Input layer.
     * @return InputLayerInterface
     */
    public function setInputLayer(InputLayerInterface $layer);	
}
