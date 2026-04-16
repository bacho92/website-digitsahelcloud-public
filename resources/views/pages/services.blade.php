@extends('layout.app')

@section('title', 'Nos Services')
@section('description', 'DigitSahelCloud — 12 services IT managés organisés en 3 catégories : Cloud & Infrastructure, Réseaux & Sécurité, Digital & Innovation. Expertise locale certifiée, support 24/7 en français.')
@section('og_title', 'Nos Services — DigitSahelCloud')
@section('og_description', '12 services managés pour digitaliser votre organisation au Niger — Cloud, Réseaux, Sécurité, Digital.')

@section('content')

{{-- ═══ HERO ═══ --}}
<section style="background:linear-gradient(135deg,#152a6b 0%,#1E388A 60%,#2d4fa3 100%);
                padding:60px 32px 0; text-align:center; position:relative; overflow:hidden;">

    {{-- Cercles décoratifs --}}
    <div style="position:absolute; top:-60px; right:-60px; width:300px; height:300px;
                border-radius:50%; background:radial-gradient(circle, rgba(249,115,22,.15) 0%, transparent 70%);"></div>
    <div style="position:absolute; bottom:0; left:10%; width:200px; height:200px;
                border-radius:50%; background:radial-gradient(circle, rgba(255,255,255,.05) 0%, transparent 70%);"></div>

    <div style="max-width:900px; margin:0 auto; position:relative; z-index:1;">
        <span style="display:inline-block; background:rgba(249,115,22,.15);
                     border:1px solid rgba(249,115,22,.3); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            🛠️ Nos Services
        </span>
        <h1 style="font-family:'Sora',sans-serif; font-size:clamp(2rem,4vw,3rem);
                    font-weight:800; color:white; margin-bottom:16px; line-height:1.2;">
            Des Solutions IT pour<br>
            <span style="color:#F97316;">Chaque Besoin</span>
        </h1>
        <p style="color:rgba(255,255,255,.75); font-size:1.05rem; line-height:1.8;
                   max-width:650px; margin:0 auto 40px;">
            Un seul interlocuteur pour tous vos besoins numériques —
            expertise locale certifiée, support en français 24/7
            et tarifs adaptés aux réalités du Sahel.
        </p>

        {{-- Badges catégories --}}
        <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap; margin-bottom:0; padding-bottom:40px;">
            @foreach([
                ['label' => '☁️ Cloud & Infrastructure', 'color' => '#1E388A'],
                ['label' => '🔒 Réseaux & Sécurité',     'color' => '#DC2626'],
                ['label' => '💡 Digital & Innovation',   'color' => '#7C3AED'],
            ] as $cat)
            <span style="background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                         color:white; padding:8px 20px; border-radius:50px;
                         font-size:13px; font-weight:600;">
                {{ $cat['label'] }}
            </span>
            @endforeach
        </div>
    </div>

    {{-- Vague de transition --}}
    <div style="height:60px; background:#F1F5F9; margin-top:0;
                clip-path:ellipse(55% 100% at 50% 100%);"></div>
</section>

