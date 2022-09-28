<?php

namespace Behavioral\Iterator\Example;

class Person
{
    private $name;
    private $age;

    public function __construct(string $age, string $name)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function getNameAndAge(): string
    {
        return $this->getAge().' named '.$this->getName();
    }
}
