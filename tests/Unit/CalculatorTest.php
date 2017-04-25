<?php
namespace Test\Unit;

use App\Addition;
use App\Calculator;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
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
        $this->calc->setOperands(5);
        $this->calc->setOperation(new Addition());

        /** Assume */
        $expected = 5;

        /** Act */
        $actual = $this->calc->calculate();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testRequiresNumricValue()
    {
        /** Arrange */
        $this->calc->setOperands('five');
        $this->calc->setOperation(new Addition());

        /** Assume */
        $this->expectException(\InvalidArgumentException::class);

        /** Act */
        $actual = $this->calc->calculate();

        /** Assert */
    }

    /**
     * @test
     */
    public function testAcceptsMultipleArgs()
    {
        /** Arrange */
        $this->calc->setOperands(1, 2, 3, 4);
        $this->calc->setOperation(new Addition());

        /** Assume */
        $expected = 10;

        /** Act */
        $actual = $this->calc->calculate();

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
