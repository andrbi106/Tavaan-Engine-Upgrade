<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * upgrade:check command.
 */
final class Upgrade_checkCommand implements CommandInterface
{
    public function name(): string
    {
        return 'upgrade:check';
    }

    public function description(): string
    {
        return 'Run upgrade:check (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
