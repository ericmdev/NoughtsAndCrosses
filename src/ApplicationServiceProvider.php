<?php
namespace NoughtsAndCrosses\Application;
use NoughtsAndCrosses\Game\GameServiceProvider;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Service Provider for Application.
 *
 * @package noughtsandcrosses
 */
class ApplicationServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        # Game.
        $pimple['game'] = function($pimple) {
	        $container = new Container();
	        $container->register(new GameServiceProvider()); 
            return new Game($container);
        };
    }
}
