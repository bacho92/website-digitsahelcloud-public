<style>
.nav-link {
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    padding: 8px 16px;
    border-radius: 8px;
    transition: all .2s;
    color: #1F2937;
    border-bottom: 2px solid transparent;
    display: inline-block;
}
.nav-link:hover {
    color: #F97316;
    background: rgba(249,115,22,.08);
    border-bottom: 2px solid #F97316;
}

/* Mobile menu */
.mobile-menu {
    display: none;
    flex-direction: column;
    gap: 4px;
    padding: 16px 0;
    border-top: 1px solid #e2e8f0;
}
.mobile-menu a {
    display: block;
    padding: 12px 16px;
    color: #1F2937;
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
    border-radius: 10px;
    transition: all .2s;
}
.mobile-menu a:hover {
    background: rgba(249,115,22,.08);
    color: #F97316;
}
.mobile-menu.open { display: flex; }

/* Burger button */
.burger {
    display: none;
    flex-direction: column;
    gap: 5px;
    cursor: pointer;
    padding: 8px;
    background: none;
    border: none;
}
.burger span {
    display: block;
    width: 24px;
    height: 2px;
    background: #1E388A;
    border-radius: 2px;
    transition: all .3s;
}

@media (max-width: 768px) {
    .nav-desktop { display: none !important; }
    .burger { display: flex !important; }
}
</style>

<nav style="background:white;
            padding:0 24px;
            box-shadow:0 2px 10px rgba(30,56,138,.08);
            position:sticky; top:0; z-index:50;
            border-bottom:3px solid #1E388A;">

    <div style="max-width:1280px; margin:0 auto;">

        {{-- Barre principale --}}
        <div style="height:80px; display:flex;
                    justify-content:space-between; align-items:center;">

            {{-- Logo --}}
            <a href="{{ route('home') }}"
               style="text-decoration:none; display:flex;
                      align-items:center; flex-shrink:0;">
                <img src="{{ asset('images/dsc-logo.jpeg') }}"
                     alt="DigitSahelCloud"
                     style="height:60px; width:auto; object-fit:contain;">
            </a>

            {{-- Liens desktop --}}
            <div class="nav-desktop"
                 style="display:flex; gap:4px; align-items:center;">
                @foreach([
                    ['route' => 'home',     'label' => 'Accueil'],
                    ['route' => 'services', 'label' => 'Nos Services'],
                    ['route' => 'vpn',      'label' => 'VPN & Agences'],
                    ['route' => 'about',    'label' => 'Pourquoi Nous'],
                    ['route' => 'contact',  'label' => 'Notre Équipe'],
                ] as $link)
                <a href="{{ route($link['route']) }}" class="nav-link">
                    {{ $link['label'] }}
                </a>
                @endforeach
            </div>

            {{-- Bouton Contact desktop --}}
            <a href="{{ route('contact') }}"
               class="nav-desktop"
               style="display:inline-block; background:#F97316; color:white;
                      font-weight:700; padding:10px 24px; border-radius:10px;
                      text-decoration:none; font-size:14px; flex-shrink:0;
                      box-shadow:0 4px 12px rgba(249,115,22,.3);">
                Contactez-nous
            </a>

            {{-- Burger mobile --}}
            <button class="burger" onclick="toggleMenu()" id="burger-btn">
                <span id="b1"></span>
                <span id="b2"></span>
                <span id="b3"></span>
            </button>
        </div>

        {{-- Menu mobile --}}
        <div class="mobile-menu" id="mobile-menu">
            @foreach([
                ['route' => 'home',     'label' => '🏠 Accueil'],
                ['route' => 'services', 'label' => '⚙ Nos Services'],
                ['route' => 'vpn',      'label' => '🔒 VPN & Agences'],
                ['route' => 'about',    'label' => '💡 Pourquoi Nous'],
                ['route' => 'contact',  'label' => '👥 Notre Équipe'],
            ] as $link)
            <a href="{{ route($link['route']) }}">{{ $link['label'] }}</a>
            @endforeach
            <a href="{{ route('contact') }}"
               style="background:#F97316; color:white; text-align:center;
                      margin-top:8px; font-weight:700;">
                Contactez-nous →
            </a>
        </div>
    </div>
</nav>

@push('scripts')
<script>
function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const b1 = document.getElementById('b1');
    const b2 = document.getElementById('b2');
    const b3 = document.getElementById('b3');
    menu.classList.toggle('open');

    if (menu.classList.contains('open')) {
        b1.style.transform = 'rotate(45deg) translate(5px, 5px)';
        b2.style.opacity = '0';
        b3.style.transform = 'rotate(-45deg) translate(5px, -5px)';
    } else {
        b1.style.transform = 'none';
        b2.style.opacity = '1';
        b3.style.transform = 'none';
    }
}
</script>
@endpush