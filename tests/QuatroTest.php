<?php
use poepnko\PopenkoException;
use poepnko\Quatro;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class QuatroTest extends TestCase

{

    /**
     * @dataProvider providersolve
     */
    public function testSolve($a, $b, $c, $res) {
        $fTest = new Quatro();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolve ()
    {
        return array (
            array (15, 9, 0,[540 ,-675]),
            array (1, 6, -40,[ 95,-101]),
            array (0, 1, 1,[-1]),
        );
    }
    /**
     * @dataProvider providerSolveEx
     */
    public function testSolveEx($a, $b, $c, $res) {
        $this->expectException(PopenkoException::class);
        $fTest = new Quatro();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }
    public function providerSolveEx (): array
    {
        return array (
            array (8, 7, 6, []),
            array (7, 6 , 8, [])
        );
    }
}