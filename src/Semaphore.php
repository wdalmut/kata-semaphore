<?php
namespace City;

class Semaphore
{
    private $state;

    public function __construct(State $state)
    {
        $this->setState($state);
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function step()
    {
        $this->state->next($this);
    }
}
