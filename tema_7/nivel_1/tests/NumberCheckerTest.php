<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class NumberCheckerTest extends TestCase
{
    public function test_isPositiveExist()
    {
        $numberChecker = new NumberChecker(0);
        $this->assertTrue(
        method_exists($numberChecker, 'isPositive'), 
        'Class does not have method isPositive'
      );
    }

    public function test_isEvenExist()
    {
        $numberChecker = new NumberChecker(0);
        $this->assertTrue(
        method_exists($numberChecker, 'isEven'), 
        'Class does not have method isPositive'
      );
    }

    public function test_isPositive()
    {
        $numberChecker = new NumberChecker(8);
        $result = $numberChecker->isPositive();
        $this->assertEquals(true, $result);
    }

    public function test_isNotPositive()
    {
        $numberChecker = new NumberChecker(-7);
        $result = $numberChecker->isPositive();
        $this->assertEquals(false, $result);
    }

    public function test_isEven()
    {
        $numberChecker = new NumberChecker(8);
        $result = $numberChecker->isEven();
        $this->assertEquals(true, $result);
    }

    public function test_isNotEven()
    {
        $numberChecker = new NumberChecker(7);
        $result = $numberChecker->isEven();
        $this->assertEquals(false, $result);
    }

    /*
    - Exercici 1
        Programa un DataProvider per a la classe Test de l’exercici 1 del nivell anterior i fes-lo servir. 
    */

    /**
     * @dataProvider provider
     */
    public function testIsPositive($a, $expected)
    {
        $numberChecker = new NumberChecker($a);
        $result = $numberChecker->isPositive();    
        $this->assertEquals($expected, $result);    
    }

    public static function provider()
    {
        return array(
            [26,true],
            [-15,false]
        );
    }

}