<?php
namespace NoughtsAndCrosses\Game\Player;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetwork;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetworkServiceProvider;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Service Provider for Player.
 *
 * @package noughtsandcrosses
 */
class PlayerServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        # Player numbers.
        $pimple['numbers'] = [1, 2];

        # Neural network.
        $pimple['neural_network'] = function($pimple) {
            $pimple = new Container();
            $pimple->register(new NeuralNetworkServiceProvider());
            $pimple['create_standard'] = true;
            $pimple['activate_hidden_layer'] = true;
            $pimple['activate_output_layer'] = true;
            return new NeuralNetwork($container);
        };

    }
}
