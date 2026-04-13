<!DOCTYPE html>
<html lang="fr">
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