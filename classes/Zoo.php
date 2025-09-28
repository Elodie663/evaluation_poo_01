<?php
class Zoo {
    public $animaux = []; //le zoo possède des animaux
    public $visiteurs = []; //le zoo possède des visiteurs

  function __construct(){ //je ne donne aucuns paramètres au construct, point de départ 0
    $this->animaux = [];//tableaux vides
    $this->visiteurs = [];
  //  $this->visiteur = $v;
  }

//recevoir des animaux TOUJOURS plusieurs
//public static $animaux = [];

public function livraisonAnimaux(array $nouveauxAnimaux){
    
    foreach ($nouveauxAnimaux as $animal){
        $this->animaux[] = $animal; //ajoute chaque animal à la liste des animaux du zoo
    }
//initialiser le nombre d'animaux livrés
    $nombre = count($nouveauxAnimaux);
echo "Une livraison de {$nombre} animaux a été effectuée\n";

}
//vendre des billets
public function vendreBillet(Visiteur $nouveauVisiteur){
    $this->visiteurs[] = $nouveauVisiteur;
    echo "\n Bienvenue {$nouveauVisiteur->nom}\n";
}

//naissance d'un animal
public function naissanceAnimal(Animal $parent){//le$parent et pas $nouvel animal !!!!
    $nouvelAnimal = $parent->donnerNaissance();//le parent fait un bb
    $this->animaux[] = $nouvelAnimal;
    echo "\n Le {$parent->type} {$parent->nom} vient de donner naissance à un bébé {$parent->type}\n";
}

//ouverture du zoo et visites + naissance

public function ouvrirLesPortes(){
    echo "\n Le zoo ouvre ses portes !\n";

//    foreach($this->visiteurs as $visiteur){ //parcourt d'abord TOUS les visiteurs
//        echo "\n {$visiteur->nom} commence sa visite \n";
//        foreach($this->animaux as $animal){ //UN visiteur fait son circuit
//            $animal->faireLeShow();
//        }
//        echo "\n {$visiteur->nom} termine sa visite";
//    }

//plus facile à gérer la naissance avec une boucle for
$nombreVisiteurs = count($this->visiteurs);
$moitie = floor($nombreVisiteurs / 2); //nombre de visiteurs divisé par 2 = moitie

for($i = 0; $i < $moitie; $i++){
    $visiteur = $this->visiteurs[$i];
    echo "\n {$visiteur->nom} commence sa visite \n";
    foreach($this->animaux as $animal){
        $animal->faireLeShow();
    }
    echo "\n {$visiteur->nom} termine sa visite\n";
}

//naissance à la moitié
//echo "\n naissance d'un nouvel animal";
$this->naissanceAnimal($this->animaux[1]);

//suite des visites
    for($i = $moitie; $i < $nombreVisiteurs; $i++) {
        $visiteur = $this->visiteurs[$i];
        echo "\n {$visiteur->nom} commence sa visite\n";
        foreach($this->animaux as $animal){
            $animal->faireLeShow();
        }
        echo "\n {$visiteur->nom} termine sa visite\n";
    }
}
}
?>