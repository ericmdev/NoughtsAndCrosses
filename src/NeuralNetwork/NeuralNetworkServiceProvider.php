<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayer;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayer;
use NoughtsAndCrosses\NeuralNetwork\Layer\OutputLayer;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * NeuralNetwork
 *
 * @package noughtsandcrosses
 */
class NeuralNetworkServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        # Total number of each type of layer.
        $pimple['layers'] = function() {
            return [
                'input'  => 1,
                'hidden' => 1,
                'output' => 1,
            ];
        };

        # Total number of neurons in each layer.
        $pimple['neurons'] = function() {
            return [
                'input'  => 1,
                'hidden' => 1,
                'output' => 1,
            ];
        };

        # Input layer.
        $pimple['inputLayer'] = function($pimple) {
            return new InputLayer(
                $pimple['neurons']['input']
            );
        };

        # Hidden layer.
        $pimple['hiddenLayer'] = function($pimple) {
            return new HiddenLayer(
                $pimple['neurons']['hidden']
            );
        };

        # Output layer.
        $pimple['outputLayer'] = function($pimple) {
            return new OutputLayer(
                $pimple['neurons']['output']
            );
        };

        # Train filename.
        $pimple['train'] = function() {
            return [
                'filename' => dirname(dirname(__DIR__)) . 
                                DIRECTORY_SEPARATOR . 'app' . 
                                DIRECTORY_SEPARATOR . 'data' . 
                                DIRECTORY_SEPARATOR . 'noughtsandcrosses.data'
            ];
        };

    }
}
