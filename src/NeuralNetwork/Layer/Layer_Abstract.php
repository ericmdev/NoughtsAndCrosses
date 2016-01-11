<?php
namespace  NoughtsAndCrosses\NeuralNetwork\Layer;
use NoughtsAndCrosses\NeuralNetwork\Neuron\Neuron;

/**
 * Layer_Abstract
 *
 * @package noughtsandcrosses
 */
abstract class Layer_Abstract implements Layer_AbstractInterface
{
    /**
     * Constructor.
     *
     * @var int $neurons Number of layer neurons.
     */
    public function __construct($neurons)
    {

    }
}
