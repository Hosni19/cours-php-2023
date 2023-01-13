<?php
// On va raconter une histoire...
$histoire = ''; // On fait un seul echo à la fin (déjà écrit)
$nomDuHeros = 'Hosni'; // A choisir
$distanceParcourue = 0;
// 1. Racontez comment s'appelle le héros, en complétant la variable $histoire, utilisez un peu d'html : hX, p, b, etc.
// On va définir quelques valeurs aléatoirement
$force = rand(1, 10);
$agilite = rand(1, 10);
$piecesDOr = rand(1, 100);
$NbJourDeLaSemaine = rand(1, 7);
$joursDeLaSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
//
print_r($joursDeLaSemaine);

echo '<body style="background-color:#66CDAA	">';

$histoire = '<h1 style="font-family: Helvetica, Arial, sans-serif; text-align: center;"> - Debut de l\'aventure -</h1>';

$histoire .= '<h4>Le Héro s\'appele <i style ="color : Green ;">' . $nomDuHeros . '</i></h4>';
echo '<br>';
echo '<b style="color:blue; font-family: Helvetica, Arial, sans-serif;"> Force :  </b>'  . $force;
echo '<br>';
echo '<b  style="color:Gold; font-family: Helvetica, Arial, sans-serif;"> Piece d\'or :  </b>' . $piecesDOr;
// Exercices autour du if
// (Complétez l'histoire à chaque fois qu'il se passe quelque chose)
//
// 2.
// Si la force est supérieure à 8, alors je gagne 1 point d'agilité.
echo '<br>';
if ($force > 8) {
    $agilite++;
    $histoire .= 'je gagne 1pt d\'agilité <br>';
}

echo ' <b style="color:red; font-family: Helvetica, Arial, sans-serif;"> Agilité :  </b> ' . $agilite;

// 3.// Si ma force est inférieure à 6, je passe par le chemin de gauche, qui fait 500m, sinon je passe par le chemin de droite, qui fait 850m.
// Dans le chemin de droite, je trouve 4 pièces d'or
echo '<br>';
if ($force < 6) {
    $distanceParcourue += 500;
    $histoire .= 'je passe par le chemin de gauche';
} else {
    $distanceParcourue .= 850;
    $piecesDOr += 4;
    $histoire .= '<br> je passe par le chemin de droite et je trouve 4 piece d\'or';
}




// 4.
// Je parcours 150m
// Si j'ai plus de 80 pièces d'or, j'en dépense 30 pour m'offrir 2 points d'agilité
// Si j'en ai moins de 80 et + de 60, j' en dépense 15 pour m'offrir 1 point d'agilité
// Si j'en ai moins de 60, j'en dépense 5 pour m'offrir 1 point de force
$histoire .= '<p></p> j\'ai ' . $piecesDOr . ' piece </p> ';

$distanceParcourue += 150;
if ($piecesDOr > 80) {
    $piecesDOr -= 30;
    $agilite += 2;

    $histoire .= 'Cas PO - 30 , Ag +2';
} else if ($piecesDOr < 80 && $piecesDOr > 60) {
    $piecesDOr -= 15;
    $agilite++;
    $histoire .= 'Cas PO - 15 , Ag +1';
} else {
    $piecesDOr -= 5;
    $force += 1;
}
echo '<br>';
$histoire .= '   j\'ai parcouru  ' . $distanceParcourue;
echo '<br>';

// 5. 
// Je parcours 300m
// Si ma force et mon agilité sont supérieures à 6, je gagne 10 pièce d'or
// Si ma force ou mon agilité est  inférieure à 3, je perds 10 pièces d'or
// (stockez les conditions dans des variables)


$distanceParcourue = 300;

$conditionGagner = ($agilite > 6 && $force > 6);
$conditionPerdre = ($agilite < 3 || $force < 3);

if ($conditionGagner) {



    $piecesDOr += 10;
    $histoire .= '      : WINNER';
} else if ($conditionPerdre) {
    $piecesDOr -= 10;
    $histoire .= '     :  LOSER';
} else {
    $histoire .= '     :  Neither';
}



// 6.
// Indiquez dans l'histoire quel jour nous sommes

$histoire .= '<br> <b> aujourd\'hui on est le  ' . $joursDeLaSemaine[$NbJourDeLaSemaine - 1] . ' le jour numéro ' . $NbJourDeLaSemaine . ' de la semaine';


// 7.
// Si je suis en début de semaine (lundi, mardi, mercredi) je me rends à ma destination par un chemin de 740m, 
//et je gagne 1 point de force
// Si je suis en fin de semaine (les autres jours), je me rends à ma destination par un chemin de 1345m, 
//et je perds 1 point d'agilité

switch ($joursDeLaSemaine[$NbJourDeLaSemaine - 1]) {
    case 'Lundi':
    case 'Mardi':
    case 'Mercredi':
        $force++;
        $distanceParcourue += 740;
        $histoire .= 'Debut de semaine ' . $distanceParcourue;
        break;

    case 'Jeudi':
    case 'Vendredi':
    case 'Samedi':
    case 'Dimanche':
        $agilite--;
        $distanceParcourue += 1345;
        $histoire .= ' Fin de semaine ' . $distanceParcourue;

        break;
}


// 8. A l'aide d'un "if elseif elseif..." déterminer la tranche de 20, dans laquelle se trouve le nombre de pièces d'or (0-20; 21-40; 41-60; jusque 100)
// Gérez le cas où il y aurait plus de 100 pièces également
switch(true){
    case $piecesDOr <= 20 : 
        $histoire .= '<br>TRANCHE (0-20)';
       break ;
       case $piecesDOr <= 40 : 
        $histoire .= "<br>TRANCHE (20-40)";
       break ;
    
    case $piecesDOr <= 60 : 
        $histoire .= "<br>TRANCHE (40-60)";
       break ;
    
    case $piecesDOr <= 80 : 
        $histoire .= "<br>TRANCHE (60-80)";
       break ;

       case $piecesDOr <= 100 : 
        $histoire .= "<br>TRANCHE (80-100)";
       break ;
       default : 
       $histoire .= '<br>je uis dans le cas 100+';
       echo 'echec';
    
    }




$actualDate = date('Y-m-d H:i:s');
echo '<i>' . $actualDate . '</i>';
echo '<html style="text-align: center;"> ' . $histoire . '</html>';
