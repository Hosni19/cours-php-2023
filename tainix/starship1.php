<?php
// Si le vaisseau a une résistance inférieure à 100, alors la puissance doit être égale à la résistance divisée par 10, 
//arrondie à l’entier supérieur.

//Si le vaisseau a une résistance inférieure à 1.000, alors la puissance doit être égale à 3 fois la résistance divisée par 100, 
//arrondie à l’entier supérieur. Une puissance fixe de 25 s’ajoute également.

//Si le vaisseau a une résistance inférieure à 10.000, alors la puissance doit être égale à 5 fois la résistance divisée par 1.000, 
//arrondie à l’entier supérieur. Une puissance fixe de 80 s’ajoute également.


$ships = [81, 280, 63, 27, 31, 4434, 21, 7840, 92, 2743, 318, 7056];




$puissanceTotale = 0;

foreach ($ships as $ship) {

    $puissanceTotale += puissance($ship);
}
echo '<p> La puissance totale est :</p>' .$puissanceTotale;

function puissance(int $resistance): int
{

    if ($resistance < 100) {

        return ceil($resistance / 10);
    }
    if ($resistance < 1000) {
        return ceil(3 * ($resistance / 100)) + 25;
    }
    if ($resistance < 10000) {
        return  ceil(5 * ($resistance / 1000)) + 80;
    }
}
