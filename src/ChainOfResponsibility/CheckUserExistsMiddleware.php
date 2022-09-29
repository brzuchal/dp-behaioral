<?php declare(strict_types=1);

namespace Behavioral\ChainOfResponsibility;

final class CheckUserExistsMiddleware extends Middleware
{
    public function __construct(
        protected Server $server,
    ) {
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            return false;
        }

        if (!$this->server->isValidPassword($email, $password)) {
            return false;
        }

        return $this->checkNext($email, $password);
    }
}
