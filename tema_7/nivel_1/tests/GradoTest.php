<?php

namespace Tests;

require_once __DIR__ . '/../app/Grado/Grado.php';

use function \App\Grado\checkNote;
use PHPUnit\Framework\TestCase;

class GradoTest extends TestCase
{

    public function test_checkNoteExists()
    {
        $this->assertTrue(
            function_exists('\App\Grado\checkNote'),
            'There is no function checkNote'
        );
    }

    public function test_checkNote()
    {
        $result = checkNote('tres');
        $this->assertEquals('Error. Please enter a numeric value', $result);
    }

    public function test_checkNoteNegative()
    {
        $result = checkNote(-8);
        $this->assertEquals('Error. Value should not be less 0', $result);
    }

    public function test_checkNoteExceed()
    {
        $result = checkNote(150);
        $this->assertEquals('Error. Value should not exceed 100', $result);
    }

    public function test_isPrimera()
    {
        $result = checkNote(80);
        $this->assertEquals('Primera Divisió', $result);
    }

    public function test_isSegona()
    {
        $result = checkNote(50);
        $this->assertEquals('Segona Divisió', $result);
    }

    public function test_isTercera()
    {
        $result = checkNote(38);
        $this->assertEquals('Tercera Divisió', $result);
    }

    public function test_isReprovara()
    {
        $result = checkNote(5);
        $this->assertEquals("l'estudiant reprovarà", $result);
    }
}
