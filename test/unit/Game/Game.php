<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Game\Game;
use PHPUnit_Framework_TestCase;

/**
 * Game unit test.
 *
 * @package noughtsandcrosses
 * @group   specification
 */
class Game_UnitTest extends NoughtsAndCrossesTestCase
{
    /**
     * @dataProvider gameDataProvider
     */
    public function testSetPaper($paper)
    {
        $game = new Game();
        $this->assertSame($game, $game->setPaper($paper));
    }
}
