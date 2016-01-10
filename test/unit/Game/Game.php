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
        $this->assertSame($paper, $game->setPaper($paper));
    }

    /**
     * @dataProvider gameDataProvider
     */
    public function testGetPaper($paper)
    {
        $game = new Game();
        $game->setPaper($paper);
        $this->assertSame($paper, $game->getPaper());
    }
}
