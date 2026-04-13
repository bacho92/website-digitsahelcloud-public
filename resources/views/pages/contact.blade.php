@extends('layout.app')

@section('title', 'Contact')
@section('description', 'Contactez DigitSahelCloud pour vos projets de digitalisation. Notre équipe est disponible 24/7 à Niamey, Niger. +227 90065023')
@section('og_title', 'Contact — DigitSahelCloud')
@section('og_description', 'Contactez notre équipe à Niamey, Niger — Réponse sous 24h')

@section('content')

{{-- ═══ HERO ═══ --}}
<section style="background:linear-gradient(135deg,#152a6b,#1E388A);
                padding:80px 32px; text-align:center;">
    <div style="max-width:700px; margin:0 auto;">
        <span style="display:inline-block; background:rgba(249,115,22,.15);
                     border:1px solid rgba(249,115,22,.3); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            Contact
        </span>
        <h1 style="font-family:'Sora',sans-serif; font-size:3rem;
                    font-weight:800; color:white; margin-bottom:16px;">
            Parlons de votre <span style="color:#F97316;">Projet</span>
        </h1>
        <p style="color:rgba(255,255,255,.75); font-size:1.1rem; line-height:1.8;">
            Notre équipe est disponible pour répondre à toutes vos questions
            et vous accompagner dans votre transformation digitale.
        </p>
    </div>
</section>

