<?php

namespace Behavioral\TemplateMethod;

class Volleyball extends Play
{
    protected function preparePitch(): string
    {
        return 'Prepare Net';
    }

    protected function play(): string
    {
        return 'Play volleyball';
    }
}
