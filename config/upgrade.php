<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Upgrade Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور upgrade — همهٔ کلیدهای مستندشده در `docs/03-engines/upgrade.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/upgrade.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('UPGRADE_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('UPGRADE_PREFIX', 'upgrade:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('UPGRADE_LOG_CHANNEL', 'upgrade'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];