{{-- ═══ CONTACT ═══ --}}
<section style="padding:80px 32px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;
                display:grid; grid-template-columns:1fr 2fr; gap:40px;">

        {{-- Infos contact --}}
        <div>
            <h2 style="font-family:'Sora',sans-serif; font-weight:800;
                       color:#1E388A; font-size:1.5rem; margin-bottom:8px;">
                Nos coordonnées
            </h2>
            <p style="color:#6B7280; font-size:14px; margin-bottom:32px; line-height:1.7;">
                Contactez-nous directement ou remplissez le formulaire
                et nous vous répondrons dans les 24h.
            </p>

            @foreach([
                ['icon'=>'📍','label'=>'Adresse',  'value'=>'Niamey, Niger'],
                ['icon'=>'📞','label'=>'Téléphone','value'=>'+227 90065023'],
                ['icon'=>'✉', 'label'=>'Email',    'value'=>'admin-dsc@digitsahelcloud.com'],
                ['icon'=>'🌐','label'=>'Site web',  'value'=>'www.digitsahelcloud.com'],
            ] as $info)
            <div style="display:flex; gap:16px; align-items:flex-start;
                        margin-bottom:24px; background:white; padding:20px;
                        border-radius:14px; border:1.5px solid #e2e8f0;">
                <div style="width:44px; height:44px; background:#EEF2FF;
                            border-radius:12px; display:flex; align-items:center;
                            justify-content:center; font-size:20px; flex-shrink:0;">
                    {{ $info['icon'] }}
                </div>
                <div>
                    <div style="font-size:12px; color:#6B7280; font-weight:600;
                                text-transform:uppercase; letter-spacing:.5px;
                                margin-bottom:4px;">
                        {{ $info['label'] }}
                    </div>
                    <div style="color:#1F2937; font-weight:600; font-size:14px;">
                        {{ $info['value'] }}
                    </div>
                </div>
            </div>
            @endforeach

            {{-- Disponibilité --}}
            <div style="background:linear-gradient(135deg,#1E388A,#2d4fa3);
                        border-radius:14px; padding:20px; margin-top:8px;">
                <div style="display:flex; align-items:center; gap:8px; margin-bottom:8px;">
                    <div style="width:8px; height:8px; border-radius:50%;
                                background:#22c55e; box-shadow:0 0 6px #22c55e;"></div>
                    <span style="color:white; font-weight:700; font-size:14px;">
                        Disponible maintenant
                    </span>
                </div>
                <p style="color:rgba(255,255,255,.7); font-size:13px; line-height:1.6;">
                    Support disponible 24h/24 et 7j/7 pour nos clients.
                    Réponse garantie sous 24h pour les nouvelles demandes.
                </p>
            </div>
        </div>

        {{-- Formulaire --}}
        <div style="background:white; border-radius:20px; padding:40px;
                    border:1.5px solid #e2e8f0;">
            <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                       color:#1E388A; font-size:1.3rem; margin-bottom:24px;">
                Envoyez-nous un message
            </h3>

            @if(session('success'))
            <div style="background:#dcfce7; border:1px solid #86efac; color:#166534;
                        padding:16px; border-radius:12px; margin-bottom:24px;
                        font-weight:600; font-size:14px;">
                ✅ {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf

                {{-- Nom et Email --}}
                <div style="display:grid; grid-template-columns:1fr 1fr;
                            gap:16px; margin-bottom:16px;">
                    <div>
                        <label style="display:block; font-size:13px; font-weight:600;
                                      color:#374151; margin-bottom:6px;">
                            Nom complet *
                        </label>
                        <input type="text" name="name" required
                               value="{{ old('name') }}"
                               placeholder="Votre nom complet"
                               style="width:100%; padding:12px 16px; border-radius:10px;
                                      border:1.5px solid #e2e8f0; font-size:14px;
                                      outline:none; font-family:'Plus Jakarta Sans',sans-serif;
                                      box-sizing:border-box;">
                        @error('name')
                        <p style="color:#ef4444; font-size:12px; margin-top:4px;">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div>
                        <label style="display:block; font-size:13px; font-weight:600;
                                      color:#374151; margin-bottom:6px;">
                            Email *
                        </label>
                        <input type="email" name="email" required
                               value="{{ old('email') }}"
                               placeholder="votre@email.com"
                               style="width:100%; padding:12px 16px; border-radius:10px;
                                      border:1.5px solid #e2e8f0; font-size:14px;
                                      outline:none; font-family:'Plus Jakarta Sans',sans-serif;
                                      box-sizing:border-box;">
                        @error('email')
                        <p style="color:#ef4444; font-size:12px; margin-top:4px;">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>

                {{-- Téléphone --}}
                <div style="margin-bottom:16px;">
                    <label style="display:block; font-size:13px; font-weight:600;
                                  color:#374151; margin-bottom:6px;">
                        Téléphone
                        <span style="color:#6B7280; font-weight:400; font-size:12px;">
                            (optionnel)
                        </span>
                    </label>
                    <input type="tel" name="phone"
                           value="{{ old('phone') }}"
                           placeholder="+227 XX XX XX XX"
                           style="width:100%; padding:12px 16px; border-radius:10px;
                                  border:1.5px solid #e2e8f0; font-size:14px;
                                  outline:none; font-family:'Plus Jakarta Sans',sans-serif;
                                  box-sizing:border-box;">
                </div>

                {{-- Service souhaité --}}
                <div style="margin-bottom:16px;">
                    <label style="display:block; font-size:13px; font-weight:600;
                                  color:#374151; margin-bottom:6px;">
                        Service souhaité
                    </label>
                    <select name="service" id="service-select"
                            onchange="toggleAutreField(this.value)"
                            style="width:100%; padding:12px 16px; border-radius:10px;
                                   border:1.5px solid #e2e8f0; font-size:14px;
                                   outline:none; font-family:'Plus Jakarta Sans',sans-serif;
                                   box-sizing:border-box; background:white;">
                        <option value="">Sélectionnez un service</option>
                        @foreach([
                            'Hébergement Web & Cloud',
                            'VPN & Interconnexion Agences',
                            'Développement Applications',
                            'Cybersécurité',
                            'ERP & Gestion',
                            'Email Professionnel',
                            'Support & Maintenance',
                            'Conseil Digital',
                            'Autre',
                        ] as $svc)
                        <option value="{{ $svc }}"
                                {{ old('service') == $svc ? 'selected' : '' }}>
                            {{ $svc }}
                        </option>
                        @endforeach
                    </select>
                </div>

                {{-- Champ Autre dynamique --}}
                <div id="autre-field"
                     style="display:none; margin-bottom:16px;">
                    <label style="display:block; font-size:13px; font-weight:600;
                                  color:#F97316; margin-bottom:6px;">
                        Précisez votre besoin *
                    </label>
                    <input type="text" name="service_autre"
                           id="service-autre-input"
                           placeholder="Ex: Formation équipe, Audit réseau, Migration données..."
                           style="width:100%; padding:12px 16px; border-radius:10px;
                                  border:1.5px solid #F97316; font-size:14px;
                                  outline:none; font-family:'Plus Jakarta Sans',sans-serif;
                                  box-sizing:border-box;
                                  background:rgba(249,115,22,.03);">
                    <p style="color:#6B7280; font-size:12px; margin-top:6px;">
                        💡 Décrivez brièvement le type de service recherché —
                        différent du message ci-dessous.
                    </p>
                </div>

                {{-- Message --}}
                <div style="margin-bottom:24px;">
                    <label style="display:block; font-size:13px; font-weight:600;
                                  color:#374151; margin-bottom:6px;">
                        Message
                        <span style="color:#6B7280; font-weight:400; font-size:12px;">
                            (optionnel)
                        </span>
                    </label>
                    <div style="background:#F8FAFC; padding:12px 14px;
                                border-radius:8px; border-left:3px solid #1E388A;
                                margin-bottom:10px;">
                        <p style="color:#6B7280; font-size:12px; margin:0; line-height:1.6;">
                            💬 Partagez toute information complémentaire utile à notre équipe :
                            délai souhaité, budget estimé, contexte du projet,
                            nombre d'agences à connecter, questions spécifiques...
                        </p>
                    </div>
                    <textarea name="message" rows="5"
                              placeholder="Ex: Nous avons 3 agences à connecter, budget ~500 000 FCFA, délai souhaité 2 mois..."
                              style="width:100%; padding:12px 16px; border-radius:10px;
                                     border:1.5px solid #e2e8f0; font-size:14px;
                                     outline:none; font-family:'Plus Jakarta Sans',sans-serif;
                                     box-sizing:border-box; resize:vertical;">{{ old('message') }}</textarea>
                    @error('message')
                    <p style="color:#ef4444; font-size:12px; margin-top:4px;">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                {{-- Bouton --}}
                <button type="submit"
                        style="width:100%; background:#F97316; color:white;
                               font-weight:700; padding:14px; font-size:16px;
                               border:none; border-radius:12px; cursor:pointer;
                               font-family:'Plus Jakarta Sans',sans-serif;
                               box-shadow:0 4px 12px rgba(249,115,22,.3);
                               transition:all .2s;">
                    Envoyer le message →
                </button>
            </form>
        </div>
    </div>
</section>

{{-- ═══ LOCALISATION ═══ --}}
<section style="padding:60px 32px; background:white; text-align:center;">
    <div style="max-width:800px; margin:0 auto;">
        <h2 style="font-family:'Sora',sans-serif; font-weight:800;
                   color:#1E388A; font-size:1.5rem; margin-bottom:8px;">
            Nous sommes à Niamey 🇳🇪
        </h2>
        <p style="color:#6B7280; margin-bottom:24px;">
            Basés au Niger, nous servons toute la sous-région sahélienne.
        </p>
        <div style="background:#EEF2FF; border-radius:16px; padding:60px;
                    border:2px dashed #1E388A;">
            <div style="font-size:48px; margin-bottom:16px;">📍</div>
            <p style="color:#1E388A; font-weight:700; font-size:16px;">
                Niamey, République du Niger
            </p>
            <p style="color:#6B7280; font-size:14px; margin-top:8px;">
                Disponible pour des rendez-vous en présentiel ou en visioconférence
            </p>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function toggleAutreField(value) {
    const autreField = document.getElementById('autre-field');
    const autreInput = document.getElementById('service-autre-input');

    if (value === 'Autre') {
        autreField.style.display = 'block';
        autreInput.required      = true;
        autreInput.focus();
    } else {
        autreField.style.display = 'none';
        autreInput.required      = false;
        autreInput.value         = '';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const select = document.getElementById('service-select');
    if (select && select.value === 'Autre') {
        toggleAutreField('Autre');
    }
});
</script>
@endpush