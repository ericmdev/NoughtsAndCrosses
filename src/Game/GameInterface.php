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
     * @return PaperInterface
     */
    public function setPaper();

    /**
     * Returns the pencil property.
     * 
     * @return PencilInterface
     */
    public function getPencil();	

    /**
     * Sets the pencil property.
     * 
     * @return PencilInterface
     */
    public function setPencil();	

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