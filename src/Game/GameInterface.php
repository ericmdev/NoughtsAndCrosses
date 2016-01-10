<?php
namespace NoughtsAndCrosses\Game;

/** 
 * Interface for Game.
 *
 * @package noughtsandcrosses
 */
interface GameInterface
{
    /**
     * Returns the paper property.
     * 
     * @return PaperInterface
     */
    public function getPaper();	

    /**
     * Sets the paper property.
     * 
     * @param  PaperInterface $paper Paper.
     * @return PaperInterface
     */
    public function setPaper($paper);

    /**
     * Returns the pencil property.
     * 
     * @return PencilInterface
     */
    public function getPencil();	

    /**
     * Sets the pencil property.
     * 
     * @param  PencilInterface $pencil Pencil.
     * @return PencilInterface
     */
    public function setPencil($pencil);	

    /**
     * Returns players array.
     * 
     * @return array
     */
    public function getPlayers();	

    /**
     * Returns a player from the players array.
     * 
     * @param  int             $number Player number.
     * @return PlayerInterface 
     */
    public function getPlayer($number);	

    /**
     * Adds a player to the players array.
     * 
     * @return PlayerInterface
     */
    public function addPlayer();

    /**
     * Removes a player from the players array.
     * 
     * @param  int             $number Player number.
     * @return PlayerInterface
     */
    public function removePlayer($number);	
}
