@extends('layout.app')

@section('title', 'Accueil')
@section('description', 'DigitSahelCloud — Votre partenaire cloud local au Sahel. Hébergement web, VPN sécurisé, ERP et services managés adaptés aux entreprises nigériennes.')
@section('og_title', 'DigitSahelCloud — Votre Partenaire Cloud au Sahel')
@section('og_description', 'MSP local au Niger — Hébergement, VPN, ERP, Cybersécurité, Email Pro')
@section('title', 'Accueil')

@section('content')

{{-- ═══ HERO ═══ --}}
<section style="min-height:100vh;
                background:linear-gradient(135deg, #152a6b 0%, #1E388A 60%, #2d4fa3 100%);
                display:flex; align-items:center; padding:80px 32px;
                position:relative; overflow:hidden;">

    {{-- Cercles décoratifs --}}
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

        {{-- Contenu gauche --}}
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
                <a href="{{ route('contact') }}"
                   style="display:inline-block; background:rgba(255,255,255,.1);
                          border:2px solid rgba(255,255,255,.3); color:white;
                          font-weight:600; padding:12px 24px; border-radius:12px;
                          text-decoration:none; transition:all .2s;">
                    Parler à un expert →
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

            {{-- Stats --}}
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

            {{-- Barres de progression --}}
            @foreach([
                ['label' => 'Hébergement Web',         'pct' => '90%'],
                ['label' => 'VPN Sécurisé',            'pct' => '75%'],
                ['label' => 'Interconnexion Agences',  'pct' => '60%'],
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
                ['icon'=>'☁',  'title'=>'Hébergement Web & Cloud',     'desc'=>'Serveurs locaux sécurisés, domaines, DNS, CDN haute disponibilité'],
                ['icon'=>'🔒', 'title'=>'VPN & Interconnexion Agences', 'desc'=>'AWS Direct Connect & Azure VPN pour relier vos sites en sécurité'],
                ['icon'=>'⚙',  'title'=>'Développement Applications',  'desc'=>'Applications web, mobile et ERP sur mesure adaptés à votre métier'],
                ['icon'=>'🛡',  'title'=>'Cybersécurité',               'desc'=>'Audit de sécurité, protection des données, conformité réglementaire'],
                ['icon'=>'📊', 'title'=>'ERP & Gestion',                'desc'=>'Solutions de gestion intégrées adaptées aux PME nigériennes'],
                ['icon'=>'✉',  'title'=>'Email Professionnel',          'desc'=>'Messagerie sécurisée, suite collaborative, anti-spam avancé'],
                ['icon'=>'🛠',  'title'=>'Support & Maintenance',        'desc'=>'Infogérance, assistance technique 24/7, SLA garanti par contrat'],
                ['icon'=>'💡', 'title'=>'Conseil Digital',              'desc'=>'Stratégie numérique, accompagnement et formation de vos équipes'],
            ] as $svc)
            <div class="card" style="cursor:default;">
                <div style="width:48px; height:48px; border-radius:12px;
                            background:linear-gradient(135deg,#1E388A,#2d4fa3);
                            display:flex; align-items:center; justify-content:center;
                            font-size:22px; margin-bottom:16px; box-shadow:0 4px 12px rgba(30,56,138,.2);">
                    {{ $svc['icon'] }}
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:700;
                           font-size:15px; color:#1E388A; margin-bottom:8px;">
                    {{ $svc['title'] }}
                </h3>
                <p style="color:#6B7280; font-size:13px; line-height:1.6;">
                    {{ $svc['desc'] }}
                </p>
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
                         text-transform:uppercase; letter-spacing:1.5px; display:block; margin-bottom:10px;">
                Solution phare
            </span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; margin-bottom:16px;">
                Interconnexion <span style="color:#F97316;">VPN</span> de vos Agences
            </h2>
            <p style="color:rgba(255,255,255,.75); font-size:1rem; line-height:1.8; margin-bottom:28px;">
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

        {{-- Schéma architecture --}}
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
                        padding:14px; border-radius:10px; text-align:center;
                        margin-bottom:12px;">
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
                ['icon'=>'📍','title'=>'Proximité Locale',
                 'desc'=>'Support en français, connaissance du marché nigérien, réactivité et accompagnement de proximité.'],
                ['icon'=>'💰','title'=>'Tarifs Adaptés',
                 'desc'=>'Des prix alignés sur les réalités économiques des PME et institutions locales.'],
                ['icon'=>'🔐','title'=>'Souveraineté Numérique',
                 'desc'=>'Vos données hébergées localement. Conformité aux lois et réglementations du Niger.'],
                ['icon'=>'🔗','title'=>'Solution Intégrée',
                 'desc'=>'Un seul interlocuteur pour tous vos besoins IT — cloud, sécurité, développement, support.'],
                ['icon'=>'🎓','title'=>'Transfert de Compétences',
                 'desc'=>'Formation et accompagnement de vos équipes pour une autonomie progressive.'],
                ['icon'=>'🌍','title'=>'Vision Sahélienne',
                 'desc'=>'Conçu pour les réalités africaines : connectivité variable, coûts maîtrisés, support multilingue.'],
            ] as $item)
            <div style="padding:28px; border-radius:16px; border:1.5px solid #e2e8f0;
                        transition:all .3s;">
                <div style="font-size:32px; margin-bottom:16px;">{{ $item['icon'] }}</div>
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
            <a href="tel:+22790065023"
               style="display:inline-block; background:rgba(255,255,255,.1);
                      border:2px solid rgba(255,255,255,.4); color:white;
                      font-weight:700; padding:14px 32px; border-radius:12px;
                      text-decoration:none; font-size:16px;">
                📞 +227 90065023
            </a>
        </div>
    </div>
</section>

@endsection