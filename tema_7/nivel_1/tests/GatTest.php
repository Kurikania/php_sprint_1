<?php
namespace Tests;

use App\Animal\Gat;
use PHPUnit\Framework\TestCase;

class GatTest extends TestCase
{
    public function test_isMakeSound()
    {
        $gat = new Gat("Nit");
        $this->assertTrue(
        method_exists($gat, 'makeSound'), 
        'Class does not have method makeSound'
      );
    }

}