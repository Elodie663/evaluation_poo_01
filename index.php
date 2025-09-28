<?php
require_once 'classes/Animal.php';     
require_once 'classes/Zoo.php';      
require_once 'classes/Lion.php';       
require_once 'classes/Zebre.php';      
require_once 'classes/Panda.php';      
require_once 'classes/Loup.php';      
require_once 'classes/Elephant.php';   
require_once 'classes/Visiteur.php';   



$zoo = new Zoo(); // j'appelle le constructeur Zoo() -> crée un zoo avec tableaux vides

$lion1 = new Lion("Simba");     // je crée un lion carnivore nommé Simba
$panda1 = new Panda("Bambou"); 
$zebre1 = new Zebre("Rayures"); 
$loup1 = new Loup("Wolf");
$elephant1 = new Elephant("Dumbo");
// Afficher les animaux créés : temporaire pour testet l'affichage
//echo "====ANIMAUX CRÉÉS===\n";
//$lion1->faireLeShow();
//$panda1->faireLeShow();
//$zebre1->faireLeShow();

echo "====LIVRAISON D'ANIMAUX===\n";
// On passe un TABLEAU d'animaux à la méthode livraisonAnimaux()

$zoo->livraisonAnimaux([$lion1, $panda1, $zebre1, $loup1, $elephant1]);
// Cette méthode va : Ajouter chaque animal au tableau $animaux du zoo 

echo "====VENTE DE BILLETS===\n";
$visiteur1 = new Visiteur("Loïc");    
$visiteur2 = new Visiteur("Yannick");
$visiteur3 = new Visiteur("Yassine");
$visiteur4 = new Visiteur("Enzo");
$visiteur5 = new Visiteur("Pierre");
$visiteur6 = new Visiteur("Wahid");


// Chaque appel ajoute le visiteur au tableau $visiteurs du zoo
$zoo->vendreBillet($visiteur1); 
$zoo->vendreBillet($visiteur2); 
$zoo->vendreBillet($visiteur3); 
$zoo->vendreBillet($visiteur4); 
$zoo->vendreBillet($visiteur5); 
$zoo->vendreBillet($visiteur6);

echo "====OUVERTURE DU ZOO===\n";
// Cette méthode devra faire visiter chaque visiteur
$zoo->ouvrirLesPortes();


echo "====NAISSANCES===\n";
// Un animal du zoo fait un bébé
// La méthode naissanceAnimal() va :
// 1. Demander au lion1 de faire un bébé (donnerNaissance())
// 2. Ajouter ce bébé au zoo
// 3. Afficher un message
$zoo->naissanceAnimal($lion1); // Le premier animal de la liste fait un bébé

?>