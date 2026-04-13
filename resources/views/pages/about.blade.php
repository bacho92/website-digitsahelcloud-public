@extends('layout.app')

@section('title', 'VPN & Interconnexion Agences')
@section('description', 'Interconnectez vos agences et bureaux via un VPN sécurisé avec AWS Direct Connect et Azure VPN Gateway. Solution managée par DigitSahelCloud au Niger.')
@section('og_title', 'VPN & Interconnexion Agences — DigitSahelCloud')
@section('og_description', 'Reliez toutes vos agences via un VPN sécurisé — AWS Direct Connect + Azure VPN Gateway')
@section('title', 'À propos')

@section('content')

{{-- ═══ HERO ═══ --}}
<section style="background:linear-gradient(135deg,#152a6b,#1E388A);
                padding:80px 32px; text-align:center;">
    <div style="max-width:700px; margin:0 auto;">
        <span style="display:inline-block; background:rgba(249,115,22,.15);
                     border:1px solid rgba(249,115,22,.3); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            À propos
        </span>
        <h1 style="font-family:'Sora',sans-serif; font-size:3rem;
                    font-weight:800; color:white; margin-bottom:16px;">
            Notre <span style="color:#F97316;">Histoire</span>
        </h1>
        <p style="color:rgba(255,255,255,.75); font-size:1.1rem; line-height:1.8;">
            DigitSahelCloud est né d'une conviction simple — les entreprises nigériennes
            méritent des solutions cloud locales, fiables et abordables.
        </p>
    </div>
</section>

{{-- ═══ VISION & MISSION ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;
                display:grid; grid-template-columns:1fr 1fr; gap:32px;">

        <div style="background:white; border-radius:20px; padding:40px;
                    border-left:5px solid #1E388A;">
            <div style="font-size:36px; margin-bottom:16px;">🎯</div>
            <h2 style="font-family:'Sora',sans-serif; font-weight:800;
                       color:#1E388A; font-size:1.5rem; margin-bottom:16px;">
                Notre Vision
            </h2>
            <p style="color:#374151; font-size:15px; line-height:1.8;">
                Devenir le premier fournisseur de services cloud et d'infrastructure
                digitale de confiance au Niger et dans la sous-région sahélienne,
                en contribuant activement à la souveraineté numérique de l'Afrique.
            </p>
        </div>

        <div style="background:white; border-radius:20px; padding:40px;
                    border-left:5px solid #F97316;">
            <div style="font-size:36px; margin-bottom:16px;">🚀</div>
            <h2 style="font-family:'Sora',sans-serif; font-weight:800;
                       color:#F97316; font-size:1.5rem; margin-bottom:16px;">
                Notre Mission
            </h2>
            <p style="color:#374151; font-size:15px; line-height:1.8;">
                Accompagner la digitalisation des organisations nigériennes avec
                des solutions fiables, souveraines et adaptées au contexte local,
                à des tarifs accessibles aux PME africaines.
            </p>
        </div>
    </div>
</section>

{{-- ═══ VALEURS ═══ --}}
<section style="padding:80px 32px; background:white;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span class="section-tag">Ce qui nous guide</span>
            <h2 class="section-title" style="text-align:center;">
                Nos Valeurs
            </h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px;">
            @foreach([
                ['icon'=>'🤝','title'=>'Proximité',
                 'desc'=>'Nous sommes là, à Niamey, pour vous accompagner au quotidien.'],
                ['icon'=>'🔒','title'=>'Confiance',
                 'desc'=>'Sécurité et fiabilité sont au cœur de chaque solution que nous déployons.'],
                ['icon'=>'💡','title'=>'Innovation',
                 'desc'=>'Nous adaptons les meilleures technologies mondiales aux réalités locales.'],
                ['icon'=>'🌍','title'=>'Impact',
                 'desc'=>'Chaque projet contribue au développement numérique du Niger.'],
            ] as $val)
            <div style="text-align:center; padding:32px 20px; border-radius:16px;
                        background:#F8FAFC; border:1.5px solid #e2e8f0;">
                <div style="font-size:40px; margin-bottom:16px;">{{ $val['icon'] }}</div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#1E388A; font-size:1.1rem; margin-bottom:10px;">
                    {{ $val['title'] }}
                </h3>
                <p style="color:#6B7280; font-size:14px; line-height:1.6;">
                    {{ $val['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ ÉQUIPE ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:56px;">
            <span class="section-tag">L'équipe</span>
            <h2 class="section-title" style="text-align:center;">
                Les Personnes derrière DigitSahelCloud
            </h2>
        </div>

        <div style="display:flex; justify-content:center;">
            <div style="background:white; border-radius:20px; padding:40px;
                        border:1.5px solid #e2e8f0; max-width:400px; text-align:center;">
                <div style="width:100px; height:100px; border-radius:50%;
                            background:linear-gradient(135deg,#1E388A,#2d4fa3);
                            margin:0 auto 20px; display:flex; align-items:center;
                            justify-content:center; font-size:40px; color:white;">
                    👨‍💼
                </div>
                <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#1E388A; font-size:1.2rem; margin-bottom:4px;">
                    Bachir Abourahamane Aboubacar
                </h3>
                <p style="color:#F97316; font-weight:700; font-size:14px;
                           margin-bottom:16px; text-transform:uppercase; letter-spacing:.5px;">
                    Fondateur & CEO
                </p>
                <p style="color:#6B7280; font-size:14px; line-height:1.7; margin-bottom:20px;">
                    Expert en développement web, infrastructure cloud et services managés.
                    Passionné par la transformation numérique de l'Afrique sahélienne.
                </p>
                <div style="display:flex; justify-content:center; gap:12px; flex-wrap:wrap;">
                    @foreach(['Laravel','Cloud AWS','VPN','MySQL','Linux'] as $skill)
                    <span style="background:#EEF2FF; color:#1E388A; padding:4px 12px;
                                 border-radius:50px; font-size:12px; font-weight:600;">
                        {{ $skill }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══ CHIFFRES ═══ --}}
<section style="padding:60px 32px; background:#1E388A;">
    <div style="max-width:1280px; margin:0 auto;
                display:grid; grid-template-columns:repeat(4,1fr); gap:24px;">
        @foreach([
            ['num'=>'2026',  'label'=>'Année de création'],
            ['num'=>'8+',    'label'=>'Services proposés'],
            ['num'=>'100%',  'label'=>'Local & souverain'],
            ['num'=>'24/7',  'label'=>'Support disponible'],
        ] as $stat)
        <div style="text-align:center; padding:20px;">
            <div style="font-family:'Sora',sans-serif; font-size:2.5rem;
                        font-weight:800; color:#F97316;">
                {{ $stat['num'] }}
            </div>
            <div style="color:rgba(255,255,255,.7); font-size:14px; margin-top:6px;">
                {{ $stat['label'] }}
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
            Travaillons ensemble !
        </h2>
        <p style="color:rgba(255,255,255,.8); margin-bottom:28px;">
            Vous avez un projet de digitalisation ? On est là pour vous accompagner.
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