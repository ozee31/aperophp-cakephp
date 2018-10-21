# AperoPHP - CakePHP

## Installation

### Avec docker

```bash
./install.sh
```

- App : http://localhost:8080
- PhpMyAdmin : http://localhost:8081

### Sans docker

Requis :

- PHP >= 7.1
- Composer
- L'extension PHP mbstring
- L'extension PHP intl
- L'extension PHP simplexml

```shell
composer install
```

## Commandes

Les commandes seront à adapter si vous n'utilisez pas docker

- Composer : `docker-compose run --rm composer --ignore-platform-reqs `

- Cake Shell : `docker-compose run --rm web bin/cake`

## Documentation

### CakePHP

- Book : https://book.cakephp.org/3.0/fr/index.html
- Api : https://api.cakephp.org/3.6/
- Conventions : https://book.cakephp.org/3.0/fr/intro/conventions.html

### Plugins

- CakePHP-Twig : https://github.com/WyriHaximus/TwigView
- Bootstrap UI : https://github.com/FriendsOfCake/bootstrap-ui/tree/develop

## Processus

Voici les étapes que j'ai réalisées afin de créer le CRUD de la table `users`

### Migration

Ressources :

- https://book.cakephp.org/3.0/fr/migrations.html#creation-de-migrations

#### Création

```shell
docker-compose run --rm web bin/cake bake migration CreateUsers
```

Edition du fichier `./config/Migrations/20181021152751_CreateUsers.php`

#### Application des migrations

```shell
docker-compose run --rm web bin/cake migrations migrate
```

### Création des classes MVC

Ressources :

- https://book.cakephp.org/3.0/fr/bake/usage.html

#### Génération avec Bake

```shell
docker-compose run --rm web bin/cake bake controller Users
docker-compose run --rm web bin/cake bake model Users
```

Les fichiers créés sont :

Classes :

- src/Controller/UsersController.php
- src/Model/Entity/User.php
- src/Model/Table/UsersTable.php

Tests :

- tests/Fixture/UsersFixture.php
- tests/TestCase/Controller/UsersControllerTest.php
- tests/TestCase/Model/Table/UsersTableTest.php
