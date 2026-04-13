@extends('layout.app')

@section('title', 'VPN & Interconnexion Agences')
@section('description', 'Interconnectez vos agences et bureaux via un VPN sécurisé avec AWS Direct Connect et Azure VPN Gateway. Solution managée par DigitSahelCloud au Niger.')
@section('og_title', 'VPN & Interconnexion Agences — DigitSahelCloud')
@section('og_description', 'Reliez toutes vos agences via un VPN sécurisé — AWS Direct Connect + Azure VPN Gateway')
@section('title', 'VPN & Interconnexion Agences')

@section('content')

{{-- ═══ HERO ═══ --}}
<section style="background:linear-gradient(135deg,#152a6b,#1E388A);
                padding:80px 32px; text-align:center;">
    <div style="max-width:700px; margin:0 auto;">
        <span style="display:inline-block; background:rgba(249,115,22,.15);
                     border:1px solid rgba(249,115,22,.3); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            VPN & Interconnexion
        </span>
        <h1 style="font-family:'Sora',sans-serif; font-size:3rem;
                    font-weight:800; color:white; margin-bottom:16px;">
            Connectez toutes vos <span style="color:#F97316;">Agences</span>
        </h1>
        <p style="color:rgba(255,255,255,.75); font-size:1.1rem; line-height:1.8;">
            Une solution VPN sécurisée, fiable et managée pour interconnecter
            tous vos sites et agences au Niger et dans la sous-région.
        </p>
    </div>
</section>

