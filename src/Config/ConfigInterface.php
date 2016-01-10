<?php
namespace NoughtsAndCrosses\Config;

/** 
 * Interface for Config.
 *
 * @package noughtsandcrosses
 */
interface ConfigInterface
{
    public function get();
    public function set($data);
    public function parse($file);
}
