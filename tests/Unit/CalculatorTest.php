<?php
namespace Test\Unit;

use App\Calculator;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function testInstanceExist()
    {
        /** Arrange */
        $target = new Calculator;

        /** Assume */

        /** Act */

        /** Assert */
    }

    /**
     * @test
     */
    public function testShouldResultDefaultToZero()
    {
        /** Arrange */
        $target = new Calculator;

        /** Assume */
        $expected = 0;

        /** Act */
        $actual = $target->getResult();

        /** Assert */
        $this->assertSame($expected, $actual);
    }
}
