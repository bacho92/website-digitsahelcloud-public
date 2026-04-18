<style>
/* ═══ ANIMATIONS FOOTER ═══ */
@keyframes pulse-dot {
    0%, 100% { box-shadow: 0 0 0 0 rgba(34,197,94,.4); }
    50% { box-shadow: 0 0 0 6px rgba(34,197,94,0); }
}
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-6px); }
}
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes shimmer {
    0%   { background-position: -200% center; }
    100% { background-position: 200% center; }
}
@keyframes spin-slow {
    from { transform: rotate(0deg); }
    to   { transform: rotate(360deg); }
}

.footer-col {
    animation: fadeInUp .6s ease forwards;
    opacity: 0;
}
.footer-col:nth-child(1) { animation-delay: .1s; }
.footer-col:nth-child(2) { animation-delay: .2s; }
.footer-col:nth-child(3) { animation-delay: .3s; }
.footer-col:nth-child(4) { animation-delay: .4s; }

.footer-link {
    color: #374151;
    text-decoration: none;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 5px 0;
    font-weight: 500;
    transition: all .25s;
    border-left: 2px solid transparent;
    padding-left: 0;
}
.footer-link:hover {
    color: #F97316;
    border-left-color: #F97316;
    padding-left: 8px;
}

.social-btn {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 13px;
    text-decoration: none;
    transition: all .25s;
    box-shadow: 0 4px 12px rgba(0,0,0,.15);
}
.social-btn:hover {
    transform: translateY(-4px) scale(1.1);
    box-shadow: 0 8px 20px rgba(0,0,0,.25);
}

.brand-shimmer {
    background: linear-gradient(90deg, #F97316 0%, #fb923c 40%, #F97316 60%, #fb923c 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: shimmer 3s linear infinite;
}

.pulse-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #22c55e;
    display: inline-block;
    animation: pulse-dot 2s infinite;
}

.footer-logo-icon {
    animation: float 4s ease-in-out infinite;
}

