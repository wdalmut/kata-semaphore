<?php
namespace City;

use Prophecy\Argument;

class YellowStateTest extends \PHPUnit_Framework_TestCase
{
    private $state;

    public function setUp()
    {
        $this->state = new YellowState();
    }

    public function testNextState()
    {
        $sem = $this->prophesize("City\\Semaphore");
        $sem->setState(Argument::type("City\\RedState"))->shouldBeCalled();

        $this->state->next($sem->reveal());
    }
}


