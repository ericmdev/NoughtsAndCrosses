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
     * Test setPaper returns the paper.
     *
     * @dataProvider gamePaperProvider
     */
    public function testSetPaper(PaperInterface $paper)
    {
        $game = new Game();
        $this->assertSame($paper, $game->setPaper($paper));
    }

    /**
     * Test getPaper returns the paper.
     *
     * @dataProvider gamePaperProvider
     */
    public function testGetPaper(PaperInterface $paper)
    {
        $game = new Game();
        $game->setPaper($paper);
        $this->assertSame($paper, $game->getPaper());
    }

    /**
     * Test setPencil returns the pencil.
     *
     * @dataProvider gamePencilProvider
     */
    public function testSetPencil(PencilInterface $pencil)
    {
        $game = new Game();
        $this->assertSame($pencil, $game->setPencil($pencil));
    }

    /**
     * Test getPencil returns the pencil.
     *
     * @dataProvider gamePencilProvider
     */
    public function testGetPencil(PencilInterface $pencil)
    {
        $game = new Game();
        $game->setPencil($pencil);
        $this->assertSame($pencil, $game->getPencil());
    }

    /**
     * Test addPlayer returns the player.
     *
     * @dataProvider gamePlayerProvider
     */
    public function testAddPlayer(PlayerInterface $player)
    {
        $game = new Game();
        $this->assertSame($player, $game->addPlayer($player));
    }

    /**
     * Test getPlayer returns the player.
     *
     * @dataProvider gamePlayerProvider
     */
    public function testGetPlayer(PlayerInterface $player)
    {
        $game = new Game();
        $game->addPlayer($player);
        $this->assertSame($player, $game->getPlayer(1));
    }

    /**
     * Test getPlayers returns the array of players.
     *
     * @dataProvider gamePlayerProvider
     */
    public function testGetPlayers(PlayerInterface $player)
    {
        $game = new Game();
        $game->addPlayer($player);
        $this->assertSame([$player], $game->getPlayers());
    }

    /**
     * Test removePlayer removes the player.
     *
     * @dataProvider gamePlayerProvider
     */
    public function testRemovePlayer(PlayerInterface $player)
    {
        $game = new Game();
        $game->addPlayer($player);
        $game->addPlayer($player);
        $game->removePlayer(1);
        $players = [$player, $player];
        unset($players[0]);
        $this->assertSame($players, $game->getPlayers());
    }
}
