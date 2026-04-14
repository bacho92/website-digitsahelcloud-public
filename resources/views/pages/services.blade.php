@extends('layout.app')

@section('title', 'Nos Services')
@section('description', 'Découvrez tous les services managés de DigitSahelCloud : hébergement cloud, VPN, développement applications, cybersécurité, ERP et conseil digital au Niger.')
@section('og_title', 'Nos Services — DigitSahelCloud')
@section('og_description', '8 services managés complets pour digitaliser votre entreprise au Niger')

@section('content')

{{-- ═══ HERO ═══ --}}
<section style="background:linear-gradient(135deg,#152a6b,#1E388A);
                padding:80px 32px; text-align:center;">
    <div style="max-width:700px; margin:0 auto;">
        <span style="display:inline-block; background:rgba(249,115,22,.15);
                     border:1px solid rgba(249,115,22,.3); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            Nos Services
        </span>
        <h1 style="font-family:'Sora',sans-serif; font-size:3rem;
                    font-weight:800; color:white; margin-bottom:16px;">
            Solutions Digitales <span style="color:#F97316;">Complètes</span>
        </h1>
        <p style="color:rgba(255,255,255,.75); font-size:1.1rem; line-height:1.8;">
            Un seul interlocuteur pour tous vos besoins IT —
            expertise locale certifiée AWS &amp; Azure, support en français,
            tarifs adaptés aux réalités des entreprises nigériennes.
        </p>
    </div>
</section>

