<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Upgrade\Upgrader;
use Tavaan\Engine\Upgrade\UpgraderServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Upgrader.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class UpgraderTest extends TestCase
{
    private Upgrader $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Upgrader($config);
    }

    /**
     * T-01: upgrade path (1.0→1.2)
     */
    public function test_t01_upgrade_path_1012(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: data patch idempotent
     */
    public function test_t02_data_patch_idempotent(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: config migration
     */
    public function test_t03_config_migration(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: rollback از backup
     */
    public function test_t04_rollback__backup(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: pre-check شکست (PHP ناسازگار)
     */
    public function test_t05_precheck__php_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: maintenance mode
     */
    public function test_t06_maintenance_mode(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

}