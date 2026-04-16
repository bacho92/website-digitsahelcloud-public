@extends('layout.app')

@section('title', 'Accueil')
@section('description', 'DigitSahelCloud - Premier MSP nigérien. Solutions cloud, réseaux, cybersécurité et transformation digitale pour entreprises, institutions et ONG au Niger.')
@section('og_title', 'DigitSahelCloud - Fini les Solutions IT Hors de Portée')
@section('og_description', 'MSP local au Niger - Cloud, Réseaux, Cybersécurité, Digital. Support local 24/7 en français.')

@section('content')

{{-- ═══ HERO ═══ --}}
<section style="min-height:60vh;
                background:linear-gradient(135deg, #152a6b 0%, #1E388A 60%, #2d4fa3 100%);
                display:flex; align-items:center; padding:80px 32px;
                position:relative; overflow:hidden;">

    <div style="position:absolute; top:-80px; right:-80px; width:400px; height:400px;
                border-radius:50%;
                background:radial-gradient(circle, rgba(249,115,22,.2) 0%, transparent 70%);">
    </div>
    <div style="position:absolute; bottom:-60px; left:20%; width:300px; height:300px;
                border-radius:50%;
                background:radial-gradient(circle, rgba(255,255,255,.05) 0%, transparent 70%);">
    </div>

    <div style="max-width:1280px; margin:0 auto; width:100%;
                display:grid; grid-template-columns:1fr 1fr; gap:60px; align-items:center;">

        <div>
            <span style="display:inline-flex; align-items:center; gap:8px;
                         background:rgba(249,115,22,.15); border:1px solid rgba(249,115,22,.3);
                         color:#F97316; padding:6px 16px; border-radius:50px;
                         font-size:13px; font-weight:600; margin-bottom:24px;">
                🇳🇪 MSP Local — Niamey, Niger
            </span>

            <h1 style="font-family:'Sora',sans-serif; font-size:clamp(2.5rem,5vw,4rem);
                        font-weight:800; color:white; line-height:1.15; margin-bottom:20px;">
                Fini les Solutions IT<br>
                <span style="color:#F97316;">Hors de Portée</span>
            </h1>

            <p style="color:rgba(255,255,255,.75); font-size:1.1rem; line-height:1.8;
                       margin-bottom:36px; max-width:520px;">
                DigitSahelCloud connecte les entreprises, institutions et ONG nigériennes
                aux meilleures technologies cloud mondiales - avec une expertise locale certifiée,
                un support en français et des tarifs adaptés aux réalités du Sahel.
            </p>

            <div style="display:flex; gap:16px; flex-wrap:wrap;">
                <a href="{{ route('services') }}" class="btn-primary">
                    Découvrir nos services
                </a>
                <a href="tel:+22770810113"
                   title="Appelez-nous : +227 70810113"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:rgba(255,255,255,.1);
                          border:2px solid rgba(255,255,255,.3); color:white;
                          font-weight:600; padding:12px 24px; border-radius:12px;
                          text-decoration:none; transition:all .2s; white-space:nowrap;">
                   📞 Parler à un expert →
                </a>
            </div>

            {{-- Logos fournisseurs --}}
            <div style="margin-top:40px;">
                <p style="color:rgba(255,255,255,.4); font-size:11px; font-weight:600;
                           text-transform:uppercase; letter-spacing:1.5px; margin-bottom:16px;">
                    Infrastructures de confiance
                </p>
                <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
                    @foreach(['AWS', 'Azure', 'OVH', 'Cloudflare', 'Contabo'] as $provider)
                    <span style="background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                                 color:rgba(255,255,255,.7); padding:6px 14px; border-radius:8px;
                                 font-size:12px; font-weight:700; letter-spacing:.5px;">
                        {{ $provider }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Dashboard card droite --}}
        <div style="background:rgba(255,255,255,.08); backdrop-filter:blur(20px);
                    border:1px solid rgba(255,255,255,.15); border-radius:20px;
                    padding:32px; position:relative; z-index:1;">

            <div style="display:flex; align-items:center; gap:10px; margin-bottom:24px;">
                <div style="width:10px; height:10px; border-radius:50%;
                            background:#22c55e; box-shadow:0 0 8px #22c55e;"></div>
                <span style="color:white; font-weight:700; font-size:15px;">
                    Infrastructure en ligne
                </span>
            </div>

            <div style="display:grid; grid-template-columns:repeat(3,1fr);
                        gap:16px; margin-bottom:28px;">
                @foreach([
                    ['num' => '99.9%', 'label' => 'Disponibilité'],
                    ['num' => '24/7',  'label' => 'Support'],
                    ['num' => '12+',   'label' => 'Services'],
                ] as $stat)
                <div style="text-align:center; background:rgba(255,255,255,.05);
                            border-radius:12px; padding:16px;">
                    <div style="font-family:'Sora',sans-serif; font-size:1.8rem;
                                font-weight:800; color:#F97316;">
                        {{ $stat['num'] }}
                    </div>
                    <div style="font-size:11px; color:rgba(255,255,255,.5);
                                text-transform:uppercase; letter-spacing:.5px; margin-top:4px;">
                        {{ $stat['label'] }}
                    </div>
                </div>
                @endforeach
            </div>

            @foreach([
                ['label' => 'Cloud & Infrastructure', 'pct' => '90%'],
                ['label' => 'Réseaux & Sécurité',     'pct' => '85%'],
                ['label' => 'Digital & Innovation',   'pct' => '75%'],
            ] as $bar)
            <div style="margin-bottom:14px;">
                <div style="display:flex; justify-content:space-between;
                            font-size:12px; color:rgba(255,255,255,.6); margin-bottom:6px;">
                    <span>{{ $bar['label'] }}</span>
                    <span style="color:#F97316;">Actif</span>
                </div>
                <div style="background:rgba(255,255,255,.1); border-radius:50px; height:8px;">
                    <div style="width:{{ $bar['pct'] }}; height:100%; border-radius:50px;
                                background:linear-gradient(90deg,#F97316,#fb923c);">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ STATS BANDE ═══ --}}
<section style="background:#1E388A; padding:40px 32px;">
    <div style="max-width:1280px; margin:0 auto;
                display:grid; grid-template-columns:repeat(4,1fr); gap:24px;">
        @foreach([
            [
                'num'   => '+30 000',
                'label' => 'Organisations à digitaliser',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F97316" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/></svg>',
            ],
            [
                'num'   => '12+',
                'label' => 'Services managés',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F97316" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 010 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 010-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
            ],
            [
                'num'   => '100%',
                'label' => 'Support local en français',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F97316" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>',
            ],
            [
                'num'   => '1',
                'label' => 'Interlocuteur unique',
                'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F97316" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>',
            ],
        ] as $stat)
        <div style="text-align:center; padding:16px;">
            <div style="display:flex; justify-content:center; margin-bottom:12px;">
                {!! $stat['svg'] !!}
            </div>
            <div style="font-family:'Sora',sans-serif; font-size:2rem;
                        font-weight:800; color:#F97316;">
                {{ $stat['num'] }}
            </div>
            <div style="color:rgba(255,255,255,.7); font-size:14px; margin-top:4px;">
                {{ $stat['label'] }}
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ═══ SERVICES PAR CATÉGORIES ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:64px;">
            <span class="section-tag">Ce que nous offrons</span>
            <h2 class="section-title" style="text-align:center;">
                Des Solutions pour Chaque Besoin
            </h2>
            <p style="color:#6B7280; font-size:1.1rem; max-width:600px; margin:0 auto;">
                Un seul partenaire pour tous vos besoins IT —
                de l'infrastructure cloud à la transformation digitale.
            </p>
        </div>

        {{-- Catégorie 1 : Cloud & Infrastructure --}}
        <div style="margin-bottom:56px;">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:24px;
                        padding-bottom:16px; border-bottom:2px solid #1E388A20;">
                <div style="width:48px; height:48px; border-radius:14px; background:#1E388A;
                            display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="white" width="26" height="26">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                               color:#1E388A; font-size:1.3rem; margin:0;">
                        ☁️ Cloud & Infrastructure
                    </h3>
                    <p style="color:#6B7280; font-size:13px; margin:4px 0 0;">
                        Hébergement, serveurs et infrastructure managée
                    </p>
                </div>
            </div>
            <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:16px;">
                @foreach([
                    [
                        'title' => 'Hébergement Web & Cloud',
                        'desc'  => 'Vos sites et applications disponibles 24/7, sécurisés et performants — sans vous soucier de l\'infrastructure.',
                        'color' => '#1E388A',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/></svg>',
                    ],
                    [
                        'title' => 'Infrastructure Cloud Managée',
                        'desc'  => 'Déployez vos serveurs et ressources cloud sans expertise technique — on configure, sécurise et optimise pour vous.',
                        'color' => '#2563EB',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z"/></svg>',
                    ],
                    [
                        'title' => 'Virtualisation & Serveurs',
                        'desc'  => 'Optimisez vos ressources IT — plusieurs environnements sur une seule machine, réduction des coûts garantie.',
                        'color' => '#7C3AED',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 17.25v-.228a4.5 4.5 0 00-.12-1.03l-2.268-9.64a3.375 3.375 0 00-3.285-2.602H7.923a3.375 3.375 0 00-3.285 2.602l-2.268 9.64a4.5 4.5 0 00-.12 1.03v.228m19.5 0a3 3 0 01-3 3H5.25a3 3 0 01-3-3m19.5 0a3 3 0 00-3-3H5.25a3 3 0 00-3 3m16.5 0h.008v.008h-.008v-.008zm-3 0h.008v.008h-.008v-.008z"/></svg>',
                    ],
                    [
                        'title' => 'Email Professionnel',
                        'desc'  => 'Communiquez avec l\'image de votre organisation — messagerie sécurisée, anti-spam et suite collaborative.',
                        'color' => '#0284C7',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>',
                    ],
                ] as $svc)
                <div style="background:white; border-radius:16px; padding:24px;
                            border:1.5px solid #e2e8f0; display:flex; flex-direction:column;
                            transition:all .3s;"
                     onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(30,56,138,.12)';this.style.borderColor='{{ $svc['color'] }}'"
                     onmouseout="this.style.transform='none';this.style.boxShadow='none';this.style.borderColor='#e2e8f0'">
                    <div style="width:56px; height:56px; border-radius:14px;
                                background:{{ $svc['color'] }}; display:flex;
                                align-items:center; justify-content:center;
                                margin-bottom:16px; flex-shrink:0;
                                box-shadow:0 4px 12px {{ $svc['color'] }}40;">
                        {!! $svc['svg'] !!}
                    </div>
                    <h3 style="font-family:'Sora',sans-serif; font-weight:700;
                               color:#1E388A; font-size:14px; margin-bottom:8px;">
                        {{ $svc['title'] }}
                    </h3>
                    <p style="color:#6B7280; font-size:13px; line-height:1.7;
                               flex-grow:1; margin-bottom:16px;">
                        {{ $svc['desc'] }}
                    </p>
                    <a href="{{ route($svc['route']) }}"
                       style="display:inline-flex; align-items:center; gap:6px;
                              color:{{ $svc['color'] }}; font-weight:700; font-size:12px;
                              text-decoration:none;">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2.5" stroke="currentColor" width="12" height="12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Catégorie 2 : Réseaux & Sécurité --}}
        <div style="margin-bottom:56px;">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:24px;
                        padding-bottom:16px; border-bottom:2px solid #DC262620;">
                <div style="width:48px; height:48px; border-radius:14px; background:#DC2626;
                            display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="white" width="26" height="26">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                               color:#DC2626; font-size:1.3rem; margin:0;">
                        🔒 Réseaux & Sécurité
                    </h3>
                    <p style="color:#6B7280; font-size:13px; margin:4px 0 0;">
                        Connectivité, protection et surveillance de vos infrastructures
                    </p>
                </div>
            </div>
            <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:16px;">
                @foreach([
                    [
                        'title' => 'Interconnexion & Agences',
                        'desc'  => 'Reliez tous vos sites distants via des tunnels chiffrés AES-256 — performance et confidentialité garanties.',
                        'color' => '#F97316',
                        'route' => 'vpn',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253M3 12c0 .778.099 1.533.284 2.253"/></svg>',
                    ],
                    [
                        'title' => 'Administration Réseaux',
                        'desc'  => 'Votre réseau configuré, optimisé et maintenu par des ingénieurs certifiés — zéro interruption de service.',
                        'color' => '#059669',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z"/></svg>',
                    ],
                    [
                        'title' => 'Cybersécurité',
                        'desc'  => 'Protégez vos données et systèmes contre les menaces — audit, protection et conformité réglementaire.',
                        'color' => '#DC2626',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>',
                    ],
                    [
                        'title' => 'Supervision & Monitoring NOC',
                        'desc'  => 'Votre infrastructure surveillée en permanence — détection proactive des incidents avant qu\'ils impactent vos activités.',
                        'color' => '#D97706',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/></svg>',
                    ],
                ] as $svc)
                <div style="background:white; border-radius:16px; padding:24px;
                            border:1.5px solid #e2e8f0; display:flex; flex-direction:column;
                            transition:all .3s;"
                     onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(30,56,138,.12)';this.style.borderColor='{{ $svc['color'] }}'"
                     onmouseout="this.style.transform='none';this.style.boxShadow='none';this.style.borderColor='#e2e8f0'">
                    <div style="width:56px; height:56px; border-radius:14px;
                                background:{{ $svc['color'] }}; display:flex;
                                align-items:center; justify-content:center;
                                margin-bottom:16px; flex-shrink:0;
                                box-shadow:0 4px 12px {{ $svc['color'] }}40;">
                        {!! $svc['svg'] !!}
                    </div>
                    <h3 style="font-family:'Sora',sans-serif; font-weight:700;
                               color:#1E388A; font-size:14px; margin-bottom:8px;">
                        {{ $svc['title'] }}
                    </h3>
                    <p style="color:#6B7280; font-size:13px; line-height:1.7;
                               flex-grow:1; margin-bottom:16px;">
                        {{ $svc['desc'] }}
                    </p>
                    <a href="{{ route($svc['route']) }}"
                       style="display:inline-flex; align-items:center; gap:6px;
                              color:{{ $svc['color'] }}; font-weight:700; font-size:12px;
                              text-decoration:none;">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2.5" stroke="currentColor" width="12" height="12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Catégorie 3 : Digital & Innovation --}}
        <div style="margin-bottom:40px;">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:24px;
                        padding-bottom:16px; border-bottom:2px solid #7C3AED20;">
                <div style="width:48px; height:48px; border-radius:14px; background:#7C3AED;
                            display:flex; align-items:center; justify-content:center;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="white" width="26" height="26">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z"/>
                    </svg>
                </div>
                <div>
                    <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                               color:#7C3AED; font-size:1.3rem; margin:0;">
                        💡 Digital & Innovation
                    </h3>
                    <p style="color:#6B7280; font-size:13px; margin:4px 0 0;">
                        Développement, gestion et transformation numérique
                    </p>
                </div>
            </div>
            <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:16px;">
                @foreach([
                    [
                        'title' => 'Développement Applications',
                        'desc'  => 'Des applications web, mobiles et métiers conçues sur mesure pour vos processus — livrées dans les délais.',
                        'color' => '#7C3AED',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/></svg>',
                    ],
                    [
                        'title' => 'ERP & Gestion',
                        'desc'  => 'Pilotez votre organisation depuis un seul tableau de bord — comptabilité, stocks, RH et CRM intégrés.',
                        'color' => '#059669',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>',
                    ],
                    [
                        'title' => 'Support & Maintenance IT',
                        'desc'  => 'Votre informatique entre de bonnes mains — intervention rapide, SLA garanti et rapport mensuel inclus.',
                        'color' => '#D97706',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg>',
                    ],
                    [
                        'title' => 'Conseil & Transformation Digitale',
                        'desc'  => 'Stratégie, accompagnement et formation de vos équipes — y compris l\'intégration de l\'IA dans vos processus métier.',
                        'color' => '#BE185D',
                        'route' => 'services',
                        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="28" height="28"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>',
                    ],
                ] as $svc)
                <div style="background:white; border-radius:16px; padding:24px;
                            border:1.5px solid #e2e8f0; display:flex; flex-direction:column;
                            transition:all .3s;"
                     onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(30,56,138,.12)';this.style.borderColor='{{ $svc['color'] }}'"
                     onmouseout="this.style.transform='none';this.style.boxShadow='none';this.style.borderColor='#e2e8f0'">
                    <div style="width:56px; height:56px; border-radius:14px;
                                background:{{ $svc['color'] }}; display:flex;
                                align-items:center; justify-content:center;
                                margin-bottom:16px; flex-shrink:0;
                                box-shadow:0 4px 12px {{ $svc['color'] }}40;">
                        {!! $svc['svg'] !!}
                    </div>
                    <h3 style="font-family:'Sora',sans-serif; font-weight:700;
                               color:#1E388A; font-size:14px; margin-bottom:8px;">
                        {{ $svc['title'] }}
                    </h3>
                    <p style="color:#6B7280; font-size:13px; line-height:1.7;
                               flex-grow:1; margin-bottom:16px;">
                        {{ $svc['desc'] }}
                    </p>
                    <a href="{{ route($svc['route']) }}"
                       style="display:inline-flex; align-items:center; gap:6px;
                              color:{{ $svc['color'] }}; font-weight:700; font-size:12px;
                              text-decoration:none;">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="2.5" stroke="currentColor" width="12" height="12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <div style="text-align:center;">
            <a href="{{ route('services') }}" class="btn-primary">
                Voir tous nos services →
            </a>
        </div>
    </div>
</section>

{{-- ═══ VPN HIGHLIGHT ═══ --}}
<section style="padding:80px 32px;
                background:linear-gradient(135deg,#152a6b,#1E388A); color:white;">
    <div style="max-width:1280px; margin:0 auto;
                display:grid; grid-template-columns:1fr 1fr; gap:60px; align-items:center;">

        <div>
            <span style="color:rgba(255,255,255,.5); font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:10px;">
                Solution phare
            </span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; margin-bottom:16px;">
                Interconnectez vos Sites
                <span style="color:#F97316;">en Toute Sécurité</span>
            </h2>
            <p style="color:rgba(255,255,255,.75); font-size:1rem; line-height:1.8; margin-bottom:28px;">
                Reliez votre siège, vos agences et vos équipes distantes
                via des tunnels chiffrés AES-256 — déployés, sécurisés
                et monitorés 24/7 par notre équipe locale à Niamey.
                Idéal pour banques, ONG, administrations et groupes
                d'entreprises au Niger.
            </p>
            <div style="display:flex; flex-wrap:wrap; gap:10px; margin-bottom:32px;">
                @foreach(['Chiffrement AES-256','Haute disponibilité','Monitoring 24/7','Support local Niamey','Réponse sous 4h'] as $tag)
                <span style="background:rgba(249,115,22,.2); border:1px solid rgba(249,115,22,.4);
                             color:#F97316; padding:6px 14px; border-radius:50px;
                             font-size:13px; font-weight:600;">
                    {{ $tag }}
                </span>
                @endforeach
            </div>
            <a href="{{ route('vpn') }}" class="btn-primary">
                En savoir plus →
            </a>
        </div>

        <div style="background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.15);
                    border-radius:16px; padding:28px;">
            <div style="color:rgba(255,255,255,.5); font-size:12px; font-weight:600;
                        text-transform:uppercase; letter-spacing:1px;
                        margin-bottom:20px; text-align:center;">
                Architecture de connexion
            </div>
            <div style="background:rgba(249,115,22,.15); border:1px solid rgba(249,115,22,.4);
                        color:#F97316; padding:12px; border-radius:10px;
                        text-align:center; font-weight:600; font-size:14px; margin-bottom:12px;">
                🏢 Siège Principal — Niamey
            </div>
            <div style="text-align:center; color:rgba(255,255,255,.4);
                        font-size:14px; margin:8px 0;">⇅ Tunnel chiffré AES-256</div>
            <div style="background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                        padding:14px; border-radius:10px; text-align:center; margin-bottom:12px;">
                <div style="font-weight:600; color:white; font-size:14px;">
                    🔐 DigitSahelCloud NOC
                </div>
                <div style="font-size:12px; color:rgba(255,255,255,.5); margin-top:4px;">
                    Monitoring & Supervision 24/7 — Niamey
                </div>
            </div>
            <div style="text-align:center; color:rgba(255,255,255,.4);
                        font-size:14px; margin:8px 0;">⇅ Tunnel sécurisé</div>
            <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:8px;">
                @foreach(['🏪 Agence','🏥 Clinique','🏦 Banque'] as $site)
                <div style="background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.15);
                            padding:10px; border-radius:8px; text-align:center;
                            font-size:12px; color:rgba(255,255,255,.8);">
                    {{ $site }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══ POURQUOI NOUS ═══ --}}
<section style="padding:80px 32px; background:white;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span class="section-tag">Nos atouts</span>
            <h2 class="section-title" style="text-align:center;">
                Pourquoi Choisir DigitSahelCloud ?
            </h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;">
            @foreach([
                [
                    'color' => '#1E388A',
                    'title' => 'Proximité Locale',
                    'desc'  => 'Support en français, connaissance du marché nigérien, réactivité et accompagnement de proximité à Niamey.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>',
                ],
                [
                    'color' => '#F97316',
                    'title' => 'Tarifs Adaptés',
                    'desc'  => 'Des prix alignés sur les réalités économiques des organisations locales — qualité internationale, budget africain.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                ],
                [
                    'color' => '#DC2626',
                    'title' => 'Engagement Souverain',
                    'desc'  => 'Une trajectoire claire vers la souveraineté numérique — infrastructure locale au Niger à moyen terme, partenariats régionaux en Afrique de l\'Ouest à long terme. Vos données sous contrat de droit nigérien.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>',
                ],
                [
                    'color' => '#059669',
                    'title' => 'Solution Intégrée',
                    'desc'  => 'Un seul interlocuteur pour tous vos besoins IT — cloud, réseaux, sécurité, développement et support.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>',
                ],
                [
                    'color' => '#7C3AED',
                    'title' => 'Transfert de Compétences',
                    'desc'  => 'Formation et accompagnement de vos équipes — votre autonomie progressive est notre objectif.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>',
                ],
                [
                    'color' => '#0284C7',
                    'title' => 'Vision Sahélienne',
                    'desc'  => 'Conçu pour les réalités africaines : connectivité variable, coûts maîtrisés, support multilingue et expertise certifiée.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525"/></svg>',
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
                           color:#1E388A; font-size:16px; margin-bottom:10px;">
                    {{ $item['title'] }}
                </h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.7;">
                    {{ $item['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ CTA FINAL ═══ --}}
<section style="padding:80px 32px; background:#1E388A; text-align:center;">
    <div style="max-width:700px; margin:0 auto;">
        <h2 style="font-family:'Sora',sans-serif; font-size:2.5rem;
                    font-weight:800; color:white; margin-bottom:16px;">
            Un Projet ? Parlons-en.
        </h2>
        <p style="color:rgba(255,255,255,.8); font-size:1.1rem;
                   line-height:1.7; margin-bottom:36px;">
            Notre équipe analyse votre situation et vous accompagne
            vers la solution la plus adaptée à vos objectifs.
            Réponse garantie sous 24h.
        </p>
        <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('contact') }}"
               style="display:inline-block; background:#F97316; color:white;
                      font-weight:800; padding:14px 32px; border-radius:12px;
                      text-decoration:none; font-size:16px;
                      box-shadow:0 4px 16px rgba(249,115,22,.4);">
                Prendre contact →
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