{{-- ═══ GRILLE SERVICES ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        @foreach([
            [
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=80',
                'alt'   => 'Serveurs cloud datacenter',
                'title' => 'Hébergement Web & Cloud',
                'color' => '#1E388A',
                'desc'  => 'Hébergez vos sites web, applications et données sur une infrastructure cloud sécurisée et haute disponibilité. DigitSahelCloud s\'appuie sur AWS, Contabo et OVH pour vous garantir des performances de classe mondiale, avec un support local en français et des tarifs adaptés aux réalités des PME nigériennes.',
                'items' => ['Serveurs dédiés et mutualisés','Noms de domaine & DNS managés','CDN & mise en cache avancée','Certificat SSL/TLS automatique','Sauvegardes quotidiennes','Monitoring & alertes 24/7'],
                'badge' => 'Infrastructure AWS + OVH',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=600&q=80',
                'alt'   => 'Réseau VPN interconnexion agences',
                'title' => 'Interconnexion VPN & Agences',
                'color' => '#F97316',
                'desc'  => 'Reliez l\'ensemble de vos agences, bureaux et sites distants via un tunnel VPN sécurisé et haute disponibilité. Notre solution s\'appuie sur AWS Direct Connect et Azure VPN Gateway pour garantir confidentialité, performance et continuité de service — idéal pour les banques, ONG, administrations et chaînes commerciales au Niger.',
                'items' => ['VPN site-à-site via internet','AWS Direct Connect','Azure VPN Gateway','Chiffrement AES-256','Haute disponibilité & redondance','Supervision centralisée 24/7'],
                'badge' => 'Service unique au Niger',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600&q=80',
                'alt'   => 'Développement application web mobile',
                'title' => 'Développement d\'Applications',
                'color' => '#1E388A',
                'desc'  => 'Nous concevons des applications web, mobiles et des ERP sur mesure, parfaitement adaptés à vos processus métier et aux contraintes du contexte local nigérien. Notre stack technique repose sur Laravel, PHP 8.2, MySQL et React — des technologies modernes, robustes et maintenues sur le long terme.',
                'items' => ['Sites web & applications Laravel','Applications mobiles','ERP & logiciels sur mesure','API REST & intégrations tierces','Tests, qualité & documentation','Maintenance évolutive incluse'],
                'badge' => 'Stack Laravel / PHP 8.2',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&q=80',
                'alt'   => 'Cybersécurité protection données',
                'title' => 'Cybersécurité',
                'color' => '#DC2626',
                'desc'  => 'Protégez vos systèmes, vos données et votre réputation face aux menaces numériques croissantes. DigitSahelCloud vous accompagne de l\'audit initial à la mise en place de solutions de protection adaptées, en passant par la sensibilisation de vos équipes — avec une approche alignée sur les réglementations locales et les standards internationaux.',
                'items' => ['Audit de sécurité & cartographie','Pare-feu & IDS/IPS managés','Protection anti-DDoS','Conformité RGPD & réglementations','Formation & sensibilisation équipes','Veille sécurité & rapports mensuels'],
                'badge' => 'Standards internationaux',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80',
                'alt'   => 'ERP gestion entreprise tableau de bord',
                'title' => 'ERP & Gestion d\'Entreprise',
                'color' => '#059669',
                'desc'  => 'Optimisez vos opérations et prenez de meilleures décisions grâce à nos solutions de gestion intégrées, conçues spécifiquement pour les PME et institutions nigériennes. Gestion comptable, stocks, RH, CRM — tout centralisé dans un seul outil, accessible depuis n\'importe quel appareil.',
                'items' => ['Gestion comptable & financière','Gestion des stocks & achats','CRM & suivi clients','RH, paie & présences','Tableaux de bord & KPIs','Rapports automatisés'],
                'badge' => 'Adapté aux PME nigériennes',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1596526131083-e8c633c948d2?w=600&q=80',
                'alt'   => 'Email professionnel messagerie entreprise',
                'title' => 'Email Professionnel',
                'color' => '#0284C7',
                'desc'  => 'Dotez votre organisation d\'une messagerie professionnelle sécurisée avec votre propre nom de domaine (@votreentreprise.com). Notre solution inclut une protection anti-spam avancée, un calendrier partagé, une suite collaborative et une migration sans interruption depuis vos anciens outils — pour une image de marque irréprochable.',
                'items' => ['Email @votredomaine.com','Protection anti-spam avancée','Archivage & recherche emails','Calendrier & contacts partagés','Webmail responsive','Migration depuis ancien système'],
                'badge' => 'Zoho Mail & suite pro',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?w=600&q=80',
                'alt'   => 'Support technique maintenance IT',
                'title' => 'Support & Maintenance IT',
                'color' => '#D97706',
                'desc'  => 'Bénéficiez d\'une assistance technique réactive et d\'une maintenance proactive pour garantir la continuité de vos services informatiques. Notre équipe locale intervient rapidement, en français, avec un SLA garanti par contrat — pour que vous puissiez vous concentrer sur votre cœur de métier sans vous soucier de l\'IT.',
                'items' => ['Support technique 24/7','SLA garanti par contrat','Infogérance complète','Mises à jour & correctifs sécurité','Rapport mensuel d\'activité','Hotline dédiée en français'],
                'badge' => 'Réponse garantie sous 24h',
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1553484771-371a605b060b?w=600&q=80',
                'alt'   => 'Conseil transformation digitale stratégie',
                'title' => 'Conseil en Transformation Digitale',
                'color' => '#7C3AED',
                'desc'  => 'La transformation digitale ne se résume pas à l\'achat d\'outils — c\'est un changement de culture et d\'organisation. DigitSahelCloud vous accompagne de l\'audit numérique initial à la définition de votre feuille de route, en passant par la formation de vos équipes et le suivi de vos indicateurs — pour une transition réussie et durable.',
                'items' => ['Audit numérique de l\'existant','Stratégie & roadmap digitale','Conduite du changement','Formation des équipes','Accompagnement sur mesure','Suivi des KPIs & résultats'],
                'badge' => 'Approche locale & pragmatique',
            ],
        ] as $index => $svc)

        <div style="background:white; border-radius:20px; overflow:hidden;
                    margin-bottom:28px; border:1.5px solid #e2e8f0;
                    display:grid; grid-template-columns:320px 1fr;
                    align-items:stretch; transition:all .3s;"
             onmouseover="this.style.boxShadow='0 12px 40px rgba(30,56,138,.12)';this.style.borderColor='{{ $svc['color'] }}'"
             onmouseout="this.style.boxShadow='none';this.style.borderColor='#e2e8f0'">

            {{-- Image HD --}}
            <div style="position:relative; overflow:hidden; min-height:300px;">
                <img src="{{ $svc['image'] }}"
                     alt="{{ $svc['alt'] }}"
                     loading="lazy"
                     style="width:100%; height:100%; object-fit:cover;
                            display:block; transition:transform .4s ease;">

                {{-- Overlay dégradé coloré --}}
                <div style="position:absolute; inset:0;
                            background:linear-gradient(160deg,
                            {{ $svc['color'] }}BB 0%,
                            {{ $svc['color'] }}33 60%,
                            transparent 100%);">
                </div>

                {{-- Badge --}}
                <div style="position:absolute; top:20px; left:20px; right:20px;">
                    <span style="display:inline-block; background:white;
                                 color:{{ $svc['color'] }}; padding:5px 14px;
                                 border-radius:50px; font-size:11px; font-weight:800;
                                 text-transform:uppercase; letter-spacing:.5px;
                                 box-shadow:0 4px 12px rgba(0,0,0,.2);">
                        ✦ {{ $svc['badge'] }}
                    </span>
                </div>

                {{-- Titre sur image --}}
                <div style="position:absolute; bottom:0; left:0; right:0;
                            padding:20px;
                            background:linear-gradient(0deg, rgba(0,0,0,.7) 0%, transparent 100%);">
                    <h2 style="font-family:'Sora',sans-serif; font-weight:800;
                               font-size:1.2rem; color:white; line-height:1.3;
                               margin:0; text-shadow:0 2px 8px rgba(0,0,0,.4);">
                        {{ $svc['title'] }}
                    </h2>
                </div>
            </div>

            {{-- Contenu --}}
            <div style="padding:36px 40px; display:flex;
                        flex-direction:column; justify-content:space-between;">

                <p style="color:#374151; font-size:14px; line-height:1.9;
                           margin-bottom:24px;">
                    {{ $svc['desc'] }}
                </p>

                <div>
                    <p style="font-family:'Sora',sans-serif; font-size:11px;
                              font-weight:700; color:#9CA3AF; text-transform:uppercase;
                              letter-spacing:1.5px; margin-bottom:14px;">
                        Ce qui est inclus
                    </p>
                    <div style="display:grid; grid-template-columns:repeat(2,1fr);
                                gap:10px; margin-bottom:28px;">
                        @foreach($svc['items'] as $item)
                        <div style="display:flex; align-items:center; gap:8px;">
                            <div style="width:18px; height:18px; border-radius:50%;
                                        background:{{ $svc['color'] }}18;
                                        display:flex; align-items:center;
                                        justify-content:center; flex-shrink:0;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="3"
                                     stroke="{{ $svc['color'] }}" width="10" height="10">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                            </div>
                            <span style="font-size:13px; color:#374151; font-weight:500;">
                                {{ $item }}
                            </span>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('contact') }}"
                       style="display:inline-flex; align-items:center; gap:8px;
                              background:{{ $svc['color'] }}; color:white;
                              font-weight:700; padding:12px 24px; border-radius:10px;
                              text-decoration:none; font-size:14px;
                              box-shadow:0 4px 14px {{ $svc['color'] }}40;
                              transition:all .2s;"
                       onmouseover="this.style.opacity='.88';this.style.transform='translateY(-2px)'"
                       onmouseout="this.style.opacity='1';this.style.transform='none'">
                        Demander un devis
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="2.5"
                             stroke="currentColor" width="14" height="14">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>

