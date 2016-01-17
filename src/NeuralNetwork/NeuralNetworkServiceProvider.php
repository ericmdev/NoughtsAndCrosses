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
        $pimple['layers'] = function() {
            return [
                'input'  => 1,
                'hidden' => 1,
                'output' => 1,
            ];
        };

        $pimple['neurons'] = function() {
            return [
                'input'  => 1,
                'hidden' => 1,
                'output' => 1,
            ];
        };

        $pimple['inputLayer'] = function() {
            return new InputLayer(
                $pimple['neurons']['input']
            );
        };

        $pimple['hiddenLayer'] = function() {
            return new HiddenLayer(
                $pimple['neurons']['hidden']
            );
        };

        $pimple['outputLayer'] = function() {
            return new OutputLayer(
                $pimple['neurons']['output']
            );
        };
    }
}
