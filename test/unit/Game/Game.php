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
        $result = $game->setPaper($paper);
        $this->assertSame($paper, $result);
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
        $result = $game->getPaper();
        $this->assertSame($paper, $result);
    }

    /**
     * Test setPencil returns the pencil.
     *
     * @dataProvider gamePencilProvider
     */
    public function testSetPencil(PencilInterface $pencil)
    {
        $game = new Game();
        $result = $game->setPencil($pencil);
        $this->assertSame($pencil, $result);
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
        $result = $game->getPencil();
        $this->assertSame($pencil, $result);
    }

    /**
     * Test addPlayer returns the player.
     *
     * @dataProvider gamePlayerProvider
     */
    public function testAddPlayer(PlayerInterface $player)
    {
        $game = new Game();
        $result = $game->addPlayer($player);
        $this->assertSame($player, $result);
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
        $result = $game->getPlayer(1);
        $this->assertSame($player, $result);
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
        $result = $game->getPlayers();
        $this->assertSame([$player], $result);
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
        $result = $game->getPlayers();
        $this->assertSame($players, $result);
    }
}
