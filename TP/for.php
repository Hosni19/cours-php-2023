<?php

// 1. ecrivez 100 : " je ne copierais pas le code php de mon voisin "

for ($i = 0; $i <= 100; $i++) {
    echo '<p>je ne copierais pas le code php de mon voisin</p>';
}
echo '<hr>';
// 2.Ecrivez 150 fois :'Je ne copierais pas le code PHP de mon voisin en affichant chaque numéro de ligne "

for ($i = 1; $i <= 100; $i++) {
    echo $i .')'. ' je ne copierais pas le code php de mon voisin en affichant chaque numéro de ligne <br>';
}
echo '<hr>';
//3 trouvez la somme de 100 nombre 
$somme = 0 ;
for ($i = 1; $i <= 100; $i++) {
    $somme += $i ;
}
echo $somme ;

echo '<br> ';
echo '<hr>';
// 4 somme 100 premiers nombres pair jusqu'a 200

$somme2 = 0 ; 

for ($i=0 ; $i<=200 ;$i++){
    if ($i % 2 == 0) {
$somme2 += $i ;
    }

}
echo $somme2 ;

// 5
echo '<br>';
echo'<hr>' ;
 // en 1 boucle 

 $sommeDesCarres = 0 ;
 $somme = 0 ;

 for($i=1 ; $i<=100 ; $i++){
    $sommeDesCarres += $i *$i ;
    $somme += $i ;
 }

 //difference 
 $difference = $sommeDesCarres - ($somme * $somme) ;

 echo $difference ;

 echo'<hr>' ; 

 //-----------------------------------------------------------------------//
 // la boucle foreach 
 //boucler les element d'un tableau 

 $tableau = [1 , 2 , 3 ,5 , 4];

 foreach($tableau as $nombre){
    echo $nombre ;
 }
// for each avec clé 
echo '<br>' ;
echo '<hr>' ;

 // on ecrira 
 foreach ($tableau as $key => $nombre) {
     echo ' la valeur ' .$nombre .' est indéxée à la valeur '.$key ;  
     echo '<br>' ;
}