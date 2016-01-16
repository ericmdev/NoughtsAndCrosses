<?php
namespace NoughtsAndCrosses\Game\Player;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetworkInterface;

/**
 * Player
 *
 * @package noughtsandcrosses
 */
class Player implements PlayerInterface
{
    /**
     * @access protected
     * @var    stdClass
     */
    protected  $number;

    /**
     * @access protected
     * @var    stdClass
     */
    protected  $neuralNetwork;

    /**
     * Constructor.
     * 
     */
    public function __construct()
    {
        
    }

    /**
     * Returns the number property.
     * 
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the number property.
     * 
     * @param  int $number Player number.
     * @return int
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this->number;
    }

    /**
     * Returns the neuralNetwork property.
     * 
     * @return NeuralNetworkInterface
     */
    public function getNeuralNetwork()
    {
        return $this->neuralNetwork;
    }

    /**
     * Sets the neuralNetwork property.
     * 
     * @param  NeuralNetworkInterface $neuralNetwork Neural network.
     * @return NeuralNetworkInterface
     */
    public function setNeuralNetwork(NeuralNetworkInterface $neuralNetwork)
    {
    	$this->neuralNetwork = $neuralNetwork;
        return $this->neuralNetwork;
    }
}
