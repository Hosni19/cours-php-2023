<?php

$islandX = 25;
$islandY = 33;
$planes = ['P:30,1C:VGJ', 'P:19,97C:FVV', 'P:4,91C:HZV', 'P:86,89C:APL', 'P:89,76C:GMN', 'P:85,71C:MRP', 'P:94,10C:TRU', 'P:85,33C:ZWL', 'P:96,18C:BHI', 'P:46,7C:YTK'];
//initialiser un tableau vide 

$distanceDesAvions = [];


foreach ($planes as $planesinformations) {
    $info = parser($planesinformations);

    $distancebetween = pythagore($info['x'], $islandX, $info['y'], $islandY);
    $distanceDesAvions[$info['code']] = $distancebetween ;
    
}


asort($distanceDesAvions);

$distanceDesAvions =array_slice($distanceDesAvions,0,3);
echo '<pre>';
print_r($distanceDesAvions);
echo '</pre>';

$distanceDesAvions = array_keys($distanceDesAvions);

echo '<pre>';
print_r($distanceDesAvions);
echo '</pre>';
$code = implode('' ,$distanceDesAvions);

echo $code ;

//fonction pythagore

function pythagore(int $xa, int $xb, int $ya, int $yb): float
{
    //pow(,2)
    //sqrt()


    $distancex = $xa - $xb;
    $distancey = $ya - $yb;
    $distance = pow($distancex, 2) + pow($distancey, 2);

    $square = sqrt($distance);


    return $square;
}
echo pythagore(0, 3, 0, 4);

// 2. parsing *


function parser(string $informations): array
{


    $format = 'P:%d,%dC:%s';
    $data = sscanf($informations, $format);
    return [
        'x' => $data[0],

        'y' => $data[1],

        'code' =>  $data[2]
    ];
}
