<?php
namespace City;

use Prophecy\Argument;

class GreenStateTest extends \PHPUnit_Framework_TestCase
{
    private $state;

    public function setUp()
    {
        $this->state = new GreenState();
    }

    public function testNextState()
    {
        $sem = $this->prophesize("City\\Semaphore");
        $sem->setState(Argument::type("City\\YellowState"))->shouldBeCalled();

        $this->state->next($sem->reveal());
    }
}

