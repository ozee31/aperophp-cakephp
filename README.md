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

- Composer (docker) : `docker-compose run --rm composer --ignore-platform-reqs `

- Cake Shell (docker) : `docker-compose run --rm web bin/cake`

## Documentation

### CakePHP

- Book : https://book.cakephp.org/3.0/fr/index.html
- Api : https://api.cakephp.org/3.6/

### Plugins

- CakePHP-Twig : https://github.com/WyriHaximus/TwigView
- Bootstrap UI : https://github.com/FriendsOfCake/bootstrap-ui/tree/develop
