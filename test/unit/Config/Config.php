<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Config\Config;
use PHPUnit_Framework_TestCase;

/**
 * Config unit test.
 *
 * @package noughtsandcrosses
 * @group   specification
 */
class Config_UnitTest extends NoughtsAndCrossesTestCase
{
    /**
     * Test setGame returns the game config.
     *
     * @dataProvider configDataProvider
     */
    public function testSetGame($game)
    {
        $config = new Config();
        $result = $config->setGame($game);
        $this->assertSame($game, $result);
    }
}
