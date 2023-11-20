<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use App\Shape\Triangle;

/*Programa un DataProvider per a la classe Test de l’exercici 2 del nivell 1 i fes-lo servir. */
class TriangleTest extends TestCase
{

     /**
     * @dataProvider provider
     */
    public function testIsPositive($a, $b, $expected)
    {
        $triangle = new Triangle($a,$b);
        $result = $triangle->calculateArea();    
        $this->assertEquals($expected, $result);    
    }

    public static function provider()
    {
        return array(
            [5, 7, 17.5],
            [8, 6, 24]
        );
    }

}