{{-- ═══ CATÉGORIE 1 : CLOUD & INFRASTRUCTURE ═══ --}}
<section style="padding:60px 32px 20px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        {{-- En-tête catégorie --}}
        <div style="display:flex; align-items:center; gap:16px; margin-bottom:40px;
                    padding:20px 28px; background:white; border-radius:16px;
                    border-left:5px solid #1E388A;
                    box-shadow:0 2px 12px rgba(30,56,138,.08);">
            <div style="width:56px; height:56px; border-radius:14px; background:#1E388A;
                        display:flex; align-items:center; justify-content:center; flex-shrink:0;
                        box-shadow:0 4px 16px rgba(30,56,138,.3);">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="white" width="28" height="28">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/>
                </svg>
            </div>
            <div>
                <h2 style="font-family:'Sora',sans-serif; font-weight:800; color:#1E388A;
                           font-size:1.5rem; margin:0 0 4px;">☁️ Cloud & Infrastructure</h2>
                <p style="color:#6B7280; font-size:14px; margin:0;">
                    Hébergement haute disponibilité, serveurs managés et infrastructure certifiée
                </p>
            </div>
            <div style="margin-left:auto; background:#EEF2FF; padding:6px 16px;
                        border-radius:50px; font-size:12px; font-weight:700; color:#1E388A;">
                4 services
            </div>
        </div>

        {{-- Services Cloud --}}
        @foreach([
            [
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800&q=90',
                'alt'   => 'Infrastructure cloud haute disponibilité datacenter',
                'title' => 'Hébergement Web & Cloud',
                'color' => '#1E388A',
                'badge' => '✅ Haute disponibilité 99.9%',
                'desc'  => 'Vos sites web, applications et données hébergés sur des infrastructures cloud certifiées haute disponibilité — configurées, sécurisées et monitorées par notre équipe locale. Vous bénéficiez de performances de classe mondiale avec un support de proximité en français et des tarifs adaptés à votre budget.',
                'items' => [
                    'Hébergement web & applications 24/7',
                    'Noms de domaine & DNS managés',
                    'CDN & mise en cache avancée',
                    'Certificats SSL/TLS automatiques',
                    'Sauvegardes quotidiennes chiffrées',
                    'Monitoring & alertes temps réel',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=800&q=90',
                'alt'   => 'Infrastructure cloud managée multi-cloud',
                'title' => 'Infrastructure Cloud Managée',
                'color' => '#2563EB',
                'badge' => '✅ Multi-Cloud certifié',
                'desc'  => 'Déployez et gérez vos ressources cloud sans expertise technique interne. Notre équipe certifiée prend en charge l\'architecture, le déploiement, la sécurisation et l\'optimisation des coûts de votre infrastructure — pour que vous vous concentriez sur votre cœur de métier.',
                'items' => [
                    'Architecture cloud sur mesure',
                    'Déploiement & configuration sécurisée',
                    'Optimisation des coûts cloud',
                    'Scalabilité automatique selon vos besoins',
                    'Gestion des accès & identités (IAM)',
                    'Rapports mensuels de consommation',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=90',
                'alt'   => 'Virtualisation serveurs VMware Hyper-V',
                'title' => 'Virtualisation & Serveurs',
                'color' => '#7C3AED',
                'badge' => '✅ VMware & Hyper-V certifié',
                'desc'  => 'Optimisez vos ressources IT en hébergeant plusieurs environnements sur une seule infrastructure physique ou cloud. Notre expertise en virtualisation vous garantit une réduction significative des coûts, une meilleure disponibilité et une gestion simplifiée de vos systèmes.',
                'items' => [
                    'Virtualisation de serveurs & postes',
                    'Migration vers environnement virtualisé',
                    'Gestion des snapshots & sauvegardes',
                    'Haute disponibilité & basculement automatique',
                    'Dimensionnement & optimisation ressources',
                    'Administration à distance sécurisée',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1596526131083-e8c633c948d2?w=800&q=90',
                'alt'   => 'Email professionnel messagerie sécurisée entreprise',
                'title' => 'Email Professionnel',
                'color' => '#0284C7',
                'badge' => '✅ Anti-spam & conformité RGPD',
                'desc'  => 'Offrez à votre organisation une messagerie professionnelle sécurisée avec votre propre nom de domaine. Solution clé en main incluant protection avancée, suite collaborative, archivage légal et migration sans interruption depuis vos anciens outils.',
                'items' => [
                    'Email @votredomaine.com',
                    'Protection anti-spam & anti-phishing',
                    'Suite collaborative (calendrier, contacts)',
                    'Archivage & recherche avancée',
                    'Webmail responsive & application mobile',
                    'Migration sans interruption de service',
                ],
            ],
        ] as $index => $svc)
        <div style="display:grid; grid-template-columns:380px 1fr; gap:0;
                    background:white; border-radius:20px; overflow:hidden;
                    margin-bottom:24px; box-shadow:0 4px 24px rgba(0,0,0,.06);
                    border:1px solid #e2e8f0;">

            {{-- Image gauche --}}
            <div style="position:relative; min-height:320px; overflow:hidden;">
                <img src="{{ $svc['image'] }}" alt="{{ $svc['alt'] }}"
                     loading="lazy"
                     style="width:100%; height:100%; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0;
                            background:linear-gradient(to top, rgba(0,0,0,.7) 0%, rgba(0,0,0,.2) 50%, transparent 100%);">
                </div>
                <div style="position:absolute; top:16px; left:16px;">
                    <span style="background:{{ $svc['color'] }}; color:white;
                                 padding:6px 14px; border-radius:50px;
                                 font-size:12px; font-weight:700;">
                        {{ $svc['badge'] }}
                    </span>
                </div>
                <div style="position:absolute; bottom:20px; left:20px; right:20px;">
                    <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                               color:white; font-size:1.4rem; margin:0;
                               text-shadow:0 2px 8px rgba(0,0,0,.5);">
                        {{ $svc['title'] }}
                    </h3>
                </div>
            </div>

            {{-- Contenu droite --}}
            <div style="padding:36px;">
                <p style="color:#374151; font-size:15px; line-height:1.8; margin-bottom:24px;">
                    {{ $svc['desc'] }}
                </p>

                <p style="color:#6B7280; font-size:12px; font-weight:700;
                           text-transform:uppercase; letter-spacing:1px; margin-bottom:16px;">
                    Ce qui est inclus
                </p>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-bottom:28px;">
                    @foreach($svc['items'] as $item)
                    <div style="display:flex; align-items:flex-start; gap:10px;">
                        <div style="width:20px; height:20px; border-radius:50%;
                                    background:{{ $svc['color'] }}15; display:flex;
                                    align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2.5" stroke="{{ $svc['color'] }}" width="12" height="12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <span style="color:#374151; font-size:13px; line-height:1.5;">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('contact') }}"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:{{ $svc['color'] }}; color:white;
                          font-weight:700; padding:12px 24px; border-radius:12px;
                          text-decoration:none; font-size:14px;
                          box-shadow:0 4px 12px {{ $svc['color'] }}40;">
                    Demander un devis
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2.5" stroke="white" width="14" height="14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ═══ CATÉGORIE 2 : RÉSEAUX & SÉCURITÉ ═══ --}}
<section style="padding:40px 32px 20px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="display:flex; align-items:center; gap:16px; margin-bottom:40px;
                    padding:20px 28px; background:white; border-radius:16px;
                    border-left:5px solid #DC2626;
                    box-shadow:0 2px 12px rgba(220,38,38,.08);">
            <div style="width:56px; height:56px; border-radius:14px; background:#DC2626;
                        display:flex; align-items:center; justify-content:center; flex-shrink:0;
                        box-shadow:0 4px 16px rgba(220,38,38,.3);">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="white" width="28" height="28">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                </svg>
            </div>
            <div>
                <h2 style="font-family:'Sora',sans-serif; font-weight:800; color:#DC2626;
                           font-size:1.5rem; margin:0 0 4px;">🔒 Réseaux & Sécurité</h2>
                <p style="color:#6B7280; font-size:14px; margin:0;">
                    Connectivité sécurisée, protection avancée et surveillance permanente de vos infrastructures
                </p>
            </div>
            <div style="margin-left:auto; background:#FFF0F0; padding:6px 16px;
                        border-radius:50px; font-size:12px; font-weight:700; color:#DC2626;">
                4 services
            </div>
        </div>

        @foreach([
            [
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=90',
                'alt'   => 'VPN interconnexion agences bureaux sécurisé',
                'title' => 'Interconnexion & Agences',
                'color' => '#F97316',
                'badge' => '✅ Chiffrement AES-256',
                'desc'  => 'Reliez de façon sécurisée l\'ensemble de vos sites, agences et équipes distantes via des tunnels chiffrés haute disponibilité. Notre équipe d\'ingénieurs certifiés déploie, configure et monitore votre connectivité 24/7 depuis notre NOC à Niamey — idéal pour banques, ONG, administrations et réseaux d\'agences.',
                'items' => [
                    'VPN site-à-site inter-agences',
                    'Accès distant sécurisé pour équipes',
                    'Chiffrement bout-en-bout AES-256',
                    'Haute disponibilité & redondance',
                    'Monitoring & supervision NOC 24/7',
                    'SLA garanti par contrat',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1606904825846-647eb07f5be2?w=800&q=90',
                'alt'   => 'Administration réseaux LAN WAN ingénieurs certifiés',
                'title' => 'Administration Réseaux',
                'color' => '#059669',
                'badge' => '✅ Ingénieurs CCNA/CCNP certifiés',
                'desc'  => 'Votre réseau LAN/WAN configuré, optimisé et maintenu par des ingénieurs certifiés. De la conception à l\'exploitation quotidienne, nous assurons la performance, la segmentation et la disponibilité de votre infrastructure réseau — avec des interventions rapides et un support proactif.',
                'items' => [
                    'Conception & audit réseau',
                    'Configuration LAN/WAN & VLAN',
                    'Routage & QoS optimisés',
                    'Administration switches & routeurs',
                    'Segmentation & politique de sécurité réseau',
                    'Intervention sur site à Niamey & régions',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&q=90',
                'alt'   => 'Cybersécurité protection données systèmes',
                'title' => 'Cybersécurité',
                'color' => '#DC2626',
                'badge' => '✅ Standards ISO 27001',
                'desc'  => 'Protégez vos systèmes, données et réputation face aux cybermenaces croissantes. De l\'audit initial à la mise en place de solutions de protection adaptées, notre équipe vous accompagne avec une approche alignée sur les standards internationaux et les réglementations locales.',
                'items' => [
                    'Audit de sécurité & analyse de risques',
                    'Pare-feu & systèmes de détection d\'intrusion',
                    'Protection anti-DDoS & anti-malware',
                    'Gestion des accès & authentification forte',
                    'Formation & sensibilisation de vos équipes',
                    'Veille sécurité & rapports mensuels',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=90',
                'alt'   => 'NOC supervision monitoring infrastructure 24/7',
                'title' => 'Supervision & Monitoring NOC',
                'color' => '#D97706',
                'badge' => '✅ NOC Niamey 24/7',
                'desc'  => 'Votre infrastructure surveillée en permanence depuis notre Centre d\'Opérations Réseau (NOC) à Niamey. Détection proactive des incidents, alertes en temps réel et intervention immédiate — avant que vos activités ne soient impactées. Visibilité complète sur tous vos systèmes depuis un seul tableau de bord.',
                'items' => [
                    'Surveillance continue de l\'infrastructure',
                    'Détection proactive des incidents',
                    'Alertes & escalade automatisées',
                    'Tableau de bord de disponibilité',
                    'Métriques de performance en temps réel',
                    'Rapports mensuels détaillés',
                ],
            ],
        ] as $svc)
        <div style="display:grid; grid-template-columns:380px 1fr; gap:0;
                    background:white; border-radius:20px; overflow:hidden;
                    margin-bottom:24px; box-shadow:0 4px 24px rgba(0,0,0,.06);
                    border:1px solid #e2e8f0;">
            <div style="position:relative; min-height:320px; overflow:hidden;">
                <img src="{{ $svc['image'] }}" alt="{{ $svc['alt'] }}"
                     loading="lazy"
                     style="width:100%; height:100%; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0;
                            background:linear-gradient(to top, rgba(0,0,0,.7) 0%, rgba(0,0,0,.2) 50%, transparent 100%);">
                </div>
                <div style="position:absolute; top:16px; left:16px;">
                    <span style="background:{{ $svc['color'] }}; color:white;
                                 padding:6px 14px; border-radius:50px;
                                 font-size:12px; font-weight:700;">
                        {{ $svc['badge'] }}
                    </span>
                </div>
                <div style="position:absolute; bottom:20px; left:20px; right:20px;">
                    <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                               color:white; font-size:1.4rem; margin:0;
                               text-shadow:0 2px 8px rgba(0,0,0,.5);">
                        {{ $svc['title'] }}
                    </h3>
                </div>
            </div>
            <div style="padding:36px;">
                <p style="color:#374151; font-size:15px; line-height:1.8; margin-bottom:24px;">
                    {{ $svc['desc'] }}
                </p>
                <p style="color:#6B7280; font-size:12px; font-weight:700;
                           text-transform:uppercase; letter-spacing:1px; margin-bottom:16px;">
                    Ce qui est inclus
                </p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-bottom:28px;">
                    @foreach($svc['items'] as $item)
                    <div style="display:flex; align-items:flex-start; gap:10px;">
                        <div style="width:20px; height:20px; border-radius:50%;
                                    background:{{ $svc['color'] }}15; display:flex;
                                    align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2.5" stroke="{{ $svc['color'] }}" width="12" height="12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <span style="color:#374151; font-size:13px; line-height:1.5;">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:{{ $svc['color'] }}; color:white;
                          font-weight:700; padding:12px 24px; border-radius:12px;
                          text-decoration:none; font-size:14px;
                          box-shadow:0 4px 12px {{ $svc['color'] }}40;">
                    Demander un devis
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2.5" stroke="white" width="14" height="14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ═══ CATÉGORIE 3 : DIGITAL & INNOVATION ═══ --}}
<section style="padding:40px 32px 60px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="display:flex; align-items:center; gap:16px; margin-bottom:40px;
                    padding:20px 28px; background:white; border-radius:16px;
                    border-left:5px solid #7C3AED;
                    box-shadow:0 2px 12px rgba(124,58,237,.08);">
            <div style="width:56px; height:56px; border-radius:14px; background:#7C3AED;
                        display:flex; align-items:center; justify-content:center; flex-shrink:0;
                        box-shadow:0 4px 16px rgba(124,58,237,.3);">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="white" width="28" height="28">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z"/>
                </svg>
            </div>
            <div>
                <h2 style="font-family:'Sora',sans-serif; font-weight:800; color:#7C3AED;
                           font-size:1.5rem; margin:0 0 4px;">💡 Digital & Innovation</h2>
                <p style="color:#6B7280; font-size:14px; margin:0;">
                    Développement, gestion intégrée et transformation numérique de votre organisation
                </p>
            </div>
            <div style="margin-left:auto; background:#F5F3FF; padding:6px 16px;
                        border-radius:50px; font-size:12px; font-weight:700; color:#7C3AED;">
                4 services
            </div>
        </div>

        @foreach([
            [
                'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=800&q=90',
                'alt'   => 'Développement applications web mobile sur mesure',
                'title' => 'Développement Applications',
                'color' => '#7C3AED',
                'badge' => '✅ Livraison dans les délais',
                'desc'  => 'Des applications web, mobiles et métiers conçues sur mesure pour vos processus, adaptées aux contraintes du contexte local. Notre approche DevOps garantit des livraisons rapides, une qualité irréprochable et une maintenance évolutive sur le long terme.',
                'items' => [
                    'Sites web & applications sur mesure',
                    'Applications mobiles iOS & Android',
                    'APIs REST & intégrations systèmes',
                    'Pipeline CI/CD & déploiement automatisé',
                    'Tests, qualité & documentation complète',
                    'Maintenance évolutive & support inclus',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=90',
                'alt'   => 'ERP gestion entreprise tableau de bord analytique',
                'title' => 'ERP & Gestion d\'Entreprise',
                'color' => '#059669',
                'badge' => '✅ Adapté aux organisations locales',
                'desc'  => 'Pilotez l\'ensemble de votre organisation depuis un seul tableau de bord intelligent — comptabilité, stocks, ressources humaines et CRM intégrés. Solution configurée selon vos processus métier, accessible depuis n\'importe quel appareil, avec formation de vos équipes incluse.',
                'items' => [
                    'Gestion comptable & financière',
                    'Gestion des stocks & achats',
                    'CRM & suivi des opportunités',
                    'RH, paie & gestion des présences',
                    'Tableaux de bord & KPIs temps réel',
                    'Formation & accompagnement équipes',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?w=800&q=90',
                'alt'   => 'Support maintenance IT infogérance assistance technique',
                'title' => 'Support & Maintenance IT',
                'color' => '#D97706',
                'badge' => '✅ SLA garanti par contrat',
                'desc'  => 'Votre informatique entre de bonnes mains — intervention rapide, maintenance proactive et rapport mensuel inclus. Notre équipe locale à Niamey assure la continuité de vos services pour que vous vous concentriez sur votre cœur de métier sans vous soucier de l\'IT.',
                'items' => [
                    'Support technique en français 24/7',
                    'SLA garanti & temps de réponse défini',
                    'Infogérance complète ou partielle',
                    'Mises à jour & correctifs de sécurité',
                    'Rapport mensuel d\'activité détaillé',
                    'Hotline dédiée & ticketing',
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1553484771-371a605b060b?w=800&q=90',
                'alt'   => 'Conseil transformation digitale stratégie IA innovation',
                'title' => 'Conseil & Transformation Digitale',
                'color' => '#BE185D',
                'badge' => '✅ IA & Automatisation incluses',
                'desc'  => 'Accompagnez votre organisation dans sa transformation numérique avec une approche stratégique et opérationnelle. De l\'audit initial à la feuille de route digitale, en passant par la formation de vos équipes et l\'intégration discrète de l\'intelligence artificielle dans vos processus métier.',
                'items' => [
                    'Audit & stratégie de transformation digitale',
                    'Feuille de route numérique personnalisée',
                    'Formation & montée en compétences équipes',
                    'Automatisation des processus répétitifs',
                    'Intégration de l\'IA dans vos workflows',
                    'Accompagnement & suivi de la transformation',
                ],
            ],
        ] as $svc)
        <div style="display:grid; grid-template-columns:380px 1fr; gap:0;
                    background:white; border-radius:20px; overflow:hidden;
                    margin-bottom:24px; box-shadow:0 4px 24px rgba(0,0,0,.06);
                    border:1px solid #e2e8f0;">
            <div style="position:relative; min-height:320px; overflow:hidden;">
                <img src="{{ $svc['image'] }}" alt="{{ $svc['alt'] }}"
                     loading="lazy"
                     style="width:100%; height:100%; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0;
                            background:linear-gradient(to top, rgba(0,0,0,.7) 0%, rgba(0,0,0,.2) 50%, transparent 100%);">
                </div>
                <div style="position:absolute; top:16px; left:16px;">
                    <span style="background:{{ $svc['color'] }}; color:white;
                                 padding:6px 14px; border-radius:50px;
                                 font-size:12px; font-weight:700;">
                        {{ $svc['badge'] }}
                    </span>
                </div>
                <div style="position:absolute; bottom:20px; left:20px; right:20px;">
                    <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                               color:white; font-size:1.4rem; margin:0;
                               text-shadow:0 2px 8px rgba(0,0,0,.5);">
                        {{ $svc['title'] }}
                    </h3>
                </div>
            </div>
            <div style="padding:36px;">
                <p style="color:#374151; font-size:15px; line-height:1.8; margin-bottom:24px;">
                    {{ $svc['desc'] }}
                </p>
                <p style="color:#6B7280; font-size:12px; font-weight:700;
                           text-transform:uppercase; letter-spacing:1px; margin-bottom:16px;">
                    Ce qui est inclus
                </p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-bottom:28px;">
                    @foreach($svc['items'] as $item)
                    <div style="display:flex; align-items:flex-start; gap:10px;">
                        <div style="width:20px; height:20px; border-radius:50%;
                                    background:{{ $svc['color'] }}15; display:flex;
                                    align-items:center; justify-content:center; flex-shrink:0; margin-top:2px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2.5" stroke="{{ $svc['color'] }}" width="12" height="12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <span style="color:#374151; font-size:13px; line-height:1.5;">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('contact') }}"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:{{ $svc['color'] }}; color:white;
                          font-weight:700; padding:12px 24px; border-radius:12px;
                          text-decoration:none; font-size:14px;
                          box-shadow:0 4px 12px {{ $svc['color'] }}40;">
                    Demander un devis
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2.5" stroke="white" width="14" height="14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ═══ POURQUOI NOUS ═══ --}}
<section style="padding:80px 32px; background:white;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">Notre différence</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; color:#1E388A; margin-bottom:16px;">
                Pourquoi choisir DigitSahelCloud ?
            </h2>
            <p style="color:#6B7280; font-size:1rem; max-width:600px; margin:0 auto; line-height:1.7;">
                Une équipe d'ingénieurs certifiés, une culture DevOps éprouvée et
                une expertise rare au Niger — au service de votre transformation numérique.
            </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;">
            @foreach([
                [
                    'color' => '#1E388A',
                    'title' => 'Expertise Certifiée & Multi-domaines',
                    'desc'  => 'Certifications AWS, Azure, Kubernetes, CCNA/CCNP, VMware — une expertise rare au Niger couvrant cloud, réseaux, sécurité et DevOps. Ingénieurs formés en France et à l\'international, au service de vos projets locaux.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/></svg>',
                ],
                [
                    'color' => '#F97316',
                    'title' => 'Culture DevOps & Automatisation',
                    'desc'  => 'CI/CD pipelines, Infrastructure-as-Code, conteneurisation Docker/Kubernetes — nous apportons les meilleures pratiques DevOps mondiales à vos projets au Niger. Déploiements rapides, stables et reproductibles.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z"/></svg>',
                ],
                [
                    'color' => '#059669',
                    'title' => 'Proximité & Support Local 24/7',
                    'desc'  => 'Basés à Niamey, nos ingénieurs interviennent sur site rapidement. Support en français 24/7, connaissance du marché local et réactivité de proximité — pour une relation de confiance durable.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>',
                ],
                [
                    'color' => '#DC2626',
                    'title' => 'Engagement Souverain',
                    'desc'  => 'Trajectoire claire vers la souveraineté numérique — infrastructure locale au Niger à moyen terme, partenariats régionaux en Afrique de l\'Ouest à long terme. Vos données sous contrat de droit nigérien dès aujourd\'hui.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>',
                ],
                [
                    'color' => '#7C3AED',
                    'title' => 'Interlocuteur Unique & Solution Intégrée',
                    'desc'  => 'Cloud, réseaux, sécurité, développement, support — un seul partenaire gère tout votre IT. Fini les multiples prestataires et les incompréhensions entre équipes.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>',
                ],
                [
                    'color' => '#0284C7',
                    'title' => 'Transfert de Compétences & Formation',
                    'desc'  => 'Formateur universitaire et ingénieur certifié, notre fondateur s\'engage personnellement dans la montée en compétences de vos équipes — pour une autonomie progressive et durable.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>',
                ],
            ] as $item)
            <div style="padding:28px; border-radius:16px; border:1.5px solid #e2e8f0;
                        transition:all .3s;"
                 onmouseover="this.style.borderColor='{{ $item['color'] }}';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 24px rgba(0,0,0,.08)'"
                 onmouseout="this.style.borderColor='#e2e8f0';this.style.transform='none';this.style.boxShadow='none'">
                <div style="width:72px; height:72px; border-radius:20px;
                            background:{{ $item['color'] }}; display:flex;
                            align-items:center; justify-content:center;
                            margin-bottom:20px;
                            box-shadow:0 8px 24px {{ $item['color'] }}40;">
                    {!! $item['svg'] !!}
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:700;
                           color:#1E388A; font-size:15px; margin-bottom:8px;">
                    {{ $item['title'] }}
                </h3>
                <p style="color:#6B7280; font-size:13.5px; line-height:1.7;">
                    {{ $item['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ CTA FINAL ═══ --}}
<section style="padding:80px 32px; background:linear-gradient(135deg,#152a6b,#1E388A); text-align:center; position:relative; overflow:hidden;">
    <div style="position:absolute; top:-40px; right:-40px; width:200px; height:200px;
                border-radius:50%; background:radial-gradient(circle, rgba(249,115,22,.2) 0%, transparent 70%);"></div>
    <div style="position:absolute; bottom:-40px; left:-40px; width:200px; height:200px;
                border-radius:50%; background:radial-gradient(circle, rgba(255,255,255,.05) 0%, transparent 70%);"></div>

    <div style="max-width:700px; margin:0 auto; position:relative; z-index:1;">
        <span style="display:inline-block; background:rgba(249,115,22,.2);
                     border:1px solid rgba(249,115,22,.4); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            🚀 Passez à l'action
        </span>
        <h2 style="font-family:'Sora',sans-serif; font-size:2.4rem;
                    font-weight:800; color:white; margin-bottom:16px; line-height:1.2;">
            Un Projet ? <span style="color:#F97316;">Parlons-en.</span>
        </h2>
        <p style="color:rgba(255,255,255,.8); font-size:1.05rem;
                   line-height:1.7; margin-bottom:40px; max-width:560px; margin-left:auto; margin-right:auto;">
            Notre équipe analyse votre situation et vous accompagne
            vers la solution la plus adaptée à vos objectifs.
            Réponse garantie sous 24h.
        </p>
        <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('contact') }}"
               style="display:inline-flex; align-items:center; gap:8px;
                      background:#F97316; color:white;
                      font-weight:800; padding:16px 36px; border-radius:14px;
                      text-decoration:none; font-size:16px;
                      box-shadow:0 6px 24px rgba(249,115,22,.5);">
                Prendre contact →
            </a>
            <a href="tel:+22770810113"
               style="display:inline-flex; align-items:center; gap:8px;
                      background:rgba(255,255,255,.1);
                      border:2px solid rgba(255,255,255,.3); color:white;
                      font-weight:700; padding:16px 36px; border-radius:14px;
                      text-decoration:none; font-size:16px;">
                📱 +227 70810113
            </a>
        </div>
    </div>
</section>

@endsection