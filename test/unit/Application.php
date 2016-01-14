<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Application;
use NoughtsAndCrosses\ApplicationInterface;
use NoughtsAndCrosses\Game\GameInterface;
use NoughtsAndCrosses\Config\ConfigInterface;

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
    public function testSetConfig(ConfigInterface $config)
    {
        $app = new Application();
        $this->assertSame($config, $app->setConfig($config));
    }

    /**
     * @dataProvider configProvider
     */
    public function testGetConfig(ConfigInterface $config)
    {
        $app = new Application();
        $app->setConfig($config);
        $this->assertSame($config, $app->getConfig());
    }

    /**
     * @dataProvider gameProvider
     */
    public function testSetGame(GameInterface $game)
    {
        $app = new Application();
        $this->assertSame($game, $app->setGame($game));
    }

    /**
     * @dataProvider gameProvider
     */
    public function testGetGame(GameInterface $game)
    {
        $app = new Application();
        $app->setGame($game);
        $this->assertSame($game, $app->getGame());
    }

}
