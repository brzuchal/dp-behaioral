<?php

namespace Behavioral\Iterator\Example;

class PersonDB implements \Countable, \Iterator
{
    private $persons = [];

    private $currentPerson = 0;

    public function addPerson(Person $person)
    {
        $this->persons[] = $person;
    }

    public function removePerson(Person $personToRemove)
    {
        foreach ($this->persons as $key => $person) {
            if ($person->getNameAndAge() === $personToRemove->getNameAndAge()) {
                unset($this->persons[$key]);
            }
        }

        $this->persons = array_values($this->persons);
    }

    public function count(): int
    {
        return count($this->persons);
    }

    public function current(): Person
    {
        return $this->persons[$this->currentPerson];
    }

    public function key(): int
    {
        return $this->currentPerson;
    }

    public function next()
    {
        $this->currentPerson++;
    }

    public function rewind()
    {
        $this->currentPerson = 0;
    }

    public function valid(): bool
    {
        return isset($this->persons[$this->currentPerson]);
    }
}
