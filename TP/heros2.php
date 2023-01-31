<?php
//integre içi tout le contenu de ce fichier ;
require('heros_fonctions.php');

$force = rand(10, 20);
$agilite = rand(10, 20);
$defense = rand(10, 20);
$magie = rand(1, 5);

$pointDeVie = 100;

$ennemis = [
    ['nom' => 'Ork', 'puissance' => rand(30, 100)],
    ['nom' => 'Ork', 'puissance' => rand(30, 100)],
    ['nom' => 'Ork', 'puissance' => rand(30, 100)],
    ['nom' => 'Ork', 'puissance' => rand(30, 100)],

];




//1 Creer une fonction pour calculer la puissance du héro selon la formule 
// puissance = force *2 + agilité +(defense/2) (arrondi a l'entier )

echo puissance($force, $agilite, $defense);

echo Comparer($ennemis, $agilite,  $pointDeVie,  $force, $defense);




//affronter chaque enemi en comparant la puissance du hero avec celle de l'ennemi
// celui qui a le plus puissance gagne


//si je gagne , je gangne 1 pt de force 
// si je perds je perds 1 point d'agilité et 10 points de vie 

//2 Creer une fonction qui genere un enemi aleatoirement, c'est a dire qui retourne un tableau avec un nom et une puissance .cette fonction 
//prendra en parametre un niveau .la puissance de l'ennemi sera alors comprise entre 10*niveau et 20 * niveau

//chaque ennemi s'appelera "ork" suivi de 6 caractere majuscules aleatoires 

//ecrire le déroulé de combats .



//33 . Faire un "while" pour affronter les enemis jusqu'a la mort ! 
// combien d'ennemi est il possible d'affronter .
// tous les 20 ennemis , augmenter le niveau des enemis crées (on commence à 1)
// pas de nouvelle fonction a creer 

//on va construire une securite pour pouvoir coder le while sas risque 

//bloquer 

$bloqueur = 0;

// je reprend la logique de mon programme
$compteurEnnemisCombattus = 0;
$niveauEnnemi = 1;

while ($pointDeVie > 0) {

    
    //Creer un nouvel ennemi
    $ennemi = creerUnEnnemi($niveauEnnemi);
    print_r($ennemi);

    $maPuissance = puissance($force, $agilite, $defense);

        if ($maPuissance > $ennemi['puissance']) {
            //je gagne
            echo '<br> j\'ai battu l\'ork ' . '<br>' .'et ma puissance est : ' . $maPuissance  . '<br>' .'Puissance Enemi : ' . $ennemi['puissance'] . ' <br>';
        } else {
            $agilite--;
            $pointDeVie -= 10;
            echo "<br>j'ai perdu <br>";
        }

        
    $compteurEnnemisCombattus++ ;
if($compteurEnnemisCombattus % 5 == 0){
    $niveauEnnemi++ ;
}
    

    //bloqueur 
    $bloqueur++;
    if ($bloqueur > 1000) {
        break; // au bout de 1000 itérations par sécurité , je casse ma boucle while 
        echo 'j\'ai combattu plus de 1000 ennemis  ';
    }
    //-------------
}


//variante pour le while 
//while (True)
//Attention il n'ya plus de condition d'arret , donc le bloqueur devient obligatoire en phase de dev 

$bloqueur = 0 ;
while(true){
//condition d'arret 
if ($pointDeVie <= 0){
    break ;
}



    //bloqueur par sécurité

$bloqueur++ ; 
if ($bloqueur >1000)
break;
}
