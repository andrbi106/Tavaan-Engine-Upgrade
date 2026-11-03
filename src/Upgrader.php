<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade;

final class Upgrader
{
    public function upgrade()
    {
        return null;
    }
    public function check(): bool
    {
        return $this->user !== null;
    }
    public function rollback()
    {
        return null;
    }
    public function status()
    {
        return null;
    }
    public function patches()
    {
        return null;
    }
}