{{-- ═══ ARCHITECTURE ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span class="section-tag">Architecture</span>
            <h2 class="section-title" style="text-align:center;">
                Comment ça fonctionne ?
            </h2>
            <p style="color:#6B7280; font-size:1.1rem; max-width:560px; margin:0 auto;">
                Notre solution VPN s'appuie sur les infrastructures
                AWS Direct Connect et Azure VPN Gateway pour garantir
                sécurité et performance.
            </p>
        </div>

        {{-- Schéma --}}
        <div style="background:linear-gradient(135deg,#152a6b,#1E388A);
                    border-radius:24px; padding:48px; margin-bottom:48px;">

            <div style="display:grid; grid-template-columns:1fr auto 1fr auto 1fr;
                        gap:16px; align-items:center; max-width:900px; margin:0 auto;">

                {{-- Siège --}}
                <div style="background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                            border-radius:16px; padding:24px; text-align:center;">
                    <div style="font-size:36px; margin-bottom:12px;">🏢</div>
                    <div style="font-family:'Sora',sans-serif; font-weight:700;
                                color:white; font-size:14px; margin-bottom:4px;">
                        Siège Principal
                    </div>
                    <div style="color:rgba(255,255,255,.6); font-size:12px;">Niamey</div>
                </div>

                {{-- Flèche --}}
                <div style="text-align:center; color:#F97316; font-size:24px;">⇄</div>

                {{-- Hub VPN --}}
                <div style="background:rgba(249,115,22,.2); border:2px solid #F97316;
                            border-radius:16px; padding:24px; text-align:center;">
                    <div style="font-size:36px; margin-bottom:12px;">🔐</div>
                    <div style="font-family:'Sora',sans-serif; font-weight:800;
                                color:#F97316; font-size:14px; margin-bottom:8px;">
                        DigitSahelCloud VPN Hub
                    </div>
                    <div style="display:flex; gap:6px; justify-content:center; flex-wrap:wrap;">
                        <span style="background:rgba(249,115,22,.3); color:#F97316;
                                     padding:3px 8px; border-radius:50px; font-size:10px;
                                     font-weight:600;">AWS Direct Connect</span>
                        <span style="background:rgba(249,115,22,.3); color:#F97316;
                                     padding:3px 8px; border-radius:50px; font-size:10px;
                                     font-weight:600;">Azure VPN Gateway</span>
                    </div>
                </div>

                {{-- Flèche --}}
                <div style="text-align:center; color:#F97316; font-size:24px;">⇄</div>

                {{-- Agences --}}
                <div style="display:flex; flex-direction:column; gap:10px;">
                    @foreach(['Agence 1','Agence 2','Agence 3'] as $agence)
                    <div style="background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                                border-radius:12px; padding:12px 16px;
                                display:flex; align-items:center; gap:10px;">
                        <span style="font-size:20px;">🏪</span>
                        <span style="color:white; font-size:13px; font-weight:600;">
                            {{ $agence }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Légende --}}
            <div style="display:flex; justify-content:center; gap:24px;
                        margin-top:32px; flex-wrap:wrap;">
                @foreach(['🔒 Chiffrement AES-256','⚡ Haute disponibilité','📊 Monitoring temps réel'] as $leg)
                <span style="color:rgba(255,255,255,.7); font-size:13px;">{{ $leg }}</span>
                @endforeach
            </div>
        </div>

        {{-- Technologies --}}
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:24px;">

            <div style="background:white; border-radius:20px; padding:36px;
                        border:1.5px solid #e2e8f0;">
                <div style="display:flex; align-items:center; gap:16px; margin-bottom:20px;">
                    <div style="width:56px; height:56px; background:#EEF2FF;
                                border-radius:14px; display:flex; align-items:center;
                                justify-content:center; font-size:28px;">☁</div>
                    <div>
                        <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                                   color:#1E388A; font-size:1.1rem;">AWS Direct Connect</h3>
                        <p style="color:#6B7280; font-size:13px;">Amazon Web Services</p>
                    </div>
                </div>
                <p style="color:#374151; font-size:14px; line-height:1.7; margin-bottom:20px;">
                    Connexion réseau dédiée entre vos locaux et l'infrastructure AWS.
                    Bande passante garantie, latence réduite et sécurité maximale.
                </p>
                @foreach(['Bande passante dédiée','Latence ultra-faible','SLA 99.9%','Chiffrement bout-en-bout'] as $f)
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                    <span style="color:#1E388A; font-weight:700;">✓</span>
                    <span style="font-size:13px; color:#374151;">{{ $f }}</span>
                </div>
                @endforeach
            </div>

            <div style="background:white; border-radius:20px; padding:36px;
                        border:1.5px solid #e2e8f0;">
                <div style="display:flex; align-items:center; gap:16px; margin-bottom:20px;">
                    <div style="width:56px; height:56px; background:#FFF7ED;
                                border-radius:14px; display:flex; align-items:center;
                                justify-content:center; font-size:28px;">🔷</div>
                    <div>
                        <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                                   color:#F97316; font-size:1.1rem;">Azure VPN Gateway</h3>
                        <p style="color:#6B7280; font-size:13px;">Microsoft Azure</p>
                    </div>
                </div>
                <p style="color:#374151; font-size:14px; line-height:1.7; margin-bottom:20px;">
                    Passerelle VPN enterprise-grade de Microsoft Azure pour
                    interconnecter vos réseaux avec fiabilité et sécurité.
                </p>
                @foreach(['Multi-sites simultanés','Redondance automatique','Gestion centralisée','Conformité enterprise'] as $f)
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                    <span style="color:#F97316; font-weight:700;">✓</span>
                    <span style="font-size:13px; color:#374151;">{{ $f }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══ CAS D'USAGE ═══ --}}
<section style="padding:80px 32px; background:white;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span class="section-tag">Cas d'usage</span>
            <h2 class="section-title" style="text-align:center;">
                Qui en bénéficie ?
            </h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;">
            @foreach([
                ['icon'=>'🏦','title'=>'Banques & Microfinance',
                 'desc'=>'Connexion sécurisée entre siège et agences pour les transactions financières en temps réel.'],
                ['icon'=>'🏥','title'=>'Santé & Hôpitaux',
                 'desc'=>'Partage sécurisé des dossiers médicaux entre établissements de santé.'],
                ['icon'=>'🏛','title'=>'Administrations',
                 'desc'=>'Interconnexion des services gouvernementaux et ministères à travers le pays.'],
                ['icon'=>'🌍','title'=>'ONG & Associations',
                 'desc'=>'Liaison sécurisée entre bureaux terrain et sièges régionaux ou internationaux.'],
                ['icon'=>'🏪','title'=>'Chaînes Commerciales',
                 'desc'=>'Synchronisation des stocks, caisse et gestion entre tous les points de vente.'],
                ['icon'=>'🎓','title'=>'Éducation',
                 'desc'=>'Connexion des établissements scolaires pour le partage de ressources pédagogiques.'],
            ] as $cas)
            <div style="padding:28px; border-radius:16px; border:1.5px solid #e2e8f0;">
                <div style="font-size:36px; margin-bottom:16px;">{{ $cas['icon'] }}</div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:700;
                           color:#1E388A; font-size:16px; margin-bottom:10px;">
                    {{ $cas['title'] }}
                </h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.7;">
                    {{ $cas['desc'] }}
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
            Interconnectez vos agences dès aujourd'hui
        </h2>
        <p style="color:rgba(255,255,255,.8); margin-bottom:28px;">
            Contactez-nous pour une étude gratuite de votre infrastructure réseau.
        </p>
        <a href="{{ route('contact') }}"
           style="display:inline-block; background:#F97316; color:white;
                  font-weight:800; padding:14px 32px; border-radius:12px;
                  text-decoration:none; font-size:16px;
                  box-shadow:0 4px 16px rgba(249,115,22,.4);">
            Demander une étude gratuite →
        </a>
    </div>
</section>

@endsection