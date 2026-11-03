<?php

declare(strict_types=1);

namespace Tavaan\Engine\Upgrade\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Upgrade\Upgrader;
use Tavaan\Engine\Upgrade\Patch;

/**
 * T-NN scenario tests for the upgrade engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class UpgradeScenarioTest extends TestCase
{'    public function t01_upgrade_applies_patches_in_order(): void\n    {\n        // Scenario T-01\n$u = new Upgrader();\n        $log = [];\n        $u->add(new class("1.0.1", "p1") extends Patch {\n            public function up(): void {}\n            public function down(): void {}\n        });\n        $u->add(new class("1.0.2", "p2") extends Patch {\n            public function up(): void {}\n            public function down(): void {}\n        });\n        $applied = $u->upgrade();\n        $this->assertCount(2, $applied);\n        $this->assertSame(["1.0.1", "1.0.2"], $applied);\n    }\n    public function t02_status_returns_applied_and_pending(): void\n    {\n        // Scenario T-02\n$u = new Upgrader();\n        $u->add(new class("1.0", "p") extends Patch {\n            public function up(): void {}\n            public function down(): void {}\n        });\n        $u->add(new class("2.0", "p2") extends Patch {\n            public function up(): void {}\n            public function down(): void {}\n        });\n        $u->upgrade("1.0");\n        $status = $u->status();\n        $this->assertContains("2.0", $status["pending"]);\n    }\n    public function t03_rollback_reverts_patches(): void\n    {\n        // Scenario T-03\n$u = new Upgrader();\n        $calls = [];\n        $u->add(new class("1.0", "p") extends Patch {\n            public function up(): void {}\n            public function down(): void { $GLOBALS["d_1"] = true; }\n        });\n        $u->add(new class("2.0", "p2") extends Patch {\n            public function up(): void {}\n            public function down(): void { $GLOBALS["d_2"] = true; }\n        });\n        $u->upgrade();\n        $rolled = $u->rollback(1);\n        $this->assertCount(1, $rolled);\n        $this->assertSame("2.0", $rolled[0]);\n    }\n    public function t04_patches_list_returns_versions(): void\n    {\n        // Scenario T-04\n$u = new Upgrader();\n        $u->add(new class("1.0", "p") extends Patch {\n            public function up(): void {}\n            public function down(): void {}\n        });\n        $u->add(new class("2.0", "p2") extends Patch {\n            public function up(): void {}\n            public function down(): void {}\n        });\n        $this->assertSame(["1.0", "2.0"], $u->patches());\n    }'}
