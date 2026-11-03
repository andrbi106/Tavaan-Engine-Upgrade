<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * upgrade:status command.
 */
final class Upgrade_statusCommand implements CommandInterface
{
    public function name(): string
    {
        return 'upgrade:status';
    }

    public function description(): string
    {
        return 'Run upgrade:status (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
