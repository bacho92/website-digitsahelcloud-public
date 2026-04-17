@extends('layout.app')

@section('title', 'À propos — DigitSahelCloud')
@section('description', 'DigitSahelCloud — Premier MSP nigérien fondé par un ingénieur certifié AWS, Azure, CCNP et Kubernetes. Notre histoire, notre vision et notre engagement pour la souveraineté numérique du Niger.')
@section('og_title', 'À propos — DigitSahelCloud')
@section('og_description', 'Notre histoire, vision, mission et équipe — DigitSahelCloud, MSP local à Niamey, Niger.')

@section('content')

<style>
@media (max-width: 768px) {
    .about-vm-grid { grid-template-columns: 1fr !important; }
    .about-team-grid { grid-template-columns: 1fr !important; }
    .about-stats-grid { grid-template-columns: 1fr 1fr !important; }
    .about-val-grid { grid-template-columns: 1fr 1fr !important; }
    .about-cert-grid { grid-template-columns: 1fr 1fr !important; }
    .about-road-grid { grid-template-columns: 1fr !important; }
}
@media (max-width: 480px) {
    .about-val-grid { grid-template-columns: 1fr !important; }
    .about-cert-grid { grid-template-columns: 1fr !important; }
}
</style>

{{-- ═══ HERO ═══ --}}
<section style="background:linear-gradient(135deg,#152a6b 0%,#1E388A 60%,#2d4fa3 100%);
                padding:80px 32px 0; text-align:center; position:relative; overflow:hidden;">

    <div style="position:absolute; top:-80px; right:-80px; width:350px; height:350px;
                border-radius:50%; background:radial-gradient(circle, rgba(249,115,22,.2) 0%, transparent 70%);"></div>
    <div style="position:absolute; top:20%; left:-60px; width:200px; height:200px;
                border-radius:50%; background:radial-gradient(circle, rgba(255,255,255,.05) 0%, transparent 70%);"></div>

    <div style="max-width:800px; margin:0 auto; position:relative; z-index:1; padding-bottom:60px;">
        <span style="display:inline-block; background:rgba(249,115,22,.15);
                     border:1px solid rgba(249,115,22,.3); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            🇳🇪 Notre Histoire
        </span>
        <h1 style="font-family:'Sora',sans-serif; font-size:clamp(2rem,4vw,3.2rem);
                    font-weight:800; color:white; margin-bottom:20px; line-height:1.2;">
            Connecter le Niger<br>
            <span style="color:#F97316;">au Monde Digital</span>
        </h1>
        <p style="color:rgba(255,255,255,.75); font-size:1.05rem; line-height:1.8;
                   max-width:650px; margin:0 auto;">
            DigitSahelCloud est né d'une conviction simple — les entreprises,
            institutions et ONG nigériennes méritent des solutions IT locales,
            fiables et à la hauteur des standards internationaux.
        </p>
    </div>

    {{-- Vague bas hero --}}
    <div style="line-height:0;">
        <svg viewBox="0 0 1440 70" xmlns="http://www.w3.org/2000/svg"
             preserveAspectRatio="none" style="display:block; width:100%; height:70px;">
            <path d="M0,70 C360,0 1080,0 1440,70 L1440,70 L0,70 Z" fill="#F1F5F9"/>
        </svg>
    </div>
</section>

