# Changelog — DigitSahelCloud Website

Toutes les modifications notables de ce projet sont documentées ici.
Format basé sur [Keep a Changelog](https://keepachangelog.com/fr/1.0.0/)

---

## [Unreleased] — feature/design-system

### Ajouté
- Layout principal Blade avec slots
- Composant Navbar sticky responsive
- Composant Footer 4 colonnes
- 5 pages de base (Accueil, Services, VPN, À propos, Contact)
- Routes nommées et PageController
- Build Vite des assets CSS/JS

### Configuré
- Tailwind CSS v4 avec plugin officiel Vite
- Couleurs DSC : `--color-dsc-blue: #1E388A` / `--color-dsc-orange: #F97316`
- Typographie : Sora + Plus Jakarta Sans (Google Fonts)
- Classes CSS réutilisables : `.btn-primary`, `.btn-white`, `.badge-orange`

---

## [0.2.0] — 2026-04-10 — Infrastructure

### Ajouté
- Configuration Vagrant + VirtualBox
- VM Ubuntu 22.04 LTS avec provisioning automatique
- Stack : PHP 8.2, Composer, Node 20, MySQL 8, Nginx
- Laravel 12.56.0 installé
- Structure Git : `main` / `develop` / `feature/*`
- Configuration VS Code avec extensions Laravel

---

## [0.1.0] — 2026-04-09 — Initialisation

### Ajouté
- Création du repository GitHub
- Fichier `.gitignore` Laravel
- Configuration VS Code `settings.json`
- README.md initial
- Vagrantfile de base

================================================================================================
# Changelog — DigitSahelCloud Website

Toutes les modifications notables de ce projet sont documentées ici.
Format basé sur [Keep a Changelog](https://keepachangelog.com/fr/1.0.0/)

> **Projet** : Site web officiel DigitSahelCloud
> **Stack** : Laravel 12 · Tailwind CSS v4 · MySQL 8 · Nginx
> **Repo** : https://github.com/bacho92/website-digitsahelcloud
> **Auteur** : Bachir Abourahamane Aboubacar — CEO DigitSahelCloud

---

## [Unreleased] — feature/design-system

### Ajouté
- Layout principal `resources/views/layout/app.blade.php` avec `@yield`
- Composant Navbar sticky avec logo DSC bicolore et liens de navigation
- Composant Footer avec informations de contact et liens services
- 5 pages Blade de base :
  - `pages/home.blade.php` — Hero section avec gradient bleu DSC
  - `pages/services.blade.php` — Page services (en construction)
  - `pages/vpn.blade.php` — Page VPN & Agences (en construction)
  - `pages/about.blade.php` — Page À propos (en construction)
  - `pages/contact.blade.php` — Page Contact (en construction)
- `PageController` avec méthodes pour chaque page
- Routes nommées : `home`, `services`, `vpn`, `about`, `contact`
- Build Vite des assets CSS/JS → `public/build/`

### Configuré
- Tailwind CSS v4 avec plugin officiel `@tailwindcss/vite`
- Couleurs DSC personnalisées via `@theme` :
  - `--color-dsc-blue: #1E388A`
  - `--color-dsc-orange: #F97316`
  - `--color-dsc-blue-dark: #152a6b`
  - `--color-dsc-blue-light: #2d4fa3`
- Typographie Google Fonts :
  - Sora 400/600/700/800 (titres display)
  - Plus Jakarta Sans 300/400/500/600/700/800 (corps)
- Classes CSS réutilisables :
  - `.btn-primary` — Bouton orange DSC
  - `.btn-secondary` — Bouton contour bleu DSC
  - `.btn-white` — Bouton blanc
  - `.badge-orange` — Badge tag orange
  - `.section-tag` — Label de section
  - `.section-title` — Titre de section
  - `.section-sub` — Sous-titre de section
  - `.card` — Carte avec hover effect

### Corrigé
- Erreur symlink VirtualBox shared folders → node_modules compilé depuis Windows
- Warning Tailwind v4 `@import` Google Fonts → déplacé dans le layout HTML
- Erreur `Unable to locate component [layouts.app]` → dossier renommé `layout`
- Erreur `Unable to locate component [navbar]` → composants créés dans `components/`

---

## [0.2.0] — 2026-04-10 — Infrastructure & Environnement Dev

### Ajouté
- `Vagrantfile` complet avec provisioning automatique :
  - VM Ubuntu 22.04 LTS (Jammy)
  - IP privée : `192.168.56.10`
  - Ports forwardés : 80→8080, 443→8443, 3306→3306, 5173→5173
  - RAM : 4096 MB · CPU : 4 cœurs
- Stack provisionnée automatiquement :
  - PHP 8.2.30 + extensions Laravel (mbstring, xml, bcmath, curl, mysql, zip)
  - Composer 2.9.5
  - Node.js v20.20.2 + npm 11.12.1
  - MySQL 8.0.45 — base `digitsahelcloud`, user `dsc_user`
  - Nginx 1.18.0 avec vhost Laravel configuré
- Laravel 12.56.0 installé dans `/var/www/digitsahelcloud`
- Alias bash `dsc` → `cd /var/www/digitsahelcloud`
- Plugin Vagrant `vagrant-scp` installé

### Configuré
- VS Code `.vscode/settings.json` :
  - Format on save activé
  - Association `.blade.php` → blade
  - Emmet pour Blade + HTML
  - Tailwind IntelliSense pour Blade
  - Git autofetch activé
  - EOL Unix (`\n`)
- Extensions VS Code recommandées :
  - Laravel Blade Snippets
  - Laravel Artisan
  - Tailwind CSS IntelliSense
  - PHP Intelephense
  - GitLens
  - DotENV
- Git configuré :
  - `core.autocrlf true` (Windows)
  - `safe.directory` pour le dossier partagé Vagrant
  - `credential.helper store` pour éviter la saisie répétée du token

### Infrastructure
- Provider : VirtualBox 7.2.6
- Vagrant 2.4.9
- OS Hôte : Windows 11 (ThinkPad AMD Ryzen 7 PRO 5850U, 16 GB RAM)
- OS VM : Ubuntu 22.04.x LTS

---

## [0.1.0] — 2026-04-09 — Initialisation du Projet

### Ajouté
- Création du repository GitHub public : `website-digitsahelcloud`
- Fichier `.gitignore` adapté Laravel (vendor, node_modules, .env, storage, etc.)
- `README.md` initial avec description du projet
- Configuration VS Code `settings.json`
- Stratégie de branches Git Flow simplifiée :
  - `main` → Production (AWS EC2)
  - `develop` → Intégration
  - `feature/*` → Développement par fonctionnalité

### Branches créées
- `main` (défaut)
- `develop`
- `feature/design-system` (branche active)

---

## Roadmap — Phases à venir

### Phase 3 — Pages complètes
- [ ] Page Accueil — Hero, stats, grille services, CTA
- [ ] Page Services — 8 services avec icônes et descriptions
- [ ] Page VPN & Agences — Schéma Direct Connect + Azure
- [ ] Page À propos — Vision, mission, équipe
- [ ] Page Contact — Formulaire avec validation

### Phase 4 — Backend
- [ ] Modèles et migrations (Contact, Service, TeamMember)
- [ ] Validation des formulaires
- [ ] Envoi email (Mailable Laravel)
- [ ] Notifications admin

### Phase 5 — Panel Admin (Filament)
- [ ] Installation FilamentPHP
- [ ] Gestion des messages de contact
- [ ] Gestion des services
- [ ] Gestion de l'équipe

### Phase 6 — SEO & Performance
- [ ] Meta tags Open Graph complets
- [ ] Sitemap XML automatique
- [ ] Optimisation images (lazy loading)
- [ ] Cache config, routes, vues

### Phase 7 — CI/CD & Production
- [ ] GitHub Actions — tests + build automatique
- [ ] Déploiement automatique sur AWS EC2
- [ ] SSL Let's Encrypt via Certbot
- [ ] Monitoring et logs

---

## Environnement de développement

| Outil | Version |
|---|---|
| Laravel | 12.56.0 |
| PHP | 8.2.30 |
| Composer | 2.9.5 |
| Node.js (VM) | v20.20.2 |
| Node.js (Windows) | v24.14.1 |
| npm | 11.12.1 |
| MySQL | 8.0.45 |
| Nginx | 1.18.0 |
| Tailwind CSS | v4.x |
| Vite | v7.3.2 |
| Vagrant | 2.4.9 |
| VirtualBox | 7.2.6 |
| OS VM | Ubuntu 22.04 LTS |

---

## Contact & Liens

| | |
|---|---|
| **Auteur** | Bachir Abourahamane Aboubacar |
| **Rôle** | CEO — DigitSahelCloud |
| **Email** | admin-dsc@digitsahelcloud.com |
| **Téléphone** | +227 90065023 |
| **Site** | www.digitsahelcloud.com |
| **Localisation** | Niamey, Niger |
| **Repository** | github.com/bacho92/website-digitsahelcloud |