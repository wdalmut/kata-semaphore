<?php
namespace City;

class GreenState implements State
{
    public function emit()
    {
        return "GREEN";
    }

    public function next(Semaphore $semaphore)
    {
        $semaphore->setState(new YellowState());
    }
}
