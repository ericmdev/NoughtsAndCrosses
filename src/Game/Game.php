<?php
namespace NoughtsAndCrosses\Game;

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
     * @var    Pencil
     */
    protected $players;

    /**
     * Constructor.
     * 
     * @var int $players Number of players (2).
     */
    public function __construct()
    {

    }

    /**
     * Set Paper.
     * 
     * @return PaperInterface
     */
    public function setPaper()
    {

    }

    /**
     * Get Paper.
     * 
     * @return PaperInterface
     */
    public function getPaper()
    {

    }

    /**
     * Set Pencil.
     * 
     * @return PencilInterface
     */
    public function setPencil()
    {

    }

    /**
     * Get Pencil.
     * 
     * @return PencilInterface
     */
    public function getPencil()
    {
        
    }

    /**
     * Get Players.
     * 
     * @return array
     */
    public function getPlayers()
    {
        
    }

    /**
     * Get Player.
     * 
     * @param  int             $number Player number.
     * @return PlayerInterface
     */
    public function getPlayer($number)
    {
        
    }

    /**
     * Add Player.
     * 
     * @return PlayerInterface
     */
    public function addPlayer()
    {
        
    }

    /**
     * Remove Player.
     * 
     * @param  int             $number Player number.
     * @return PlayerInterface
     */
    public function removePlayer($number)
    {
        
    }
}
