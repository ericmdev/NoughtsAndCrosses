<?php
namespace NoughtsAndCrosses\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\Layer\InputLayer;
use NoughtsAndCrosses\NeuralNetwork\Layer\HiddenLayer;
use NoughtsAndCrosses\NeuralNetwork\Layer\OutputLayer;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Service Provider for NeuralNetwork.
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
                'input'  => 9,
                'hidden' => 9,
                'output' => 1,
            ];
        };

        # Input layer.
        $pimple['input_layer'] = function($pimple) {
            return new InputLayer(
                $pimple['neurons']['input']
            );
        };

        # Hidden layer.
        $pimple['hidden_layer'] = function($pimple) {
            return new HiddenLayer(
                $pimple['neurons']['hidden']
            );
        };

        # Output layer.
        $pimple['output_layer'] = function($pimple) {
            return new OutputLayer(
                $pimple['neurons']['output']
            );
        };

        # Train file.
        $pimple['train_file'] = function() {
            $filename = dirname(dirname(__DIR__)) . 
                            DIRECTORY_SEPARATOR . 'app' . 
                            DIRECTORY_SEPARATOR . 'data' . 
                            DIRECTORY_SEPARATOR . 'noughtsandcrosses.data';
            return $filename;
        };

        # Default network configuration filename.
        $pimple['configuration_filename'] = 'noughtsandcrosses.net';

        # Default network configuration file path.
        $pimple['configuration_file'] = function($pimple) {
            $filename = dirname(dirname(__DIR__)) . 
                            DIRECTORY_SEPARATOR . 'app' . 
                            DIRECTORY_SEPARATOR . 'data' . 
                            DIRECTORY_SEPARATOR . $pimple['configuration_filename'];
            return $filename;
        };

        # Create standard artificial neural network.
        $pimple['create_standard'] = false;

        # Create artificial neural network from configuration file.
        $pimple['create_from_file'] = false;

        # Activate hidden layer.
        $pimple['activate_hidden_layer'] = false;

        # Activate output layer.
        $pimple['activate_output_layer'] = false;
    }
}