@media (max-width: 900px) {
    .footer-grid { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 600px) {
    .footer-grid { grid-template-columns: 1fr !important; }
    .footer-bottom { flex-direction: column !important; text-align: center !important; }
}
</style>

<footer>

    {{-- ═══ FOOTER — Fond blanc ═══ --}}
    <div style="background:white; padding:56px 60px 0;">
        <div style="max-width:1280px; margin:0 auto;">

            {{-- Trait bleu séparateur haut --}}
            <div style="height:3px; background:linear-gradient(90deg,#1E388A,#F97316,#1E388A);
                        border-radius:2px; margin-bottom:48px;"></div>

            {{-- Grille 4 colonnes --}}
            <div class="footer-grid" style="display:grid; grid-template-columns:1.6fr 1fr 1fr 1fr; gap:48px; margin-bottom:48px;">

                {{-- Colonne 1 — Logo + description --}}
                <div class="footer-col">
                    {{-- Logo animé --}}
                    <div class="footer-logo-icon" style="margin-bottom:16px;">
                        <p style="font-family:'Sora',sans-serif; font-size:26px; font-weight:800; margin:0;">
                            <span style="color:#1E388A;">Digit</span><span class="brand-shimmer">Sahel</span><span style="color:#1E388A;">Cloud</span>
                        </p>
                        <p style="color:#6B7280; font-size:12px; font-weight:600;
                                   text-transform:uppercase; letter-spacing:1px; margin:4px 0 0;">
                            Managed Service Provider
                        </p>
                    </div>

                    <p style="color:#6B7280; font-size:14px; line-height:1.8; margin-bottom:20px; max-width:280px;">
                        Votre partenaire IT de confiance au Sahel —
                        expertise locale certifiée, support en français 24/7
                        et solutions adaptées aux réalités du Niger.
                    </p>

                    {{-- Badge en ligne --}}
                    <div style="display:inline-flex; align-items:center; gap:8px;
                                background:#F0FDF4; border:1px solid #BBF7D0;
                                border-radius:50px; padding:8px 16px; margin-bottom:20px;">
                        <span class="pulse-dot"></span>
                        <span style="color:#059669; font-weight:700; font-size:12px;">
                            En ligne — Niamey, Niger 🇳🇪
                        </span>
                    </div>

                    {{-- Réseaux sociaux --}}
                    <div>
                        <p style="color:#9CA3AF; font-size:11px; font-weight:700;
                                   text-transform:uppercase; letter-spacing:1px; margin-bottom:12px;">
                            Suivez-nous
                        </p>
                        <div style="display:flex; gap:10px;">
                            <a href="#" class="social-btn" style="background:#1877F2;">f</a>
                            <a href="#" class="social-btn" style="background:#0A66C2;">in</a>
                            <a href="#" class="social-btn" style="background:#000000;">𝕏</a>
                        </div>
                    </div>
                </div>

                {{-- Colonne 2 — Services --}}
                <div class="footer-col">
                    <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                               font-size:13px; color:#1E388A;
                               text-transform:uppercase; letter-spacing:1.5px;
                               margin-bottom:20px; display:flex; align-items:center; gap:8px;">
                        <span style="width:20px; height:2px; background:#F97316; display:inline-block; border-radius:2px;"></span>
                        Nos Services
                    </h4>
                    <div style="display:flex; flex-direction:column;">
                        @foreach([
                            'Hébergement Web & Cloud',
                            'Interconnexion & Agences',
                            'Infrastructure Cloud',
                            'Cybersécurité',
                            'ERP & Gestion',
                            'Email Professionnel',
                            'Support & Maintenance',
                            'Conseil & Digital',
                        ] as $service)
                        <a href="{{ route('services') }}" class="footer-link">
                            <span style="color:#F97316; font-size:8px; flex-shrink:0;">▶</span>
                            {{ $service }}
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Colonne 3 — Navigation --}}
                <div class="footer-col">
                    <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                               font-size:13px; color:#1E388A;
                               text-transform:uppercase; letter-spacing:1.5px;
                               margin-bottom:20px; display:flex; align-items:center; gap:8px;">
                        <span style="width:20px; height:2px; background:#F97316; display:inline-block; border-radius:2px;"></span>
                        Navigation
                    </h4>
                    <div style="display:flex; flex-direction:column;">
                        @foreach([
                            ['route'=>'home',     'label'=>'Accueil'],
                            ['route'=>'services', 'label'=>'Nos Services'],
                            ['route'=>'vpn',      'label'=>'Interconnexion & Réseaux'],
                            ['route'=>'about',    'label'=>'Pourquoi Nous'],
                            ['route'=>'contact',  'label'=>'Contact'],
                        ] as $link)
                        <a href="{{ route($link['route']) }}" class="footer-link">
                            <span style="color:#F97316; font-size:8px; flex-shrink:0;">▶</span>
                            {{ $link['label'] }}
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Colonne 4 — Contact --}}
                <div class="footer-col">
                    <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                               font-size:13px; color:#1E388A;
                               text-transform:uppercase; letter-spacing:1.5px;
                               margin-bottom:20px; display:flex; align-items:center; gap:8px;">
                        <span style="width:20px; height:2px; background:#F97316; display:inline-block; border-radius:2px;"></span>
                        Contact
                    </h4>
                    <div style="display:flex; flex-direction:column; gap:14px;">
                        @foreach([
                            ['icon'=>'📍','value'=>'Niamey, République du Niger','color'=>'#1E388A'],
                            ['icon'=>'📱','value'=>'+227 70810113','color'=>'#25D366'],
                            ['icon'=>'✉️','value'=>'admin-dsc@digitsahelcloud.com','color'=>'#F97316'],
                            ['icon'=>'🌐','value'=>'digitsahelcloud.com','color'=>'#0284C7'],
                        ] as $info)
                        <div style="display:flex; align-items:flex-start; gap:10px;
                                    padding:10px; border-radius:10px; background:#F8FAFF;
                                    border:1px solid #EEF2FF; transition:all .25s;"
                             onmouseover="this.style.borderColor='{{ $info['color'] }}';this.style.background='#F0F4FF'"
                             onmouseout="this.style.borderColor='#EEF2FF';this.style.background='#F8FAFF'">
                            <span style="font-size:16px; flex-shrink:0;">{{ $info['icon'] }}</span>
                            <span style="color:#374151; font-size:12px; line-height:1.5; font-weight:500;">
                                {{ $info['value'] }}
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Trait bleu séparateur bas --}}
            <div style="height:2px; background:linear-gradient(90deg,transparent,#1E388A,#F97316,#1E388A,transparent);
                        border-radius:2px; margin-bottom:24px;"></div>

            {{-- Copyright + slogan --}}
            <div class="footer-bottom" style="display:flex; justify-content:space-between;
                        align-items:center; flex-wrap:wrap; gap:12px; padding-bottom:32px;">
                <p style="color:#6B7280; font-size:13px; font-style:italic; margin:0;">
                    "Connecter le Niger au monde digital, une organisation à la fois."
                </p>
                <p style="font-size:13px; margin:0;">
                    <span style="color:#6B7280;">©{{ date('Y') }} </span>
                    <span style="color:#1E388A; font-weight:800;">Digit</span><span style="color:#F97316; font-weight:800;">Sahel</span><span style="color:#1E388A; font-weight:800;">Cloud</span>
                    <span style="color:#9CA3AF;"> — Tous droits réservés.</span>
                </p>
            </div>
        </div>
    </div>

</footer>
