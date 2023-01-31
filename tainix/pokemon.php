<?php

$pokemons = ['Glace:52', 'Feu:27', 'Poison:57', 'Insecte:59', 'Herbe:48', 'Feu:11', 'Insecte:84', 'Eau:35', 'Herbe:11', 'Poison:53', 'Eau:45', 'Eau:50', 'Air:100', 'Feu:28', 'Eau:48', 'Psychique:72', 'Herbe:38'];

define('TYPE_EAU', 'Eau');
define('TYPE_FEU', 'Feu');
define('TYPE_HERBE', 'Herbe');
define('TYPE_RARE', 'Rare');
define('TYPE_AIR', 'Air');
define('TYPE_POISON', 'Poison');
define('TYPE_GLACE', 'Glace');
define('TYPE_PSYCHIQUE', 'Psychique');
define('TYPE_INSECTE', 'Insecte');


$sommeDesPlusForts = lePokemonLePlusFort($pokemons,TYPE_EAU) + lePokemonLePlusFort($pokemons,TYPE_FEU) 
+ lePokemonLePlusFort($pokemons,TYPE_HERBE) +lePokemonLePlusFort($pokemons,TYPE_RARE)  ;

echo 'LA SOMME DES PLUS FORTS : ' .$sommeDesPlusForts ;


function filtrerLesPokemons($pokemons, string $type): array
{
    //definir quel types on garde 
    if ($type === TYPE_RARE) {
        $authorizedtype = [TYPE_AIR, TYPE_POISON, TYPE_GLACE, TYPE_PSYCHIQUE, TYPE_INSECTE];
    } else {
        $authorizedtype = [$type];
    }

    $ListedPokemons = [];

    foreach ($pokemons as $pokemon) {
        list($pokemonType, $power) = explode(':', $pokemon);

        if (!in_array($pokemonType, $authorizedtype)) {
            continue;
        } else {
            $ListedPokemons[] = $power;
        }
    }
    return $ListedPokemons;
}

function lePokemonLePlusFort(array $pokemons, string $type)
{
    return  max(filtrerLesPokemons($pokemons, $type));
}

