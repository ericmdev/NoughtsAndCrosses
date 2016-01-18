<?php
namespace NoughtsAndCrosses\NeuralNetwork\Layer;

/**
 * HiddenLayer
 *
 * @package noughtsandcrosses
 */
class HiddenLayer extends Layer_Abstract implements HiddenLayerInterface
{
    /**
     * Activation Function.
     *
     */
    const ACTIVATION_FUNCTION = FANN_LINEAR;

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
