# Application Web pour la Gestion de Formation de Cycle d’Ingénieur
Cette application web est conçue pour faciliter la gestion de la formation dans le cycle d’ingénieur. Elle propose une interface intuitive pour les administrateurs, enseignants et étudiants, en automatisant des tâches telles que la gestion des étudiants, des cours, des notes et des absences.

## Fonctionnalités principales
1. **Gestion des utilisateurs :**
 - Administrateurs, enseignants et étudiants.
2. **Gestion académique :**
 - Gestion des étudiants, cours, modules, notes, absences et emplois du temps.
3. **Suivi des performances :**
 - Génération de rapports et suivi des résultats des étudiants.
4. **Communication intégrée :**
 - Avis des étudiants et collaboration entre enseignants et étudiants.

## Prérequis
Assurez-vous que les outils suivants sont installés :

- PHP >= 8.0
- Composer >= 2.x
- Node.js >= 16.x et NPM
- Serveur MySQL
- XAMPP ou équivalent pour l'environnement local
- Laravel 10.x

## Technologies utilisées
- Framework : Laravel 10.x
- Frontend : Blade, Bootstrap
- Base de données : MySQL
- Langages : PHP, HTML, CSS, JavaScript
- Serveur : XAMPP (Apache, MySQL)
## Installation

1. **Cloner le projet :**

```bash
git clone https://github.com/repo.git
cd repo
```
2. **Configurer le fichier .env :**
- Copier le fichier d’exemple :
```bash
cp .env.example .env
```
- Modifier les paramètres de connexion à la base de données :
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=votre_base
DB_USERNAME=nom_utilisateur
DB_PASSWORD=mot_de_passe
```
3. **Installer les dépendances :**
```bash
composer install
npm install
```
4. **Générer une clé d'application :**
```bash
php artisan key:generate
```
5. **Exécuter les migrations :**
```bash
php artisan migrate --seed
```
6. **Démarrer le serveur :**
```bash
php artisan serve
```

## Captures d'écran

### Page d'accueil
Cette page contient les informations générales sur la formation de cycle d’ingénieur
![Page d'accueil](captures/Capture1.jpg)

### Page d'authentification pour admin et enseignant
![Page d'authentification](captures/Capture2.jpg)

### Page d'authentification pour les étudiants
![Page d'authentification](captures/Capture3.jpg)

### Page de tableau de bord pour l’utilisateur admin
![Page de tableau de bord](captures/Capture4.jpg)

### Page d’accueil de l’utilisateur étudiant
![Page d’accueil de l’étudiant](captures/Capture5.jpg)
## Auteur
- [OMAR OUKHOUYA](https://www.linkedin.com/in/omar-oukhouya-306813229/)