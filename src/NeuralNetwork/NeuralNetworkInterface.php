<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayerInterface;

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

    /**
     * Returns the hidden layer property.
     * 
     * @return HiddenLayerInterface
     */
    public function getHiddenLayer();

    /**
     * Set hidden layer.
     * 
     * @param  HiddenLayerInterface $layer Hidden layer.
     * @return HiddenLayerInterface
     */
    public function setHiddenLayer(HiddenLayerInterface $layer);
}
