<?php

namespace Behavioral\TemplateMethod;

class Football extends Play
{
    protected function preparePitch(): string
    {
        return 'Prepare grass';
    }

    protected function play(): string
    {
        return 'Play football';
    }
}
