<?php
/**
 * Créer un compte sur tainix.fr
 */
/**
 * 

* Réaliser les challenges suivant
 * https://tainix.fr/engines/code/...
 *
 * Créer à chaque fois un fichier dédié,
 * nommé comme le code, par exemple GEOMETRY_1
 * 
 * Valider vos réponses par le formulaire
 */
/**
 * GEOMETRY_1
 * 
 * Regarder l'article sur le parsing
 * 
 * Créer 1 fonction perimetre qui a 2 paramètres 
 *    - la forme (chaine de caractères)
 *    - la longueur du côté (entier)
 * 
 * La fonction retourne un entier
 */
require('starters.php') ;

echo perimetre(0 , 0);

/**
 

 * CRYPTO_2
 * 
 * Créer une fonction qui "traduit" les signes en valeurs entières
 * Cf. exemples
 * 
 * On peut accéder à 1 caractère d'une chaine de chaine de caractères, comme on accède
 * à la valeur d'un tableau
 * Utiliser la fonction strlen
 */
/**
 * STARSHIP_1
 * 
 * Créer une fonction qui retourne la puissance nécessaire en fonction de la
 * résistance
 * 
 * On utilisera des "early return"
 */
/**
 * CARS_1
 * 
 * Créer une fonction qui analyse la plaque et une position, et renvoie true ou false
 * selon la symétrie
 * Par exemple analyse('ED-845-TE', 0) renvoie true, symétrie sur la position 0.
 * 
 * On peut accéder à 1 caractère d'une chaine de chaine de caractères, comme on accède
 * à la valeur d'un tableau
 */
/**
 * SAC_1
 *
 * Regarder du côté des méthodes sort, rsort, etc.
 * Attention, elles fonctionnent par "référence"
 * Utiliser un "break"
 */
/**
 * SURVIVAL_1
 * 
 * Créer 1 fonction qui calcule la distance en utilisant le théorème
 * de Pythagore
 * 
 * Il faudra ensuite ranger les informations correctement dans un tableau
 */


 // POKEMON_2 
 //1 équipe de Pokemons est constituée de cette façon :

//1 Pokemon de type Eau
//1 Pokemon de type Feu
//1 Pokemon de type Herbe
//1 Pokemon de type Rare (Air, Poison, Glace, Psychique ou Insecte)
//Dans le tableau pokemons, chaque entrée correspond à un pokemon :

//type:puissance

//Tu dois donc trouver la meilleure équipe de Pokemon en prenant le meilleur Pokemon à chaque fois pour constituer ton équipe. C’est-à-dire le pokemon qui a la puissance la + élevée.

//Tu dois retourner la somme des puissances des Pokemons retenus.

//Remarques : Il y a forcément une équipe possible à constituer. Si 2 Pokemons ont la même puissance, tu prends celui que tu veux, ça ne change rien.




//FIGURINES ---

//Pour cela, plusieurs règles :

//A l’achat, une figurine vaut 15€, sauf si elle est produite à moins de 2.000 exemplaires, dans ce cas là, elle vaut 30€.
//A la revente, la figurine vaudra sa côte * prix d’achat (produit).
//2 tableaux sont fournis dans ce challenge, le premier contient les nombres d’exemplaires des figurines lors de l’achat.
// Le second contient les côtes de ces figurines à la revente. Les tableaux vont de pair. Chaque couple d’entrées ne représente bien qu’une seule figurine.

//Tu dois aider le collectionneur en retournant la différence entre la valeur d’achat et la valeur de revente de toute sa collection.
// Il est donc possible de retourner une valeur négative si les figurines ont perdu de la valeur.