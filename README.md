# Jeux Olympiques de l'URCA - Application Web

## Description du Projet

Ce projet est une application web conçue pour gérer les Jeux Olympiques de l'Université Reims Champagne-Ardenne (URCA). L'application permettra de planifier, organiser et suivre les épreuves des Jeux Olympiques, de gérer les inscriptions des participants et de fournir des informations essentielles aux athlètes, aux organisateurs et aux spectateurs.

## Technologies Utilisées

- [Laravel](https://laravel.com): Laravel est un framework PHP moderne qui facilite le développement d'applications web.

## Fonctionnalités

L'application comprendra les fonctionnalités suivantes :

- Inscription des athlètes et gestion de leurs informations.
- Gestion des épreuves sportives, y compris la planification et les résultats.
- Un espace pour les organisateurs pour gérer l'ensemble de l'événement.
- Informations pour les spectateurs, y compris les horaires des épreuves et les résultats en temps réel.

## Prérequis

Avant de commencer le développement de ce projet, assurez-vous d'avoir installé les outils suivants sur votre système :

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/)
- [Laravel](https://laravel.com/docs/8.x/installation)

## Installation

Suivez ces étapes pour installer le projet localement :

1. Clonez ce dépôt sur votre machine :

```bash
git clone https://github.com/votre-utilisateur/jeux-olympiques-urca.git
```

2. Accédez au répertoire du projet :

```bash
cd jeux-olympiques-urca
```

3. Installez les dépendances PHP avec Composer :

```bash
composer install
```

4. Installez les dépendances JavaScript avec npm :

```bash
npm install
```

5. Copiez le fichier `.env.example` en `.env` et configurez les variables d'environnement, notamment la configuration de la base de données.

6. Générez une clé d'application Laravel :

```bash
php artisan key:generate
```

7. Exécutez les migrations de base de données :

```bash
php artisan migrate
```

8. Démarrez le serveur de développement :

```bash
php artisan serve
```

L'application sera accessible à l'adresse [http://localhost:8000](http://localhost:8000).

## Contribution

Nous encourageons les contributions à ce projet. Si vous souhaitez contribuer, veuillez suivre ces étapes :

1. Clonez le projet sur votre compte GitHub.
2. Créez une nouvelle branche pour votre fonctionnalité ou votre correctif : `git checkout -b ma-nouvelle-fonctionnalite`.
3. Faites vos modifications et testez-les.
4. Soumettez une demande de fusion (Pull Request) vers la branche principale du projet.

## Licence

Ce projet est sous licence MIT. Consultez le fichier [LICENSE](LICENSE) pour plus d'informations.

