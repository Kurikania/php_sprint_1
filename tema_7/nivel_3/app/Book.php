<?php
namespace App;
use App\GenereEnum;
use PharIo\Manifest\Author;

/*Un títol
Un autor/autora
Un ISBN
Un gènere, que pot ser: Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
núm. de pàgines. */
class Book{
    protected string $title;
    protected string $author;
    protected GenereEnum $genere;
    protected string $isbn;
    protected int $numPaginas;

    public function __construct(string $title, string $author, GenereEnum $genere, string $isbn, int $numPaginas) {
        $this->title = $title;
        $this->author = $author;
        $this->genere = $genere;
        $this->isbn = $isbn;
        $this->numPaginas = $numPaginas;
    }
    public function getNumPaginas() : int
    {
        return $this->numPaginas;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getGenere(): \App\GenereEnum
    {
        return $this->genere;
    }

    public function setNumPaginas(int $numPaginas) : void
    {
        $this->numPaginas = $numPaginas;
    }
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
    public function setAuthor(string $author): void
    {
         $this->author = $author;
    }

    public function setGenere(GenereEnum $genere): void
    {
         $this->genere = $genere;
    }

    public function editBook($arrayBookData) {
        foreach ($arrayBookData as $name=> $value) {
            if (property_exists($this, $name)) {
                $this->{'set'. ucfirst($name)}($value);
            } 
        }
    }
}