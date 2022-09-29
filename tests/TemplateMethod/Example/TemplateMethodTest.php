<?php

namespace Behavioral\Tests\TemplateMethod\Example;

use Behavioral\TemplateMethod\Example\Fries;
use Behavioral\TemplateMethod\Example\Pizza;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testPizzaComplete()
    {
        $beachJourney = new Pizza();
        $beachJourney->complete();

        $this->assertEquals(
            ['Get components',
                'Mix component',
                'prepare in oven',
                'eat by fork and knife'],
            $beachJourney->getActivities()
        );
    }

    public function testFriesComplete()
    {
        $beachJourney = new Fries();
        $beachJourney->complete();

        $this->assertEquals(
            [
                'Get components',
                'Mix component',
                'Prepare in hot oil',
                'eat by hands',
            ],
            $beachJourney->getActivities()
        );
    }
}
