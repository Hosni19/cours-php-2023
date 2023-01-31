<?php
$plates = [
    'EJ-010-GQ', 'UG-308-VW', 'LK-693-KC', 'JB-524-ZC', 'TS-748-HF', 'XF-724-GQ', 'HL-397-FN',
    'SR-968-OE', 'JK-645-VO', 'NR-343-GN', 'CE-375-EU', 'PT-484-IU', 'XS-210-FE', 'SB-534-NA', 'XA-658-TJ', 'JZ-570-ZR', 'OF-136-LN', 'QG-569-MZ', 'NS-237-XI', 'ST-366-TS', 'DX-170-EF',
    'AG-546-YY', 'FX-969-XF'
];

$score = 0;
$nombreDeFois = 0;
foreach ($plates as $plate) {

    $score+=score($plate) ;
}

echo $score;


function score(string $plate) :int
{

    $nombreDeFois = 0;
    if (analyse($plate, 0)) {
        $nombreDeFois++;
    }

    if (analyse($plate, 1)) {
        $nombreDeFois++;
    }

    if (analyse($plate, 3)) {
        $nombreDeFois++;
    }
    return pow(10 , $nombreDeFois) ;
}


// La plaque ED-845-TY ne présente aucune symétrie et vaut donc 1 point
// La plaque ED-845-TE présente 1 symétrie (le E) et vaut donc 10 points
// La plaque ED-845-DY présente 1 symétrie (le D) et vaut donc 10 points
// La plaque ED-848-TY présente 1 symétrie (le 8) et vaut donc 10 points
// La plaque ED-845-DE présente 2 symétries (le E et le D) et vaut donc 100 points (2 autres possibilités de double symétrie)
// La plaque ED–848–DE présente 3 symétries (le E, le D et le 8) et vaut donc 1 000 points


function analyse(string $plate, int $position): bool
{

    return ($plate[$position] === $plate[8 - $position]);
}
