<?php
use App\GenereEnum;
require_once __DIR__."/app/Library.php";
require_once __DIR__."/app/GenereEnum.php";
require_once __DIR__."/app/Book.php";
/* Exercici 1
Necessitem crear un petit software per a tractament d’informació en una biblioteca. 
Per això necessitem representar la informació d’un llibre, que té:

Un títol
Un autor/autora
Un ISBN
Un gènere, que pot ser: Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
núm. de pàgines.

Necessitem emmagatzemar el conjunt de llibres i tenir mètodes que:

Afegeixin, esborrin i modifiquin un llibre de la llibreria.
Permetin consultar llibres per títol, gènere, ISBN o autor.
Retornar llibres grans (més de 500 pàgines).
Desenvolupa mitjançant TDD aquest programa per tal de garantir que compleix totes les funcionalitats demanades per l’enunciat. 
*/

$library = new \App\Library();

$books =[
    ['title' => "A Young Doctor's Notebook", 'author' => "Mikhail Bulgakov", 'genere' =>GenereEnum::Conte, 'isbn' =>"978-966-03-6215-4",'numPages' => 384],
    ['title' => "Ward No. 6", 'author' => "Anton Chekhov", 'genere' =>GenereEnum::Conte, 'isbn' =>"978-5-517-03403-8",'numPages' => 156],
    ['title' => "The Star Diaries",'author' => "Stanislaw Herman Lem", 'genere' =>GenereEnum::Ciencia_ficcio,'isbn' => "978-5-17-147314-3",'numPages' => 390]
];

array_map(function ($item) use ($library) {
    $book = new \App\Book($item['title'],$item['author'], $item['genere'],  $item['isbn'], $item['numPages']);
    $library->addBook($book);
},$books);

print_r($library->books);
