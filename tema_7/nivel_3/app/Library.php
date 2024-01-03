<?php 
namespace App;
use App\Book;

/*Afegeixin, esborrin i modifiquin un llibre de la llibreria.
Permetin consultar llibres per títol, gènere, ISBN o autor.
Retornar llibres grans (més de 500 pàgines).
 */
class Library {

    public array $books = [];
    public function addBook(Book $book) : void {
        $this->books[] = $book;
    }
    public function deleteBook(Book $book): void {
        // find key of the element 
        $key = array_search( $book,  $this->books);
        unset($this->books[$key]);
    }

    public function editBook(Book $book, array $arrayBookData): Book {
        $key = array_search($book,  $this->books);
        $this->books[$key]->editBook($arrayBookData);
        return $book;
    }

    public function getLongBooks($limit = 500): array {
        $result = [];
        foreach ($this->books as $book) {
            if ($limit < $book->getNumPaginas()) {
                $result []= $book;
            }
        }
        return $result;
    }

    public function searchBooks(string $keyword): array {
        $result = [];
        /* @var $book Book */
        foreach ($this->books as $book) {
            if (str_contains($book->getTitle(), $keyword) ||
                str_contains($book->getAuthor(), $keyword) ||
                str_contains($book->getGenere()->name, $keyword)) {
                $result[] = $book;
            }
        }
        return $result;
    }
}