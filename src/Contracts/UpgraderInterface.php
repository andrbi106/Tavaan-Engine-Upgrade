<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade\Contracts;

/**
 * قرارداد Upgrader.
 *
 * @see \Tavaan\Engine\Upgrade\Upgrader
 * @api 1.0
 */
interface UpgraderInterface
{
    /**
     * متد upgrade.
     *
     * @return mixed
     */
    public function upgrade(/* ... */): mixed;

    /**
     * متد check.
     *
     * @return mixed
     */
    public function check(/* ... */): mixed;

    /**
     * متد rollback.
     *
     * @return mixed
     */
    public function rollback(/* ... */): mixed;

    /**
     * متد status.
     *
     * @return mixed
     */
    public function status(/* ... */): mixed;

    /**
     * متد patches.
     *
     * @return mixed
     */
    public function patches(/* ... */): mixed;
}