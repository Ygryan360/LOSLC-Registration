# LOSLC-suryers

## Installation de l'application LOSLC Suryers

Suivez les étapes ci-dessous pour installer et configurer l'application Laravel :

> Prerequis: PHP 8.2 ou supérieur & Composer

1. **Installer les dépendances avec Composer**

    ```bash
    composer install
    ```

    Cette commande installe toutes les dépendances PHP nécessaires à l'application en utilisant Composer.

2. **Copier le fichier d'environnement**

    ```bash
    cp .env.example .env
    ```

    Cette commande copie le fichier `.env.example` en `.env`, qui est utilisé pour configurer les variables d'environnement de l'application.

3. **Exécuter les migrations de la base de données**

    ```bash
    php artisan migrate
    ```

    Cette commande exécute les migrations de la base de données, créant ainsi toutes les tables nécessaires à l'application.

4. **Démarrer le serveur de développement**
    ```bash
    php artisan serve
    ```
    Cette commande démarre le serveur de développement intégré de Laravel, permettant d'accéder à l'application via `http://localhost:8000`.

Suivez ces étapes pour configurer et démarrer l'application.
