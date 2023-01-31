<?php


//Notre aventurier dispose d’un sac à dos qui a une certaine contenance. Son sac est vide au départ.

//Il a ensuite à sa disposition, un ensembles d’objets, dont les valeurs représentent la place qu’ils occupent dans le sac.

//L’aventurier décide de remplir son sac de la façon suivante :

//Il va d’abord essayer de mettre les 10 objets les + gros, de manière décroissante.
//Puis il va essayer de mettre les 10 objets les + petits, de manière croissante.
//Attention à ne pas dépasser la place disponible dans le sac ! Si tu as un objet qui « occupe » 75 et qu’il ne reste plus que 50 dans le sac, alors l’objet ne peut pas être déposé dans le sac.

//Tu dois retourner la place occupée dans le sac à dos par cette méthode de remplissage.



$sac = 939;
$objets = [11, 36, 10, 18, 89, 51, 73, 32, 44, 31, 62, 70, 85, 82, 75, 42, 81, 34, 27, 77, 17, 22, 84, 35, 21, 69];
$remplissageDuSac = 0 ;

//regarder du coté des methodes sort , rsort , etc . 
//elles fonctionnent par "reference"
//utiliser un break !
$somme1 = 0;
rsort($objets) ;
$les10Grandes = array_slice($objets,0,10);

foreach($les10Grandes as $objet){
    if($remplissageDuSac+$objet<=$sac)
        $somme1 += $objet ;
        $remplissageDuSac = $somme1 ;
    
   
}

ksort($objets) ;
$les10Moins = array_slice($objets,0,10);

foreach($les10Moins as $objet){
    if($remplissageDuSac+$objet<=$sac)
        $somme1 += $objet ;
        $remplissageDuSac = $somme1 ;
    
   
}


$espaceRestant = $sac-$remplissageDuSac;
echo $remplissageDuSac ;
echo '<br> il nous reste ' .$espaceRestant .' comme espace disponible';