{{-- ═══ HISTOIRE + IMAGE ═══ --}}
<section style="padding:60px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">
        <div class="about-vm-grid" style="display:grid; grid-template-columns:1fr 1fr; gap:48px; align-items:center;">

            {{-- Image 3D --}}
            <div style="border-radius:24px; overflow:hidden;
                        box-shadow:0 24px 64px rgba(30,56,138,.2); position:relative;">
                <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=800&q=90"
                     alt="Technologie digitale innovation Afrique réseau"
                     style="width:100%; height:420px; object-fit:cover; display:block;">
                <div style="position:absolute; inset:0;
                            background:linear-gradient(to top, rgba(21,42,107,.8) 0%, transparent 60%);">
                </div>
                <div style="position:absolute; bottom:24px; left:24px; right:24px;">
                    <div style="background:rgba(249,115,22,.9); border-radius:12px;
                                padding:16px 20px; backdrop-filter:blur(10px);">
                        <p style="color:white; font-family:'Sora',sans-serif; font-weight:700;
                                   font-size:14px; margin:0; font-style:italic;">
                            "Digitaliser le Sahel, une organisation à la fois."
                        </p>
                        <p style="color:rgba(255,255,255,.8); font-size:12px; margin:4px 0 0;">
                            — Bachir Abourahamane, Fondateur & CEO
                        </p>
                    </div>
                </div>
            </div>

            {{-- Texte histoire --}}
            <div>
                <span style="color:#F97316; font-size:13px; font-weight:700;
                             text-transform:uppercase; letter-spacing:1.5px;
                             display:block; margin-bottom:12px;">Notre histoire</span>
                <h2 style="font-family:'Sora',sans-serif; font-size:2rem;
                            font-weight:800; color:#1E388A; margin-bottom:20px; line-height:1.2;">
                    Pourquoi DigitSahelCloud ?
                </h2>
                <p style="color:#374151; font-size:15px; line-height:1.8; margin-bottom:16px;">
                    Fort de plus de 5 ans d'expérience en ingénierie réseaux et systèmes, supervision 
                    NOC et infrastructure cloud au Niger et à l'international, notre fondateur a
                    constaté un manque criant : les organisations nigériennes n'avaient pas accès
                    à des services IT managés locaux, fiables et abordables.
                </p>
                <p style="color:#374151; font-size:15px; line-height:1.8; margin-bottom:24px;">
                    DigitSahelCloud est la réponse à ce besoin — un MSP 100% nigérien,
                    avec une expertise certifiée AWS, Azure, Kubernetes et CCNP,
                    capable de rivaliser avec les meilleures solutions internationales
                    tout en restant ancré dans les réalités locales.
                </p>
                <div style="display:flex; gap:16px; flex-wrap:wrap;">
                    @foreach(['Fondé en 2026','Basé à Niamey','Certifié AWS & Azure','CCNP & Kubernetes'] as $tag)
                    <span style="background:white; border:1.5px solid #1E388A20;
                                 color:#1E388A; padding:6px 16px; border-radius:50px;
                                 font-size:12px; font-weight:700;">
                        ✓ {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Vague --}}
<div style="background:#F1F5F9; line-height:0;">
    <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg"
         preserveAspectRatio="none" style="display:block; width:100%; height:60px;">
        <path d="M0,60 C360,0 1080,0 1440,60 L1440,60 L0,60 Z" fill="white"/>
    </svg>
</div>

