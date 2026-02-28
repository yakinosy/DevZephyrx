<?php
/**
 * Tests for DevZephyrx
 */

use PHPUnit\Framework\TestCase;
use Devzephyrx\Devzephyrx;

class DevzephyrxTest extends TestCase {
    private Devzephyrx $instance;

    protected function setUp(): void {
        $this->instance = new Devzephyrx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Devzephyrx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
