<?php
namespace Tests;

use App\Animal\Gos;
use PHPUnit\Framework\TestCase;

class GosTest extends TestCase
{
    public function test_isMakeSound()
    {
        $gat = new Gos("Polina");
        $this->assertTrue(
        method_exists($gat, 'makeSound'), 
        'Class does not have method makeSound'
      );
    }

}