{{-- ═══ POURQUOI DIGITSAHELCLOUD ═══ --}}
<section style="padding:60px 32px; background:white;">
    <div style="max-width:1280px; margin:0 auto; text-align:center;">
        <span class="section-tag">Notre différence</span>
        <h2 class="section-title" style="text-align:center; margin-bottom:12px;">
            Pourquoi choisir DigitSahelCloud ?
        </h2>
        <p style="color:#6B7280; font-size:1rem; max-width:600px;
                   margin:0 auto 48px;">
            Premier MSP nigérien certifié AWS &amp; Azure — expertise locale,
            tarifs adaptés, souveraineté numérique.
        </p>
        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;">
            @foreach([
                ['icon'=>'🏆','title'=>'Expertise certifiée',
                 'desc'=>'Partenaire certifié AWS & Azure — une expertise rare au Niger, au service de vos projets.'],
                ['icon'=>'📍','title'=>'Présence locale',
                 'desc'=>'Support en français, connaissance du marché nigérien, réactivité et accompagnement de proximité à Niamey.'],
                ['icon'=>'💰','title'=>'Tarifs adaptés',
                 'desc'=>'Des prix alignés sur les réalités économiques des PME et institutions locales — sans compromis sur la qualité.'],
                ['icon'=>'🔐','title'=>'Souveraineté numérique',
                 'desc'=>'Trajectoire claire : colocation NigerTélécom (2027) puis datacenter souverain DigitSahelCloud (2029+).'],
                ['icon'=>'🔗','title'=>'Interlocuteur unique',
                 'desc'=>'Un seul partenaire pour tous vos besoins IT — cloud, sécurité, développement, support et conseil.'],
                ['icon'=>'🎓','title'=>'Transfert de compétences',
                 'desc'=>'Formation et accompagnement de vos équipes pour une autonomie progressive et durable.'],
            ] as $item)
            <div style="padding:28px; border-radius:16px; border:1.5px solid #e2e8f0;
                        text-align:left; transition:all .3s;"
                 onmouseover="this.style.borderColor='#1E388A';this.style.background='#F8FAFC'"
                 onmouseout="this.style.borderColor='#e2e8f0';this.style.background='white'">
                <div style="font-size:32px; margin-bottom:14px;">{{ $item['icon'] }}</div>
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

{{-- ═══ CTA ═══ --}}
<section style="padding:60px 32px; background:#1E388A; text-align:center;">
    <div style="max-width:600px; margin:0 auto;">
        <h2 style="font-family:'Sora',sans-serif; font-size:2rem;
                    font-weight:800; color:white; margin-bottom:12px;">
            Besoin d'un service sur mesure ?
        </h2>
        <p style="color:rgba(255,255,255,.8); margin-bottom:28px; line-height:1.7;">
            Contactez-nous pour une consultation gratuite.
            Notre équipe analyse votre besoin et vous propose
            la solution la plus adaptée à votre contexte.
        </p>
        <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('contact') }}"
               style="display:inline-block; background:#F97316; color:white;
                      font-weight:800; padding:14px 32px; border-radius:12px;
                      text-decoration:none; font-size:16px;
                      box-shadow:0 4px 16px rgba(249,115,22,.4);">
                Contactez-nous →
            </a>
            <a href="tel:+22770810113"
               style="display:inline-block; background:rgba(255,255,255,.1);
                      border:2px solid rgba(255,255,255,.4); color:white;
                      font-weight:700; padding:14px 32px; border-radius:12px;
                      text-decoration:none; font-size:16px;">
                📱 +227 70810113
            </a>
        </div>
    </div>
</section>

@endsection