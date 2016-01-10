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

    /**
     * @dataProvider configProvider
     */
    public function testGetConfig($config)
    {
        $app = new Application();
        $app->setConfig($config);
        $this->assertSame($config, $app->getConfig());
    }

    /**
     * @dataProvider gameProvider
     */
    public function testSetGame($game)
    {
        $app = new Application();
        $this->assertSame($game, $app->setGame($game));
    }

    /**
     * @dataProvider gameProvider
     */
    public function testGetGame($game)
    {
        $app = new Application();
        $app->setGame($game);
        $this->assertSame($game, $app->getGame());
    }

}
