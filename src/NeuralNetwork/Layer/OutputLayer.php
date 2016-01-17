<?php
namespace  NoughtsAndCrosses\NeuralNetwork\Layer;

/**
 * OutputLayer
 *
 * @package noughtsandcrosses
 */
class OutputLayer extends Layer_Abstract implements OutputLayerInterface
{
    /**
     * Constructor.
     * 
     * @param int $neurons Number of neurons in layer.
     */
    public function __construct($neurons = null)
    {
        if($neurons)
            parent::__construct($neurons);
    }
}
