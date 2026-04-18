@extends('layout.app')

@section('title', 'Interconnexion & Réseaux')
@section('description', 'Interconnectez vos agences, bureaux et équipes distantes via des tunnels chiffrés AES-256 — déployés, sécurisés et monitorés 24/7 par notre équipe locale à Niamey.')
@section('og_title', 'Interconnexion & Réseaux — DigitSahelCloud')
@section('og_description', 'Solution VPN sécurisée managée par DigitSahelCloud — chiffrement AES-256, haute disponibilité, support local 24/7')

@section('content')

<style>
@media (max-width: 768px) {
    .vpn-hero-grid { grid-template-columns: 1fr !important; }
    .vpn-arch-grid { grid-template-columns: 1fr !important; }
    .vpn-tech-grid { grid-template-columns: 1fr !important; }
    .vpn-cas-grid  { grid-template-columns: 1fr 1fr !important; }
    .vpn-stats-grid { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 480px) {
    .vpn-cas-grid  { grid-template-columns: 1fr !important; }
    .vpn-stats-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

{{-- ═══ HERO ═══ --}}
<section style="background:linear-gradient(135deg,#152a6b 0%,#1E388A 60%,#2d4fa3 100%);
                padding:80px 32px 0; position:relative; overflow:hidden;">

    <div style="position:absolute; top:-80px; right:-80px; width:400px; height:400px;
                border-radius:50%; background:radial-gradient(circle, rgba(249,115,22,.2) 0%, transparent 70%);"></div>
    <div style="position:absolute; bottom:0; left:5%; width:250px; height:250px;
                border-radius:50%; background:radial-gradient(circle, rgba(255,255,255,.05) 0%, transparent 70%);"></div>

    <div class="vpn-hero-grid" style="max-width:1280px; margin:0 auto; display:grid;
                grid-template-columns:1fr 1fr; gap:60px; align-items:center;
                position:relative; z-index:1; padding-bottom:60px;">
        <div>
            <span style="display:inline-flex; align-items:center; gap:8px;
                         background:rgba(249,115,22,.15); border:1px solid rgba(249,115,22,.3);
                         color:#F97316; padding:6px 16px; border-radius:50px;
                         font-size:13px; font-weight:600; margin-bottom:24px;">
                🔐 Solution Phare — Réseaux & Sécurité
            </span>
            <h1 style="font-family:'Sora',sans-serif; font-size:clamp(2rem,4vw,3.2rem);
                        font-weight:800; color:white; line-height:1.2; margin-bottom:20px;">
                Interconnectez vos Sites
                <span style="color:#F97316; display:block;">en Toute Sécurité</span>
            </h1>
            <p style="color:rgba(255,255,255,.75); font-size:1.05rem; line-height:1.8; margin-bottom:32px;">
                Reliez votre siège, vos agences et vos équipes distantes via des tunnels
                chiffrés haute disponibilité — déployés, sécurisés et monitorés 24/7
                par notre équipe locale à Niamey. Idéal pour banques, ONG,
                administrations et réseaux d'agences au Niger.
            </p>
            <div style="display:flex; flex-wrap:wrap; gap:10px; margin-bottom:32px;">
                @foreach(['Chiffrement AES-256','Haute disponibilité','Monitoring 24/7','Support local Niamey','Réponse sous 4h','SLA garanti'] as $tag)
                <span style="background:rgba(249,115,22,.15); border:1px solid rgba(249,115,22,.3);
                             color:#F97316; padding:6px 14px; border-radius:50px;
                             font-size:12px; font-weight:600;">
                    {{ $tag }}
                </span>
                @endforeach
            </div>
            <div style="display:flex; gap:16px; flex-wrap:wrap;">
                <a href="{{ route('contact') }}" class="btn-primary">
                    Demander un devis →
                </a>
                <a href="{{ route('services') }}"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:rgba(255,255,255,.1); border:2px solid rgba(255,255,255,.3);
                          color:white; font-weight:600; padding:12px 24px; border-radius:12px;
                          text-decoration:none;">
                    Voir tous nos services
                </a>
            </div>
        </div>

        {{-- Image HD réseau 3D --}}
        <div style="border-radius:20px; overflow:hidden; box-shadow:0 24px 64px rgba(0,0,0,.4);
                    position:relative;">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&q=90"
                 alt="Réseau mondial interconnexion globe terrestre lumineux"
                 style="width:100%; height:400px; object-fit:cover; display:block;">
            <div style="position:absolute; inset:0;
                        background:linear-gradient(135deg, rgba(30,56,138,.4) 0%, transparent 60%);">
            </div>
            {{-- Overlay stats --}}
            <div style="position:absolute; bottom:20px; left:20px; right:20px;
                        display:flex; gap:12px; flex-wrap:wrap;">
                @foreach([['99.9%','Disponibilité'],['AES-256','Chiffrement'],['24/7','NOC Niamey']] as $s)
                <div style="background:rgba(0,0,0,.6); backdrop-filter:blur(10px);
                            border:1px solid rgba(255,255,255,.2); border-radius:10px;
                            padding:8px 14px; text-align:center;">
                    <div style="font-family:'Sora',sans-serif; font-weight:800;
                                color:#F97316; font-size:1rem;">{{ $s[0] }}</div>
                    <div style="color:rgba(255,255,255,.7); font-size:10px;">{{ $s[1] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Vague 1 : bas du hero --}}
    <div style="line-height:0;">
        <svg viewBox="0 0 1440 70" xmlns="http://www.w3.org/2000/svg"
             preserveAspectRatio="none" style="display:block; width:100%; height:70px;">
            <path d="M0,70 C360,0 1080,0 1440,70 L1440,70 L0,70 Z" fill="#F1F5F9"/>
        </svg>
    </div>
</section>

{{-- ═══ ARCHITECTURE ═══ --}}
<section style="padding:60px 32px 80px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">Architecture</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; color:#1E388A; margin-bottom:16px;">
                Comment ça fonctionne ?
            </h2>
            <p style="color:#6B7280; font-size:1rem; max-width:560px; margin:0 auto; line-height:1.7;">
                Notre équipe déploie et gère des tunnels chiffrés entre vos sites —
                tout passe par notre NOC à Niamey pour une supervision centralisée.
            </p>
        </div>

        {{-- Schéma architecture amélioré --}}
        <div style="background:linear-gradient(135deg,#152a6b,#1E388A);
                    border-radius:24px; padding:48px; margin-bottom:48px;
                    box-shadow:0 8px 48px rgba(30,56,138,.3);">

            <div class="vpn-arch-grid" style="display:grid;
                        grid-template-columns:1fr 60px 1fr 60px 1fr;
                        gap:16px; align-items:center; max-width:960px; margin:0 auto;">

                {{-- Siège --}}
                <div style="background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                            border-radius:16px; padding:28px; text-align:center;">
                    <div style="font-size:40px; margin-bottom:12px;">🏢</div>
                    <div style="font-family:'Sora',sans-serif; font-weight:700;
                                color:white; font-size:15px; margin-bottom:4px;">
                        Siège Principal
                    </div>
                    <div style="color:rgba(255,255,255,.5); font-size:12px;">Niamey, Niger</div>
                    <div style="margin-top:12px; background:rgba(34,197,94,.2);
                                border:1px solid rgba(34,197,94,.4); border-radius:50px;
                                padding:4px 12px; display:inline-block;">
                        <span style="color:#22c55e; font-size:11px; font-weight:600;">● Connecté</span>
                    </div>
                </div>

                {{-- Flèche gauche --}}
                <div style="text-align:center;">
                    <div style="color:#F97316; font-size:28px; line-height:1;">⇄</div>
                    <div style="color:rgba(255,255,255,.4); font-size:10px; margin-top:4px;">
                        Tunnel<br>chiffré
                    </div>
                </div>

                {{-- NOC Hub --}}
                <div style="background:rgba(249,115,22,.15); border:2px solid #F97316;
                            border-radius:16px; padding:28px; text-align:center;
                            box-shadow:0 0 32px rgba(249,115,22,.2);">
                    <div style="font-size:40px; margin-bottom:12px;">🔐</div>
                    <div style="font-family:'Sora',sans-serif; font-weight:800;
                                color:#F97316; font-size:15px; margin-bottom:8px;">
                        DigitSahelCloud NOC
                    </div>
                    <div style="color:rgba(255,255,255,.6); font-size:12px; margin-bottom:12px;">
                        Supervision & Monitoring 24/7
                    </div>
                    <div style="display:flex; gap:6px; justify-content:center; flex-wrap:wrap;">
                        @foreach(['AES-256','Haute dispo','SLA garanti'] as $t)
                        <span style="background:rgba(249,115,22,.2); color:#F97316;
                                     padding:3px 8px; border-radius:50px; font-size:10px;
                                     font-weight:600; border:1px solid rgba(249,115,22,.3);">
                            {{ $t }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Flèche droite --}}
                <div style="text-align:center;">
                    <div style="color:#F97316; font-size:28px; line-height:1;">⇄</div>
                    <div style="color:rgba(255,255,255,.4); font-size:10px; margin-top:4px;">
                        Tunnel<br>chiffré
                    </div>
                </div>

                {{-- Sites distants --}}
                <div style="display:flex; flex-direction:column; gap:10px;">
                    @foreach([['🏪','Agence'],['🎓','École'],['🏦','Banque'],['🌍','ONG']] as $site)
                    <div style="background:rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.15);
                                border-radius:10px; padding:10px 16px;
                                display:flex; align-items:center; gap:10px;">
                        <span style="font-size:18px;">{{ $site[0] }}</span>
                        <span style="color:rgba(255,255,255,.8); font-size:12px; font-weight:600;">
                            {{ $site[1] }}
                        </span>
                        <span style="margin-left:auto; width:8px; height:8px;
                                     border-radius:50%; background:#22c55e;
                                     box-shadow:0 0 6px #22c55e;"></span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Légende --}}
            <div style="display:flex; justify-content:center; gap:32px;
                        margin-top:36px; flex-wrap:wrap;">
                @foreach(['🔒 Chiffrement AES-256 bout-en-bout','⚡ Haute disponibilité & redondance','📊 Monitoring & alertes temps réel','🇳🇪 NOC local à Niamey'] as $leg)
                <span style="color:rgba(255,255,255,.65); font-size:13px;">{{ $leg }}</span>
                @endforeach
            </div>
        </div>

        {{-- Stats rapides --}}
        <div class="vpn-stats-grid" style="display:grid; grid-template-columns:repeat(4,1fr); gap:16px; margin-bottom:0;">
            @foreach([
                ['🔐','AES-256','Chiffrement bout-en-bout','#1E388A'],
                ['⚡','99.9%','Disponibilité garantie','#059669'],
                ['📡','24/7','Monitoring NOC Niamey','#F97316'],
                ['🤝','< 4h','Temps de réponse SLA','#DC2626'],
            ] as $s)
            <div style="background:white; border-radius:16px; padding:24px; text-align:center;
                        border:1.5px solid #e2e8f0; box-shadow:0 2px 12px rgba(0,0,0,.05);">
                <div style="font-size:32px; margin-bottom:8px;">{{ $s[0] }}</div>
                <div style="font-family:'Sora',sans-serif; font-size:1.6rem;
                            font-weight:800; color:{{ $s[3] }}; line-height:1;">{{ $s[1] }}</div>
                <div style="color:#6B7280; font-size:12px; margin-top:6px;">{{ $s[2] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Vague 2 : Architecture → Technologies --}}
<div style="background:#F1F5F9; line-height:0;">
    <svg viewBox="0 0 1440 70" xmlns="http://www.w3.org/2000/svg"
         preserveAspectRatio="none" style="display:block; width:100%; height:70px;">
        <path d="M0,0 C360,70 1080,70 1440,0 L1440,70 L0,70 Z" fill="white"/>
    </svg>
</div>

{{-- ═══ CE QUE VOUS OBTENEZ ═══ --}}
<section style="padding:60px 32px 80px; background:white;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">Notre solution</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; color:#1E388A; margin-bottom:16px;">
                Ce que vous obtenez
            </h2>
            <p style="color:#6B7280; font-size:1rem; max-width:560px; margin:0 auto; line-height:1.7;">
                Une solution complète déployée et gérée par des ingénieurs certifiés —
                vous vous concentrez sur votre activité, on s'occupe du reste.
            </p>
        </div>

        <div class="vpn-tech-grid" style="display:grid; grid-template-columns:1fr 1fr; gap:24px; margin-bottom:48px;">

            {{-- Card 1 --}}
            <div style="background:#F8FAFF; border-radius:20px; padding:36px;
                        border:1.5px solid #e2e8f0; position:relative; overflow:hidden;">
                <div style="position:absolute; top:-20px; right:-20px; width:100px; height:100px;
                            border-radius:50%; background:rgba(30,56,138,.05);"></div>
                <div style="width:60px; height:60px; background:#1E388A; border-radius:16px;
                            display:flex; align-items:center; justify-content:center;
                            margin-bottom:20px; box-shadow:0 4px 16px rgba(30,56,138,.3);">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="white" width="28" height="28">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                    </svg>
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#1E388A; font-size:1.2rem; margin-bottom:12px;">
                    Sécurité maximale
                </h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.7; margin-bottom:20px;">
                    Chaque tunnel est chiffré de bout en bout — vos données transitent
                    en toute confidentialité entre vos sites, sans aucune exposition sur internet.
                </p>
                @foreach(['Chiffrement AES-256 bout-en-bout','Authentification forte multi-facteurs','Politique de sécurité centralisée','Isolation des flux entre sites'] as $f)
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                    <div style="width:18px; height:18px; border-radius:50%; background:#1E388A15;
                                display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="3" stroke="#1E388A" width="10" height="10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                    </div>
                    <span style="font-size:13px; color:#374151;">{{ $f }}</span>
                </div>
                @endforeach
            </div>

            {{-- Card 2 --}}
            <div style="background:#FFF8F3; border-radius:20px; padding:36px;
                        border:1.5px solid #FED7AA; position:relative; overflow:hidden;">
                <div style="position:absolute; top:-20px; right:-20px; width:100px; height:100px;
                            border-radius:50%; background:rgba(249,115,22,.05);"></div>
                <div style="width:60px; height:60px; background:#F97316; border-radius:16px;
                            display:flex; align-items:center; justify-content:center;
                            margin-bottom:20px; box-shadow:0 4px 16px rgba(249,115,22,.3);">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="white" width="28" height="28">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/>
                    </svg>
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#F97316; font-size:1.2rem; margin-bottom:12px;">
                    Supervision NOC 24/7
                </h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.7; margin-bottom:20px;">
                    Votre réseau surveillé en permanence depuis notre Centre d'Opérations
                    à Niamey — détection proactive, alertes instantanées et intervention
                    immédiate avant tout impact sur vos activités.
                </p>
                @foreach(['Tableau de bord de disponibilité','Alertes & escalade automatiques','Métriques de performance temps réel','Rapport mensuel détaillé'] as $f)
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                    <div style="width:18px; height:18px; border-radius:50%; background:#F9731615;
                                display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="3" stroke="#F97316" width="10" height="10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                    </div>
                    <span style="font-size:13px; color:#374151;">{{ $f }}</span>
                </div>
                @endforeach
            </div>

            {{-- Card 3 --}}
            <div style="background:#F0FDF4; border-radius:20px; padding:36px;
                        border:1.5px solid #BBF7D0; position:relative; overflow:hidden;">
                <div style="width:60px; height:60px; background:#059669; border-radius:16px;
                            display:flex; align-items:center; justify-content:center;
                            margin-bottom:20px; box-shadow:0 4px 16px rgba(5,150,105,.3);">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="white" width="28" height="28">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                    </svg>
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#059669; font-size:1.2rem; margin-bottom:12px;">
                    Haute disponibilité
                </h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.7; margin-bottom:20px;">
                    Architecture redondante conçue pour garantir la continuité de vos services —
                    même en cas de panne partielle, vos agences restent connectées
                    et vos opérations ne s'interrompent pas.
                </p>
                @foreach(['Redondance des tunnels VPN','Basculement automatique','Disponibilité garantie 99.9%','SLA contractuel'] as $f)
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                    <div style="width:18px; height:18px; border-radius:50%; background:#05996915;
                                display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="3" stroke="#059669" width="10" height="10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                    </div>
                    <span style="font-size:13px; color:#374151;">{{ $f }}</span>
                </div>
                @endforeach
            </div>

            {{-- Card 4 --}}
            <div style="background:#FFF5F5; border-radius:20px; padding:36px;
                        border:1.5px solid #FCA5A5; position:relative; overflow:hidden;">
                <div style="width:60px; height:60px; background:#DC2626; border-radius:16px;
                            display:flex; align-items:center; justify-content:center;
                            margin-bottom:20px; box-shadow:0 4px 16px rgba(220,38,38,.3);">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="white" width="28" height="28">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                    </svg>
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#DC2626; font-size:1.2rem; margin-bottom:12px;">
                    Support local Niamey
                </h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.7; margin-bottom:20px;">
                    Nos ingénieurs interviennent rapidement sur site à Niamey et dans
                    les régions — support en français, connaissance du terrain
                    et réactivité de proximité que les prestataires étrangers ne peuvent offrir.
                </p>
                @foreach(['Intervention sur site rapide','Support en français 24/7','Ingénieurs locaux certifiés','Rapport d\'intervention systématique'] as $f)
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                    <div style="width:18px; height:18px; border-radius:50%; background:#DC262615;
                                display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="3" stroke="#DC2626" width="10" height="10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                    </div>
                    <span style="font-size:13px; color:#374151;">{{ $f }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══ CAS D'USAGE ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">Cas d'usage</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2.2rem;
                        font-weight:800; color:#1E388A; margin-bottom:16px;">
                Qui en bénéficie ?
            </h2>
            <p style="color:#6B7280; font-size:1rem; max-width:500px; margin:0 auto; line-height:1.7;">
                Toute organisation avec plusieurs sites distants peut bénéficier
                d'une connexion sécurisée managée par DigitSahelCloud.
            </p>
        </div>

        <div class="vpn-cas-grid" style="display:grid; grid-template-columns:repeat(3,1fr); gap:24px;">
            @foreach([
                [
                    'icon' => '🏦',
                    'color' => '#1E388A',
                    'title' => 'Banques & Microfinance',
                    'desc'  => 'Connexion sécurisée entre siège et agences pour les transactions financières en temps réel. Conformité réglementaire et confidentialité garanties.',
                    'tags'  => ['Transactions sécurisées','Conformité','Temps réel'],
                ],
                [
                    'icon' => '🏥',
                    'color' => '#DC2626',
                    'title' => 'Santé & Hôpitaux',
                    'desc'  => 'Partage sécurisé des dossiers médicaux entre établissements de santé. Accès aux plateformes nationales de santé depuis les sites distants.',
                    'tags'  => ['Dossiers médicaux','Multi-sites','Confidentialité'],
                ],
                [
                    'icon' => '🏛',
                    'color' => '#7C3AED',
                    'title' => 'Administrations',
                    'desc'  => 'Interconnexion des services gouvernementaux et ministères à travers le pays. Infrastructure sécurisée pour les données sensibles de l\'État.',
                    'tags'  => ['Données sensibles','Sécurité renforcée','Multi-régions'],
                ],
                [
                    'icon' => '🌍',
                    'color' => '#059669',
                    'title' => 'ONG & Associations',
                    'desc'  => 'Liaison sécurisée entre bureaux terrain et sièges régionaux ou internationaux. Continuité des opérations même en zone à faible connectivité.',
                    'tags'  => ['Bureaux terrain','Connectivité variable','Fiabilité'],
                ],
                [
                    'icon' => '🏪',
                    'color' => '#F97316',
                    'title' => 'Chaînes Commerciales',
                    'desc'  => 'Synchronisation des stocks, caisse et gestion entre tous les points de vente. Vision centralisée de vos performances en temps réel.',
                    'tags'  => ['Stocks sync','Caisse centralisée','Vision globale'],
                ],
                [
                    'icon' => '🎓',
                    'color' => '#0284C7',
                    'title' => 'Éducation',
                    'desc'  => 'Connexion des établissements scolaires et universitaires pour le partage de ressources pédagogiques et l\'accès aux systèmes de gestion.',
                    'tags'  => ['Ressources partagées','Gestion centralisée','Multi-campus'],
                ],
            ] as $cas)
            <div style="background:white; padding:28px; border-radius:20px;
                        border:1.5px solid #e2e8f0; transition:all .3s;"
                 onmouseover="this.style.borderColor='{{ $cas['color'] }}';this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(0,0,0,.08)'"
                 onmouseout="this.style.borderColor='#e2e8f0';this.style.transform='none';this.style.boxShadow='none'">
                <div style="width:56px; height:56px; border-radius:16px;
                            background:{{ $cas['color'] }}15; display:flex;
                            align-items:center; justify-content:center;
                            font-size:28px; margin-bottom:16px;
                            border:1px solid {{ $cas['color'] }}30;">
                    {{ $cas['icon'] }}
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:700;
                           color:#1E388A; font-size:16px; margin-bottom:10px;">
                    {{ $cas['title'] }}
                </h3>
                <p style="color:#6B7280; font-size:13px; line-height:1.7; margin-bottom:16px;">
                    {{ $cas['desc'] }}
                </p>
                <div style="display:flex; gap:6px; flex-wrap:wrap;">
                    @foreach($cas['tags'] as $tag)
                    <span style="background:{{ $cas['color'] }}10; color:{{ $cas['color'] }};
                                 border:1px solid {{ $cas['color'] }}20;
                                 padding:3px 10px; border-radius:50px; font-size:11px; font-weight:600;">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Vague finale → CTA --}}
<div style="background:#F1F5F9; line-height:0;">
    <svg viewBox="0 0 1440 70" xmlns="http://www.w3.org/2000/svg"
         preserveAspectRatio="none" style="display:block; width:100%; height:70px;">
        <path d="M0,0 C360,70 1080,70 1440,0 L1440,70 L0,70 Z" fill="#1E388A"/>
    </svg>
</div>

{{-- ═══ CTA FINAL ═══ --}}
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
            🚀 Passez à l'action
        </span>
        <h2 style="font-family:'Sora',sans-serif; font-size:2.4rem;
                    font-weight:800; color:white; margin-bottom:16px; line-height:1.2;">
            Un Projet ? <span style="color:#F97316;">Parlons-en.</span>
        </h2>
        <p style="color:rgba(255,255,255,.8); font-size:1.05rem;
                   line-height:1.7; margin-bottom:40px;">
            Notre équipe analyse votre infrastructure et vous propose
            la solution d'interconnexion la plus adaptée à vos besoins.
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