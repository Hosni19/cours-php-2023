<?php

$exemplaires = [50000, 2000, 50000, 2000, 50000, 2000, 2000, 2000, 50000, 2000, 2000, 50000, 50000, 2000, 2000, 50000, 
50000, 2000, 500, 2000, 50000, 50000, 50000, 50000, 50000, 100, 50000, 50000, 2000, 2000, 500, 50, 2000, 2000, 2000, 50000,
 2000, 2000, 50000, 50000, 50000];
$cotes = [1.2, 1.2, 0.6, 0.8, 0.8, 0.8, 0.8, 0.6, 0.6, 0.8, 0.6, 0.8, 0.6, 1, 1, 0.8, 1.2, 0.6, 15, 1, 0.8, 1, 0.6, 0.6, 0.6, 
1.2, 0.6, 0.8, 0.8, 0.8, 1.2, 15, 0.8, 1, 0.6, 1, 0.8, 0.8, 0.6, 1, 0.6];




foreach ($exemplaires as $key => $exemplaire) {
    $cote = $cotes[$key] ;
    
}

//calcul prix d'achat 

$achat = 15;
if($exemplaire<2000){
    $achat = 30 ;
}




//calcul prix de revente 
$revente = $achat * $cote ;


$figurines = [
    'exemplaires' => $exemplaire ,
    'achat' => $achat,
    'cote' => $cote , 
    'revente' => $revente 
    ] ;

    $tableauDesTableaux[] = $figurines ;

    echo '<pre>';
    
    print_r($tableauDesTableaux);
    '</pre>';

    //en utilisant arrau column et array sum 
    $total = array_sum(array_column($tableauDesTableaux, 'revente')) - 
    array_sum(array_column($tableauDesTableaux,'achat')) ;
    echo $total ;   
   
