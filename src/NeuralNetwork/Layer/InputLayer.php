<?php
namespace NoughtsAndCrosses\NeuralNetwork\Layer;

/**
 * InputLayer
 *
 * @package noughtsandcrosses
 */
class InputLayer extends Layer_Abstract implements InputLayerInterface
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
