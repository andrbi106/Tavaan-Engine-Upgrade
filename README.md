# Tavaan Engine — Upgrade

> **ارتقای نسخه** — موتور Upgrade در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.upgrade` |
| نام | `Upgrade` |
| عنوان فارسی | ارتقای نسخه |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Upgrade` |
| نوع | `engine` |

## خطاها (Exceptions)

- `Tavaan\Engine\Upgrade\Exceptions\UpgradeException`

## کلاس‌های اصلی

- `src/ConfigMigrator.php`
- `src/Console/Commands/UpgradeCheckCommand.php`
- `src/Console/Commands/UpgradeCommand.php`
- `src/Console/Commands/UpgradePatchesCommand.php`
- `src/Console/Commands/UpgradeRollbackCommand.php`
- `src/Console/Commands/UpgradeStatusCommand.php`
- `src/PatchRunner.php`
- `src/PreChecker.php`
- `src/Support/BackupAdapter.php`
- `src/Support/BackupRunnerInterface.php`
- `src/Upgrade.php`
- `src/UpgradeRepository.php`
- `src/Upgrader.php`
- `src/VersionResolver.php`

## Service Providerها

- `Tavaan\Engine\Upgrade\UpgradeServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `console`
- `database`
- `filesystem`

## دستورات CLI

- `upgrade`

## پیکربندی

- فایل پیکربندی: `config/upgrade.php`
- کلید: `upgrade`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Upgrade.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Upgrade`** (این مخزن) | موتور Upgrade |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
