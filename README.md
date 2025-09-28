# Simulation de Zoo - Évaluation POO PHP

## Objectif pédagogique => maîtrise de la Programmation Orientée Objet (POO)

## Description du projet

Simulation d'un zoo avec gestion des animaux et des visiteurs, développée dans le cadre d'une évaluation de Programmation Orientée Objet en PHP.
Le zoo peut recevoir des livraisons d'animaux, vendre des billets aux visiteurs, et gérer les naissances d'animaux pendant les visites.

## Architecture du projet

```
evaluation_poo_01/
├── index.php
├── classes/
│   ├── Animal.php
│   ├── Lion.php
│   ├── Panda.php
│   ├── Zebre.php
│   ├── Loup.php
│   ├── Elephant.php
│   ├── Zoo.php
│   └── Visiteur.php
└── README.md
```

## Fonctionnalités

### Gestion des animaux

- **Héritage** : Chaque espèce hérite de la classe Animal
- **Polymorphisme** : Méthode `faireLeShow()` adaptée à chaque animal
- **Reproduction** : Méthode `donnerNaissance()` spécifique par espèce

### Gestion du zoo

- **Livraison d'animaux** : Réception de plusieurs animaux simultanément
- **Vente de billets** : Enregistrement des visiteurs
- **Ouverture des portes** : Visite séquentielle des animaux
- **Naissances** : Gestion des naissances pendant et après les visites

### Parcours des visiteurs

- Chaque visiteur visite tous les animaux
- Les visiteurs passent un par un (pas simultanément)
- Naissance d'un animal à mi-parcours des visites
- Naissance finale après toutes les visites

## Scénario d'exécution et exemple de sortie

```
====LIVRAISON D'ANIMAUX===
Une livraison de 5 animaux a été effectuée
====VENTE DE BILLETS===
 Bienvenue Loïc
 Bienvenue Yannick
 Bienvenue Yassine
 Bienvenue Enzo
 Bienvenue Pierre
 Bienvenue Wahid
====OUVERTURE DU ZOO===
 Le zoo ouvre ses portes !
 Loïc commence sa visite
 Voici un animal carnivore qui est un lion et qui s'appelle Simba
 Voici un animal herbivore qui est un panda et qui s'appelle Bambou
 Voici un animal herbivore qui est un zebre et qui s'appelle Rayures
 Voici un animal carnivore qui est un loup et qui s'appelle Wolf
 Voici un animal herbivore qui est un elephant et qui s'appelle Dumbo
 Loïc termine sa visite
 Yannick commence sa visite
[...]
 Yannick termine sa visite
 Yassine commence sa visite
[...]
 Yassine termine sa visite
 Le panda Bambou vient de donner naissance à un bébé panda
 Enzo commence sa visite
 Voici un animal carnivore qui est un lion et qui s'appelle Simba
 Voici un animal herbivore qui est un panda et qui s'appelle Bambou
 Voici un animal herbivore qui est un zebre et qui s'appelle Rayures
 Voici un animal carnivore qui est un loup et qui s'appelle Wolf
 Voici un animal herbivore qui est un elephant et qui s'appelle Dumbo
 Voici un jeune panda herbivore né récemment au zoo
 Enzo termine sa visite
 Pierre commence sa visite
[...]
 Pierre termine sa visite
 Wahid commence sa visite
[...]
 Wahid termine sa visite
====NAISSANCES===
 Le lion Simba vient de donner naissance à un bébé lion
```

## Compétences développées

- Programmation orientée objet : classes, objets, constructeurs, propriétés et méthodes
- Héritage et polymorphisme : `extends`
- Débogage et résolution de problèmes
- Boucles imbriquées à 2 niveaux (foreach et for)
- Organisation et structure de code
- Gestion de collections d'objets (tableaux)

## Axes d'amélioration identifiés

### Encapsulation et visibilité

- **Problème actuel** : Toutes les propriétés sont `public`, ce qui expose les données internes
- **Amélioration** : Utiliser `private` pour les propriétés et `protected` pour l'héritage et les getters/setters pour le contrôle des accès.

### Architecture des classes

- **Problème actuel** : Classe `Animal` concrète au lieu d'abstraite
- **Amélioration** : Déclarer `Animal` comme `abstract` avec des méthodes abstraites.

### Absence de déclaration de types

- **Problème actuel** : Pas de déclaration de types (type hints)
- **Amélioration** : Ajouter `string`, `int`, `array`, `void` aux signatures

Ces axes d'amélioration représentent une évolution naturelle vers des pratiques de développement plus matures.

## Auteur

**Elodie Molieres** - Projet réalisé dans le cadre de la formation BeWeb _Développeur web & mobile_.
