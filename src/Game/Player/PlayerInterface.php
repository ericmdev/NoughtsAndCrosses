<?php
namespace NoughtsAndCrosses\Game\Player;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetworkInterface;

/** 
 * Interface for Player.
 *
 * @package noughtsandcrosses
 */
interface PlayerInterface
{
    /**
     * Trains the player on the training dataset, 
     * which is read from file, for a period of time.
     * 
     * @return bool
     */
    public function trainOnFile();

    /**
     * Get Response.
     * 
     * @param  array $input Input (e.g: [0, 0, 0, 0, 0, 0, 0, 0, 0]).
     * @return array
     */
    public function getResponse(array $input);

    /**
     * Returns the number property.
     * 
     * @return int
     */
    public function getNumber();

    /**
     * Sets the number property.
     * 
     * @param  int $number Player number.
     * @return int
     */
    public function setNumber($number);

    /**
     * Returns the neuralNetwork property.
     * 
     * @return NeuralNetworkInterface
     */
    public function getNeuralNetwork();

    /**
     * Sets the neuralNetwork property.
     * 
     * @param  NeuralNetworkInterface $neuralNetwork Neural network.
     * @return NeuralNetworkInterface
     */
    public function setNeuralNetwork(NeuralNetworkInterface $neuralNetwork);
}
