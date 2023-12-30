<?php
namespace App; 
//Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
/* Un títol
Un autor/autora
Un ISBN
Un gènere, que pot ser: Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
núm. de pàgines.
*/

enum GenereEnum {
    case Aventures;
    case Ciencia_ficcio;
    case Conte;
    case Novella;
    case Policial;
    case Paranormal;
    case Distopia;
    case Fantastic;
}