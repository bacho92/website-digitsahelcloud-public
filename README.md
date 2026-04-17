# 🌍 DigitSahelCloud — Site Web Officiel

<div align="center">

![DigitSahelCloud](https://img.shields.io/badge/DigitSahelCloud-MSP%20Niger-1E388A?style=for-the-badge)
![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php)
![Docker](https://img.shields.io/badge/Docker-Compose-2496ED?style=for-the-badge&logo=docker)
![AWS](https://img.shields.io/badge/AWS-EC2-FF9900?style=for-the-badge&logo=amazonaws)
![Cloudflare](https://img.shields.io/badge/Cloudflare-SSL%20Full%20Strict-F38020?style=for-the-badge&logo=cloudflare)
![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-CI/CD-2088FF?style=for-the-badge&logo=githubactions)

**Votre Partenaire IT de Confiance au Sahel 🇳🇪**

[🌐 digitsahelcloud.com](https://digitsahelcloud.com) · [📧 admin-dsc@digitsahelcloud.com](mailto:admin-dsc@digitsahelcloud.com) · [📱 +227 70810113](tel:+22770810113)

</div>

---

## 📋 Table des matières

- [Présentation](#-présentation)
- [Stack technique](#-stack-technique)
- [Architecture](#-architecture)
- [Pages du site](#-pages-du-site)
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

**DigitSahelCloud** est le premier Managed Service Provider (MSP) nigérien spécialisé dans la fourniture de services IT locaux, fiables et abordables aux entreprises, institutions, ONG et administrations du Niger et de la sous-région sahélienne.

### Règle d'or du contenu
> ❌ Ne jamais parler de nos outils — ✅ Toujours parler des bénéfices client

### Secteurs servis

| Secteur | Besoins principaux |
|---------|-------------------|
| 🏦 Banques & Microfinance | VPN inter-agences, cybersécurité, conformité |
| 🎓 Éducation & Universités | Interconnexion campus, applications métier |
| 🏛️ Administrations Publiques | Données sécurisées, multi-sites |
| 🌍 ONG & Associations | Bureaux terrain, cloud léger |
| 🏪 Commerce & Distribution | ERP, synchronisation agences |
| 🏥 Santé & Hôpitaux | Données médicales, multi-sites |

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
| Analytics | Google Analytics | G-N6G7N5H4W7 |

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

### Volumes Docker (persistance)

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

## 📄 Pages du site

| Page | URL | Description |
|------|-----|-------------|
| Accueil | `/` | Hero 3 images HD + compteurs animés + secteurs + VPN + Pourquoi nous |
| Nos Services | `/services` | 12 services en 3 catégories avec images HD |
| Interconnexion & Réseaux | `/vpn` | Architecture NOC + cas d'usage + 4 garanties |
| Pourquoi Nous | `/about` | Histoire + CV fondateur + roadmap souveraineté |
| Contact | `/contact` | Formulaire 8 champs + coordonnées + images HD |
| Admin | `/admin-dsc` | Panel Filament — Messages reçus |

### Navigation (Navbar)

```
Accueil | Nos Services | Interconnexion & Réseaux | Pourquoi Nous | Contact
                                                                  [Contactez-nous]
```

### 12 Services organisés en 3 catégories

**☁️ Cloud & Infrastructure**
1. Hébergement Web & Cloud
2. Infrastructure Cloud Managée
3. Virtualisation & Serveurs
4. Email Professionnel

**🔒 Réseaux & Sécurité**
5. Interconnexion & Agences
6. Administration Réseaux
7. Cybersécurité
8. Supervision & Monitoring NOC

**💡 Digital & Innovation**
9. Développement Applications
10. ERP & Gestion
11. Support & Maintenance IT
12. Conseil & Transformation Digitale (IA discrète)

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
│   │   ├── navbar.blade.php    ← Navbar avec lien actif auto
│   │   └── footer.blade.php
│   └── pages/
│       ├── home.blade.php      ← Accueil + compteurs animés + secteurs
│       ├── services.blade.php  ← 12 services + responsive mobile
│       ├── vpn.blade.php       ← Interconnexion + NOC Niamey
│       ├── about.blade.php     ← CV fondateur + roadmap
│       └── contact.blade.php   ← Formulaire + WhatsApp
├── .github/workflows/deploy.yml    ← CI/CD GitHub Actions
├── docker-compose.yml
├── Dockerfile
├── Vagrantfile
└── .env                            ← Variables (⚠️ gitignore)
```

---

## ✅ Phase 1 — Infrastructure locale Vagrant

```bash
# Cloner le repo
git clone https://github.com/bacho92/website-digitsahelcloud.git
cd website-digitsahelcloud

# Lancer la VM
vagrant up && vagrant ssh

# Dans la VM
cd /var/www/digitsahelcloud
cp .env.example .env
php artisan key:generate
php artisan migrate
```

**Accès local :** `http://192.168.56.10`

---

## ✅ Phase 2 — Design System

- Tailwind CSS v4 avec couleurs DSC (`#1E388A`, `#F97316`)
- Layout `app.blade.php` avec Google Analytics `G-N6G7N5H4W7`
- Navbar sticky avec lien actif automatique
- Footer avec vague SVG de transition
- Fonts : Sora (titres) + Plus Jakarta Sans (body)

---

## ✅ Phase 3 — Pages du site

| Page | Nouveautés v2 |
|------|--------------|
| Accueil | 3 images HD hero, compteurs animés JS, section secteurs, vagues SVG |
| Services | 12 services 3 catégories, responsive mobile, images HD Unsplash |
| Interconnexion | NOC Niamey, 4 garanties, vagues SVG, règle d'or appliquée |
| À propos | Timeline CV, 6 certifications, roadmap 3 phases, stats bande |
| Contact | Stats hero, 3 images HD, bouton WhatsApp direct, vague SVG |

### Formulaire de contact — 8 champs

| Champ | Obligatoire |
|-------|-------------|
| `demandeur_type` | Oui — Entreprise ou Particulier |
| `company` | Si entreprise |
| `name` | Oui |
| `email` | Oui |
| `phone` | Oui — WhatsApp |
| `role` | Oui — Poste occupé |
| `service` | Oui — 12 services disponibles |
| `message` | Oui |

---

## ✅ Phase 4 — Backend et Email

```bash
php artisan make:migration create_contacts_table
php artisan make:migration add_fields_to_contacts_table
php artisan migrate
php artisan make:model Contact
php artisan make:mail ContactMail
```

### DNS Email (Cloudflare)

| Type | Valeur |
|------|--------|
| MX | mx.zoho.com (10) / mx2 (20) / mx3 (50) |
| TXT | v=spf1 include:zohomail.com ~all |
| TXT | v=DMARC1; p=quarantine... |
| TXT | v=DKIM1; k=rsa; p=... |

---

## ✅ Phase 5 — Panel Admin Filament

- URL : `https://digitsahelcloud.com/admin-dsc`
- Email : `admin-dsc@digitsahelcloud.com`
- Bouton "New Message" désactivé (`canCreate = false`)
- Filtres : statut lecture, type demandeur, rôle
- Badge orange pour messages non lus
- `canAccessPanel()` → emails `@digitsahelcloud.com` uniquement

---

## ✅ Phase 6 — SEO et Performance

- Google Analytics : `G-N6G7N5H4W7` (production uniquement)
- Sitemap XML : `/sitemap.xml`
- Robots.txt : `/robots.txt`
- Open Graph + Twitter Card
- Gzip Nginx activé
- Cache assets statiques 1 an
- CSP Header : `img-src` Unsplash autorisé
- Permissions-Policy configuré

---

## ✅ Phase 7 — Déploiement Docker AWS EC2

### Serveur

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

### Swap (anti-crash RAM)

```bash
sudo fallocate -l 2G /swapfile
sudo chmod 600 /swapfile
sudo mkswap /swapfile && sudo swapon /swapfile
echo '/swapfile none swap sw 0 0' | sudo tee -a /etc/fstab
```

### Limites mémoire Docker

```yaml
app:   mem_limit: 400m  memswap_limit: 600m
db:    mem_limit: 300m  memswap_limit: 500m
redis: mem_limit: 100m  memswap_limit: 150m
```

### Commandes Docker essentielles

```bash
docker compose ps                              # État
docker compose logs --tail=50 app             # Logs
docker compose restart app                    # Redémarrer
docker compose down && docker compose up -d   # Relancer
docker stats --no-stream                      # RAM/CPU
docker compose exec app php artisan [cmd]     # Artisan
```

---

## ✅ Phase 8 — Sécurisation Production

### SSL Cloudflare Full (Strict)

```bash
mkdir -p docker/ssl
nano docker/ssl/cert.pem   # Certificat Cloudflare Origin
nano docker/ssl/key.pem    # Clé privée
# Cloudflare → SSL/TLS → Full (strict)
```

### Headers sécurité (nginx.conf)

```nginx
add_header X-Frame-Options           "SAMEORIGIN"                      always;
add_header X-Content-Type-Options    "nosniff"                         always;
add_header X-XSS-Protection          "1; mode=block"                   always;
add_header Referrer-Policy           "strict-origin-when-cross-origin" always;
add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
add_header Content-Security-Policy   "img-src 'self' https://images.unsplash.com data: blob:;" always;
add_header Permissions-Policy        "camera=(), microphone=(), geolocation=(), payment=()" always;
```

### Scores sécurité obtenus

| Outil | Score |
|-------|-------|
| Security Headers | **A** |
| Mozilla Observatory | **B+ (80/100)** — limite Laravel/Livewire |
| SSL Labs | **B** — normal Cloudflare |

---

## ✅ Phase 9 — Admin Filament Production

### Volumes permanents (docker-compose.yml)

```yaml
volumes:
  - ./app:/var/www/html/app
  - ./resources:/var/www/html/resources
  - ./public:/var/www/html/public
  - ./database:/var/www/html/database
  - ./docker/nginx.conf:/etc/nginx/nginx.conf
  - ./docker/ssl:/etc/nginx/ssl
```

### User.php

```php
public function canAccessPanel(Panel $panel): bool
{
    return str_ends_with($this->email, '@digitsahelcloud.com');
}
```

---

## ✅ Phase 10 — CI/CD GitHub Actions

### Fonctionnement

```
git push origin main  →  GitHub Actions  →  SSH EC2
→ git pull + migrate --force + optimize:clear + optimize
→ ✅ Déployé en ~12 secondes
```

### GitHub Secrets

| Secret | Valeur |
|--------|--------|
| `EC2_HOST` | 15.236.9.255 |
| `EC2_USER` | ubuntu |
| `EC2_SSH_KEY` | Clé privée SSH ED25519 |

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

### Sauvegarde automatique (cron 2h du matin)

```bash
# Script : /home/ubuntu/backup.sh
# Sauvegarde MySQL + .env
# Rétention 7 jours
# Log : /home/ubuntu/backups/backup.log
crontab -l  # Vérifier le cron
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
- ✅ Headers HTTP : X-Frame, HSTS, XSS, CSP, Referrer, Permissions-Policy
- ✅ HTTP → HTTPS redirection 301
- ✅ Cookies : secure + httponly + samesite
- ✅ Swap 2GB anti-crash RAM
- ✅ Limites mémoire Docker
- ✅ MySQL innodb optimisé
- ✅ .env, docker/ssl/, .vagrant/ dans .gitignore
- ✅ Sauvegarde MySQL automatique quotidienne

---

## 📞 Contact

**Bachir Abourahamane Aboubacar** — Fondateur & CEO

| | |
|-|-|
| 🌐 | [digitsahelcloud.com](https://digitsahelcloud.com) |
| 📧 | [admin-dsc@digitsahelcloud.com](mailto:admin-dsc@digitsahelcloud.com) |
| 📱 | +227 70810113 |
| 💬 | [WhatsApp](https://wa.me/22770810113) |
| 📍 | Niamey, République du Niger |
| 💻 | [github.com/bacho92/website-digitsahelcloud](https://github.com/bacho92/website-digitsahelcloud) |

---

<div align="center">

**© 2026 DigitSahelCloud — Tous droits réservés**

*Connecter le Niger au monde digital, une organisation à la fois. 🇳🇪*

</div>
