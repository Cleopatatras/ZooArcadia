# Projet : Zoo ( projet pour l'obtention du diplôme de DWWM)

## Introduction
Ce projet a pour objectif de créer une application web permettant de gérer les informations d'un zoo. L'application offrira aux visiteurs la possibilité de consulter les informations sur les animaux, les habitats, et de laisser des avis. 
Les administrateurs pourront gérer les comptes des employés et des vétérinaires, mettre à jour les informations sur le zoo, et consulter les rapports.

## Fonctionnalités

### Visiteur:
Consulter la page d'accueil avec présentation, habitats, animaux et avis.
Naviguer facilement entre les différentes sections du site (accueil, services, habitats, contacts).
Visualiser les services proposés (visites guidées, petit train, restauration).
Consulter les détails des habitats et des animaux, y compris les avis du vétérinaire.
Déposer un avis.

### Administrateur:
Créer des comptes employés et vétérinaires.
Modifier les services proposés, les horaires, les habitats et les animaux.
Consulter les comptes rendus des vétérinaires.

### Vétérinaire:
Se connecter et saisir les comptes-rendus pour chaque animal.
Donner des avis sur les habitats.
Visualiser la nourriture apportée par les employés.

### Employé:
Se connecter et valider les avis des visiteurs.
Modifier les services du zoo.
Remplir les informations sur la consommation de nourriture des animaux.

## Structure de la base de données (exemples sur 2 tables)

Table habitat:
id_habitat (clé primaire)
nom
description

Table animal:
id_animal (clé primaire)
nom
espece
age
habitat_id (clé étrangère référençant habitat)

## Technologies utilisées
Projet créé avec Symfony, SASS, HTML, boostrap et MySQL

## Installation et utilisation
Cloner le dépôt, installer les dépendances, lancer le serveur de développement.
