<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use POmelchenko\Arr;

class SecondTest extends TestCase
{
    public function testArrayRowSum(): void
    {
        $this->assertEquals(6, Arr::rowSum([1, 2, 3]));
    }

    public function testArrayRowsSum(): void
    {
        $this->assertEquals([6, 9, 15], Arr::rowsSum([
            [1, 2, 3],
            [2, 3, 4],
            [4, 5, 6],
        ]));

        $this->assertEquals(['one' => 6, 'two' => 9, 'three' => 15], Arr::rowsSum([
            'one' => [1, 2, 3],
            'two' => [2, 3, 4],
            'three' => [4, 5, 6],
        ]));
    }

    public function testArrayColsSum(): void
    {
        $this->assertEquals([7, 10, 13], Arr::colsSum([
            [1, 2, 3],
            [2, 3, 4],
            [4, 5, 6],
        ]));
    }

    public function testRotateArray(): void
    {
        $this->assertEquals(
            [
                [1, 2, 4],
                [2, 3, 5],
                [3, 4, 6],
            ],
            Arr::rotate([
                [1, 2, 3],
                [2, 3, 4],
                [4, 5, 6],
            ])
        );

        $this->assertEquals(
            [
                [4, 2, 1],
                [5, 3, 2],
                [6, 4, 3],
            ],
            Arr::rotate([
                [1, 2, 3],
                [2, 3, 4],
                [4, 5, 6],
            ], true)
        );
    }
}
