@extends('layout.app')

@section('title', 'Accueil')
@section('description', 'DigitSahelCloud — Votre partenaire cloud local au Sahel. Hébergement web, VPN sécurisé, ERP et services managés adaptés aux entreprises nigériennes.')
@section('og_title', 'DigitSahelCloud — Votre Partenaire Cloud au Sahel')
@section('og_description', 'MSP local au Niger — Hébergement, VPN, ERP, Cybersécurité, Email Pro')

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
                Votre Partenaire<br>
                <span style="color:#F97316;">Cloud</span> au Sahel
            </h1>

            <p style="color:rgba(255,255,255,.75); font-size:1.1rem; line-height:1.8;
                       margin-bottom:36px; max-width:520px;">
                Hébergement web, VPN sécurisé, interconnexion d'agences, ERP et cybersécurité
                — des solutions digitales adaptées aux réalités des entreprises nigériennes.
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
                    ['num' => '8+',    'label' => 'Services'],
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
                ['label' => 'Hébergement Web',        'pct' => '90%'],
                ['label' => 'VPN Sécurisé',           'pct' => '75%'],
                ['label' => 'Interconnexion Agences', 'pct' => '60%'],
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
<section style="background:#1E388A; padding:32px;">
    <div style="max-width:1280px; margin:0 auto;
                display:grid; grid-template-columns:repeat(4,1fr); gap:24px;">
        @foreach([
            ['num' => '50 000+', 'label' => 'PME au Niger à digitaliser'],
            ['num' => '8',       'label' => 'Services managés'],
            ['num' => '100%',    'label' => 'Local & souverain'],
            ['num' => '1',       'label' => 'Interlocuteur unique'],
        ] as $stat)
        <div style="text-align:center; padding:16px;">
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

