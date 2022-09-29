<?php declare(strict_types=1);

namespace Behavioral\Tests\ChainOfResponsibility;

use Behavioral\ChainOfResponsibility\CheckUserExistsMiddleware;
use Behavioral\ChainOfResponsibility\FileLogger;
use Behavioral\ChainOfResponsibility\LoggerMiddleware;
use Behavioral\ChainOfResponsibility\Middleware;
use Behavioral\ChainOfResponsibility\Server;
use PHPUnit\Framework\TestCase;

class MiddlewaresTest extends TestCase
{
    public function testUserCheckedAndLogger(): void
    {
        $middleware = Middleware::link(
            new CheckUserExistsMiddleware(new Server()),
            new LoggerMiddleware(new FileLogger(__DIR__ . '/user.log')),
        );

        $this->assertTrue($middleware->check('john.doe@example.com', 'abcd'));
    }

    public function testUserCheckedAndNotBanned(): void
    {
        $this->markTestIncomplete('implement middleware checking if user is banned and write test');
    }
}
