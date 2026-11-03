<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * upgrade:rollback command.
 */
final class Upgrade_rollbackCommand implements CommandInterface
{
    public function name(): string
    {
        return 'upgrade:rollback';
    }

    public function description(): string
    {
        return 'Run upgrade:rollback (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
