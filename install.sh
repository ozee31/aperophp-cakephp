#!/bin/bash

function dcRun
{
  docker-compose run --rm $@
}

echo
echo "============================"
echo "INSTALLATION OF THE PROJECT "
echo "============================"

echo
echo "Build des containers"
echo "------------"
docker-compose build

echo
echo "Installation des dépendances"
echo "------------"
dcRun composer --ignore-platform-reqs install
