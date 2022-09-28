<?php

namespace Behavioral\State\Example;

abstract class StateOrder
{
    private $details;

    protected static $state;

    abstract protected function delivered();

    protected function setStatus(string $status)
    {
        $this->details['status'] = $status;
        $this->details['updateDate'] = time();
    }

    protected function getStatus(): string
    {
        return $this->details['status'];
    }
}
