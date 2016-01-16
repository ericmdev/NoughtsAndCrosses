<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Game\Game;
use NoughtsAndCrosses\Game\Paper\PaperInterface;
use NoughtsAndCrosses\Game\Pencil\PencilInterface;
use NoughtsAndCrosses\Game\Player\PlayerInterface;
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
    public function testSetPaper(PaperInterface $paper)
    {
        $game = new Game();
        $this->assertSame($paper, $game->setPaper($paper));
    }

    /**
     * @dataProvider gamePaperProvider
     */
    public function testGetPaper(PaperInterface $paper)
    {
        $game = new Game();
        $game->setPaper($paper);
        $this->assertSame($paper, $game->getPaper());
    }

    /**
     * @dataProvider gamePencilProvider
     */
    public function testSetPencil(PencilInterface $pencil)
    {
        $game = new Game();
        $this->assertSame($pencil, $game->setPencil($pencil));
    }

    /**
     * @dataProvider gamePencilProvider
     */
    public function testGetPencil(PencilInterface $pencil)
    {
        $game = new Game();
        $game->setPencil($pencil);
        $this->assertSame($pencil, $game->getPencil());
    }

    /**
     * @dataProvider gamePlayerProvider
     */
    public function testAddPlayer(PlayerInterface $player)
    {
        $game = new Game();
        $this->assertSame($player, $game->addPlayer($player));
    }

    /**
     * @dataProvider gamePlayerProvider
     */
    public function testGetPlayer(PlayerInterface $player)
    {
        $game = new Game();
        $game->addPlayer($player);
        $this->assertSame($player, $game->getPlayer(1));
    }

    /**
     * @dataProvider gamePlayerProvider
     */
    public function testGetPlayers(PlayerInterface $player)
    {
        $game = new Game();
        $game->addPlayer($player);
        $this->assertSame([$player], $game->getPlayers());
    }

    /**
     * @dataProvider gamePlayerProvider
     */
    public function testRemovePlayers(PlayerInterface $player)
    {
        $game = new Game();
        $game->addPlayer($player);
        $game->removePlayer(1);
        $this->assertSame([], $game->getPlayers());
    }
}
