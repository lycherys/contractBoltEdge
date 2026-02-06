<?php
/**
 * Tests for contractBolt
 */

use PHPUnit\Framework\TestCase;
use Contractbolt\Contractbolt;

class ContractboltTest extends TestCase {
    private Contractbolt $instance;

    protected function setUp(): void {
        $this->instance = new Contractbolt(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractbolt::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
