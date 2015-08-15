<?php
namespace City;

use Prophecy\Argument;

class SemaphoreTest extends \PHPUnit_Framework_TestCase
{
    public function testBaseExecution()
    {
        $state = $this->prophesize("City\\State");
        $state->next(Argument::Any())->shouldBeCalledTimes(1);

        $sut = new Semaphore($state->reveal());
        $sut->step();
    }
}
