<?php
namespace NoughtsAndCrosses\Game\Player;

/** 
 * Interface for Player.
 *
 * @package noughtsandcrosses
 */
interface PlayerInterface
{
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
    public function setNeuralNetwork($neuralNetwork);
}
