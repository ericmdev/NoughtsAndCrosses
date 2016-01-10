<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\ApplicationInterface;

/**
 * Application unit test.
 *
 * @package noughtsandcrosses
 * @group   specification
 */
class Application_UnitTest extends ApplicationTestCase
{
    public function testIsInstanceOfApplicationInterface()
    {
        $this->assertTrue($this->stub instanceof ApplicationInterface); 
    }
}
