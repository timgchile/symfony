<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Notifier\Bridge\Pusher\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Notifier\Bridge\Pusher\PusherOptions;

/**
 * @author Yasmany Cubela Medina <yasmanycm@gmail.com>
 *
 * @coversNothing
 */
final class PusherOptionsTest extends TestCase
{
    /**
     * @dataProvider toArrayProvider
     * @dataProvider toArraySimpleOptionsProvider
     */
    public function testToArray(array $options, array $expected = null)
    {
        static::assertSame($expected ?? $options, (new PusherOptions($options))->toArray());
    }

    public function toArrayProvider(): iterable
    {
        yield 'empty is allowed' => [
            [],
            [],
        ];
    }

    public function toArraySimpleOptionsProvider(): iterable
    {
        yield [[]];
    }

    public function setProvider(): iterable
    {
        yield ['async', 'async', true];
    }
}