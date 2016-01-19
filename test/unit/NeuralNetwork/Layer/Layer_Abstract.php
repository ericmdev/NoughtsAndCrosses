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
     * Test setNeurons returns the total number of neurons.
     *
     * @dataProvider neuronsProvider
     */
    public function testSetNeurons($neurons)
    {
    	$stub = $this->getMockBuilder('NoughtsAndCrosses\NeuralNetwork\Layer\Layer_Abstract')
			    ->setMethods(null)
			    ->getMock();
        $result = $stub->setNeurons($neurons);
        $this->assertSame($neurons, $result);
    }

    /**
     * Test getNeurons returns the total number of neurons.
     *
     * @dataProvider neuronsProvider
     */
    public function testGetNeurons($neurons)
    {
        $stub = $this->getMockBuilder('NoughtsAndCrosses\NeuralNetwork\Layer\Layer_Abstract')
                ->setMethods(null)
                ->getMock();
        $stub->setNeurons($neurons);
        $result = $stub->getNeurons();
        $this->assertSame($neurons, $result);
    }
}
