# Mini Site de Gestion de Cinéma

## Description
Ce projet est un mini site web pour gérer les films, les séances et les réservations d’un cinéma. Il permet de **créer, lire, mettre à jour et supprimer (CRUD)** des données liées aux films et aux séances. Le site est construit en **PHP natif** avec une architecture simple et organisée.

## Architecture
Le projet est structuré selon le modèle MVC (Modèle-Vue-Contrôleur) pour séparer les responsabilités et faciliter la maintenance :  


```
App/
├─ models/ # Contient les classes de gestion des données et la logique métier
├─ controllers/ # Contient les contrôleurs qui traitent les requêtes et appellent les modèles
├─ views/ # Contient les fichiers de présentation (HTML/PHP)
├─ Database.php # Connexion à la base de données
index.php # Point d'entrée de l'application
router.php # Gestion des routes et des actions
```

## Fonctionnalités
- Gestion des films : ajout, modification, suppression et affichage.  
- Gestion des séances.  
- Consultation des informations via une interface simple et dynamique.  
- Organisation MVC pour séparer données, logique et affichage.  

## Technologies
- PHP natif  
- MySQL (via PDO)  
- HTML / CSS  

## Objectif
- Illustrer la mise en place d’un **CRUD complet** en PHP.  
- Appliquer une **architecture MVC** simple pour organiser le code et faciliter son évolution.  
