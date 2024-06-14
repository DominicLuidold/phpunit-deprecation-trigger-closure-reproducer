<?php

declare(strict_types=1);

namespace App\Tests;

use App\Foo;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Foo::class)]
final class FooTest extends TestCase
{
    public function testValues(): void
    {
        $values = [
            '456',
            123,
        ];

        $foo = new Foo($values);

        self::assertSame(
            expected: [
                123,
                '456',
            ],
            actual: $foo->values,
        );
    }

    public function testValuesWithNull(): void
    {
        $values = [
            '456',
            null,
            123,
        ];

        $foo = new Foo($values);

        self::assertSame(
            expected: [
                123,
                '456',
                null,
            ],
            actual: $foo->values,
        );
    }
}
