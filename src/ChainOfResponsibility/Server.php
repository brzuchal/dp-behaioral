<?php declare(strict_types=1);

namespace Behavioral\ChainOfResponsibility;

final class Server
{
    protected const KNOWN_EMAILS = [
        'john.doe@example.com',
        'kate.doe@example.org',
    ];

    public function hasEmail(string $email): bool
    {
        return in_array($email, self::KNOWN_EMAILS, true);
    }

    public function isValidPassword(string $email, string $password): bool
    {
        return $email === 'john.doe@example.com' && $password === 'abcd';
    }
}
