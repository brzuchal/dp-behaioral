<?php declare(strict_types=1);

namespace Behavioral\ChainOfResponsibility;

/**
 * Base middleware class.
 */
abstract class Middleware
{
    private Middleware|null $next = null;

    /**
     * Builds chains of middleware objects.
     */
    public static function link(Middleware $first, Middleware... $chain): Middleware
    {
        $head = $first;
        foreach ($chain as $nextInChain) {
            $head->next = $nextInChain;
            $head = $nextInChain;
        }
        return $first;
    }

    /**
     * Subclasses will implement this method with concrete checks.
     */
    public abstract function check(string $email, string $password): bool;

    /**
     * Runs check on the next object in chain or ends traversing if we're in
     * last object in chain.
     */
    protected function checkNext(string $email, string $password): bool
    {
        if ($this->next === null) {
            return true;
        }

        return $this->next->check($email, $password);
    }
}
