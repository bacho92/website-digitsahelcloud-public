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
        ] as $svc)

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
                     style="width:100%; height:100%; object-fit:cover; display:block; transition:transform .4s ease;"
                     onmouseover="this.style.transform='scale(1.05)'"
                     onmouseout="this.style.transform='scale(1)'">
                <div style="position:absolute; inset:0;
                            background:linear-gradient(160deg, {{ $svc['color'] }}BB 0%, {{ $svc['color'] }}33 60%, transparent 100%);">
                </div>
                <div style="position:absolute; top:20px; left:20px; right:20px;">
                    <span style="display:inline-block; background:white;
                                 color:{{ $svc['color'] }}; padding:5px 14px;
                                 border-radius:50px; font-size:11px; font-weight:800;
                                 text-transform:uppercase; letter-spacing:.5px;
                                 box-shadow:0 4px 12px rgba(0,0,0,.2);">
                        ✦ {{ $svc['badge'] }}
                    </span>
                </div>
                <div style="position:absolute; bottom:0; left:0; right:0; padding:20px;
                            background:linear-gradient(0deg, rgba(0,0,0,.7) 0%, transparent 100%);">
                    <h2 style="font-family:'Sora',sans-serif; font-weight:800;
                               font-size:1.2rem; color:white; line-height:1.3;
                               margin:0; text-shadow:0 2px 8px rgba(0,0,0,.4);">
                        {{ $svc['title'] }}
                    </h2>
                </div>
            </div>

            {{-- Contenu --}}
            <div style="padding:36px 40px; display:flex; flex-direction:column; justify-content:space-between;">
                <p style="color:#374151; font-size:14px; line-height:1.9; margin-bottom:24px;">
                    {{ $svc['desc'] }}
                </p>
                <div>
                    <p style="font-family:'Sora',sans-serif; font-size:11px; font-weight:700;
                              color:#9CA3AF; text-transform:uppercase; letter-spacing:1.5px;
                              margin-bottom:14px;">
                        Ce qui est inclus
                    </p>
                    <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:10px; margin-bottom:28px;">
                        @foreach($svc['items'] as $item)
                        <div style="display:flex; align-items:center; gap:8px;">
                            <div style="width:18px; height:18px; border-radius:50%;
                                        background:{{ $svc['color'] }}18;
                                        display:flex; align-items:center;
                                        justify-content:center; flex-shrink:0;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="3"
                                     stroke="{{ $svc['color'] }}" width="10" height="10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                            </div>
                            <span style="font-size:13px; color:#374151; font-weight:500;">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ route('contact') }}"
                       style="display:inline-flex; align-items:center; gap:8px;
                              background:{{ $svc['color'] }}; color:white;
                              font-weight:700; padding:12px 24px; border-radius:10px;
                              text-decoration:none; font-size:14px;
                              box-shadow:0 4px 14px {{ $svc['color'] }}40; transition:all .2s;"
                       onmouseover="this.style.opacity='.88';this.style.transform='translateY(-2px)'"
                       onmouseout="this.style.opacity='1';this.style.transform='none'">
                        Demander un devis
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="2.5"
                             stroke="currentColor" width="14" height="14">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
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
        <p style="color:#6B7280; font-size:1rem; max-width:600px; margin:0 auto 48px;">
            Premier MSP nigérien certifié AWS &amp; Azure — expertise locale,
            tarifs adaptés, souveraineté numérique.
        </p>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;">
            @foreach([
                [
                    'color' => '#1E388A',
                    'title' => 'Expertise certifiée',
                    'desc'  => 'Partenaire certifié AWS & Azure — une expertise rare au Niger, au service de vos projets.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/></svg>',
                ],
                [
                    'color' => '#F97316',
                    'title' => 'Présence locale',
                    'desc'  => 'Support en français, connaissance du marché nigérien, réactivité et accompagnement de proximité à Niamey.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>',
                ],
                [
                    'color' => '#059669',
                    'title' => 'Tarifs adaptés',
                    'desc'  => 'Des prix alignés sur les réalités économiques des PME et institutions locales — sans compromis sur la qualité.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                ],
                [
                    'color' => '#DC2626',
                    'title' => 'Souveraineté numérique',
                    'desc'  => 'Trajectoire claire : colocation NigerTélécom (2027) puis datacenter souverain DigitSahelCloud (2029+).',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>',
                ],
                [
                    'color' => '#7C3AED',
                    'title' => 'Interlocuteur unique',
                    'desc'  => 'Un seul partenaire pour tous vos besoins IT — cloud, sécurité, développement, support et conseil.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>',
                ],
                [
                    'color' => '#0284C7',
                    'title' => 'Transfert de compétences',
                    'desc'  => 'Formation et accompagnement de vos équipes pour une autonomie progressive et durable.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>',
                ],
            ] as $item)
            <div style="padding:28px; border-radius:16px; border:1.5px solid #e2e8f0;
                        text-align:left; transition:all .3s;"
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
