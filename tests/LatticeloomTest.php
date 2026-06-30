<?php
/**
 * Tests for LatticeLoom
 */

use PHPUnit\Framework\TestCase;
use Latticeloom\Latticeloom;

class LatticeloomTest extends TestCase {
    private Latticeloom $instance;

    protected function setUp(): void {
        $this->instance = new Latticeloom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Latticeloom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
