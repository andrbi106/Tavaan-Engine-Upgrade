<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * upgrade:patches command.
 */
final class UpgradePatchesCommand implements CommandInterface
{
    public function name(): string
    {
        return 'upgrade:patches';
    }

    public function description(): string
    {
        return 'Run upgrade:patches (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
