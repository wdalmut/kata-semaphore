<?php
namespace City;

interface State
{
    public function emit();
    public function next(Semaphore $semaphore);
}
