<?php

// POO ( ou OOP En anglais)
//programmation orienté objet 

//objet ou classe
//Structure de base en php 

// mot clé "class" 
//je donne un nom à ma classe , en Pascalcase (commence par un majuscule )


class eleve
{
    private string $nom;
    private string $prenom;
    private bool $aLePermisDeConduire = false; // possible de mettre valeur par défaut 
    private int $age;
    private array $notes;
    private int $meilleurNote; // private => il n'y a que l'objet qui peut l'utiliser ;

    public function __construct(string $unprenom, string $unnom, string $unedateDeNaissance)
    {

        //le Constructeur dans 99% des cas , il a le meme role 
        //initialisé les valeurs des propriétes 
        // il doit etre dans l'objet 
        //"this" => "celui-ci" =>"moi" => instance de l'objet courante 
        //pas de type de retour sur le constructeur 

        $this->prenom = $unprenom;
        $this->nom = $unnom;

        //dans le constructeur on peut avoir un peu de logique 
        //jj//mm//yyyy

        $anneDeNaissane = substr($unedateDeNaissance, 6, 4);
        $this->age = ((int) date('Y')) - ((int) $anneDeNaissane);
    }
    //une méthode n'a pas forcement d'argument 
    //bien definir le type de retour 
    // ici , justement il n'ya pas de  "return" , on travaille dan "l'objet" 
    //on utilisera le type de retour "void" , Vide 
    public function passeLePermisavecsucces(): void
    {
        $this->aLePermisDeConduire = true;
    }

    public function addNote(int $uneNote): void
    {
        $this->notes[] = $uneNote;
        $this->meilleurNote = max($this->notes);
    }


    public function getmoyenne(): float
    {
        $total = 0;
        $nbDeNotes = 0;

        foreach ($this->notes as $note) {
            $total += $note;
            $nbDeNotes++;
        }

        if ($nbDeNotes == 0) {
            return 0;
        }
        return round($total / $nbDeNotes, 2);
    }

    public function getMeilleurnote(): int
    {
        if (empty($this->notes)) {
            return 0;
        }
        return $this->meilleurNote;
    }
    public function getprenom(){
        return  $this->prenom ;
        
    }
    public function getNom(){
        return  $this->nom ;
        
    }
    
}
//méthodes 
//encore la notion de visibilité => mot clé "public" 
//mot clé "function" 
//Premiere méthode "magique" ==> construct (constructeur ) 


//instanciation d'un objet 
// utiliser le mot clé "new" 

$eleve = new eleve('Arthur', 'Weill', '22/01/87');
$eleve->passeLePermisavecsucces();
$eleve->addNote(15);
//je peux utiliser la fonction autan de fois que je veux 

$eleve->addNote(19);
$eleve->addNote(16);
$eleve->addNote(15);
$eleve->addNote(13);
$eleve->addNote(12);
$eleve->addNote(6);

$moyenne = $eleve->getmoyenne();
//$eleve->meilleurNote = 22 ;

echo '<pre>';
var_dump($eleve);
echo '</pre>';
echo '<p>moyenne D\'eleve = ' . $moyenne . '</p>';
//Lecture d'une propriété 
echo 'meilleurNote : ' . $eleve->prenom . $eleve->getMeilleurnote();



$eleve2 = new eleve('Marie', 'Dubois', '22/01/95');
$eleve2->addNote(17);
$moyenne2 = $eleve2->getmoyenne();
echo '<pre>';
var_dump($eleve2);
echo '</pre>';
echo '<p>moyenne D\'eleve 2= ' . $moyenne2 . '</p>';

//propriete (ou attributs ) 
//notion de visibilité == > mot clé "public"
//le type 
//le nom de la propriété , commme on nommerait une variable