{{-- ═══ SERVICES ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span class="section-tag">Ce que nous offrons</span>
            <h2 class="section-title" style="text-align:center;">
                Services Managés Complets
            </h2>
            <p style="color:#6B7280; font-size:1.1rem; max-width:560px; margin:0 auto;">
                Un seul interlocuteur pour tous vos besoins IT — du cloud à la cybersécurité.
            </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px;">
            @foreach([
                [
                    'route' => 'services',
                    'title' => 'Hébergement Web & Cloud',
                    'desc'  => 'Serveurs locaux sécurisés, domaines, DNS, CDN haute disponibilité',
                    'color' => '#1E388A',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/></svg>',
                ],
                [
                    'route' => 'vpn',
                    'title' => 'VPN & Interconnexion Agences',
                    'desc'  => 'AWS Direct Connect & Azure VPN pour relier vos sites en sécurité',
                    'color' => '#F97316',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>',
                ],
                [
                    'route' => 'services',
                    'title' => 'Développement Applications',
                    'desc'  => 'Applications web, mobile et ERP sur mesure adaptés à votre métier',
                    'color' => '#7C3AED',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/></svg>',
                ],
                [
                    'route' => 'services',
                    'title' => 'Cybersécurité',
                    'desc'  => 'Audit de sécurité, protection des données, conformité réglementaire',
                    'color' => '#DC2626',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>',
                ],
                [
                    'route' => 'services',
                    'title' => 'ERP & Gestion',
                    'desc'  => 'Solutions de gestion intégrées adaptées aux PME nigériennes',
                    'color' => '#059669',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/></svg>',
                ],
                [
                    'route' => 'services',
                    'title' => 'Email Professionnel',
                    'desc'  => 'Messagerie sécurisée, suite collaborative, anti-spam avancé',
                    'color' => '#0284C7',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>',
                ],
                [
                    'route' => 'services',
                    'title' => 'Support & Maintenance',
                    'desc'  => 'Infogérance, assistance technique 24/7, SLA garanti par contrat',
                    'color' => '#D97706',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/></svg>',
                ],
                [
                    'route' => 'services',
                    'title' => 'Conseil Digital',
                    'desc'  => 'Stratégie numérique, accompagnement et formation de vos équipes',
                    'color' => '#BE185D',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/></svg>',
                ],
            ] as $svc)
            <div style="background:white; border-radius:16px; padding:28px;
                        border:1.5px solid #e2e8f0; display:flex; flex-direction:column;
                        transition:all .3s; cursor:default;"
                 onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(30,56,138,.12)';this.style.borderColor='{{ $svc['color'] }}'"
                 onmouseout="this.style.transform='none';this.style.boxShadow='none';this.style.borderColor='#e2e8f0'">

                {{-- Icône SVG 72px --}}
                <div style="width:72px; height:72px; border-radius:20px;
                            background:{{ $svc['color'] }}; display:flex;
                            align-items:center; justify-content:center;
                            margin-bottom:20px; flex-shrink:0;
                            box-shadow:0 8px 24px {{ $svc['color'] }}40;">
                    {!! $svc['svg'] !!}
                </div>

                <h3 style="font-family:'Sora',sans-serif; font-weight:700;
                           color:#1E388A; font-size:15px; margin-bottom:10px; flex-grow:0;">
                    {{ $svc['title'] }}
                </h3>

                <p style="color:#6B7280; font-size:13.5px; line-height:1.7;
                           flex-grow:1; margin-bottom:20px;">
                    {{ $svc['desc'] }}
                </p>

                <a href="{{ route($svc['route']) }}"
                   style="display:inline-flex; align-items:center; gap:6px;
                          color:{{ $svc['color'] }}; font-weight:700; font-size:13px;
                          text-decoration:none; transition:gap .2s;"
                   onmouseover="this.style.gap='10px'"
                   onmouseout="this.style.gap='6px'">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2.5" stroke="currentColor" width="14" height="14">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>

        <div style="text-align:center; margin-top:40px;">
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
                Interconnexion <span style="color:#F97316;">VPN</span> de vos Agences
            </h2>
            <p style="color:rgba(255,255,255,.75); font-size:1rem;
                       line-height:1.8; margin-bottom:28px;">
                Reliez toutes vos agences, bureaux et sites distants via un tunnel VPN sécurisé
                alimenté par <strong>AWS Direct Connect</strong> et <strong>Azure VPN Gateway</strong>.
                Idéal pour banques, ONG, administrations et groupes d'entreprises au Niger.
            </p>
            <div style="display:flex; flex-wrap:wrap; gap:10px; margin-bottom:32px;">
                @foreach(['AWS Direct Connect','Azure VPN Gateway','Chiffrement AES-256','Haute disponibilité','Monitoring 24/7'] as $tag)
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
                        font-size:20px; margin:8px 0;">⇅</div>
            <div style="background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                        padding:14px; border-radius:10px; text-align:center; margin-bottom:12px;">
                <div style="font-weight:600; color:white; font-size:14px;">
                    🔐 DigitSahelCloud VPN Hub
                </div>
                <div style="font-size:12px; color:rgba(255,255,255,.5); margin-top:4px;">
                    AWS Direct Connect + Azure VPN Gateway
                </div>
            </div>
            <div style="text-align:center; color:rgba(255,255,255,.4);
                        font-size:20px; margin:8px 0;">⇅</div>
            <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:8px;">
                @foreach(['🏪 Agence 1','🏪 Agence 2','🏪 Agence 3'] as $agence)
                <div style="background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.15);
                            padding:10px; border-radius:8px; text-align:center;
                            font-size:12px; color:rgba(255,255,255,.8);">
                    {{ $agence }}
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
                    'desc'  => 'Support en français, connaissance du marché nigérien, réactivité et accompagnement de proximité.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>',
                ],
                [
                    'color' => '#F97316',
                    'title' => 'Tarifs Adaptés',
                    'desc'  => 'Des prix alignés sur les réalités économiques des PME et institutions locales.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
                ],
                [
                    'color' => '#DC2626',
                    'title' => 'Souveraineté Numérique',
                    'desc'  => 'Vos données hébergées localement. Conformité aux lois et réglementations du Niger.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>',
                ],
                [
                    'color' => '#059669',
                    'title' => 'Solution Intégrée',
                    'desc'  => 'Un seul interlocuteur pour tous vos besoins IT — cloud, sécurité, développement, support.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/></svg>',
                ],
                [
                    'color' => '#7C3AED',
                    'title' => 'Transfert de Compétences',
                    'desc'  => 'Formation et accompagnement de vos équipes pour une autonomie progressive.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>',
                ],
                [
                    'color' => '#0284C7',
                    'title' => 'Vision Sahélienne',
                    'desc'  => 'Conçu pour les réalités africaines : connectivité variable, coûts maîtrisés, support multilingue.',
                    'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" width="36" height="36"><path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525"/></svg>',
                ],
            ] as $item)
            <div style="padding:28px; border-radius:16px; border:1.5px solid #e2e8f0;
                        transition:all .3s;"
                 onmouseover="this.style.borderColor='{{ $item['color'] }}';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 24px rgba(0,0,0,.08)'"
                 onmouseout="this.style.borderColor='#e2e8f0';this.style.transform='none';this.style.boxShadow='none'">

                {{-- Icône SVG 72px --}}
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
            Prêt à Digitaliser votre Entreprise ?
        </h2>
        <p style="color:rgba(255,255,255,.8); font-size:1.1rem;
                   line-height:1.7; margin-bottom:36px;">
            Contactez-nous dès aujourd'hui pour une consultation gratuite.
            Notre équipe est prête à vous accompagner.
        </p>
        <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('contact') }}"
               style="display:inline-block; background:#F97316; color:white;
                      font-weight:800; padding:14px 32px; border-radius:12px;
                      text-decoration:none; font-size:16px;
                      box-shadow:0 4px 16px rgba(249,115,22,.4);">
                Contactez-nous
            </a>
            <a href="tel:+22770810113"
               style="display:inline-block; background:rgba(255,255,255,.1);
                      border:2px solid rgba(255,255,255,.4); color:white;
                      font-weight:700; padding:14px 32px; border-radius:12px;
                      text-decoration:none; font-size:16px;">
                📞 +227 70810113
            </a>
        </div>
    </div>
</section>

@endsection
