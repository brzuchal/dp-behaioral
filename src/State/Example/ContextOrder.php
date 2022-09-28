<?php

namespace Behavioral\State\Example;

class ContextOrder extends StateOrder
{
    public function getState():StateOrder
    {
        return static::$state;
    }

    public function setState(StateOrder $state)
    {
        static::$state = $state;
    }

    public function delivered()
    {
        static::$state->delivered();
    }

    public function getStatus(): string
    {
        return static::$state->getStatus();
    }
}
