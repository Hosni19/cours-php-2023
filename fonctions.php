<?php
// LES FONCTIONS
//echo
//rand()
//min() , max()
//shuffle ()
//print_r 
//range()
//shuffle 
//array_rand 

//Fonction natives , Deja disponible dans php 
// est ce ça n'existe pas en php Deja ? 



$tableau = [1, 2, 3];

$nbelements = count($tableau);

echo $nbelements;

//

$carretrois = pow(3, 2);
echo '<br>';
echo $carretrois;


// fonction personnalisée 

function double(int $nombre): int
{
    return 2 * $nombre;
}

$essai = double(4);
echo '<br>';
echo $essai;


$essai2 = double(124);
echo '<br>';
echo $essai2;

//La recette d'une fonction :
// Les types respectif : 
// int => entier
// FLOAT => nombre decimal
// string => chaine de charactere
// bool => booléen
// array => tableau
// int => entier



function buildSentence(string $name, string $room): string
{
    $sentence ='';
    $sentence .= $name ;
    $sentence .= 'is in the ' ;
    $sentence .= $room ;

    return $sentence ;

}
echo '<p> '. buildSentence('Bryan' , 'Kitchen') .'</p>' ;