<?php

// une constante est une valeur "importante" dans notre programme qui doit etre identifiée comme telle et qui n'a aucune raison d'evaluer 

//exemple Tva :20%

define('TAUX_TVA',20);

// on écrit les constantes en FULL MAJUSQCULES avec des undersocres en guise d'espaces.

$prixHT = 100 ; 
$tva = $prixHT*TAUX_TVA / 100 ;
$ttc = $prixHT + $tva;

echo $tva ;

define('PI',3.14);
define('GENERIC_MESSAGE_ERROR' , 'an error occured on line'); //contient une chaine de caractere
$number= 12 ;


echo GENERIC_MESSAGE_ERROR .$number ;