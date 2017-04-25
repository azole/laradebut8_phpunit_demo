<?php
namespace Test\Unit;

use App\Calculator;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    protected $calc;
    protected function setUp()
    {
        $this->calc = new Calculator;
    }

    /**
     * @test
     */
    public function testInstanceExist()
    {
        /** Arrange */

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

        /** Assume */
        $expected = 0;

        /** Act */
        $actual = $this->calc->getResult();

        /** Assert */
        $this->assertSame($expected, $actual);
    }

    /**
     * @test
     */
    public function testAddNumbers()
    {
        /** Arrange */

        /** Assume */
        $expected = 5;

        /** Act */
        $this->calc->add(5);
        $actual = $this->calc->getResult();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testRequiresNumricValue()
    {
        /** Arrange */

        /** Assume */
        $this->expectException(\InvalidArgumentException::class);

        /** Act */
        $this->calc->add('five');

        /** Assert */
    }

    /**
     * @test
     */
    public function testAcceptsMultipleArgs()
    {
        /** Arrange */

        /** Assume */
        $expected = 10;

        /** Act */
        $this->calc->add(1, 2, 3, 4);
        $actual = $this->calc->getResult();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testSubtractNumber()
    {
        /** Arrange */

        /** Assume */
        $expected = -5;

        /** Act */
        $this->calc->subtract(5);
        $actual = $this->calc->getResult();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }
}
