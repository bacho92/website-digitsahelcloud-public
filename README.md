# 🌍 DigitSahelCloud — Site Web Officiel

<div align="center">

![DigitSahelCloud](https://img.shields.io/badge/DigitSahelCloud-MSP%20Niger-1E388A?style=for-the-badge)
![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php)
![Docker](https://img.shields.io/badge/Docker-Compose-2496ED?style=for-the-badge&logo=docker)
![AWS](https://img.shields.io/badge/AWS-EC2-FF9900?style=for-the-badge&logo=amazonaws)
![Cloudflare](https://img.shields.io/badge/Cloudflare-SSL%20Full%20Strict-F38020?style=for-the-badge&logo=cloudflare)
![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-CI/CD-2088FF?style=for-the-badge&logo=githubactions)

**Votre Partenaire Cloud au Sahel 🇳🇪**

[🌐 digitsahelcloud.com](https://digitsahelcloud.com) · [📧 admin-dsc@digitsahelcloud.com](mailto:admin-dsc@digitsahelcloud.com) · [📱 +227 70810113](tel:+22770810113)

</div>

---

## 📋 Table des matières

- [Présentation](#-présentation)
- [Stack technique](#-stack-technique)
- [Architecture](#-architecture)
- [Structure du projet](#-structure-du-projet)
- [Phase 1 — Infrastructure locale Vagrant](#-phase-1--infrastructure-locale-vagrant)
- [Phase 2 — Design System](#-phase-2--design-system)
- [Phase 3 — Pages du site](#-phase-3--pages-du-site)
- [Phase 4 — Backend et Email](#-phase-4--backend-et-email)
- [Phase 5 — Panel Admin Filament](#-phase-5--panel-admin-filament)
- [Phase 6 — SEO et Performance](#-phase-6--seo-et-performance)
- [Phase 7 — Déploiement Docker AWS EC2](#-phase-7--déploiement-docker-aws-ec2)
- [Phase 8 — Sécurisation Production](#-phase-8--sécurisation-production)
- [Phase 9 — Admin Filament Production](#-phase-9--admin-filament-production)
- [Phase 10 — CI/CD GitHub Actions](#-phase-10--cicd-github-actions)
- [Workflow de développement](#-workflow-de-développement)
- [Maintenance](#-maintenance)
- [Contact](#-contact)

---

## 🎯 Présentation

**DigitSahelCloud** est le premier Managed Service Provider (MSP) nigérien spécialisé dans la fourniture de services numériques locaux, fiables et abordables aux entreprises, startups, institutions et administrations du Niger et de la sous-région sahélienne.

### Pages du site

| Page | URL | Description |
|------|-----|-------------|
| Accueil | `/` | Hero, services, VPN highlight, pourquoi nous, CTA |
| Nos Services | `/services` | 8 services détaillés avec photos HD Unsplash |
| VPN & Agences | `/vpn` | Architecture VPN, cas d'usage |
| À propos | `/about` | Histoire, vision, mission, valeurs, équipe |
| Contact | `/contact` | Formulaire complet + coordonnées |
| Admin | `/admin-dsc` | Panel Filament — Messages reçus |

### 8 Services proposés

1. ☁️ Hébergement Web & Cloud
2. 🌐 VPN & Interconnexion Agences (AWS Direct Connect + Azure VPN)
3. ⚙️ Développement Applications
4. 🛡️ Cybersécurité
5. 📊 ERP & Gestion d'Entreprise
6. ✉️ Email Professionnel
7. 🛠️ Support & Maintenance IT
8. 💡 Conseil en Transformation Digitale

---

## 🛠️ Stack technique

| Catégorie | Technologie | Version |
|-----------|-------------|---------|
| Backend | Laravel | 12.x |
| Langage | PHP | 8.2 |
| Frontend | Tailwind CSS | v4 + Vite |
| Base de données | MySQL | 8.0 |
| Cache | Redis | Alpine |
| Admin Panel | Filament | v3 |
| Conteneurisation | Docker | Compose |
| Serveur Web | Nginx | 1.28.x |
| Process Manager | Supervisor | Intégré Docker |
| Env. développement | Vagrant + VirtualBox | Ubuntu 22.04 |
| Cloud | AWS EC2 | eu-west-3 (Paris) |
| CDN / SSL | Cloudflare | Full Strict |
| Email | Zoho Mail | SMTP + DKIM + SPF + DMARC |
| CI/CD | GitHub Actions | Auto-deploy sur push main |

### Design System

```
Couleurs DSC :
├── Bleu principal : #1E388A
├── Bleu foncé    : #152a6b
├── Orange        : #F97316
└── Orange clair  : #fb923c

Typographie :
├── Display : Sora (titres)
└── Body    : Plus Jakarta Sans
```

---

## 🏗️ Architecture

```
Navigateur (HTTPS)
      ↓
Cloudflare (SSL Full Strict + CDN + DDoS Protection)
      ↓
AWS EC2 — 15.236.9.255 (Elastic IP) — eu-west-3 (Paris)
      ↓
┌─────────────────────────────────────────────┐
│              Docker Compose                 │
│                                             │
│  ┌────────────────────────────────────┐     │
│  │  app (PHP 8.2 + Nginx + Laravel)  │     │
│  │  Ports: 80, 443                   │     │
│  └────────────────────────────────────┘     │
│  ┌──────────────┐  ┌────────────────┐       │
│  │  db (MySQL)  │  │ redis (Cache)  │       │
│  │  Port: 3306  │  │  Port: 6379   │       │
│  └──────────────┘  └────────────────┘       │
└─────────────────────────────────────────────┘
```

### Volumes Docker

| Volume / Mount | Contenu |
|----------------|---------|
| `./app` | Code PHP Laravel |
| `./resources` | Vues Blade, CSS, JS |
| `./public` | Assets compilés |
| `./database` | Migrations |
| `./docker/nginx.conf` | Config Nginx + SSL |
| `./docker/ssl/` | Certificats Cloudflare Origin ⚠️ |
| `mysql_data` | Données MySQL persistantes |
| `storage` | Fichiers uploadés |
| `logs` | Logs applicatifs |

---

## 📁 Structure du projet

```
website-digitsahelcloud/
├── app/
│   ├── Filament/Resources/ContactResource.php
│   ├── Http/Controllers/PageController.php
│   ├── Mail/ContactMail.php
│   └── Models/
│       ├── Contact.php
│       └── User.php
├── database/migrations/
│   ├── create_contacts_table.php
│   └── add_fields_to_contacts_table.php
├── docker/
│   ├── nginx.conf              ← Config Nginx + SSL
│   ├── ssl/cert.pem            ← Certificat Cloudflare Origin (⚠️ gitignore)
│   ├── ssl/key.pem             ← Clé privée SSL (⚠️ gitignore)
│   └── supervisord.conf
├── resources/views/
│   ├── layout/app.blade.php
│   ├── components/
│   │   ├── navbar.blade.php
│   │   └── footer.blade.php
│   └── pages/
│       ├── home.blade.php
│       ├── services.blade.php
│       ├── vpn.blade.php
│       ├── about.blade.php
│       └── contact.blade.php
├── .github/workflows/deploy.yml    ← CI/CD
├── docker-compose.yml
├── Dockerfile
├── Vagrantfile                     ← Environnement local
└── .env                            ← Variables (⚠️ gitignore)
```

---

## ✅ Phase 1 — Infrastructure locale Vagrant

### Prérequis

- Vagrant 2.4+
- VirtualBox 7.2+
- Git
- Node.js 20+

### Démarrage

```bash
# Cloner le repo
git clone https://github.com/bacho92/website-digitsahelcloud.git
cd website-digitsahelcloud

# Lancer la VM
vagrant up

# Se connecter
vagrant ssh

# Dans la VM
cd /var/www/digitsahelcloud
cp .env.example .env
php artisan key:generate
php artisan migrate
```

**Accès local :** `http://192.168.56.10`

### Commandes Vagrant

```bash
vagrant up        # Démarrer la VM
vagrant ssh       # Se connecter
vagrant halt      # Éteindre
vagrant reload    # Redémarrer
vagrant destroy   # Supprimer
```

### Workflow Git

```
main        → Production (AWS EC2)
develop     → Intégration
feature/*   → Développement
```

---

## ✅ Phase 2 — Design System

- Tailwind CSS v4 avec couleurs DSC (`#1E388A`, `#F97316`)
- Layout `app.blade.php` avec head SEO complet
- Navbar sticky responsive + menu hamburger mobile
- Footer bicolore (bleu + blanc)
- Fonts : Sora (titres) + Plus Jakarta Sans (body)
- Classes : `.btn-primary`, `.section-tag`, `.section-title`

---

## ✅ Phase 3 — Pages du site

| Page | Sections |
|------|---------|
| Accueil | Hero, stats, 8 services SVG, VPN highlight, Pourquoi nous, CTA |
| Services | 8 services avec photos HD + descriptions pro + "En savoir plus" |
| VPN | Schéma architecture, AWS/Azure, cas d'usage par secteur |
| À propos | Vision/Mission, valeurs, équipe, chiffres clés, roadmap |
| Contact | Formulaire 8 champs + coordonnées + localisation |

### Formulaire de contact

| Champ | Obligatoire | Description |
|-------|-------------|-------------|
| `demandeur_type` | Oui | Entreprise ou Particulier |
| `company` | Si entreprise | Nom de l'organisation |
| `name` | Oui | Nom complet |
| `email` | Oui | Adresse email |
| `phone` | Oui | Numéro WhatsApp |
| `role` | Oui | Poste occupé (DG, IT, RH, DAF...) |
| `service` | Oui | Service souhaité |
| `message` | Oui | Description du besoin |

---

## ✅ Phase 4 — Backend et Email

```bash
# Migrations
php artisan make:migration create_contacts_table
php artisan make:migration add_fields_to_contacts_table
php artisan migrate

# Modèle et Mail
php artisan make:model Contact
php artisan make:mail ContactMail
```

### Configuration Email Zoho (`.env`)

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.zoho.com
MAIL_PORT=465
MAIL_USERNAME=admin-dsc@digitsahelcloud.com
MAIL_PASSWORD=votre_mot_de_passe
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=admin-dsc@digitsahelcloud.com
MAIL_FROM_NAME="DigitSahelCloud"
```

### DNS Email (Cloudflare)

| Type | Nom | Valeur |
|------|-----|--------|
| MX | @ | mx.zoho.com (10) |
| MX | @ | mx2.zoho.com (20) |
| MX | @ | mx3.zoho.com (50) |
| TXT | @ | v=spf1 include:zohomail.com ~all |
| TXT | _dmarc | v=DMARC1; p=quarantine... |
| TXT | zmail._domainkey | v=DKIM1; k=rsa; p=... |

---

## ✅ Phase 5 — Panel Admin Filament

```bash
# Installation
composer require filament/filament
php artisan make:filament-panel admin-dsc
php artisan make:filament-resource Contact
php artisan make:filament-user
```

**URL Admin :** `https://digitsahelcloud.com/admin-dsc`

### Fonctionnalités

- Liste messages avec badges (Type, Poste, Service)
- Filtres : lecture, type demandeur, rôle
- Vue détaillée complète avec copyable email/WhatsApp
- Marquage lu/non lu + badge orange non lus
- Création manuelle désactivée

---

## ✅ Phase 6 — SEO et Performance

```html
<!-- Meta tags dans app.blade.php -->
<meta name="description" content="...">
<meta property="og:title" content="...">
<meta name="twitter:card" content="summary_large_image">
<link rel="canonical" href="{{ url()->current() }}">
```

- ✅ Sitemap XML : `/sitemap.xml`
- ✅ Robots.txt : `/robots.txt`
- ✅ Open Graph + Twitter Card
- ✅ Gzip Nginx activé
- ✅ Cache assets statiques 1 an

---

## ✅ Phase 7 — Déploiement Docker AWS EC2

### Informations serveur

| Paramètre | Valeur |
|-----------|--------|
| Provider | AWS EC2 |
| Region | eu-west-3 (Paris) |
| Instance | t2.micro |
| IP Elastic | 15.236.9.255 |
| OS | Ubuntu 24.04 LTS |
| RAM | 914MB + **2GB Swap** |

### Connexion SSH

```bash
ssh -i "digitsahelcloud-key-ec2.pem" ubuntu@15.236.9.255
```

### Configurer le Swap (anti-crash RAM)

```bash
sudo fallocate -l 2G /swapfile
sudo chmod 600 /swapfile
sudo mkswap /swapfile
sudo swapon /swapfile
echo '/swapfile none swap sw 0 0' | sudo tee -a /etc/fstab
```

### Déploiement initial

```bash
cd /var/www/digitsahelcloud
cp .env.example .env
nano .env                                        # Remplir les variables
docker compose up -d
docker compose exec app php artisan migrate --force
docker compose exec app php artisan optimize
```

### Commandes Docker

```bash
docker compose ps                              # État
docker compose logs --tail=50 app             # Logs
docker compose restart app                    # Redémarrer
docker compose down && docker compose up -d   # Relancer
docker stats --no-stream                      # RAM/CPU
```

### Limites mémoire (`docker-compose.yml`)

```yaml
app:   mem_limit: 400m  memswap_limit: 600m
db:    mem_limit: 300m  memswap_limit: 500m
redis: mem_limit: 100m  memswap_limit: 150m
```

---

## ✅ Phase 8 — Sécurisation Production

### SSL Cloudflare Full (Strict)

```bash
# 1. Générer certificat Origin sur Cloudflare
# Cloudflare → SSL/TLS → Origin Server → Create Certificate

# 2. Créer les fichiers sur EC2
mkdir -p docker/ssl
nano docker/ssl/cert.pem   # Coller certificat
nano docker/ssl/key.pem    # Coller clé privée

# 3. Cloudflare → SSL/TLS → Overview → Full (strict)
```

### Headers sécurité (nginx.conf)

```nginx
add_header X-Frame-Options           "SAMEORIGIN"                      always;
add_header X-Content-Type-Options    "nosniff"                         always;
add_header X-XSS-Protection          "1; mode=block"                   always;
add_header Referrer-Policy           "strict-origin-when-cross-origin" always;
add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
add_header Content-Security-Policy   "img-src 'self' https://images.unsplash.com data: blob:;" always;
```

### Variables `.env` production

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://digitsahelcloud.com
SESSION_DOMAIN=digitsahelcloud.com
```

---

## ✅ Phase 9 — Admin Filament Production

### Problèmes résolus

| Problème | Cause | Solution |
|----------|-------|----------|
| 403 Forbidden | `canAccessPanel()` manquant | Ajout dans `User.php` |
| Assets manquants | Livewire non publié | `php artisan livewire:publish --assets` |
| Colonnes manquantes | Migration non exécutée | `php artisan migrate --force` |
| Code non synchronisé | Volumes non montés | Ajout volumes `docker-compose.yml` |

### `app/Models/User.php`

```php
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    public function canAccessPanel(Panel $panel): bool
    {
        return str_ends_with($this->email, '@digitsahelcloud.com');
    }
}
```

### Volumes permanents

```yaml
volumes:
  - ./app:/var/www/html/app
  - ./resources:/var/www/html/resources
  - ./public:/var/www/html/public
  - ./database:/var/www/html/database
  - ./docker/nginx.conf:/etc/nginx/nginx.conf
  - ./docker/ssl:/etc/nginx/ssl
```

---

## ✅ Phase 10 — CI/CD GitHub Actions

### Fonctionnement

```
git push origin main
      ↓
GitHub Actions déclenche automatiquement
      ↓
SSH vers EC2 (clé secrète)
      ↓
git pull + migrate + optimize
      ↓
✅ Déployé en ~12 secondes
```

### GitHub Secrets

| Secret | Valeur |
|--------|--------|
| `EC2_HOST` | 15.236.9.255 |
| `EC2_USER` | ubuntu |
| `EC2_SSH_KEY` | Clé privée SSH ED25519 |

### `.github/workflows/deploy.yml`

```yaml
name: 🚀 Deploy DigitSahelCloud
on:
  push:
    branches: [main]
jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - uses: webfactory/ssh-agent@v0.9.0
        with:
          ssh-private-key: ${{ secrets.EC2_SSH_KEY }}
      - name: Deploy
        run: |
          ssh -o StrictHostKeyChecking=no ${{ secrets.EC2_USER }}@${{ secrets.EC2_HOST }} << 'EOF'
            cd /var/www/digitsahelcloud
            git pull origin main
            docker compose exec -T app php artisan migrate --force
            docker compose exec -T app php artisan optimize:clear
            docker compose exec -T app php artisan optimize
          EOF
```

---

## 🔄 Workflow de développement

```bash
# 1. Modifier le code dans VSCode (Ctrl+S)

# 2. Committer et déployer
git add .
git commit -m "feat/fix/style/docs: description"
git push origin main

# ✅ Déploiement automatique en ~12 secondes !

# 3. Vérifier : GitHub → Actions → ✅ vert
```

### Convention commits

| Prefix | Usage |
|--------|-------|
| `feat:` | Nouvelle fonctionnalité |
| `fix:` | Correction de bug |
| `style:` | Modification visuelle |
| `docs:` | Documentation |
| `perf:` | Optimisation |
| `sec:` | Sécurité |

---

## 🔧 Maintenance

### Surveillance

```bash
free -h                       # RAM et Swap
df -h                         # Espace disque
docker compose ps             # État conteneurs
docker stats --no-stream      # RAM/CPU
```

### En cas de panne (502/521)

```bash
docker compose ps                              # Vérifier état
docker compose logs --tail=50 app             # Voir erreurs
free -h                                        # Vérifier RAM
docker compose down && docker compose up -d   # Redémarrer
docker compose exec app nginx -t              # Tester nginx
```

### Artisan

```bash
docker compose exec app php artisan optimize:clear   # Vider caches
docker compose exec app php artisan optimize         # Recompiler
docker compose exec app php artisan migrate --force  # Migrations
docker compose exec app php artisan route:list       # Routes
```

---

## 🔐 Sécurité

- ✅ SSL Cloudflare Full (Strict) + Origin Certificate 15 ans
- ✅ APP_DEBUG false en production
- ✅ Headers HTTP : X-Frame, HSTS, XSS, CSP, Referrer
- ✅ HTTP → HTTPS redirection 301
- ✅ Cookies : secure + httponly
- ✅ Swap 2GB anti-crash RAM
- ✅ Limites mémoire Docker
- ✅ MySQL innodb optimisé
- ✅ .env, docker/ssl/, .vagrant/ dans .gitignore

---

## 📞 Contact

**Bachir Abourahamane Aboubacar** — Fondateur & CEO

| | |
|-|-|
| 🌐 | [digitsahelcloud.com](https://digitsahelcloud.com) |
| 📧 | [admin-dsc@digitsahelcloud.com](mailto:admin-dsc@digitsahelcloud.com) |
| 📱 | +227 70810113 |
| 📍 | Niamey, République du Niger |
| 💻 | [github.com/bacho92/website-digitsahelcloud](https://github.com/bacho92/website-digitsahelcloud) |

---

<div align="center">

**© 2026 DigitSahelCloud — Tous droits réservés**

*Digitaliser le Sahel, une entreprise à la fois. 🇳🇪*

</div>
