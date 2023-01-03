<?php 
// tableau permet de manipuler plusieurs valeurs 

//premier type de tableau :"auto indexé" 

$tableau = [1,2,3]; // valeurs separés par des virgules 

echo'<pre/>';
// auto indexé car on n'a pas defini manuellement les indexe.en commençant par 0
//affichage tableau
//echo ne fonctionne pas 
print_r ($tableau) ;


$tableau = [1, 2, 3 ,5 , 7 , 8 , 48 ];
echo'<pre/>';
//on ne melange pas les types de valeurs dans un tableau indexé

// dans un tableau du texte , des nombres , et je peux mettre des autres tableaux .

$tableauPlusieursDimensions = [
 [1 ,2 ,3],
 [1 ,6 ,8],
 [1 ,7 ,5]

] ;

print_r ($tableauPlusieursDimensions) ;

//acceder a une valeur precise du tableau 
// on utilise les index

echo $tableau [5];
echo '<br/>';
echo $tableauPlusieursDimensions[1][1];


//--------------------------------------------

//deuxieme type de tableau : index manuels 

$professeur = [
    'prenom' => 'Arthur',
    'age' => 35,
    'profession' => 'Directeur agence',
    'langageprefere' =>['PHP','JAVASCRIPT']

] ;
echo'<pre>';
print_r ($professeur) ;


echo'<br>';
$phrase = "je m'apelle" .$professeur['prenom'] . "et j'ai" .$professeur['age'] .' ans' ."et mes langages preferées sont " .$professeur['langageprefere'] ;
echo $phrase ;