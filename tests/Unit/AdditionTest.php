<?php
namespace Test\Unit;

use App\Addition;

use Mockery as m;
use Tests\TestCase;

class AdditionTest extends TestCase
{

    protected function tearDown()
    {
        m::close();
    }

    /**
     * @test
     */
    public function testAdd()
    {
        /** Arrange */
        $target = new Addition;

        /** Assume */
        $expected = 5;

        /** Act */
        $actual = $target->run(5, 0);

        /** Assert */
        $this->assertEquals($expected, $actual);

    }
}
