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
     * @dataProvider configDataProvider
     */
    public function testSetGame($game)
    {
        $config = new Config();
        $this->assertSame($game, $config->setGame($game));
    }
}
