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
     * @dataProvider gamePaperProvider
     */
    public function testSetPaper($paper)
    {
        $game = new Game();
        $this->assertSame($paper, $game->setPaper($paper));
    }

    /**
     * @dataProvider gamePaperProvider
     */
    public function testGetPaper($paper)
    {
        $game = new Game();
        $game->setPaper($paper);
        $this->assertSame($paper, $game->getPaper());
    }

    /**
     * @dataProvider gamePencilProvider
     */
    public function testSetPencil($pencil)
    {
        $game = new Game();
        $this->assertSame($pencil, $game->setPencil($pencil));
    }

    /**
     * @dataProvider gamePencilProvider
     */
    public function testGetPencil($pencil)
    {
        $game = new Game();
        $game->setPencil($pencil);
        $this->assertSame($pencil, $game->getPencil());
    }
}
