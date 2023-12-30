<?php
namespace App;
use App\GenereEnum;

/*Un títol
Un autor/autora
Un ISBN
Un gènere, que pot ser: Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
núm. de pàgines. */
class Book{
    protected string $title;
    protected string $autor;
    protected GenereEnum $genere;
    protected string $isbn;
    protected int $numPaginas;

    public function __construct(string $title, string $autor, GenereEnum $genere, string $isbn, int $numPaginas) {
        $this->title = $title;
        $this->autor = $autor;
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

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function getGenere(): \App\GenereEnum
    {
        return $this->genere;
    }
}