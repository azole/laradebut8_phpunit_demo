<?php
namespace Test\Unit;

use App\Addition;
use App\Calculator;
use App\Multiple;
use App\Subtract;
use Tests\TestCase;
use Mockery as m;

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

    protected function tearDown()
    {
        m::close();
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
        $mock = m::mock(Addition::class);
        $mock->shouldReceive('run')
             ->once()
             ->with(5, 0)
             ->andReturn(5);
        $this->calc->setOperation($mock);

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
        $this->calc->setOperands(5);
        $this->calc->setOperation(new Subtract());

        /** Assume */
        $expected = -5;

        /** Act */
        $actual = $this->calc->calculate();

        /** Assert */
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testMultipliesNumbers()
    {
        /** Arrange */
        $this->calc->setOperands(3, 3, 3);
        $this->calc->setOperation(new Multiple());

        /** Assume */
        $expected = 27;

        /** Act */
        $actual = $this->calc->calculate();

        /** Assert */
        $this->assertSame($expected, $actual);
    }

}
