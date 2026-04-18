@extends('layout.app')

@section('title', 'Contact')
@section('description', 'Contactez DigitSahelCloud pour vos projets de digitalisation. Notre équipe est disponible 24/7 à Niamey, Niger. +227 70810113')
@section('og_title', 'Contact — DigitSahelCloud')
@section('og_description', 'Contactez notre équipe à Niamey, Niger — Réponse sous 24h')

@section('content')

<style>
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 40px;
}
.contact-form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}
.contact-input {
    width: 100%;
    padding: 12px 16px;
    border-radius: 10px;
    border: 1.5px solid #e2e8f0;
    font-size: 14px;
    outline: none;
    font-family: 'Plus Jakarta Sans', sans-serif;
    box-sizing: border-box;
    transition: border-color .2s;
    color: #374151;
    background: white;
}
.contact-input:focus {
    border-color: #1E388A;
    box-shadow: 0 0 0 3px rgba(30,56,138,.08);
}
.contact-label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: #374151;
    margin-bottom: 6px;
}
@media (max-width: 900px) {
    .contact-grid { grid-template-columns: 1fr !important; }
}
@media (max-width: 600px) {
    .contact-form-grid { grid-template-columns: 1fr !important; }
}
</style>

{{-- ═══ HERO ═══ --}}
<section style="background:linear-gradient(135deg,#152a6b 0%,#1E388A 60%,#2d4fa3 100%);
                padding:80px 32px 0; text-align:center; position:relative; overflow:hidden;">

    <div style="position:absolute; top:-60px; right:-60px; width:300px; height:300px;
                border-radius:50%; background:radial-gradient(circle, rgba(249,115,22,.2) 0%, transparent 70%);"></div>
    <div style="position:absolute; bottom:0; left:10%; width:200px; height:200px;
                border-radius:50%; background:radial-gradient(circle, rgba(255,255,255,.05) 0%, transparent 70%);"></div>

    <div style="max-width:800px; margin:0 auto; position:relative; z-index:1; padding-bottom:60px;">
        <span style="display:inline-block; background:rgba(249,115,22,.15);
                     border:1px solid rgba(249,115,22,.3); color:#F97316;
                     padding:6px 16px; border-radius:50px;
                     font-size:13px; font-weight:600; margin-bottom:20px;">
            📞 Contactez-nous
        </span>
        <h1 style="font-family:'Sora',sans-serif; font-size:clamp(2rem,4vw,3.2rem);
                    font-weight:800; color:white; margin-bottom:16px; line-height:1.2;">
            Un Projet ?
            <span style="color:#F97316; display:block;">Parlons-en.</span>
        </h1>
        <p style="color:rgba(255,255,255,.75); font-size:1.05rem; line-height:1.8;
                   max-width:600px; margin:0 auto;">
            Notre équipe analyse votre situation et vous propose
            la solution la plus adaptée à vos objectifs.
            Réponse garantie sous 24h.
        </p>

        {{-- Stats rapides --}}
        <div style="display:flex; gap:24px; justify-content:center;
                    flex-wrap:wrap; margin-top:32px;">
            @foreach([
                ['⚡','< 24h','Temps de réponse'],
                ['📍','Niamey','Présence locale'],
                ['🇫🇷','Français','Support dédié'],
                ['📡','24/7','Disponibilité'],
            ] as $s)
            <div style="background:rgba(255,255,255,.1); border:1px solid rgba(255,255,255,.2);
                        border-radius:12px; padding:12px 20px; text-align:center;">
                <div style="font-size:20px;">{{ $s[0] }}</div>
                <div style="font-family:'Sora',sans-serif; font-weight:800;
                            color:#F97316; font-size:1rem;">{{ $s[1] }}</div>
                <div style="color:rgba(255,255,255,.6); font-size:11px;">{{ $s[2] }}</div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Vague bas --}}
    <div style="line-height:0;">
        <svg viewBox="0 0 1440 70" xmlns="http://www.w3.org/2000/svg"
             preserveAspectRatio="none" style="display:block; width:100%; height:70px;">
            <path d="M0,70 C360,0 1080,0 1440,70 L1440,70 L0,70 Z" fill="#F1F5F9"/>
        </svg>
    </div>
</section>

