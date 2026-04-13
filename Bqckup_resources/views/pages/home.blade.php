@extends('layout.app')

@section('title', 'Accueil')

@section('content')

<section style="min-height:100vh; background:linear-gradient(135deg,#152a6b,#1E388A);
                display:flex; align-items:center; justify-content:center;">
    <div style="text-align:center; color:white; padding:40px 24px;">

        <span class="badge-orange" style="margin-bottom:24px; display:inline-block;">
            🇳🇪 MSP Local — Niamey, Niger
        </span>

        <h1 style="font-family:'Sora',sans-serif; font-size:clamp(2.5rem,6vw,4.5rem);
                    font-weight:800; line-height:1.15; margin-bottom:20px;">
            Votre Partenaire<br>
            <span style="color:#F97316">Cloud</span> au Sahel
        </h1>

        <p style="color:rgba(255,255,255,.75); font-size:1.2rem;
                   line-height:1.7; max-width:600px; margin:0 auto 36px;">
            Hébergement web, VPN sécurisé, interconnexion d'agences,
            ERP et bien plus — adaptés aux entreprises nigériennes.
        </p>

        <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
            <a href="{{ route('services') }}" class="btn-primary">
                Découvrir nos services
            </a>
            <a href="{{ route('contact') }}" class="btn-white">
                Parler à un expert →
            </a>
        </div>
    </div>
</section>

@endsection