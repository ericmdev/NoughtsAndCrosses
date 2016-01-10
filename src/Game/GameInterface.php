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
     * Gets the paper property.
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
     * Gets the pencil property.
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
}
