#!/bin/bash

function dcRun
{
  docker-compose run --rm $@
}

echo
echo "============================"
echo "INSTALLATION "
echo "============================"

echo
echo "Build des containers"
echo "------------"
docker-compose build

echo
echo "Installation des dépendances"
echo "------------"
dcRun composer --ignore-platform-reqs install

echo
echo "Application des migrations"
echo "------------"
dcRun web bin/cake migrations migrate

echo
echo "============================"
echo "INSTALLATION TERMINÉE"
echo "http://localhost:8080/"
echo "============================"
