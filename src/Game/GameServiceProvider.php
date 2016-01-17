<?php
namespace NoughtsAndCrosses\Game;
use NoughtsAndCrosses\Game\Paper\Paper; 
use NoughtsAndCrosses\Game\Pencil\Pencil; 
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * GameServiceProvider
 *
 * @package noughtsandcrosses
 */

 class GameServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['paper'] = function() {
            return new Paper();
        };

        $pimple['pencil'] = function() {
            return new Pencil();
        };
    }
}
