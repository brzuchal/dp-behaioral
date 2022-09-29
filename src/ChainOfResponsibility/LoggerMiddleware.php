<?php declare(strict_types=1);

namespace Behavioral\ChainOfResponsibility;

final class LoggerMiddleware extends Middleware
{
    public function __construct(
        protected Logger $logger,
    ) {
    }

    public function check(string $email, string $password): bool
    {
        $this->logger->log("Checking user {$email}");
        $result = $this->checkNext($email, $password);
        $this->logger->log(match($result) {
            true => 'User found and have access',
            false => 'User not found or access forbidden',
        });

        return $result;
    }
}
