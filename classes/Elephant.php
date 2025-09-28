<?php
class Elephant extends Animal {
    function __construct($nom = ""){//permet de donner un nom ou pas
parent::__construct($nom, "elephant", "herbivore"); //paramètres du construct parent Animal qui a 3 paramètres
}

public function donnerNaissance(){
    //lion donne naissance à un autre lion pas de nom si né au zoo
    return new Elephant();
}
}


?>