<footer>

    {{-- ═══ SECTION 1 — Fond bleu ═══ --}}
    <div style="background:#1E388A; padding:48px 60px;">
        <div style="max-width:1280px; margin:0 auto;
                    display:grid; grid-template-columns:1fr 1fr 1fr;
                    gap:40px; align-items:center;">

            {{-- Logo + tagline --}}
            <div>
                <p style="font-family:'Sora',sans-serif; font-size:22px;
                        font-weight:800; margin-bottom:8px;">
                    <span style="color:white;">Digit</span>
                    <span style="color:#F97316;">Sahel</span>
                    <span style="color:white;">Cloud</span>
                </p>
                <p style="color:rgba(255,255,255,.7); font-size:14px; line-height:1.7;">
                    Votre Partenaire Cloud au Sahel.<br>
                    Infrastructure locale fiable et souveraine.
                </p>
            </div>

            {{-- Slogan centré --}}
            <div style="text-align:center;">
                <div style="display:inline-block; background:rgba(249,115,22,.2);
                            border:1px solid rgba(249,115,22,.4);
                            border-radius:50px; padding:10px 24px; margin-bottom:16px;">
                    <span style="color:#F97316; font-weight:700; font-size:13px;">
                        🇳🇪 MSP Local — Niamey, Niger
                    </span>
                </div>
                <p style="color:rgba(255,255,255,.8); font-size:15px;
                           font-style:italic; line-height:1.6;">
                    "Digitaliser le Sahel,<br>
                    <span style="color:#F97316; font-weight:700;">
                        une entreprise à la fois.
                    </span>"
                </p>
            </div>

            {{-- Réseaux sociaux + contact rapide --}}
            <div style="text-align:right;">
                <p style="color:rgba(255,255,255,.6); font-size:12px;
                           font-weight:700; text-transform:uppercase;
                           letter-spacing:1px; margin-bottom:14px;">
                    Suivez-nous
                </p>
                <div style="display:flex; gap:10px; justify-content:flex-end;
                            margin-bottom:20px;">
                    @foreach([
                        ['label'=>'f',  'bg'=>'#1877F2'],
                        ['label'=>'in', 'bg'=>'#0A66C2'],
                        ['label'=>'𝕏',  'bg'=>'#000000'],
                    ] as $social)
                    <a href="#"
                       style="width:38px; height:38px; background:{{ $social['bg'] }};
                              border-radius:10px; display:flex; align-items:center;
                              justify-content:center; color:white; font-weight:700;
                              font-size:14px; text-decoration:none; transition:all .2s;">
                        {{ $social['label'] }}
                    </a>
                    @endforeach
                </div>
                <a href="tel:+22790065023"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                          color:white; padding:10px 18px; border-radius:10px;
                          text-decoration:none; font-size:14px; font-weight:600;">
                    📞 +227 90065023
                </a>
            </div>
        </div>
    </div>

    {{-- Séparateur visible --}}
    <div style="height:4px;
                background:linear-gradient(90deg, #1E388A, #F97316, #1E388A);">
    </div>

    {{-- ═══ SECTION 2 — Fond blanc ═══ --}}
    <div style="background:white; padding:40px 60px;">
        <div style="max-width:1280px; margin:0 auto;
                    display:grid; grid-template-columns:2fr 1fr 1fr;
                    gap:40px;">

            {{-- Liens services --}}
            <div>
                <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                           font-size:14px; color:#1E388A;
                           text-transform:uppercase; letter-spacing:1px;
                           margin-bottom:16px; padding-bottom:8px;
                           border-bottom:2px solid #F97316; display:inline-block;">
                    Nos Services
                </h4>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px;">
                    @foreach([
                        'Hébergement Web & Cloud',
                        'VPN & Interconnexion',
                        'Développement Apps',
                        'Cybersécurité',
                        'ERP & Gestion',
                        'Email Professionnel',
                        'Support & Maintenance',
                        'Conseil Digital',
                    ] as $service)
                    <a href="{{ route('services') }}"
                       style="color:#1E388A; text-decoration:none; font-size:13px;
                              display:flex; align-items:center; gap:6px;
                              padding:4px 0; font-weight:500;">
                        <span style="color:#F97316; font-size:10px;">▸</span>
                        {{ $service }}
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Navigation --}}
            <div>
                <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                           font-size:14px; color:#1E388A;
                           text-transform:uppercase; letter-spacing:1px;
                           margin-bottom:16px; padding-bottom:8px;
                           border-bottom:2px solid #F97316; display:inline-block;">
                    Navigation
                </h4>
                <div style="display:flex; flex-direction:column; gap:8px;">
                    @foreach([
                        ['route'=>'home',     'label'=>'Accueil'],
                        ['route'=>'services', 'label'=>'Nos Services'],
                        ['route'=>'vpn',      'label'=>'VPN & Agences'],
                        ['route'=>'about',    'label'=>'À propos'],
                        ['route'=>'contact',  'label'=>'Contact'],
                    ] as $link)
                    <a href="{{ route($link['route']) }}"
                       style="color:#1E388A; text-decoration:none; font-size:13px;
                              display:flex; align-items:center; gap:6px; font-weight:500;">
                        <span style="color:#F97316; font-size:10px;">▸</span>
                        {{ $link['label'] }}
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Contact --}}
            <div>
                <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                           font-size:14px; color:#1E388A;
                           text-transform:uppercase; letter-spacing:1px;
                           margin-bottom:16px; padding-bottom:8px;
                           border-bottom:2px solid #F97316; display:inline-block;">
                    Contact
                </h4>
                <div style="display:flex; flex-direction:column; gap:12px;">
                    @foreach([
                        ['icon'=>'📍','value'=>'Niamey, Niger'],
                        ['icon'=>'📞','value'=>'+227 90065023'],
                        ['icon'=>'✉', 'value'=>'admin-dsc@digitsahelcloud.com'],
                        ['icon'=>'🌐','value'=>'www.digitsahelcloud.com'],
                    ] as $info)
                    <div style="display:flex; align-items:flex-start; gap:8px;">
                        <span style="font-size:14px;">{{ $info['icon'] }}</span>
                        <span style="color:#1E388A; font-size:13px; line-height:1.5; font-weight:500;">
                            {{ $info['value'] }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div style="max-width:1280px; margin:32px auto 0;
                    padding-top:20px; border-top:1px solid #e2e8f0;
                    display:flex; justify-content:space-between; align-items:center;">
            {{-- Copyright --}}
            <p style="font-size:13px;">
                <span style="color:#6B7280;">©{{ date('Y') }} </span>
                <span style="color:#1E388A; font-weight:700;">Digit</span>
                <span style="color:#F97316; font-weight:700;">Sahel</span>
                <span style="color:#1E388A; font-weight:700;">Cloud</span>
                <span style="color:#6B7280;">. Tous droits réservés.</span>
            </p>
        </div>
    </div>

</footer>