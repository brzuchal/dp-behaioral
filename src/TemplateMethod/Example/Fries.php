<?php

namespace Behavioral\TemplateMethod\Example;

class Fries extends Meal
{
    protected function prepare(): string
    {
        return 'Prepare in hot oil';
    }

    protected function eat(): string
    {
        return 'eat by hands';
    }
}
