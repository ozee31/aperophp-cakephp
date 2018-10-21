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

- Créer une migration : `docker-compose run --rm web bin/cake bake migration {MigrationName}`

## Documentation

### CakePHP

- Book : https://book.cakephp.org/3.0/fr/index.html
- Api : https://api.cakephp.org/3.6/
- Migrations : https://book.cakephp.org/3.0/fr/migrations.html#creation-de-migrations

### Plugins

- CakePHP-Twig : https://github.com/WyriHaximus/TwigView
- Bootstrap UI : https://github.com/FriendsOfCake/bootstrap-ui/tree/develop

## Processus

Voici les étapes que j'ai réalisées afin de créer le CRUD de la table `users`

### Migration

#### Création

```shell
docker-compose run --rm web bin/cake bake migration CreateUsers
```

Edition du fichier `./config/Migrations/20181021152751_CreateUsers.php`

#### Application des migrations

```shell
docker-compose run --rm web bin/cake migrations migrate
```