{{-- ═══ CONTACT PRINCIPAL ═══ --}}
<section style="padding:60px 32px 80px; background:#F1F5F9;">
    <div style="max-width:1280px; margin:0 auto;">
        <div class="contact-grid">

            {{-- Colonne gauche — Infos --}}
            <div>
                <h2 style="font-family:'Sora',sans-serif; font-weight:800;
                           color:#1E388A; font-size:1.5rem; margin-bottom:8px;">
                    Nos coordonnées
                </h2>
                <p style="color:#6B7280; font-size:14px; margin-bottom:28px; line-height:1.7;">
                    Contactez-nous directement ou remplissez le formulaire —
                    nous vous répondrons dans les 24h.
                </p>

                {{-- Carte infos --}}
                @foreach([
                    ['icon'=>'📍','color'=>'#1E388A','bg'=>'#EEF2FF','label'=>'Adresse','value'=>'Niamey, République du Niger'],
                    ['icon'=>'📱','color'=>'#25D366','bg'=>'#F0FFF4','label'=>'WhatsApp','value'=>'+227 70810113'],
                    ['icon'=>'✉️','color'=>'#F97316','bg'=>'#FFF7ED','label'=>'Email','value'=>'admin-dsc@digitsahelcloud.com'],
                    ['icon'=>'🌐','color'=>'#0284C7','bg'=>'#F0F9FF','label'=>'Site web','value'=>'www.digitsahelcloud.com'],
                ] as $info)
                <div style="display:flex; gap:16px; align-items:center;
                            margin-bottom:16px; background:white; padding:18px 20px;
                            border-radius:14px; border:1.5px solid #e2e8f0;
                            box-shadow:0 2px 8px rgba(0,0,0,.04); transition:all .2s;"
                     onmouseover="this.style.borderColor='{{ $info['color'] }}';this.style.transform='translateX(4px)'"
                     onmouseout="this.style.borderColor='#e2e8f0';this.style.transform='none'">
                    <div style="width:48px; height:48px; background:{{ $info['bg'] }};
                                border-radius:12px; display:flex; align-items:center;
                                justify-content:center; font-size:22px; flex-shrink:0;">
                        {{ $info['icon'] }}
                    </div>
                    <div>
                        <div style="font-size:11px; color:#6B7280; font-weight:700;
                                    text-transform:uppercase; letter-spacing:.5px; margin-bottom:3px;">
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
                            border-radius:16px; padding:24px; margin-top:8px;
                            box-shadow:0 8px 24px rgba(30,56,138,.2);">
                    <div style="display:flex; align-items:center; gap:10px; margin-bottom:12px;">
                        <div style="width:10px; height:10px; border-radius:50%;
                                    background:#22c55e; box-shadow:0 0 8px #22c55e;"></div>
                        <span style="color:white; font-weight:700; font-size:15px;">
                            Disponible maintenant
                        </span>
                    </div>
                    <p style="color:rgba(255,255,255,.75); font-size:13px; line-height:1.7; margin-bottom:16px;">
                        Support 24/7 pour nos clients actifs.
                        Réponse garantie sous 24h pour toute nouvelle demande.
                    </p>
                    <a href="https://wa.me/22770810113"
                       target="_blank"
                       style="display:inline-flex; align-items:center; gap:8px;
                              background:#25D366; color:white; font-weight:700;
                              padding:10px 20px; border-radius:10px;
                              text-decoration:none; font-size:13px;">
                        💬 Écrire sur WhatsApp
                    </a>
                </div>

                {{-- Image 3D --}}
                <div style="margin-top:20px; border-radius:16px; overflow:hidden;
                            box-shadow:0 8px 32px rgba(30,56,138,.15);">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600&q=90"
                         alt="Équipe professionnelle communication digitale"
                         style="width:100%; height:200px; object-fit:cover; display:block;">
                    <div style="background:linear-gradient(135deg,#152a6b,#1E388A);
                                padding:16px 20px;">
                        <p style="color:white; font-family:'Sora',sans-serif; font-weight:700;
                                   font-size:13px; margin:0; font-style:italic;">
                            "Votre transformation digitale commence ici."
                        </p>
                    </div>
                </div>
            </div>

            {{-- Colonne droite — Formulaire --}}
            <div style="background:white; border-radius:24px; padding:44px;
                        border:1.5px solid #e2e8f0;
                        box-shadow:0 8px 32px rgba(30,56,138,.08);">

                <div style="display:flex; align-items:center; gap:12px; margin-bottom:8px;">
                    <div style="width:48px; height:48px; background:#F97316;
                                border-radius:14px; display:flex; align-items:center;
                                justify-content:center; font-size:22px;
                                box-shadow:0 4px 12px rgba(249,115,22,.3);">
                        ✉️
                    </div>
                    <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                               color:#1E388A; font-size:1.3rem; margin:0;">
                        Envoyez-nous un message
                    </h3>
                </div>
                <p style="color:#6B7280; font-size:13px; margin-bottom:28px;">
                    Tous les champs marqués d'un
                    <span style="color:#ef4444; font-weight:700;">*</span>
                    sont obligatoires.
                </p>

                @if(session('success'))
                <div style="background:#dcfce7; border:1px solid #86efac; color:#166534;
                            padding:16px; border-radius:12px; margin-bottom:24px;
                            font-weight:600; font-size:14px; display:flex; align-items:center; gap:10px;">
                    <span style="font-size:20px;">✅</span>
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    {{-- Type de demandeur --}}
                    <div style="margin-bottom:20px;">
                        <label class="contact-label">
                            Vous êtes <span style="color:#ef4444;">*</span>
                        </label>
                        <select name="demandeur_type" id="demandeur-type" required
                                onchange="toggleDemandeurField(this.value)"
                                class="contact-input">
                            <option value="">— Sélectionnez votre profil —</option>
                            <option value="entreprise" {{ old('demandeur_type') == 'entreprise' ? 'selected' : '' }}>
                                🏢 Une entreprise / organisation
                            </option>
                            <option value="particulier" {{ old('demandeur_type') == 'particulier' ? 'selected' : '' }}>
                                👤 Un particulier / freelance
                            </option>
                        </select>
                    </div>

                    {{-- Nom entreprise (conditionnel) --}}
                    <div id="field-entreprise" style="display:none; margin-bottom:20px;">
                        <label class="contact-label">
                            Nom de l'entreprise / organisation
                            <span style="color:#ef4444;">*</span>
                        </label>
                        <input type="text" name="company" id="company-input"
                               value="{{ old('company') }}"
                               placeholder="Ex: Société Générale Niger, ONG Sahel Plus..."
                               class="contact-input">
                        @error('company')
                        <p style="color:#ef4444; font-size:12px; margin-top:4px;">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nom + Email --}}
                    <div class="contact-form-grid" style="margin-bottom:20px;">
                        <div>
                            <label class="contact-label">
                                Nom complet <span style="color:#ef4444;">*</span>
                            </label>
                            <input type="text" name="name" required
                                   value="{{ old('name') }}"
                                   placeholder="Prénom et nom"
                                   class="contact-input">
                            @error('name')
                            <p style="color:#ef4444; font-size:12px; margin-top:4px;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="contact-label">
                                Email <span style="color:#ef4444;">*</span>
                            </label>
                            <input type="email" name="email" required
                                   value="{{ old('email') }}"
                                   placeholder="votre@email.com"
                                   class="contact-input">
                            @error('email')
                            <p style="color:#ef4444; font-size:12px; margin-top:4px;">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Téléphone --}}
                    <div style="margin-bottom:20px;">
                        <label class="contact-label">
                            Téléphone WhatsApp <span style="color:#ef4444;">*</span>
                        </label>
                        <div style="position:relative;">
                            <span style="position:absolute; left:14px; top:50%;
                                         transform:translateY(-50%); font-size:16px;">
                                📱
                            </span>
                            <input type="tel" name="phone" required
                                   value="{{ old('phone') }}"
                                   placeholder="+227 XX XX XX XX"
                                   class="contact-input"
                                   style="padding-left:42px;">
                        </div>
                        <p style="color:#6B7280; font-size:12px; margin-top:4px;">
                            💬 Nous vous contacterons de préférence via WhatsApp.
                        </p>
                        @error('phone')
                        <p style="color:#ef4444; font-size:12px; margin-top:4px;">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Rôle --}}
                    <div style="margin-bottom:20px;">
                        <label class="contact-label">
                            Votre rôle / poste <span style="color:#ef4444;">*</span>
                        </label>
                        <select name="role" required class="contact-input">
                            <option value="">— Sélectionnez votre poste —</option>
                            @foreach([
                                'Directeur Général / PDG',
                                'Responsable IT / DSI',
                                'Directeur Administratif & Financier',
                                'Responsable RH',
                                'Chef de projet',
                                'Développeur / Technicien',
                                'Commercial / Marketing',
                                'Autre',
                            ] as $role)
                            <option value="{{ $role }}" {{ old('role') == $role ? 'selected' : '' }}>
                                {{ $role }}
                            </option>
                            @endforeach
                        </select>
                        <p style="color:#6B7280; font-size:12px; margin-top:4px;">
                            💡 Cela nous permet d'adapter notre réponse à votre contexte.
                        </p>
                        @error('role')
                        <p style="color:#ef4444; font-size:12px; margin-top:4px;">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Service --}}
                    <div style="margin-bottom:20px;">
                        <label class="contact-label">
                            Service souhaité <span style="color:#ef4444;">*</span>
                        </label>
                        <select name="service" id="service-select" required
                                onchange="toggleAutreField(this.value)"
                                class="contact-input">
                            <option value="">— Choisissez un service —</option>
                            @foreach([
                                '☁️ Hébergement Web & Cloud',
                                '🔒 Interconnexion & Agences',
                                '💻 Développement Applications',
                                '🛡️ Cybersécurité',
                                '📊 ERP & Gestion',
                                '✉️ Email Professionnel',
                                '🖥️ Infrastructure Cloud Managée',
                                '🌐 Administration Réseaux',
                                '📡 Supervision & Monitoring NOC',
                                '🛠️ Support & Maintenance IT',
                                '💡 Conseil & Transformation Digitale',
                                '❓ Autre',
                            ] as $svc)
                            <option value="{{ $svc }}" {{ old('service') == $svc ? 'selected' : '' }}>
                                {{ $svc }}
                            </option>
                            @endforeach
                        </select>
                        @error('service')
                        <p style="color:#ef4444; font-size:12px; margin-top:4px;">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Autre service --}}
                    <div id="autre-field" style="display:none; margin-bottom:20px;">
                        <label class="contact-label" style="color:#F97316;">
                            Précisez votre besoin <span style="color:#ef4444;">*</span>
                        </label>
                        <input type="text" name="service_autre" id="service-autre-input"
                               placeholder="Ex: Formation équipe, Audit réseau..."
                               class="contact-input"
                               style="border-color:#F97316;">
                    </div>

                    {{-- Message --}}
                    <div style="margin-bottom:28px;">
                        <label class="contact-label">
                            Message <span style="color:#ef4444;">*</span>
                        </label>
                        <div style="background:#F8FAFC; padding:12px 16px;
                                    border-radius:10px; border-left:3px solid #1E388A;
                                    margin-bottom:10px;">
                            <p style="color:#6B7280; font-size:12px; margin:0; line-height:1.6;">
                                💬 Décrivez brièvement votre besoin — site web, messagerie professionnelle,
                                interconnexion d'agences, gestion interne... Plus c'est précis,
                                mieux nous pouvons vous conseiller.
                            </p>
                        </div>
                        <textarea name="message" rows="5" required
                                  placeholder="Ex: Je souhaite créer un site web pour mon entreprise, ou mettre en place des emails professionnels @monentreprise.com..."
                                  class="contact-input"
                                  style="resize:vertical;">{{ old('message') }}</textarea>
                        @error('message')
                        <p style="color:#ef4444; font-size:12px; margin-top:4px;">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Bouton --}}
                    <button type="submit"
                            style="width:100%; background:#F97316; color:white;
                                   font-weight:800; padding:16px; font-size:16px;
                                   border:none; border-radius:12px; cursor:pointer;
                                   font-family:'Plus Jakarta Sans',sans-serif;
                                   box-shadow:0 6px 24px rgba(249,115,22,.4);
                                   display:flex; align-items:center; justify-content:center; gap:8px;
                                   transition:all .2s;"
                            onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 32px rgba(249,115,22,.5)'"
                            onmouseout="this.style.transform='none';this.style.boxShadow='0 6px 24px rgba(249,115,22,.4)'">
                        ✉️ Envoyer le message →
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Vague transition --}}
<div style="background:#F1F5F9; line-height:0;">
    <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg"
         preserveAspectRatio="none" style="display:block; width:100%; height:60px;">
        <path d="M0,60 C360,0 1080,0 1440,60 L1440,60 L0,60 Z" fill="white"/>
    </svg>
