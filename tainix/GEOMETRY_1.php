<?php

define('SQUARE', 'square');

$shapes = ['square_9', 'hexagon_5', 'triangle_7', 'hexagon_1', 'hexagon_7', 'hexagon_6', 'hexagon_9'];


//programme à ecrire 



$perimetreTotal = 0;

foreach ($shapes as $shape) {

    $informations = explode('_', $shape);
    
    $shapename = $informations[0];
    
    $lengthside = (int) $informations[1];
    
    $shapepermiter = perimetre($shapename, $lengthside);
    
    $perimetreTotal += $shapepermiter;
}



function perimetre(string $shapename, int $lengthside): int
{


    switch ($shapename) {
        case SQUARE:
            $resultat = $lengthside * 4;
         
           break;
        case 'triangle':
            $resultat = $lengthside * 3;
            break;
        case 'hexagon':
            $resultat = $lengthside * 6;
            break;
        default:
            die('Erreur ,forme inconnue');
            break;
    }
    return $resultat;
} 

// deuxieme methode avec tableau 


function perimetre2(string $shapename, int $lengthside): int
{


    $nbsides=[
'triangle' => 3 ,
'square' => 4 ,
'hexagon' => 6 ,

    ];
    if(!array_key_exists($shapename, $nbsides)){
        die('erreur');
    }
    return $nbsides[$shapename] * $lengthside;
}

echo 'resultat ' . $perimetreTotal;