<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Application de Gestion de Tâches avec Laravel et Bootstrap

Cette application permet aux utilisateurs de s'inscrire, se connecter et gérer leurs tâches. Chaque utilisateur peut créer, modifier, marquer comme complétée et supprimer ses propres tâches.

## Fonctionnalités
- **Inscription et connexion** des utilisateurs.
- **CRUD** (Create, Read, Update, Delete) pour les tâches.
- Interface utilisateur **responsive** avec Bootstrap.
- Authentification sécurisée avec **Laravel Breeze**.

## Technologies utilisées
- **Backend** : Laravel 10
- **Frontend** : Bootstrap 5
- **Base de données** : MySQL

---

## Installation

### Prérequis
Avant de commencer, assurez-vous d'avoir installé :
- PHP 8.1 ou supérieur
- Composer
- Node.js et npm
- MySQL

### Étapes d'installation

1. **Cloner le repository** :
   
   git clone https://github.com/NailouSekaro/Test_Technique.git
   cd Test_Technique

2. **Installer les dépendances PHP** :

composer install

3. **Installer les dépendances JavaScript** :

npm install

4. **Configurer le fichier .env** :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Test_technique
DB_USERNAME=root
DB_PASSWORD=

Utilisation
Inscription :

Cliquez sur "S'inscrire" pour créer un nouveau compte.

Remplissez le formulaire avec votre nom, email et mot de passe.

Connexion :

Cliquez sur "Se connecter" et entrez vos identifiants.

Gestion des tâches :

Une fois connecté, vous pouvez :

Ajouter une nouvelle tâche.

Modifier une tâche existante.

Marquer une tâche comme complétée.

Supprimer une tâche.

Auteur
BOUKARI Sékaro Mouhamed Nâïlou

Contact : mohamedsekaro88@gmail.com

Licence
Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus de détails.

À propos de Laravel
Laravel est un framework web avec une syntaxe expressive et élégante. Nous croyons que le développement doit être une expérience agréable et créative pour être vraiment épanouissant. Laravel facilite les tâches courantes des projets web, telles que :

Moteur de routage simple et rapide.

Conteneur d'injection de dépendances puissant.

Plusieurs backends pour le stockage des sessions et du cache.

ORM de base de données expressif et intuitif.

Migrations de schéma indépendantes de la base de données.

Traitement robuste des tâches en arrière-plan.

Diffusion d'événements en temps réel.

Laravel est accessible, puissant et fournit les outils nécessaires pour des applications robustes.

Contribuer
Merci de considérer contribuer au framework Laravel ! Le guide de contribution se trouve dans la documentation Laravel.

Vulnérabilités de sécurité
Si vous découvrez une vulnérabilité de sécurité dans Laravel, veuillez envoyer un e-mail à Taylor Otwell via taylor@laravel.com. Toutes les vulnérabilités de sécurité seront traitées rapidement.


