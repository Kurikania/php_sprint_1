<?php 
require_once __DIR__."/Resource.php";
require_once __DIR__."/enums/ResourceType.php";
require_once __DIR__."/enums/Theme.php";
/*
- Exercici 1
Crea una classe que representi un recurs didàctic d’aquesta especialitat. 
Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) 
un URL i un tipus de recurs (Fitxer, Article web, Vídeo). 
Implementa tant el tema com el tipus de recurs amb enums.
*/

$resourse = new Resource('Enums', Theme::PHP,ResourceType::Vídeo, "google.com");

echo $resourse->getResourceInfo();
