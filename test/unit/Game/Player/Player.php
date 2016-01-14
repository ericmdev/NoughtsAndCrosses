<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Game\Player\Player;
use PHPUnit_Framework_TestCase;

/**
 * Player unit test.
 *
 * @package noughtsandcrosses
 * @group   specification
 */
class Player_UnitTest extends NoughtsAndCrossesTestCase
{
    /**
     * @dataProvider gamePlayerNumberProvider
     */
    public function testSetNumber($numbers)
    {
        $player = new Player();
        foreach ($numbers as $number) {
            $this->assertSame($number, $player->setNumber($number));
        }
       
    }
}
