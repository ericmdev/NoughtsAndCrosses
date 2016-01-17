<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayerInterface;
use NoughtsAndCrosses\NeuralNetwork\Layer\OutputLayerInterface;

/** 
 * Interface for NeuralNetwork.
 *
 * @package noughtsandcrosses
 */
interface NeuralNetworkInterface
{

    /**
     * Creates a standard fully connected backpropagation neural network.
     * 
     * @return bool
     */
    public function createStandard();

    /**
     * Returns the total number of layers including the input and the output layer.
     * 
     * @return int
     */
    public function getLayers();

    /**
     * Sets the number of each type of layer (input, hidden, output).
     * 
     * @param  array $layers Array of layer types and corresponding number.
     * @return array
     */
    public function setLayers(array $layers);

    /**
     * Returns the input layer property.
     * 
     * @return InputLayerInterface
     */
    public function getInputLayer();

    /**
     * Sets the input layer.
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
     * Sets the hidden layer.
     * 
     * @param  HiddenLayerInterface $layer Hidden layer.
     * @return HiddenLayerInterface
     */
    public function setHiddenLayer(HiddenLayerInterface $layer);

    /**
     * Returns the output layer property.
     * 
     * @return OutputLayerInterface
     */
    public function getOutputLayer();

    /**
     * Sets the output layer.
     * 
     * @param  OutputLayerInterface $layer Output layer.
     * @return OutputLayerInterface
     */
    public function setOutputLayer(OutputLayerInterface $layer);
}
