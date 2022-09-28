<?php

namespace Behavioral\Tests\TemplateMethod;

use Behavioral\Observer\Example\CodeObserver;
use Behavioral\Observer\Example\CodeOnGit;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $observer = new CodeObserver();

        $user = new CodeOnGit();
        $user->attach($observer);

        $user->changeCode('Line 21');
        $this->assertCount(1, $observer->getChangedCode());
    }
}
