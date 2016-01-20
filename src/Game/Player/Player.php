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
     * Train.
     * 
     * @return bool
     */
    public function train()
    {

    }

    /**
     * Get Number.
     * 
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set Number.
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
     * Get Neural Network.
     * 
     * @return NeuralNetworkInterface
     */
    public function getNeuralNetwork()
    {
        return $this->neuralNetwork;
    }

    /**
     * Set NeuralNetwork.
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
