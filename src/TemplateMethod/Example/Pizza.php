<?php

namespace Behavioral\TemplateMethod\Example;

class Pizza extends Meal
{

    protected function prepare(): string
    {
        return 'prepare in oven';
    }

    protected function eat(): string
    {
        return 'eat by fork and knife';
    }
}
