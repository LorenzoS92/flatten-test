<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Flatten;

class FlattenTest extends TestCase
{
    /**
     * @dataProvider provideTestData
     */
    public function testFlatten($input, $expectedResult)
    {
        $result = Flatten::flat($input);
        self::assertSame($expectedResult, $result);
    }

    public function provideTestData(): array
    {
        return [
            [
                [1, 2, 3, 4],
                [1, 2, 3, 4]
            ],
            [
                [1, 2, 3, [4, 5, 6], 7],
                [1, 2, 3, 4, 5, 6, 7]
            ],
            [
                [1, 2, 3, [4, 5, 6, [7, 8]], 9],
                [1, 2, 3, 4, 5, 6, 7, 8, 9]
            ],
        ];
    }
}
