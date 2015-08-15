<?php
namespace City;

class RedState implements State
{
    public function emit()
    {
        return "RED";
    }

    public function next(Semaphore $semaphore)
    {
        $semaphore->setState(new GreenState());
    }
}
