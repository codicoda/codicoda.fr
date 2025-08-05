#!/bin/bash 
set -e
cd ~/www/codicoda.fr/
echo "Déploiement en cours..."
git fetch origin
git reset --hard origin/main
echo "Déploiement terminé."