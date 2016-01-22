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
     * Test construct sets game.
     *
     * @dataProvider gamePlayerNumberProvider
     */
    public function testConstructSetsNumber($numbers)
    {
        foreach ($numbers as $number) {
            $player = new Player(['number' => $number]);
            $result = $player->getNumber();
            $this->assertSame($number, $result);
        }
    }

    /**
     * Test construct sets NeuralNetwork.
     *
     * @dataProvider gamePlayerNeuralNetworkProvider
     */
    public function testConstructSetsNeuralNetwork(NeuralNetworkInterface $neuralNetwork)
    {
        $player = new Player(['neural_network' => $neuralNetwork]);
        $result = $player->getNeuralNetwork();
        $this->assertTrue($result instanceof NeuralNetworkInterface);
    }

    /**
     * Test trainOnFile returns true.
     *
     * @dataProvider gamePlayerForTrainProvider
     */
    public function testTrainOnFile($player)
    {
        $result = $player->trainOnFile();
        $this->assertTrue($result);
    }

    /**
     * Test getResponse returns calculated output.
     *
     * @dataProvider gamePlayerForTrainProvider
     */
    public function testGetResponse($player)
    {
        $input = [1, 0, 0, 0, 0, 0, 0, 0, 0];
        $result = $player->getResponse($input);
        $expected = [2];
        $this->assertNotEquals($expected, $result);
    }

    /**
     * Test setNumber returns the number.
     *
     * @dataProvider gamePlayerNumberProvider
     */
    public function testSetNumber($numbers)
    {
        $player = new Player();
        foreach ($numbers as $number) {
            $result = $player->setNumber($number);
            $this->assertSame($number, $result);
        }
    }

    /**
     * Test getNumber returns the number.
     *
     * @dataProvider gamePlayerNumberProvider
     */
    public function testGetNumber($numbers)
    {
        $player = new Player();
        foreach ($numbers as $number) {
            $player->setNumber($number);
            $result = $player->getNumber();
            $this->assertSame($number, $result);
        }
    }

    /**
     * Test setNeuralNetwork returns the neural network.
     *
     * @dataProvider gamePlayerNeuralNetworkProvider
     */
    public function testSetNeuralNetwork(NeuralNetworkInterface $neuralNetwork)
    {
        $player = new Player();
        $result = $player->setNeuralNetwork($neuralNetwork);
        $this->assertSame($neuralNetwork, $result);
    }

    /**
     * Test getNeuralNetwork returns the neural network.
     *
     * @dataProvider gamePlayerNeuralNetworkProvider
     */
    public function testGetNeuralNetwork(NeuralNetworkInterface $neuralNetwork)
    {
        $player = new Player();
        $player->setNeuralNetwork($neuralNetwork);
        $result = $player->getNeuralNetwork();
        $this->assertSame($neuralNetwork, $result);
    }
}
