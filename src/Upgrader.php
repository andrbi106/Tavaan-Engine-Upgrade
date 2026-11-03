<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Upgrader — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Upgrade\Contracts\UpgraderInterface
 */
final class Upgrader implements Contracts\UpgraderInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function upgrade(/* ... */): mixed
    {
        // TODO: پیاده‌سازی upgrade مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function check(/* ... */): mixed
    {
        // TODO: پیاده‌سازی check مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function rollback(/* ... */): mixed
    {
        // TODO: پیاده‌سازی rollback مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function status(/* ... */): mixed
    {
        // TODO: پیاده‌سازی status مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function patches(/* ... */): mixed
    {
        // TODO: پیاده‌سازی patches مطابق مستندات (سند §3 API).
        return null;
    }
}