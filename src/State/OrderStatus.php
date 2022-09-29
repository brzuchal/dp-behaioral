<?php declare(strict_types=1);

namespace Behavioral\State;

enum OrderStatus
{
    case Created;
    case Pending;
    case Shipped;
    case Completed;
}
