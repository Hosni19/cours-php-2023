<?php

$monAge = 14;
echo'<br>'  ;

echo'j\'ai '  .$monAge ;

define('AGE_LIMITE_PERMIS', 18);

$phrase = '';
echo'<br>'  ;
if ($monAge >= AGE_LIMITE_PERMIS) {
    echo '<p>je peux aller passer mon permis de conduire </p>';
} else {
    $tempsAttente = AGE_LIMITE_PERMIS - $monAge;
    $phrase .= 'j\'attend encore ' . $tempsAttente . 'anneé';
}

if ($tempsAttente !== 1) {
    $phrase .= 's';
}

$phrase .= '...</p>';
echo $phrase;

//versoin avec le ternaire 


if ($monAge >=  AGE_LIMITE_PERMIS) {
    echo '<p>je peux aller passer mon permis de conduire </p>';
} else {

    //ecrire combien d'anneés je dois attendre 
    $tempsAttente = AGE_LIMITE_PERMIS - $monAge;

    //"ternaire" if condensé 
    $mot = ($tempsAttente === 1) ? 'an' : 'années';
    $phrase = 'j\'attend encore ' . $tempsAttente . $mot;

    echo $phrase;
}
