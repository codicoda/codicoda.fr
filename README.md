# 🚀 Base PHP 8.2 + Apache + Docker — Guide & Checklist

Ce dépôt fournit une base **PHP 8.2 / Apache** containerisée avec **routing propre via .htaccess**,**Composer**, et un **Makefile** pour piloter Docker Compose.

---

## ✅ Checklist de démarrage (post-clone)

Suis les étapes dans l’ordre et coche-les au fur et à mesure.

- [ ] **Vérifier les prérequis installés**
    - Docker & Docker Compose
    - Make (macOS/Linux natif ; sous Windows : WSL2 ou Git Bash)
    - Composer
    - Git

- [ ] **Cloner le dépôt**

- [ ] **Créer le fichier `.env` à la racine du dépôt**
    > Le `.env` n’est **pas** versionné. Il est requis pour mapper le port hôte avec la variable d'environnement `HOST_PORT`.
    - [ ] Adapter `HOST_PORT` si 8080 est occupé.

- [ ] **Installer les dépendances PHP**
    
        composer install

- [ ] **Lancer l’infra Docker**
    
        cd docker
        make up

    Cela construit et démarre le service **webserver** et mappe le port défini dans par HOST_PORT= dans .env sur le port 80 du conteneur.

---

## ⚙️ Configuration

### Docker & Makefile

- Volume monté : `../www` → `/var/www/codicoda.fr`
- `docker/apache.conf` : VirtualHost + `AllowOverride All` + `mod_rewrite`
- `docker/Makefile` :

        make up     # build + up -d
        make down   # down + prune réseaux + images du projet

---
