<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Application;

/** 
 * Application test case.
 *
 * @package noughtsandcrosses
 */ 
abstract class ApplicationTestCase
extends \PHPUnit_Framework_TestCase
{

    public function provider()
    {
        return [[]];
    }

    public function badProvider()
    {
        return [[]];
    }

    public function setUp()
    {
        $this->stub = new Application();
    }

    public function tearDown()
    { 
        // ...
    }
}