</div>

{{-- ═══ LOCALISATION + IMAGES 3D ═══ --}}
<section style="padding:60px 32px 80px; background:white;">
    <div style="max-width:1280px; margin:0 auto;">

        <div style="text-align:center; margin-bottom:48px;">
            <span style="color:#F97316; font-size:13px; font-weight:700;
                         text-transform:uppercase; letter-spacing:1.5px;
                         display:block; margin-bottom:8px;">Notre présence</span>
            <h2 style="font-family:'Sora',sans-serif; font-size:2rem;
                        font-weight:800; color:#1E388A; margin-bottom:12px;">
                Nous sommes à Niamey 🇳🇪
            </h2>
            <p style="color:#6B7280; font-size:14px; max-width:500px; margin:0 auto; line-height:1.7;">
                Basés au Niger, nous servons toute la sous-région sahélienne.
                Disponibles pour des rendez-vous en présentiel ou en visioconférence.
            </p>
        </div>

        {{-- 3 images + info --}}
        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-bottom:40px;">
            @foreach([
                [
                    'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=90',
                    'alt'   => 'Bureau professionnel moderne équipe IT',
                    'title' => 'Intervention sur site',
                    'desc'  => 'Nos ingénieurs se déplacent à Niamey et dans les régions',
                    'color' => '#1E388A',
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&q=90',
                    'alt'   => 'Réunion équipe visioconférence professionnelle',
                    'title' => 'Visioconférence disponible',
                    'desc'  => 'Réunions en ligne pour les clients en région ou à l\'international',
                    'color' => '#F97316',
                ],
                [
                    'image' => 'https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=600&q=90',
                    'alt'   => 'Support technique assistance 24h réactif',
                    'title' => 'Support 24/7',
                    'desc'  => 'Notre équipe répond à toute heure pour les urgences',
                    'color' => '#059669',
                ],
            ] as $card)
            <div style="border-radius:20px; overflow:hidden; box-shadow:0 8px 32px rgba(0,0,0,.08);
                        border:1.5px solid #e2e8f0;">
                <div style="position:relative; height:200px; overflow:hidden;">
                    <img src="{{ $card['image'] }}" alt="{{ $card['alt'] }}"
                         loading="lazy"
                         style="width:100%; height:100%; object-fit:cover; display:block;">
                    <div style="position:absolute; inset:0;
                                background:linear-gradient(to top, rgba(0,0,0,.6) 0%, transparent 60%);">
                    </div>
                    <div style="position:absolute; bottom:16px; left:16px;">
                        <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                                   color:white; font-size:15px; margin:0;
                                   text-shadow:0 2px 8px rgba(0,0,0,.5);">
                            {{ $card['title'] }}
                        </h3>
                    </div>
                </div>
                <div style="padding:16px 20px; background:white;">
                    <p style="color:#6B7280; font-size:13px; line-height:1.6; margin:0;">
                        {{ $card['desc'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Adresse card --}}
        <div style="background:linear-gradient(135deg,#EEF2FF,#F8FAFF);
                    border-radius:20px; padding:40px; text-align:center;
                    border:1.5px solid #1E388A20;
                    box-shadow:0 4px 24px rgba(30,56,138,.08);">
            <div style="font-size:48px; margin-bottom:16px;">📍</div>
            <h3 style="font-family:'Sora',sans-serif; font-weight:800;
                       color:#1E388A; font-size:1.3rem; margin-bottom:8px;">
                Niamey, République du Niger
            </h3>
            <p style="color:#6B7280; font-size:14px; margin-bottom:20px; line-height:1.7;">
                Zone de couverture : Niger et sous-région Afrique de l'Ouest
            </p>
            <div style="display:flex; gap:12px; justify-content:center; flex-wrap:wrap;">
                <a href="https://wa.me/22770810113" target="_blank"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:#25D366; color:white; font-weight:700;
                          padding:12px 24px; border-radius:12px; text-decoration:none; font-size:14px;
                          box-shadow:0 4px 12px rgba(37,211,102,.3);">
                    💬 WhatsApp
                </a>
                <a href="tel:+22770810113"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:#1E388A; color:white; font-weight:700;
                          padding:12px 24px; border-radius:12px; text-decoration:none; font-size:14px;
                          box-shadow:0 4px 12px rgba(30,56,138,.3);">
                    📞 +227 70810113
                </a>
                <a href="mailto:admin-dsc@digitsahelcloud.com"
                   style="display:inline-flex; align-items:center; gap:8px;
                          background:#F97316; color:white; font-weight:700;
                          padding:12px 24px; border-radius:12px; text-decoration:none; font-size:14px;
                          box-shadow:0 4px 12px rgba(249,115,22,.3);">
                    ✉️ Email
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function toggleDemandeurField(value) {
    const fieldEntreprise = document.getElementById('field-entreprise');
    const companyInput    = document.getElementById('company-input');
    if (value === 'entreprise') {
        fieldEntreprise.style.display = 'block';
        companyInput.required = true;
        companyInput.focus();
    } else {
        fieldEntreprise.style.display = 'none';
        companyInput.required = false;
        companyInput.value    = '';
    }
}

function toggleAutreField(value) {
    const autreField = document.getElementById('autre-field');
    const autreInput = document.getElementById('service-autre-input');
    if (value === '❓ Autre') {
        autreField.style.display = 'block';
        autreInput.required = true;
        autreInput.focus();
    } else {
        autreField.style.display = 'none';
        autreInput.required = false;
        autreInput.value    = '';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const selectType    = document.getElementById('demandeur-type');
    const selectService = document.getElementById('service-select');
    if (selectType && selectType.value) toggleDemandeurField(selectType.value);
    if (selectService && selectService.value === '❓ Autre') toggleAutreField('❓ Autre');
});
</script>
@endpush
