<?php
namespace NoughtsAndCrosses\Game;
use NoughtsAndCrosses\Game\Paper\Paper;
use NoughtsAndCrosses\Game\Paper\PaperInterface;
use NoughtsAndCrosses\Game\Pencil\Pencil;
use NoughtsAndCrosses\Game\Pencil\PencilInterface;
use NoughtsAndCrosses\Game\Player\Player;
use NoughtsAndCrosses\Game\Player\PlayerInterface;

/**
 * Game
 *
 * @package noughtsandcrosses
 */
class Game implements GameInterface
{
    /**
     * @access protected
     * @var    Paper
     */
    protected $paper;

    /**
     * @access protected
     * @var    Pencil
     */
    protected $pencil;

    /**
     * @access protected
     * @var    array
     */
    protected $players = [];

    /**
     * Constructor.
     * 
     * @var array $container DI.
     */
    public function __construct($container = null)
    {
        if(!empty($container['paper']))
            $this->setPaper($container['paper']);

        if(!empty($container['pencil']))
            $this->setPencil($container['pencil']);
    }

    /**
     * Set Paper.
     * 
     * @param  PaperInterface $paper Paper.
     * @return PaperInterface
     */
    public function setPaper(PaperInterface $paper)
    {
        $this->paper = $paper;
        return $this->paper;
    }

    /**
     * Get Paper.
     * 
     * @return PaperInterface
     */
    public function getPaper()
    {
        return $this->paper;
    }

    /**
     * Set Pencil.
     * 
     * @param  PencilInterface $pencil Pencil.
     * @return PencilInterface
     */
    public function setPencil(PencilInterface $pencil)
    {
        $this->pencil = $pencil;
        return $this->pencil;
    }

    /**
     * Get Pencil.
     * 
     * @return PencilInterface
     */
    public function getPencil()
    {
        return $this->pencil;
    }

    /**
     * Get Players.
     * 
     * @return array
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Get Player.
     * 
     * @param  int             $number Player number.
     * @return PlayerInterface
     */
    public function getPlayer($number)
    {
        $playerNumber = $number -1;
        return $this->players[$playerNumber];
    }

    /**
     * Add Player.
     * 
     * @return PlayerInterface
     */
    public function addPlayer(PlayerInterface $player)
    {
        array_push($this->players, $player);
        return $this->players[count($this->players)-1];
    }

    /**
     * Remove Player.
     * 
     * @param  int             $number Player number.
     * @return PlayerInterface
     */
    public function removePlayer($number)
    {
        $playerNumber = $number -1;
        unset($this->players[$playerNumber]);
    }
}
