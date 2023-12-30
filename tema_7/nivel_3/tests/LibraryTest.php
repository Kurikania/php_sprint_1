<?php

namespace Tests;

use App\GenereEnum;
use PHPUnit\Framework\TestCase;
use App\Library;
use App\Book;
class LibraryTest extends TestCase
{
/*
 *     protected string $title;
    protected string $autor;
    protected GenereEnum $genere;
    protected string $isbn;
    protected int $numPaginas;*/
    public function testAddBook()
    {
        $book = new Book( "Title", "Test Autor", GenereEnum::Conte, "123", 300);
        $library = new Library();
        $library->addBook($book);
        $this->assertContains($book,$library->books );
    }


    /**
     * @dataProvider provider
     */
    public function testGetLongBooks($title, $author, $genere,  $isbn, $page_num)
    {
        $book = new Book($title, $author, $genere,  $isbn, $page_num);
        $library = new Library();
        $library->addBook($book);
        $longBooks = $library->getLongBooks();
        $page_num > 500 ? $this->assertContains($book,$longBooks) : $this->assertNotContains($book,$longBooks);
    }

    /**
     * @dataProvider provider
     */
    public function testDeleteBook($title, $author, $genere,  $isbn, $page_num)
    {
        $book = new Book($title, $author, $genere,  $isbn, $page_num);
        $library = new Library();
        $library->addBook($book);
        $library->deleteBook($book);
        $this->assertNotContains($book,$library->books);
    }
    /**
     * @dataProvider providerSearch
     */
    public function testSearchBooks($keyword)
    {
       $testLibrary = [
            ['title' => "A Young Doctor's Notebook", 'author' => "Mikhail Bulgakov", 'genere' =>GenereEnum::Conte, 'isbn' =>"978-966-03-6215-4",'numPages' => 384],
            ['title' => "Ward No. 6", 'author' => "Anton Chekhov", 'genere' =>GenereEnum::Conte, 'isbn' =>"978-5-517-03403-8",'numPages' => 156],
            ['title' => "The Star Diaries",'author' => "Stanislaw Herman Lem", 'genere' =>GenereEnum::Ciencia_ficcio,'isbn' => "978-5-17-147314-3",'numPages' => 390]
        ];
        $library = new Library();
        array_map(function ($item) use ($library) {
            $book = new Book($item['title'],$item['author'], $item['genere'],  $item['isbn'], $item['numPages']);
             $library->addBook($book);
        },$testLibrary);
        $searchRes = $library->searchBooks($keyword);
        array_map(function ($res)use ($library) {
            $this->assertContains($res, $library->books);
        }, $searchRes);
    }

    public static function provider() :array
    {
        return array(
            ["Title", "Test Autor", GenereEnum::Conte, "123", 300],
            ["Title", "Test Autor", GenereEnum::Conte, "123", 501],
        );
    }
    public static function providerSearch() :array
    {
        return array(
            [ "Bulgakov" ],
            [ "Ward" ],
            [ "Ciencia_ficcio" ],
        );
    }
}
