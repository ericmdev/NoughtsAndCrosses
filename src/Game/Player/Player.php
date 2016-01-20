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
     * @param array $container DI.
     */
    public function __construct($container = null)
    {
        # Set number.
        if(!empty($container['number']))
            $this->setNumber($container['number']);

        # Set neural network.
        if(!empty($container['neural_network']))
            $this->setNeuralNetwork($container['neural_network']);
    }

    /**
     * Train.
     * 
     * @return bool
     */
    public function train()
    {
        $maxEpochs = 500000;
        $epochsBetweenReports = 1000;
        $desiredError = 0.001;
        $result = $this->neuralNetwork->trainOnFile($maxEpochs, $epochsBetweenReports, $desiredError);
        return $result;
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
