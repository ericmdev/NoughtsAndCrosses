<?php
namespace NoughtsAndCrosses\Test;
use NoughtsAndCrosses\NeuralNetwork\Layer\Layer_Abstract;
use PHPUnit_Framework_TestCase;

/**
 * Layer_Abstract unit test.
 *
 * @package noughtsandcrosses
 * @group   specification
 */
class Layer_Abstract_UnitTest extends NoughtsAndCrossesTestCase
{
    /**
     * @dataProvider neuronsProvider
     */
    public function testSetNeurons($neurons)
    {
        $stub = $this->getMock('NoughtsAndCrosses\NeuralNetwork\Layer\Layer_Abstract');
        $this->assertSame($neurons, $stub->setNeurons($neurons));
    }
}
