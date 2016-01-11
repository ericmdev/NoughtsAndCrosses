<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\NeuralNetwork\NeuralNetwork;
use PHPUnit_Framework_TestCase;

/**
 * NeuralNetwork unit test.
 *
 * @package noughtsandcrosses
 * @group   specification
 */
class NeuralNetwork_UnitTest extends NoughtsAndCrossesTestCase
{
    /**
     * @dataProvider neuralNetworkInputLayerProvider
     */
    public function testSetInputLayer($layer)
    {
        $neuralNetwork = new NeuralNetwork();
        $this->assertSame($layer, $neuralNetwork->setInputLayer($layer));
    }
}
