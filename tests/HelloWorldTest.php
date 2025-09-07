<?php

declare(strict_types=1);

namespace Tests;

use App\HelloWorld;
use Exception;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    #[Test]
    public function say(): void
    {
        $expected = new HelloWorld();
        $this->assertSame($expected->say, 'Hello World');
    }

    #[Test]
    public function exception(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('値の代入はできない');

        $expected = new HelloWorld();
        $expected->say = 'Hell0';
    }
}
