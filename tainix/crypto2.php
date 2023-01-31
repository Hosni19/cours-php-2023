<?php

$depart = 4259;
$chemin = ['++++', '++++', '+++', '+++', '+++', '+++', '-', '-'];

foreach ($chemin as $valeur) {
    $depart +=convert($valeur);
    
    }
    
    echo $depart ;

function convert(string $code): int
{
   $nbSigne = strlen($code);
   $signe =  $code[0]; 
   $value = pow(10,$nbSigne - 1);
    

if ($signe == '+'){
    return $value ;
} elseif ($signe == '-'){
    return -$value ;
}
    return $value ;
}



