<?php
namespace City;

use Prophecy\Argument;

class RedStateTest extends \PHPUnit_Framework_TestCase
{
    private $state;

    public function setUp()
    {
        $this->state = new RedState();
    }

    public function testNextState()
    {
        $sem = $this->prophesize("City\\Semaphore");
        $sem->setState(Argument::type("City\\GreenState"))->shouldBeCalled();

        $this->state->next($sem->reveal());
    }
}
