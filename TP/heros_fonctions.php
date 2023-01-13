<?php

function puissance(int $force, int $agilite, int $defense): float
{

    $puissanceHero = $force * 2 + $agilite + $defense / 2;
    round($puissanceHero);

    return $puissanceHero;
}


function comparer(array $ennemis, int $agilite, int $pointDeVie, int $force, int $defense): void
{
    foreach ($ennemis as $ennemi) {
        $maPuissance = puissance($force, $agilite, $defense);

        if ($maPuissance > $ennemi['puissance']) {
            $force++;
            //je gagne
            echo '<br> j\'ai battu l\'ork ' . 'et ma puissance est : ' . $maPuissance . 'Puissance Enemi : ' . $ennemi['puissance'] . ' <br>';
        } else {
            $agilite--;
            $pointDeVie -= 10;
            echo "<br>j'ai perdu <br>";
        }
    }
}

//2

function creerUnEnnemi(int $niveau  ): array
//puissance
{
$puisance = rand(10 * $niveau , 20* $niveau);
}
//nom    
$array = str_shuffle($ennemis);
$nom = substr($array,0,3);


    return [
    'nom' =>'Ork' .$nom,  
    'puissance' => $puisance ]; 
    
    
}
