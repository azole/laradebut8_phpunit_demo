<?php
namespace Tests\Unit;

use Tests\TestCase;

class ArrayUntilTest extends TestCase
{
    /**
     * @test
     */
    public function testArrayUntilExist()
    {
        /** Arrange */
        $names = ['Mark', 'Duncan', 'Erica', 'Fish'];

        /** Assume */
        $expected = ['Mark'];

        /** Act */
        $actual = array_until($names, 'Duncan');

        /** Assert */
        $this->assertEquals($expected, $actual);
    }
}
