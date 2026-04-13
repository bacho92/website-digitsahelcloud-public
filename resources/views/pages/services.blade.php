@extends('layout.app')

@section('title', 'Nos Services')
@section('description', 'Découvrez tous les services managés de DigitSahelCloud : hébergement cloud, VPN, développement applications, cybersécurité, ERP et conseil digital au Niger.')
@section('og_title', 'Nos Services — DigitSahelCloud')
@section('og_description', '8 services managés complets pour digitaliser votre entreprise au Niger')
@section('title', 'Nos Services')

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
            du cloud à la cybersécurité en passant par le développement sur mesure.
        </p>
    </div>
</section>

{{-- ═══ GRILLE SERVICES ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        @foreach([
            [
                'icon'  => '☁',
                'title' => 'Hébergement Web & Cloud',
                'color' => '#1E388A',
                'desc'  => 'Infrastructure cloud locale sécurisée et haute disponibilité pour vos applications et sites web.',
                'items' => ['Serveurs dédiés et mutualisés','Domaines et DNS managés','CDN et mise en cache','SSL/TLS automatique','Sauvegardes quotidiennes','Monitoring 24/7'],
            ],
            [
                'icon'  => '🔒',
                'title' => 'VPN & Interconnexion Agences',
                'color' => '#F97316',
                'desc'  => 'Reliez vos agences, bureaux et sites distants via un tunnel VPN sécurisé et performant.',
                'items' => ['AWS Direct Connect','Azure VPN Gateway','Chiffrement AES-256','Haute disponibilité','Gestion centralisée','Support dédié'],
            ],
            [
                'icon'  => '⚙',
                'title' => 'Développement d\'Applications',
                'color' => '#1E388A',
                'desc'  => 'Applications web, mobile et ERP sur mesure adaptés à votre métier et vos processus.',
                'items' => ['Applications web Laravel/React','Applications mobiles','ERP sur mesure','API et intégrations','Maintenance évolutive','Tests et qualité'],
            ],
            [
                'icon'  => '🛡',
                'title' => 'Cybersécurité',
                'color' => '#F97316',
                'desc'  => 'Protégez vos données et vos systèmes avec nos solutions de sécurité adaptées.',
                'items' => ['Audit de sécurité','Pare-feu et IDS/IPS','Protection DDoS','Conformité RGPD','Formation des équipes','Veille sécurité'],
            ],
            [
                'icon'  => '📊',
                'title' => 'ERP & Gestion d\'Entreprise',
                'color' => '#1E388A',
                'desc'  => 'Solutions de gestion intégrées pour optimiser vos opérations et prendre de meilleures décisions.',
                'items' => ['Gestion comptable','Gestion des stocks','CRM client','RH et paie','Tableaux de bord','Rapports automatisés'],
            ],
            [
                'icon'  => '✉',
                'title' => 'Email Professionnel',
                'color' => '#F97316',
                'desc'  => 'Messagerie professionnelle sécurisée avec votre nom de domaine pour une image de marque parfaite.',
                'items' => ['Email @votredomaine.com','Anti-spam avancé','Archivage emails','Calendrier partagé','Webmail responsive','Migration incluse'],
            ],
            [
                'icon'  => '🛠',
                'title' => 'Support & Maintenance IT',
                'color' => '#1E388A',
                'desc'  => 'Assistance technique réactive et maintenance proactive pour garantir la continuité de vos services.',
                'items' => ['Support 24/7','SLA garanti','Infogérance complète','Mises à jour sécurité','Rapport mensuel','Hotline dédiée'],
            ],
            [
                'icon'  => '💡',
                'title' => 'Conseil en Transformation Digitale',
                'color' => '#F97316',
                'desc'  => 'Accompagnement stratégique pour réussir votre transition numérique de A à Z.',
                'items' => ['Audit numérique','Stratégie digitale','Conduite du changement','Formation équipes','Roadmap sur mesure','Suivi KPIs'],
            ],
        ] as $index => $svc)

        <div style="background:white; border-radius:20px; padding:40px;
                    margin-bottom:24px; border:1.5px solid #e2e8f0;
                    display:grid; grid-template-columns:1fr 2fr; gap:40px; align-items:start;">

            {{-- Gauche --}}
            <div>
                <div style="width:64px; height:64px; border-radius:16px;
                            background:{{ $index % 2 === 0 ? '#EEF2FF' : '#FFF7ED' }};
                            display:flex; align-items:center; justify-content:center;
                            font-size:30px; margin-bottom:20px;">
                    {{ $svc['icon'] }}
                </div>
                <h2 style="font-family:'Sora',sans-serif; font-weight:800;
                           font-size:1.3rem; color:{{ $svc['color'] }}; margin-bottom:12px;">
                    {{ $svc['title'] }}
                </h2>
                <p style="color:#6B7280; font-size:14px; line-height:1.7; margin-bottom:20px;">
                    {{ $svc['desc'] }}
                </p>
                <a href="{{ route('contact') }}"
                   style="display:inline-block; background:{{ $svc['color'] }};
                          color:white; font-weight:700; padding:10px 20px;
                          border-radius:10px; text-decoration:none; font-size:14px;">
                    Demander un devis →
                </a>
            </div>

            {{-- Droite — liste --}}
            <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:12px;">
                @foreach($svc['items'] as $item)
                <div style="display:flex; align-items:center; gap:10px;
                            background:#F8FAFC; border-radius:10px; padding:12px 14px;">
                    <span style="color:{{ $svc['color'] }}; font-weight:700;">✓</span>
                    <span style="font-size:13px; color:#374151; font-weight:500;">{{ $item }}</span>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ═══ CTA ═══ --}}
<section style="padding:60px 32px; background:#1E388A; text-align:center;">
    <div style="max-width:600px; margin:0 auto;">
        <h2 style="font-family:'Sora',sans-serif; font-size:2rem;
                    font-weight:800; color:white; margin-bottom:12px;">
            Besoin d'un service sur mesure ?
        </h2>
        <p style="color:rgba(255,255,255,.8); margin-bottom:28px;">
            Contactez-nous pour discuter de vos besoins spécifiques.
        </p>
        <a href="{{ route('contact') }}"
           style="display:inline-block; background:#F97316; color:white;
                  font-weight:800; padding:14px 32px; border-radius:12px;
                  text-decoration:none; font-size:16px;
                  box-shadow:0 4px 16px rgba(249,115,22,.4);">
            Contactez-nous →
        </a>
    </div>
</section>

@endsection