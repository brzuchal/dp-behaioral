<?php

namespace Behavioral\Iterator\Example;

class Person
{
    public function __construct(
        protected readonly string $name,
        protected readonly int $age,
    ) {
    }

    public function getNameAndAge(): string
    {
        return $this->age . ' named ' . $this->name;
    }
}
