<?php

namespace Behavioral\Tests\Iterator;

use Behavioral\Iterator\Video;
use Behavioral\Iterator\VideoDB;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testIterate()
    {
        $videoDB = new VideoDB();
        $videoDB->addVideo(new Video('210 min', 'Faith'));
        $videoDB->addVideo(new Video('220 min', 'Josh Journalist'));
        $videoDB->addVideo(new Video('7 hours', 'tom the sailor'));

        $videos = [];

        foreach ($videoDB as $video) {
            $videos[] = $video->getTitleAndLength();
        }

        $this->assertEquals(
            [
                'Faith named 210 min',
                'Josh Journalist named 220 min',
                'tom the sailor named 7 hours'
            ],
            $videos
        );
    }

    public function testRemove()
    {
        $person = new Video('210 minutes', 'Anne Marie');

        $personDB = new VideoDB();
        $personDB->addVideo($person);
        $personDB->removeVideo($person);

        $this->assertCount(0, $personDB);
    }
}
