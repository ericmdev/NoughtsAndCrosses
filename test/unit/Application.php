<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Application;
use NoughtsAndCrosses\ApplicationInterface;

/**
 * Application unit test.
 *
 * @package noughtsandcrosses
 * @group   specification
 */
class Application_UnitTest extends NoughtsAndCrossesTestCase
{
    public function testIsInstanceOfApplicationInterface()
    {
        $app = new Application();
        $this->assertTrue($app instanceof ApplicationInterface); 
    }

    /**
     * @dataProvider configProvider
     */
    public function testSetConfig($config)
    {
        $app = new Application();
        $this->assertSame($config, $app->setConfig($config));
    }
}
