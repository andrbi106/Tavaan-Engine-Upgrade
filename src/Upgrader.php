<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade;

final class Upgrader
{
    public function upgrade(/* ... */): mixed
    {
        return null;
    }
    public function check(/* ... */): mixed
    {
        return $this->user !== null;
    }
    public function rollback(/* ... */): mixed
    {
        return null;
    }
    public function status(/* ... */): mixed
    {
        return null;
    }
    public function patches(/* ... */): mixed
    {
        return null;
    }
}
