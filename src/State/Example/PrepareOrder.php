<?php

namespace Behavioral\State\Example;

class PrepareOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('Prepared');
    }

    protected function delivered()
    {
        static::$state = new SendOrder();
    }
}
