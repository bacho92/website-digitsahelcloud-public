<footer>

    {{-- Vague d'entrée footer --}}
    <div style="background:#1E388A; line-height:0;">
        <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg"
             preserveAspectRatio="none" style="display:block; width:100%; height:60px;">
            <path d="M0,60 C360,0 1080,0 1440,60 L1440,60 L0,60 Z" fill="#1E388A"/>
        </svg>
    </div>

    {{-- ═══ SECTION 1 — Fond bleu foncé ═══ --}}
    <div style="background:linear-gradient(135deg,#152a6b 0%,#1E388A 100%); padding:56px 60px 40px;">
        <div style="max-width:1280px; margin:0 auto;">

            {{-- Ligne du haut --}}
            <div style="display:grid; grid-template-columns:1.5fr 1fr 1fr 1fr; gap:48px; margin-bottom:48px;">

                {{-- Logo + description --}}
                <div>
                    <p style="font-family:'Sora',sans-serif; font-size:24px;
                               font-weight:800; margin-bottom:12px;">
                        <span style="color:white;">Digit</span>
                        <span style="color:#F97316;">Sahel</span>
                        <span style="color:white;">Cloud</span>
                    </p>
                    <p style="color:rgba(255,255,255,.65); font-size:14px; line-height:1.8; margin-bottom:20px;">
                        Votre partenaire IT de confiance au Sahel —
                        expertise locale certifiée, support en français 24/7
                        et solutions adaptées aux réalités du Niger.
                    </p>
                    {{-- Badge --}}
                    <div style="display:inline-flex; align-items:center; gap:8px;
                                background:rgba(249,115,22,.15); border:1px solid rgba(249,115,22,.3);
                                border-radius:50px; padding:8px 16px;">
                        <span style="width:8px; height:8px; border-radius:50%;
                                     background:#22c55e; box-shadow:0 0 6px #22c55e;
                                     display:inline-block;"></span>
                        <span style="color:#F97316; font-weight:700; font-size:12px;">
                            🇳🇪 MSP Local — Niamey, Niger
                        </span>
                    </div>
                </div>

                {{-- Nos Services --}}
                <div>
                    <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                               font-size:13px; color:white;
                               text-transform:uppercase; letter-spacing:1.5px;
                               margin-bottom:20px; display:flex; align-items:center; gap:8px;">
                        <span style="width:24px; height:2px; background:#F97316; display:inline-block;"></span>
                        Nos Services
                    </h4>
                    <div style="display:flex; flex-direction:column; gap:10px;">
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
                        <a href="{{ route('services') }}"
                           style="color:rgba(255,255,255,.6); text-decoration:none; font-size:13px;
                                  display:flex; align-items:center; gap:8px; transition:all .2s;"
                           onmouseover="this.style.color='#F97316';this.style.paddingLeft='4px'"
                           onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0'">
                            <span style="color:#F97316; font-size:8px;">▶</span>
                            {{ $service }}
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Navigation --}}
                <div>
                    <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                               font-size:13px; color:white;
                               text-transform:uppercase; letter-spacing:1.5px;
                               margin-bottom:20px; display:flex; align-items:center; gap:8px;">
                        <span style="width:24px; height:2px; background:#F97316; display:inline-block;"></span>
                        Navigation
                    </h4>
                    <div style="display:flex; flex-direction:column; gap:10px;">
                        @foreach([
                            ['route'=>'home',     'label'=>'Accueil'],
                            ['route'=>'services', 'label'=>'Nos Services'],
                            ['route'=>'vpn',      'label'=>'Interconnexion & Réseaux'],
                            ['route'=>'about',    'label'=>'Pourquoi Nous'],
                            ['route'=>'contact',  'label'=>'Contact'],
                        ] as $link)
                        <a href="{{ route($link['route']) }}"
                           style="color:rgba(255,255,255,.6); text-decoration:none; font-size:13px;
                                  display:flex; align-items:center; gap:8px; transition:all .2s;"
                           onmouseover="this.style.color='#F97316';this.style.paddingLeft='4px'"
                           onmouseout="this.style.color='rgba(255,255,255,.6)';this.style.paddingLeft='0'">
                            <span style="color:#F97316; font-size:8px;">▶</span>
                            {{ $link['label'] }}
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 style="font-family:'Sora',sans-serif; font-weight:800;
                               font-size:13px; color:white;
                               text-transform:uppercase; letter-spacing:1.5px;
                               margin-bottom:20px; display:flex; align-items:center; gap:8px;">
                        <span style="width:24px; height:2px; background:#F97316; display:inline-block;"></span>
                        Contact
                    </h4>
                    <div style="display:flex; flex-direction:column; gap:14px;">
                        @foreach([
                            ['icon'=>'📍','value'=>'Niamey, République du Niger'],
                            ['icon'=>'📱','value'=>'+227 70810113'],
                            ['icon'=>'✉️','value'=>'admin-dsc@digitsahelcloud.com'],
                            ['icon'=>'🌐','value'=>'digitsahelcloud.com'],
                        ] as $info)
                        <div style="display:flex; align-items:flex-start; gap:10px;">
                            <span style="font-size:15px; flex-shrink:0;">{{ $info['icon'] }}</span>
                            <span style="color:rgba(255,255,255,.65); font-size:13px; line-height:1.5;">
                                {{ $info['value'] }}
                            </span>
                        </div>
                        @endforeach
                    </div>

                    {{-- Réseaux sociaux --}}
                    <div style="margin-top:24px;">
                        <p style="color:rgba(255,255,255,.4); font-size:11px; font-weight:700;
                                   text-transform:uppercase; letter-spacing:1px; margin-bottom:12px;">
                            Suivez-nous
                        </p>
                        <div style="display:flex; gap:10px;">
                            @foreach([
                                ['label'=>'f',  'bg'=>'#1877F2', 'href'=>'#'],
                                ['label'=>'in', 'bg'=>'#0A66C2', 'href'=>'#'],
                                ['label'=>'𝕏',  'bg'=>'#000',   'href'=>'#'],
                            ] as $s)
                            <a href="{{ $s['href'] }}"
                               style="width:36px; height:36px; background:{{ $s['bg'] }};
                                      border-radius:10px; display:flex; align-items:center;
                                      justify-content:center; color:white; font-weight:700;
                                      font-size:13px; text-decoration:none;
                                      transition:all .2s; box-shadow:0 4px 12px rgba(0,0,0,.2);"
                               onmouseover="this.style.transform='translateY(-3px)'"
                               onmouseout="this.style.transform='none'">
                                {{ $s['label'] }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Séparateur --}}
            <div style="height:1px; background:rgba(255,255,255,.1); margin-bottom:28px;"></div>

            {{-- Slogan + copyright --}}
            <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
                <p style="color:rgba(255,255,255,.5); font-size:13px; font-style:italic;">
                    "Connecter le Niger au monde digital, une organisation à la fois."
                </p>
                <p style="color:rgba(255,255,255,.4); font-size:12px;">
                    ©{{ date('Y') }}
                    <span style="color:white; font-weight:700;"> Digit</span><span style="color:#F97316; font-weight:700;">Sahel</span><span style="color:white; font-weight:700;">Cloud</span>
                    <span style="color:rgba(255,255,255,.4);"> — Tous droits réservés.</span>
                </p>
            </div>
        </div>
    </div>

</footer>