{{-- ═══ VISION & MISSION ═══ --}}
<section style="padding:60px 32px 80px; background:white;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:48px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">Ce qui nous anime</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; color:#1E388A;">Vision & Mission</h2>
        </div>

        <div class="about-vm-grid" style="display:grid; grid-template-columns:1fr 1fr; gap:24px; margin-bottom:48px;">
            <div style="background:linear-gradient(135deg,#EEF2FF,#F8FAFF); border-radius:20px; padding:40px;
                        border-left:5px solid #1E388A; position:relative; overflow:hidden;">
                <div style="position:absolute; top:-20px; right:-20px; width:120px; height:120px;
                            border-radius:50%; background:rgba(30,56,138,.05);"></div>
                <div style="font-size:40px; margin-bottom:16px;">🎯</div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#1E388A; font-size:1.4rem; margin-bottom:16px;">
                    Notre Vision
                </h3>
                <p style="color:#374151; font-size:15px; line-height:1.8;">
                    Devenir le premier fournisseur de services cloud et d'infrastructure
                    digitale de confiance au Niger et dans la sous-région sahélienne —
                    en contribuant activement à la souveraineté numérique de l'Afrique
                    de l'Ouest.
                </p>
            </div>

            <div style="background:linear-gradient(135deg,#FFF7ED,#FFFBF5); border-radius:20px; padding:40px;
                        border-left:5px solid #F97316; position:relative; overflow:hidden;">
                <div style="position:absolute; top:-20px; right:-20px; width:120px; height:120px;
                            border-radius:50%; background:rgba(249,115,22,.05);"></div>
                <div style="font-size:40px; margin-bottom:16px;">🚀</div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#F97316; font-size:1.4rem; margin-bottom:16px;">
                    Notre Mission
                </h3>
                <p style="color:#374151; font-size:15px; line-height:1.8;">
                    Accompagner la digitalisation des organisations nigériennes avec
                    des solutions fiables, souveraines et adaptées au contexte local —
                    à des tarifs accessibles, avec un support de proximité
                    disponible 24/7 en français.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ═══ VALEURS ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">Ce qui nous guide</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; color:#1E388A; margin-bottom:16px;">
                Nos Valeurs
            </h2>
        </div>

        <div class="about-val-grid" style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px;">
            @foreach([
                ['icon'=>'🤝','color'=>'#1E388A','title'=>'Proximité',
                 'desc'=>'Basés à Niamey, nos ingénieurs interviennent rapidement sur site. Support en français 24/7, connaissance du marché local.'],
                ['icon'=>'🔒','color'=>'#DC2626','title'=>'Confiance',
                 'desc'=>'Sécurité et fiabilité au cœur de chaque solution. SLA contractuel, chiffrement bout-en-bout et conformité aux standards internationaux.'],
                ['icon'=>'💡','color'=>'#F97316','title'=>'Innovation',
                 'desc'=>'Les meilleures technologies mondiales — cloud, DevOps, IA — adaptées aux réalités et contraintes du contexte nigérien.'],
                ['icon'=>'🌍','color'=>'#059669','title'=>'Impact',
                 'desc'=>'Chaque projet contribue au développement numérique du Niger et à la souveraineté digitale de l\'Afrique de l\'Ouest.'],
            ] as $val)
            <div style="text-align:center; padding:32px 20px; border-radius:20px;
                        background:white; border:1.5px solid #e2e8f0; transition:all .3s;"
                 onmouseover="this.style.borderColor='{{ $val['color'] }}';this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(0,0,0,.08)'"
                 onmouseout="this.style.borderColor='#e2e8f0';this.style.transform='none';this.style.boxShadow='none'">
                <div style="width:64px; height:64px; border-radius:20px;
                            background:{{ $val['color'] }}15; display:flex; align-items:center;
                            justify-content:center; font-size:32px; margin:0 auto 20px;
                            border:1px solid {{ $val['color'] }}30;">
                    {{ $val['icon'] }}
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:{{ $val['color'] }}; font-size:1.1rem; margin-bottom:12px;">
                    {{ $val['title'] }}
                </h3>
                <p style="color:#6B7280; font-size:13px; line-height:1.7;">
                    {{ $val['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Vague --}}
<div style="background:#F1F5F9; line-height:0;">
    <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg"
         preserveAspectRatio="none" style="display:block; width:100%; height:60px;">
        <path d="M0,0 C360,60 1080,60 1440,0 L1440,60 L0,60 Z" fill="white"/>
    </svg>
</div>

{{-- ═══ FONDATEUR ═══ --}}
<section style="padding:60px 32px 80px; background:white;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">L'équipe</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; color:#1E388A;">
                Le Fondateur
            </h2>
        </div>

        <div class="about-team-grid" style="display:grid; grid-template-columns:1fr 1.6fr; gap:48px; align-items:start;">

            {{-- Card fondateur --}}
            <div style="background:linear-gradient(135deg,#F8FAFF,#EEF2FF); border-radius:24px;
                        padding:40px; text-align:center; border:1.5px solid #1E388A20;
                        box-shadow:0 8px 32px rgba(30,56,138,.08);">
                <div style="width:120px; height:120px; border-radius:50%;
                            background:linear-gradient(135deg,#1E388A,#2d4fa3);
                            margin:0 auto 20px; display:flex; align-items:center;
                            justify-content:center; font-size:52px;
                            box-shadow:0 8px 32px rgba(30,56,138,.3);">
                    👨‍💼
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#1E388A; font-size:1.2rem; margin-bottom:4px;">
                    Bachir Abourahamane
                </h3>
                <p style="color:#F97316; font-weight:700; font-size:13px;
                           margin-bottom:4px; text-transform:uppercase; letter-spacing:.5px;">
                    Fondateur & CEO
                </p>
                <p style="color:#6B7280; font-size:12px; margin-bottom:20px;">
                    Ingénieur Réseaux & Systèmes | NOC | Cloud & DevOps
                </p>

                {{-- Certifications badges --}}
                <div style="margin-bottom:20px;">
                    <p style="color:#6B7280; font-size:11px; font-weight:700;
                               text-transform:uppercase; letter-spacing:1px; margin-bottom:10px;">
                        Certifications
                    </p>
                    <div class="about-cert-grid" style="display:grid; grid-template-columns:1fr 1fr; gap:8px; text-align:left;">
                        @foreach([
                            ['AWS Cloud Practitioner - Solutions Architect (en cours)','#FF9900'],
                            ['Azure AZ-900 - Azure-104 (en cours)','#0078D4'],
                            ['Linux Foundation LFS158x (Kuberntes)','#FCC624'],
                            ['CCNA v7 & CCNP ENCOR','#1BA0D7'],
                            ['Microsoft MSCA 2016','#0078D4'],
                            ['CKA (en cours)','#326CE5'],
                        ] as $cert)
                        <div style="background:white; border-radius:8px; padding:8px 10px;
                                    border:1px solid #e2e8f0; display:flex; align-items:center; gap:6px;">
                            <div style="width:8px; height:8px; border-radius:50%;
                                        background:{{ $cert[1] }}; flex-shrink:0;"></div>
                            <span style="font-size:10px; font-weight:600; color:#374151; line-height:1.3;">
                                {{ $cert[0] }}
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div style="display:flex; gap:8px; justify-content:center; flex-wrap:wrap;">
                    <a href="mailto:admin-dsc@digitsahelcloud.com"
                       style="background:#1E388A; color:white; padding:8px 16px;
                              border-radius:8px; font-size:12px; font-weight:700;
                              text-decoration:none; display:inline-flex; align-items:center; gap:6px;">
                        ✉️ Email
                    </a>
                    <a href="tel:+22770810113"
                       style="background:#25D366; color:white; padding:8px 16px;
                              border-radius:8px; font-size:12px; font-weight:700;
                              text-decoration:none; display:inline-flex; align-items:center; gap:6px;">
                        📱 WhatsApp
                    </a>
                </div>
            </div>

            {{-- Expertise détaillée --}}
            <div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#1E388A; font-size:1.4rem; margin-bottom:8px;">
                    Une expertise rare au Niger
                </h3>
                <p style="color:#6B7280; font-size:14px; margin-bottom:28px; line-height:1.7;">
                    Plus de 5 ans d'expérience dans des environnements IT critiques —
                    télécoms, ONG, institutions publiques et privées — au Niger et à l'international.
                </p>

                {{-- Expériences --}}
                <div style="margin-bottom:32px;">
                    @foreach([
                        [
                            'period' => 'Oct. 2024 — Aujourd\'hui',
                            'role'   => 'Ingénieur Réseau Core & Superviseur NOC',
                            'org'    => 'Global Data Services (GDS) — Niamey',
                            'color'  => '#1E388A',
                            'tasks'  => ['Supervision réseau cœur MPLS', 'Administration VMware & Hyper-V', 'Gestion incidents & sécurité proactive'],
                        ],
                        [
                            'period' => 'Juin 2023 — Sept. 2024',
                            'role'   => 'Superviseur NOC — Freelance',
                            'org'    => 'BringCom, USA (Télétravail)',
                            'color'  => '#F97316',
                            'tasks'  => ['Supervision NOC réseau MPLS international', 'Déploiement fibre optique Niamey & Agadez'],
                        ],
                        [
                            'period' => '2020 — Aujourd\'hui',
                            'role'   => 'Enseignant vacataire & Formateur IT',
                            'org'    => 'Universités nigériennes (EPN, UIN, Djibo Hamani)',
                            'color'  => '#7C3AED',
                            'tasks'  => ['Formations réseaux, systèmes & Cloud', 'Administration Windows Server & VMware ESXi'],
                        ],
                    ] as $exp)
                    <div style="display:flex; gap:16px; margin-bottom:24px;">
                        <div style="flex-shrink:0; display:flex; flex-direction:column; align-items:center;">
                            <div style="width:14px; height:14px; border-radius:50%;
                                        background:{{ $exp['color'] }}; margin-top:4px;
                                        box-shadow:0 0 0 4px {{ $exp['color'] }}20;"></div>
                            <div style="width:2px; flex:1; background:#e2e8f0; margin:6px 0;"></div>
                        </div>
                        <div style="padding-bottom:8px;">
                            <span style="background:{{ $exp['color'] }}15; color:{{ $exp['color'] }};
                                         border:1px solid {{ $exp['color'] }}30;
                                         padding:2px 10px; border-radius:50px;
                                         font-size:11px; font-weight:700; display:inline-block; margin-bottom:6px;">
                                {{ $exp['period'] }}
                            </span>
                            <h4 style="font-family:'Sora',sans-serif; font-weight:700;
                                       color:#1E388A; font-size:14px; margin:4px 0;">
                                {{ $exp['role'] }}
                            </h4>
                            <p style="color:#F97316; font-size:12px; font-weight:600; margin:0 0 8px;">
                                {{ $exp['org'] }}
                            </p>
                            <div style="display:flex; flex-direction:column; gap:4px;">
                                @foreach($exp['tasks'] as $task)
                                <div style="display:flex; align-items:center; gap:8px;">
                                    <div style="width:5px; height:5px; border-radius:50%;
                                                background:{{ $exp['color'] }}; flex-shrink:0;"></div>
                                    <span style="color:#6B7280; font-size:13px;">{{ $task }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Compétences techniques --}}
                <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#1E388A; font-size:14px; margin-bottom:12px;
                           text-transform:uppercase; letter-spacing:.5px;">
                    Domaines d'expertise
                </h4>
                <div style="display:flex; flex-wrap:wrap; gap:8px;">
                    @foreach([
                        ['Cloud Multi-Cloud (AWS/Azure)','#FF9900'],
                        ['DevOps & CI/CD','#326CE5'],
                        ['Kubernetes & Docker','#326CE5'],
                        ['Réseaux MPLS/BGP/OSPF','#1BA0D7'],
                        ['VPN IPSec & SSL','#F97316'],
                        ['Cybersécurité','#DC2626'],
                        ['VMware & Hyper-V','#607078'],
                        ['Supervision NOC','#059669'],
                        ['Windows Server & M365','#0078D4'],
                        ['Linux Ubuntu/Debian','#FCC624'],
                        ['Terraform & Ansible','#7C3AED'],
                        ['Développement Laravel','#FF2D20'],
                    ] as $skill)
                    <span style="background:{{ $skill[1] }}15; color:{{ $skill[1] }};
                                 border:1px solid {{ $skill[1] }}30;
                                 padding:5px 12px; border-radius:50px;
                                 font-size:12px; font-weight:600;">
                        {{ $skill[0] }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ ROADMAP ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">Notre trajectoire</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; color:#1E388A; margin-bottom:16px;">
                Vers la Souveraineté Numérique
            </h2>
            <p style="color:#6B7280; font-size:1rem; max-width:560px; margin:0 auto; line-height:1.7;">
                Une vision claire et une trajectoire assumée —
                de l'infrastructure internationale à l'infrastructure souveraine au Niger.
            </p>
        </div>

        <div class="about-road-grid" style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;">
            @foreach([
                [
                    'phase'  => 'Maintenant',
                    'color'  => '#22c55e',
                    'status' => 'Actif',
                    'icon'   => '☁️',
                    'title'  => 'Infrastructure internationale',
                    'desc'   => 'Hébergement sur infrastructures cloud certifiées haute disponibilité. Support local en français, tarifs adaptés au marché nigérien.',
                    'items'  => ['Cloud international certifié','Support 24/7 local Niamey','12+ services managés','Équipe ingénieurs certifiés'],
                ],
                [
                    'phase'  => 'Moyen terme',
                    'color'  => '#F97316',
                    'status' => 'Planifié',
                    'icon'   => '🏢',
                    'title'  => 'Infrastructure locale Niger',
                    'desc'   => 'Colocation avec opérateurs locaux et partenariats MSP régionaux en Afrique de l\'Ouest pour rapprocher les données de nos clients.',
                    'items'  => ['Colocation locale Niger','Partenariats MSP Afrique de l\'Ouest','Latence réduite','Conformité renforcée'],
                ],
                [
                    'phase'  => 'Long terme',
                    'color'  => '#7C3AED',
                    'status' => 'Vision',
                    'icon'   => '🖥️',
                    'title'  => 'Datacenter souverain DSC',
                    'desc'   => 'Datacenter souverain DigitSahelCloud au Niger — infrastructure 100% locale, certifiée et accessible à toutes les organisations de la sous-région.',
                    'items'  => ['Datacenter souverain Niger','Certification internationale','Expansion sous-régionale','Souveraineté numérique totale'],
                ],
            ] as $road)
            <div style="background:white; border-radius:20px; overflow:hidden;
                        border:1.5px solid #e2e8f0;
                        box-shadow:0 4px 24px rgba(0,0,0,.05);">
                {{-- Header coloré --}}
                <div style="background:{{ $road['color'] }}; padding:24px 28px;">
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                        <span style="color:white; font-size:11px; font-weight:700;
                                     text-transform:uppercase; letter-spacing:1px;
                                     background:rgba(255,255,255,.2); padding:3px 10px; border-radius:50px;">
                            {{ $road['phase'] }}
                        </span>
                    </div>
                    <div style="font-size:36px; margin-bottom:8px;">{{ $road['icon'] }}</div>
                    <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                               color:white; font-size:1.1rem; margin:0;">
                        {{ $road['title'] }}
                    </h3>
                </div>
                {{-- Contenu --}}
                <div style="padding:24px 28px;">
                    <p style="color:#374151; font-size:13px; line-height:1.7; margin-bottom:16px;">
                        {{ $road['desc'] }}
                    </p>
                    @foreach($road['items'] as $item)
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                        <div style="width:18px; height:18px; border-radius:50%;
                                    background:{{ $road['color'] }}15; display:flex;
                                    align-items:center; justify-content:center; flex-shrink:0;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="3" stroke="{{ $road['color'] }}" width="10" height="10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                            </svg>
                        </div>
                        <span style="color:#374151; font-size:13px;">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ STATS ═══ --}}
<section style="padding:0 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">
        <div style="background:linear-gradient(135deg,#152a6b,#1E388A);
                    border-radius:24px; padding:48px;
                    box-shadow:0 8px 48px rgba(30,56,138,.3);">
            <div class="about-stats-grid" style="display:grid; grid-template-columns:repeat(4,1fr); gap:24px;">
                @foreach([
                    ['🗓️','2026','Année de lancement'],
                    ['🛠️','12+','Services managés'],
                    ['🎓','5+','Années d\'expertise'],
                    ['📡','24/7','Support disponible'],
                ] as $s)
                <div style="text-align:center;">
                    <div style="font-size:32px; margin-bottom:8px;">{{ $s[0] }}</div>
                    <div style="font-family:'Sora',sans-serif; font-size:2.2rem;
                                font-weight:800; color:#F97316; line-height:1;">{{ $s[1] }}</div>
                    <div style="color:rgba(255,255,255,.7); font-size:13px; margin-top:6px;">{{ $s[2] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Vague finale → CTA --}}
<div style="background:#F1F5F9; line-height:0; margin-top:0;">
    <svg viewBox="0 0 1440 70" xmlns="http://www.w3.org/2000/svg"
         preserveAspectRatio="none" style="display:block; width:100%; height:70px; margin-top:48px;">
        <path d="M0,0 C360,70 1080,70 1440,0 L1440,70 L0,70 Z" fill="#1E388A"/>
    </svg>
</div>

{{-- ═══ CTA ═══ --}}
<section style="padding:60px 32px 80px; background:linear-gradient(135deg,#152a6b,#1E388A);
                text-align:center; position:relative; overflow:hidden;">
    <div style="position:absolute; top:-40px; right:-40px; width:200px; height:200px;
                border-radius:50%; background:radial-gradient(circle, rgba(249,115,22,.2) 0%, transparent 70%);"></div>
    <div style="position:absolute; bottom:-40px; left:-40px; width:200px; height:200px;
                border-radius:50%; background:radial-gradient(circle, rgba(255,255,255,.05) 0%, transparent 70%);"></div>

    <div style="max-width:700px; margin:0 auto; position:relative; z-index:1;">
        <span style="display:inline-block; background:rgba(249,115,22,.2);
                     border:1px solid rgba(249,115,22,.4); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            🤝 Travaillons ensemble
        </span>
        <h2 style="font-family:'Sora',sans-serif; font-size:2.4rem;
                    font-weight:800; color:white; margin-bottom:16px; line-height:1.2;">
            Un Projet ? <span style="color:#F97316;">Parlons-en.</span>
        </h2>
        <p style="color:rgba(255,255,255,.8); font-size:1.05rem;
                   line-height:1.7; margin-bottom:40px;">
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