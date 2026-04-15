<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Google Analytics --}}
    @production
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N6G7N5H4W7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-N6G7N5H4W7');
    </script>
    @endproduction

    {{-- SEO Meta tags --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO Meta tags --}}
    <meta name="description"
          content="@yield('description', 'DigitSahelCloud — Votre Partenaire Cloud au Sahel. Hébergement web, VPN sécurisé, ERP, cybersécurité et services managés au Niger.')">
    <meta name="keywords"
          content="@yield('keywords', 'cloud niger, hébergement web niamey, VPN agences niger, MSP niger, DigitSahelCloud, cybersécurité niger, ERP niger')">
    <meta name="author" content="DigitSahelCloud">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#1E388A">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="DigitSahelCloud">
    <meta property="og:title"       content="@yield('og_title', 'DigitSahelCloud — Votre Partenaire Cloud au Sahel')">
    <meta property="og:description" content="@yield('og_description', 'MSP local au Niger — Hébergement, VPN, ERP, Cybersécurité')">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:image"       content="@yield('og_image', asset('images/og-image.png'))">
    <meta property="og:locale"      content="fr_FR">

    {{-- Twitter Card --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="@yield('og_title', 'DigitSahelCloud')">
    <meta name="twitter:description" content="@yield('og_description', 'MSP local au Niger')">
    <meta name="twitter:image"       content="@yield('og_image', asset('images/og-image.png'))">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon_io/apple-touch-icon.png') }}">

    <title>@yield('title', 'DigitSahelCloud') — Votre Partenaire Cloud au Sahel</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Sora:wght@400;600;700;800&display=swap"
          rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- RESPONSIVE MOBILE --}}
    <style>
        @media (max-width: 768px) {

            /* === GLOBAL === */
            html, body {
                overflow-x: hidden !important;
                width: 100% !important;
            }

            *, *::before, *::after {
                box-sizing: border-box !important;
            }

            section {
                padding-left: 16px !important;
                padding-right: 16px !important;
                overflow: hidden !important;
            }

            h1 { font-size: 1.8rem !important; }
            h2 { font-size: 1.5rem !important; }

            /* === HERO HOME === */
            section[style*="min-height:60vh"] {
                padding: 40px 16px !important;
                min-height: auto !important;
                overflow: hidden !important;
            }

            section[style*="min-height:60vh"] > div > div {
                grid-template-columns: 1fr !important;
                gap: 24px !important;
            }

            /* Cacher dashboard card sur mobile */
            section[style*="min-height:60vh"] > div > div > div:last-child {
                display: none !important;
            }

            /* Fix texte hero qui déborde */
            section[style*="min-height:60vh"] h1,
            section[style*="min-height:60vh"] p {
                padding-left: 8px !important;
            }

            /* === BOUTONS EN COLONNE === */
            div[style*="gap:16px; flex-wrap:wrap"] {
                flex-direction: column !important;
            }

            div[style*="gap:16px; justify-content:center"] {
                flex-direction: column !important;
                align-items: center !important;
            }

            /* === TOUTES LES GRILLES → 1 COLONNE === */
            div[style*="grid-template-columns:1fr 1fr"],
            div[style*="grid-template-columns:1fr 2fr"],
            div[style*="grid-template-columns:2fr 1fr 1fr"],
            div[style*="grid-template-columns:1fr 1fr 1fr"],
            div[style*="grid-template-columns:repeat(3,1fr)"],
            div[style*="grid-template-columns:1fr auto 1fr auto 1fr"] {
                grid-template-columns: 1fr !important;
                gap: 16px !important;
            }

            /* === STATS → 2 COLONNES === */
            div[style*="grid-template-columns:repeat(4,1fr)"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 16px !important;
            }

            /* === SERVICES HOME → 2 COLONNES === */
            div[style*="grid-template-columns:repeat(4,1fr)"][style*="gap:20px"] {
                grid-template-columns: repeat(2, 1fr) !important;
            }

            /* === SERVICES PAGE — items liste → 1 colonne === */
            div[style*="grid-template-columns:repeat(3,1fr)"][style*="gap:12px"] {
                grid-template-columns: 1fr !important;
            }

            /* === VPN SCHEMA — cacher flèches horizontales === */
            div[style*="font-size:24px"][style*="color:#F97316"] {
                display: none !important;
            }

            /* === FOOTER === */
            div[style*="padding:48px 60px"],
            div[style*="padding:40px 60px"] {
                padding: 32px 16px !important;
            }

            div[style*="justify-content:flex-end"] {
                justify-content: center !important;
            }

            div[style*="text-align:right"] {
                text-align: center !important;
            }
        }
    </style>

    @stack('head')
</head>
<body>
    <x-navbar />
    <main>
        @yield('content')
    </main>
    <x-footer />
    @stack('scripts')
</body>
</html>