<?php 

// le premier type de variable : 
// les chaines de caracteres 

// daclaration d'une varaibale , utilisation du symbole $ 

//le nomage est tres important 
// pas de caractere speciaux 
// on utilisera du camelCase 
//on ne nommera : $var , $truc , $carac .... 
//quelques exceptions :petits exercices d'algos ; $i,$key dans certains cas .
$sauteDeLigne = '<br />';

$maPremiereChaineDeCaracteres = 'Bonjour' .$sauteDeLigne; 
echo $maPremiereChaineDeCaracteres;



$maPremiereChaineDeCaracteres ='Au revoir' ; 
echo $maPremiereChaineDeCaracteres;

//*notes * 
// l'operateur de la concatenation est le point . 
// la concaténation sert à "coller" les chaines de caracteres entre elles . 


$prenom = 'Hosni' ; 
$piece = 'salon' ;

$phrase = $prenom.' est dans le ' .$piece ;
echo $sauteDeLigne;
echo $phrase;
$piece="cuisine";

$autrephrase = ' ' ; //chaine de caractere vide 
$autrephrase = $autrephrase. $prenom ; 
$autrephrase = $autrephrase.' est dans la ' ; 
$autrephrase = $autrephrase. $piece ;

echo $sauteDeLigne;
echo $autrephrase ;

//operateurs de concatenation "condensé" 


$autrephrase ='' ; // j'initialise un seul egal = 
$autrephrase.= $prenom ; // je remplis .=
$autrephrase.= ' is in the ' ;
$autrephrase.=$piece ;

echo $sauteDeLigne;
echo $autrephrase;