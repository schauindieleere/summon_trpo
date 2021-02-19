<?php
use poepnko\Line;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class LineTest extends TestCase
{
    /**
     * @test
     * @dataProvider providerLine
     */

    public function linTest ($a , $b , $result) {
        $test = new Line();
        $this->assertEquals( $result, $test->line($a , $b));
    }

    public function  providerLine() {
        return array (
            array(1,1,-1),
            array(10,-2,5),
        );
    }
    /**
     * @test
     * @dataProvider providerLineEx
     */
    public function linTestException($a , $b , $result){
        $this->expectException(\poepnko\PopenkoException::class);
        $test = new Line();
        $this->assertEquals( $result, $test->line($a , $b));
    }
    public function  providerLineEx() {
        return array (
            array(0,1,-1),
            array(0,0,-1)
        );
    }
}