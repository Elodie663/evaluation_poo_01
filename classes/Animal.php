<?php
class Animal {
    public $nom;
    public $type;
    public $carniHerbi;


function __construct($n, $t,$ch = "inconnu"){
    $this->nom = $n;
    $this->type = $t;
    $this->carniHerbi = $ch;

}
public function faireLeShow(){
    if(empty($this->nom)) { //empty = vérifie si une variable est vide ici $nom donc si le nom est vide = animal né au zoo
        echo "\n Voici un jeune {$this->type} {$this->carniHerbi} né récemment au zoo\n";
    } else {
        echo "\n Voici un animal {$this->carniHerbi} qui est un {$this->type} et qui s'appelle {$this->nom}\n";
    }
}
public function donnerNaissance(){
    // la méthode est redéfinie dans les classes filles
    return new Animal("", $this->type, $this->carniHerbi);
}
}
?>