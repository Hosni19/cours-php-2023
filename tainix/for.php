<?php
// FOR
$stop = 51;
$somme = 0;
for ($i = 1; $i < $stop; $i++) {
    $somme += $i;
}

echo $somme;

// FOREACH 

$values = [7, 8, 5, 2, 2, 3, 6, 4, 9, 7, 2, 2, 9, 8, 10, 3, 4, 5, 7, 8, 10, 5];
$somme2 = 0;
foreach ($values as $value) {
    if ($value >= 5) {
        $somme2 += $value;
    }
}

// foreach using "continue"

//$somme2 = 0 ;
//foreach ($values as $value) {
//  continue ;
//}


echo '<br>';
echo $somme2;
echo '<br>';



//fonction 

$values = [28, 70, 14, 57, 65, 73, 14, 52, 37, 24, 17, 59, 62, 84, 53, 48, 36, 49, 41, 98, 40, 74, 20, 74, 74, 62, 26, 47, 17, 42, 79];

$value2 = [];
foreach ($values as $value) {
    if ($value % 3 == 0) {
        $value2[] = $value;
        //array_push($value2,$value);
    }
}


echo implode('-', $value2);


function multiples(array $values , int $multiple): array
{
    $value2 = [];
    foreach ($values as $value) {
        if ($value % 3 == 0) {
            $value2[] = $value;
            //array_push($value2,$value);
        }
}
return $value2 ;
}
echo '<br>';
echo implode('-' ,multiples($values,7));
