<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\LayerInterface;
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
     * Sets the ann activation function for a layer.
     * 
     * @param  int  $layer Layer.
     * @return bool
     */
    public function setActivationFunction(LayerInterface $layer);

    /**
     * Trains on an entire dataset, which is read from file, for a period of time.
     * 
     * @param  int   $maxEpochs             The maximum number of epochs the training should continue.
     * @param  int   $epochsBetweenReports  The number of epochs between calling a user function.
     *                                      A value of zero means that user function is not called. 
     * @param  float $desiredError          The desired fann_get_MSE() or fann_get_bit_fail(), 
     *                                      depending on the stop function chosen by 
     *                                      fann_set_train_stop_function().
     * @return bool
     */
    public function trainOnFile($maxEpochs, $epochsBetweenReports, $desiredError);

    /**
     * Saves the entire network to a configuration file. 
     * 
     * @return bool
     */
    public function save();

    /**
     * Constructs a backpropagation neural network from a configuration file.
     * 
     * @return bool
     */
    public function createFromFile();

    /**
     * Runs the input through the neural network.
     * 
     * @param  array $input Input.
     * @return array
     */
    public function run(array $input);

    /**
     * Returns the path to the train file.
     * 
     * @return str
     */
    public function getTrainFile();

    /**
     * Sets the configuration file path.
     * 
     * @param  str  $filename Configuration file path.
     * @return bool
     */
    public function setConfigurationFile($filename);

    /**
     * Returns the configuration file path.
     * 
     * @return str
     */
    public function getConfigurationFile();

    /**
     * Sets the train file.
     * 
     * @param  str  $filename Path to the file containing train data.
     * @return bool
     */
    public function setTrainFile($filename);

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
     * Returns the input layer.
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
     * Returns the hidden layer.
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
     * Returns the output layer.
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

    /**
     * Destroys the entire network, properly freeing all the associated memory.
     * 
     * @return bool
     */
    public function destroy();
}
