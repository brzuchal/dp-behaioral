<?php

namespace Behavioral\State\Example;

class SendOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('send');
    }

    protected function delivered()
    {
        $this->setStatus('completed');
    }
}
