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
            // $pimple['create_standard'] = true;
            $pimple['configuration_filename'] = 'noughtsandcrosses-player.net'; // move to a class var
            $pimple['create_from_file'] = true;
            $pimple['activate_hidden_layer'] = true;
            $pimple['activate_output_layer'] = true;
            return new NeuralNetwork($pimple);
        };

        # Player numbers.
        $pimple['numbers'] = [1, 2];

        # Train.
        $pimple['train'] = function($pimple) {
            return [
                'max_epochs' => 500000,
                'epochs_between_reports' => 1000,
                'desired_error' => 0.001
            ];
        };
    }
}
