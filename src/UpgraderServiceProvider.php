<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Upgrade\Contracts\UpgraderInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * UpgraderServiceProvider — ثبت سرویس‌های موتور Upgrader.
 */
final class UpgraderServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(UpgraderInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Upgrader($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Upgrade\Console\UpgradeCommand::class;
        $this->commands[] = \Tavaan\Engine\Upgrade\Console\Upgrade_checkCommand::class;
        $this->commands[] = \Tavaan\Engine\Upgrade\Console\Upgrade_rollbackCommand::class;
        $this->commands[] = \Tavaan\Engine\Upgrade\Console\Upgrade_statusCommand::class;
        $this->commands[] = \Tavaan\Engine\Upgrade\Console\Upgrade_patchesCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            UpgraderInterface::class,
        ];
    }
}