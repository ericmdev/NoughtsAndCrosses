<?php
namespace NoughtsAndCrosses\Game\Player;
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
    }
}
