<?php

namespace Behavioral\Tests\TemplateMethod;

use Behavioral\TemplateMethod\Football;
use Behavioral\TemplateMethod\Volleyball;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testPizzaComplete()
    {
        $beachJourney = new Volleyball();
        $beachJourney->complete();

        $this->assertEquals(
            ['Get ball',
                'Group players',
                'Prepare Net',
                'Play volleyball'],
            $beachJourney->getActivities()
        );
    }

    public function testFriesComplete()
    {
        $beachJourney = new Football();
        $beachJourney->complete();

        $this->assertEquals(
            [
                'Get ball',
                'Group players',
                'Prepare grass',
                'Play football'
            ],
            $beachJourney->getActivities()
        );
    }
}
