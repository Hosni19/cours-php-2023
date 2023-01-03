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


//-------------------------------------------------

//deuxieme type de variables : les nombres ENTIERS

$unNombre = 35 ;
$unAutreNombre = 11 ;

//php n'est tres bon pour gerer les grands nombres 




$nombreNegatif = -7 ;
echo $sauteDeLigne; 

$resultat = $unNombre + $unAutreNombre ;
echo $resultat ; 
echo $sauteDeLigne; 

$resultat = $unNombre + 7 ; 
echo $resultat ; 
echo $sauteDeLigne; 

$resultat = $unNombre % 2 ; 
echo $resultat ; 
echo $sauteDeLigne;

$resultat = $unNombre + $unAutreNombre +$unNombre + $unAutreNombre ; 
echo $resultat ; 
echo $sauteDeLigne;


// on peut faire des operations mathematiques aussi complexes que necessaires .

$patricipants = 20 ;
$tailleDeGroupe = 3 ;

$participantsSansGroupe = $patricipants % $tailleDeGroupe ;




echo 'Le nombre des participants sans groupe est : ' .$participantsSansGroupe ;
echo $sauteDeLigne;

$nombreEtudiant = 25 ;
$nombreEtudiantOptionDev=6 ;

$pourcentageEtudianntOptionDev = (6/25)*100 .'%' ;

echo $pourcentageEtudianntOptionDev ;


$somme = 0;
$somme = $somme + 2 ;
$somme = $somme +5 ;
$somme = $somme + 6 ;
$somme = $somme + 7 ;


//version condensé 

$somme = 0 ;
$somme += 2 ;
$somme += 5 ;
$somme += 6 ;
$somme += 7 ;

// += et -= sont souvent utilisés 
//les autres beaucoup moins

//operateurs d'incrementation et decrementation 

$compteur = 5 ;
$compteur++ ;

$autreCompteur = 22 ;
$autreCompteur-- ;


// ces 3 lignes font la meme chose 




//--------------------------------------------

//3eme type de variable : les nombres decimaux 

$nombreDecimal = 23.34;
// il faut utiliser le point et non la virgule 
//on peut utiliser tous les operateurs de calculs sur les nombres decimaux

$nombreDecimal++;
echo $nombreDecimal ;