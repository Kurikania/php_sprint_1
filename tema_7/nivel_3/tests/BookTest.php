<?php

namespace Tests;

use App\GenereEnum;
use PHPUnit\Framework\TestCase;
use App\Library;
use App\Book;
use DeepCopy\Reflection\ReflectionHelper;

class BookTest extends TestCase
{
    public function testEditBook()
    {
        $book = new Book( "Title", "Test Author", GenereEnum::Conte, "123", 300);
        $editData = ['author' => 'Matt Zandstra', 'title' => 'PHP Objects, Patterns, and Practice'];
        $book->editBook($editData);
        foreach($editData as $name => $data) {
            $value = $book->{'get'. ucfirst($name)}();
            $this->assertSame($data, $value);
        }   
    }
}
