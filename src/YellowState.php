<?php
namespace City;

class YellowState implements State
{
    public function emit()
    {
        return "YELLOW";
    }

    public function next(Semaphore $semaphore)
    {
        $semaphore->setState(new RedState());
    }
}

