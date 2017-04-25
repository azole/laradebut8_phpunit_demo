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

    /**
     * @test
     */
    public function testAddNumbers()
    {
        /** Arrange */
        $target = new Calculator;

        /** Assume */
        $expected = 5;

        /** Act */
        $target->add(5);
        $actual = $target->getResult();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testRequiresNumricValue()
    {
        /** Arrange */
        $target = new Calculator;

        /** Assume */
        $this->expectException(\InvalidArgumentException::class);

        /** Act */
        $target->add('five');

        /** Assert */
    }
}
