<nav style="background:white; padding:16px 32px; display:flex;
            justify-content:space-between; align-items:center;
            box-shadow:0 2px 10px rgba(30,56,138,.08);
            position:sticky; top:0; z-index:50;">

    <a href="{{ route('home') }}"
       style="text-decoration:none; font-family:'Sora',sans-serif;
              font-size:20px; font-weight:800;">
        <span style="color:#1E388A">Digit</span>
        <span style="color:#F97316">Sahel</span>
        <span style="color:#1E388A">Cloud</span>
    </a>

    <div style="display:flex; gap:24px; align-items:center;">
        <a href="{{ route('home') }}"
           style="color:#1F2937; text-decoration:none; font-weight:500; font-size:14px;">
           Accueil
        </a>
        <a href="{{ route('services') }}"
           style="color:#1F2937; text-decoration:none; font-weight:500; font-size:14px;">
           Services
        </a>
        <a href="{{ route('vpn') }}"
           style="color:#1F2937; text-decoration:none; font-weight:500; font-size:14px;">
           VPN & Agences
        </a>
        <a href="{{ route('about') }}"
           style="color:#1F2937; text-decoration:none; font-weight:500; font-size:14px;">
           À propos
        </a>
        <a href="{{ route('contact') }}" class="btn-primary" style="font-size:14px;">
            Contactez-nous
        </a>
    </div>
</nav>