<?php 

$time = 295;
$actions = 'BBBBBBBBBBBBBBBIIIIIIIIIIIIIIMMMMMMMMMMMMMEEEEE';



$escapre = 'ESCAPE' ;
$prison = 'PRISON';


$references = array(
    "Break" => 9,
    "IT" => 6,
    "Money" => 2,
    "Prepare" => 8
);

$b=substr_count($actions,'B') ;
$i=substr_count($actions,'I') ;
$m=substr_count($actions,'M') ;
$e=substr_count($actions,'E') ;


$total_time = $references["Break"] *$b + $references["IT"]* $i  + $references["Money"] *$m + $references["Prepare"] *$e;

$timecheck = $time - $total_time ;

if($timecheck <0){
    echo $prison.$timecheck;
}else {
    echo $escapre.$timecheck ;
}

