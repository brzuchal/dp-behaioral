<?php

namespace Behavioral\Iterator\Example;

class PersonDB implements \Countable, \Iterator
{
    private array $persons = [];

    private int $currentPerson = 0;

    public function addPerson(Person $person)
    {
        // ...
    }

    public function removePerson(Person $personToRemove)
    {
        // ...
    }

    public function count(): int
    {
        // ...
    }

    public function current(): Person
    {
        // ...
    }

    public function key(): int
    {
        // ...
    }

    public function next(): void
    {
        // ...
    }

    public function rewind(): void
    {
        // ...
    }

    public function valid(): bool
    {
        // ...
    }
}
