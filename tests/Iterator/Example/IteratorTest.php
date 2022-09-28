<?php

namespace Behavioral\Tests\Iterator\Example;

use Behavioral\Iterator\Example\Person;
use Behavioral\Iterator\Example\PersonDB;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testIterate()
    {
        $PersonDB = new PersonDB();
        $PersonDB->addPerson(new Person('21 years', 'Jan Nowak'));
        $PersonDB->addPerson(new Person('22 years', 'Josh Uer'));
        $PersonDB->addPerson(new Person('37 yrs', 'John Smith'));

        $persons = [];

        foreach ($PersonDB as $person) {
            $persons[] = $person->getNameAndAge();
        }

        $this->assertEquals(
            [
                '21 years named Jan Nowak',
                '22 years named Josh Uer',
                '37 yrs named John Smith'
            ],
            $persons
        );
    }

    public function testRemove()
    {
        $person = new Person('21 yrs', 'Anne Marie');

        $personDB = new PersonDB();
        $personDB->addPerson($person);
        $personDB->removePerson($person);

        $this->assertCount(0, $personDB);
    }
}
