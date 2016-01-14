<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\Game\Player\Player;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetworkInterface;
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

    /**
     * @dataProvider gamePlayerNumberProvider
     */
    public function testGetNumber($numbers)
    {
        $player = new Player();
        foreach ($numbers as $number) {
            $player->setNumber($number);
            $this->assertSame($number, $player->getNumber());
        }
    }

    /**
     * @dataProvider gamePlayerNeuralNetworkProvider
     */
    public function testSetNeuralNetwork(NeuralNetworkInterface $neuralNetwork)
    {
        $player = new Player();
        $this->assertSame($neuralNetwork, $player->setNeuralNetwork($neuralNetwork));
    }

    /**
     * @dataProvider gamePlayerNeuralNetworkProvider
     */
    public function testGetNeuralNetwork(NeuralNetworkInterface $neuralNetwork)
    {
        $player = new Player();
        $player->setNeuralNetwork($neuralNetwork);
        $this->assertSame($neuralNetwork, $player->getNeuralNetwork());
    }
}
