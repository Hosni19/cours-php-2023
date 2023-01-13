<?php
//integre içi tout le contenu de ce fichier ;
require('heros_fonctions.php') ;

$force = rand(10,20);
$agilite = rand(10,20);
$defense = rand(10,20);
$magie = rand(1,5);

$pointDeVie = 100 ;

$ennemis = [
    ['nom' => 'Ork' , 'puissance' =>rand(30,100)],
    ['nom' => 'Ork' , 'puissance' =>rand(30,100)],
    ['nom' => 'Ork' , 'puissance' =>rand(30,100)],
    ['nom' => 'Ork' , 'puissance' =>rand(30,100)],

] ; 




//1 Creer une fonction pour calculer la puissance du héro selon la formule 
// puissance = force *2 + agilité +(defense/2) (arrondi a l'entier )

echo puissance($force,$agilite,$defense);

echo Comparer($ennemis ,$agilite ,  $pointDeVie ,  $force, $defense) ;
echo creerUnEnnemi( $niveau , $ennemis);

//affronter chaque enemi en comparant la puissance du hero avec celle de l'ennemi
// celui qui a le plus puissance gagne


//si je gagne , je gangne 1 pt de force 
// si je perds je perds 1 point d'agilité et 10 points de vie 

 //2 Creer une fonction qui genere un enemi aleatoirement, c'est a dire qui retourne un tableau avec un nom et une puissance .cette fonction 
 //prendra en parametre un niveau .la puissance de l'ennemi sera alors comprise entre 10*niveau et 20 * niveau

 //chaque ennemi s'appelera "ork" suivi de 6 caractere majuscules aleatoires 

//ecrire le déroulé de combats .