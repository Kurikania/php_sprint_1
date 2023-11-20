<?php
namespace Tests;

use App\Animal\Gat;
use PHPUnit\Framework\TestCase;

class GatTest extends TestCase
{
    public function test_isMakeSoundExists()
    {
        $gat = new Gat("Nit");
        $this->assertTrue(
        method_exists($gat, 'makeSound'), 
        'Class does not have method makeSound'
      );
    }

    public function test_makeSound()
    {
        $gat = new Gat("Nit");
        $this->assertSame('Meu!'. PHP_EOL, $gat->makeSound());
    }

}