# Amazom - Plateforme E-commerce

## Description
Amazom est une application e-commerce développée avec Laravel  offrant une expérience d'achat en ligne complète. Les utilisateurs peuvent parcourir des produits, les ajouter à leur panier.

## Fonctionnalités
- Catalogue de produits
- Panier d'achat dynamique
- Système d'authentification (inscription/connexion)
- Gestion des commandes
- Interface d'administration

## Technologies utilisées
- Backend : Laravel 12.x
- Base de données : MariaDB
- Frontend : Blade, Bootstrap
- Authentification : Laravel Breeze

## Prérequis
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL ou MariaDB
- Git

## Installation

### 1. Cloner le repository
git clone https://github.com/votre-username/amazom-laravel.git
cd amazom-laravel

### 2. Installer les dépendances PHP
composer install

### 3. Installer les dépendances Node.js
npm install

### 4. Configuration de l'environnement
cp .env.example .env
php artisan key:generate

### 5. Configurer la base de données
Éditez le fichier .env avec vos paramètres :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=amazom
DB_USERNAME=votre_username
DB_PASSWORD=votre_password

### 6. Créer la base de données
mysql -u root -p
CREATE DATABASE amazom;
exit

### 7. Exécuter les migrations et seeders
php artisan migrate --seed

### 8. Lancer le serveur de développement
php artisan serve

Application maintenant accessible sur : http://localhost:8000

## Comptes de test
- Admin : admin@amazom.com / admin1234
- Utilisateur : user@amazom.com / user1234

## Commandes utiles
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan migrate:fresh --seed
php artisan test

## Licence
Ce projet est sous licence MIT.
