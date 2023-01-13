<?php

//1 creer un tableau vide. 
//remplisser ce tableau avec des valeurs de 1 a 1000 ;

$tableau = [];
for ($i = 1; $i <= 1000; $i++) {
    $tableau[$i] = $i;
}
print_r($tableau);


'<hr>';
'<hr>';
//a 
echo '<br>';
echo '<hr>';

foreach ($tableau as $key => $nombre) {
    if ($nombre % 3 == 0) {
        echo '<br> Multiple de 3  :' . $nombre;
    }
}
echo '<br>';
echo '<hr>';
// b 

$count = 0;
foreach ($tableau as $key => $nombre) {
    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        echo '<br> Multiple de 3 et 5 :' . $nombre;
        $count++;
    }
}
echo '<br>';
echo 'Le nombre des multiples  est : ' . $count;
// 2

echo '<br>';
echo '<hr>';
$tableauNomsMasculin = ['Hosni', 'Paul', 'simon', 'Nicolas', 'Carl'];
$tableauNomsFeminin = ['Lise', 'Barbara', 'klervi', 'Clara', 'iness'];
$tableauAliment = ['du Pain', 'une Pomme', 'du Fromage', 'un Gateau', ' des Fraises'];
$tableauVilles = ['Rennes', 'Paris', 'toulouse', 'toulon', 'strasbourg'];



foreach ($tableauNomsMasculin as $key => $prenomM) {
    foreach ($tableauNomsFeminin as $key => $prenomF) {
        foreach ($tableauAliment as $key => $aliment) {
            foreach ($tableauVilles as $key => $villes) {

                echo '<p>' . $prenomM . ' et ' . $prenomF . ' mangent '  . $aliment . ' a ' . $villes . '</p>';
            }
        }
    }
}



// 3 


$array = [];

for ($i = 0; $i <= 10; $i++) {
    $array[$i] = rand(1, 100);
}
print_r($array);

$max = $array[0];
$min = $array[0];

echo '<hr>';

//max
foreach ($array as $key => $value) {
    if ($value > $max) {
        $max = $value;
    }
}

//min
foreach ($array as $key => $value) {
    if ($value < $min) {
        $min = $value;
    }
}
echo '<br>';
echo 'max : ' .$max;
echo '<br>';
echo 'min : ' .$min;
echo '<br>';
echo 'max : ' .max($array);

//4 
