<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Azatbek Ermalaev | Portfolio</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    @if (file_exists(public_path('hot')) || file_exists(public_path('build/manifest.json')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        * {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        /* Navy rang asosiy */
        .bg-navy {
            background-color: #0a192f;
        }

        .bg-navy-light {
            background-color: #112240;
        }

        .bg-navy-lighter {
            background-color: #1a365d;
        }

        .text-navy {
            color: #0a192f;
        }

        .border-navy {
            border-color: #1a365d;
        }

        /* Cyan rang accent */
        .text-cyan {
            color: #00d4ff;
        }

        .bg-cyan {
            background-color: #00d4ff;
        }

        .bg-cyan-light {
            background-color: #e6f9ff;
        }

        .border-cyan {
            border-color: #00d4ff;
        }

        .hover-bg-cyan:hover {
            background-color: #00d4ff;
        }

        .hover-text-cyan:hover {
            color: #00d4ff;
        }

        /* Gradient cyan dan navy ga */
        .text-gradient-cyan {
            background: linear-gradient(135deg, #00d4ff, #0a192f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .bg-gradient-cyan-navy {
            background: linear-gradient(135deg, #00d4ff, #0a192f);
        }

        .bg-grid-cyan {
            background-image:
                linear-gradient(rgba(0, 212, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 212, 255, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .hover-effect {
            transition: all 0.3s ease;
        }

        .hover-effect:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 212, 255, 0.15);
        }

        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #00d4ff;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .badge-cyan {
            background: rgba(0, 212, 255, 0.12);
            color: #00d4ff;
            padding: 6px 18px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
        }

        .icon-box-cyan {
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 212, 255, 0.2);
        }

        .icon-box-cyan:hover {
            background: #00d4ff;
            color: #0a192f;
            border-color: #00d4ff;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 212, 255, 0.25);
        }

        .card-cyan {
            background: white;
            border: 1px solid rgba(0, 212, 255, 0.15);
            transition: all 0.3s ease;
        }

        .card-cyan:hover {
            border-color: #00d4ff;
            box-shadow: 0 12px 40px rgba(0, 212, 255, 0.08);
        }

        .btn-cyan {
            background: #00d4ff;
            color: #0a192f;
            transition: all 0.3s ease;
        }

        .btn-cyan:hover {
            background: #0a192f;
            color: #00d4ff;
            box-shadow: 0 8px 30px rgba(0, 212, 255, 0.2);
        }

        .btn-outline-cyan {
            border: 1.5px solid #00d4ff;
            color: #00d4ff;
            transition: all 0.3s ease;
        }

        .btn-outline-cyan:hover {
            background: #00d4ff;
            color: #0a192f;
            box-shadow: 0 8px 30px rgba(0, 212, 255, 0.2);
        }

        .footer-link-cyan {
            transition: all 0.2s ease;
        }

        .footer-link-cyan:hover {
            color: #00d4ff;
            transform: translateX(4px);
        }

        .glow-text {
            text-shadow: 0 0 30px rgba(0, 212, 255, 0.1);
        }

        .divider-cyan {
            background: linear-gradient(90deg, transparent, #00d4ff, transparent);
            height: 1px;
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0a192f;
        }

        ::-webkit-scrollbar-thumb {
            background: #00d4ff;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #00b8d4;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <nav class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-cyan/10">

        <div class="max-w-6xl mx-auto px-6 lg:px-8">

            <div class="flex justify-between items-center h-16">

                {{-- LOGO --}}
                <a href="{{ route('home') }}"
                    class="text-2xl font-extrabold tracking-tight">
                    <span class="text-navy">A</span>
                    <span class="text-cyan">E</span>
                </a>

                {{-- DESKTOP MENU --}}
                <div class="hidden md:flex items-center space-x-8">

                    <a href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'active text-cyan' : 'text-gray-600' }} text-sm font-semibold">
                        Asosiy
                    </a>

                    <a href="{{ route('about') }}"
                        class="nav-link {{ request()->routeIs('about') ? 'active text-cyan' : 'text-gray-600' }} text-sm font-medium">
                        Men haqimda
                    </a>

                    <a href="{{ route('projects') }}"
                        class="nav-link {{ request()->routeIs('projects') ? 'active text-cyan' : 'text-gray-600' }} text-sm font-medium">
                        Loyihalar
                    </a>

                    <a href="{{ route('contact') }}"
                        class="ml-2 px-5 py-2 btn-cyan text-sm font-semibold rounded-lg">
                        Aloqa
                    </a>

                </div>

                {{-- MOBILE TOGGLE --}}
                <button
                    id="menu-btn"
                    type="button"
                    class="md:hidden flex items-center justify-center w-10 h-10 text-gray-700 hover:text-cyan transition"
                    aria-label="Menu"
                    aria-expanded="false">

                    <i data-lucide="menu" id="menu-icon" class="w-6 h-6"></i>

                </button>

            </div>

        </div>

        {{-- MOBILE MENU --}}
        <div
            id="mobile-menu"
            class="hidden md:hidden bg-white border-t border-cyan/10 shadow-lg">

            <div class="px-6 py-5 space-y-2">

                <a href="{{ route('home') }}"
                    class="block py-3 px-3 rounded-lg text-sm font-semibold
                {{ request()->routeIs('home') ? 'bg-cyan/10 text-cyan' : 'text-gray-600' }}">
                    Asosiy
                </a>

                <a href="{{ route('about') }}"
                    class="block py-3 px-3 rounded-lg text-sm font-medium
                {{ request()->routeIs('about') ? 'bg-cyan/10 text-cyan' : 'text-gray-600' }}">
                    Men haqimda
                </a>

                <a href="{{ route('projects') }}"
                    class="block py-3 px-3 rounded-lg text-sm font-medium
                {{ request()->routeIs('projects') ? 'bg-cyan/10 text-cyan' : 'text-gray-600' }}">
                    Loyihalar
                </a>

                <a href="{{ route('contact') }}"
                    class="block py-3 px-3 rounded-lg text-sm font-semibold
                {{ request()->routeIs('contact') ? 'bg-cyan/10 text-cyan' : 'text-cyan' }}">
                    Aloqa
                </a>

            </div>

        </div>

    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-cyan/10 bg-navy text-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-3 gap-12">
                <div>
                    <div class="text-2xl font-extrabold mb-4">
                        <span class="text-navy bg-white px-2 py-1 rounded">A</span>
                        <span class="text-cyan">E</span>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed max-w-xs">
                        Full Stack dasturchi. Sun'iy intellekt va raqamli texnologiyalar yo'nalishida.
                    </p>
                </div>

                <div>
                    <h4 class="text-xs font-semibold text-cyan uppercase tracking-wider mb-5">Sahifalar</h4>
                    <ul class="space-y-3">
                        <li><a href="/"
                                class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Asosiy
                                sahifa</a></li>
                        <li><a href="{{route('about')}}"
                                class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Men
                                haqimda</a></li>
                        <li><a href="{{ route('projects') }}"
                                class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Loyihalarim</a>
                        </li>
                        <li><a href="{{route('contact')}}"
                                class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Aloqa</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-semibold text-cyan uppercase tracking-wider mb-5">Bog'lanish</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="https://t.me/A_z_a_t_b_e_k" target="_blank"
                                class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-telegram-plane text-cyan text-base"></i>
                                <span>@A_z_a_t_b_e_k</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/ermalaev_azatbek" target="_blank"
                                class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-instagram text-cyan text-base"></i>
                                <span>ermalaev_azatbek</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/azatbek-07" target="_blank"
                                class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-github text-gray-400 text-base"></i>
                                <span>azatbek-07</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="mt-12 pt-8 border-t border-cyan/10 flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">
                <p class="text-xs text-gray-500">© 2024 Azatbek Ermalaev</p>
                <div class="flex items-center space-x-6 text-xs text-gray-500">
                    <a href="{{route('about')}}" class="footer-link-cyan hover:text-cyan transition-colors">Men haqimda</a>
                    <a href="{{ route('projects') }}" class="footer-link-cyan hover:text-cyan transition-colors">Loyihalar</a>
                    <a href="{{route('contact')}}" class="footer-link-cyan hover:text-cyan transition-colors">Aloqa</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // ==============================
            // MOBILE MENU
            // ==============================

            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            // Agar elementlar mavjud bo'lsa
            if (menuBtn && mobileMenu) {

                // Menu ochish / yopish
                menuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });

                // Menu ichidagi link bosilganda yopish
                const mobileLinks = mobileMenu.querySelectorAll('a');

                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                    });
                });

            }


            // ==============================
            // NAVBAR SCROLL EFFECT
            // ==============================

            const nav = document.querySelector('nav');

            if (nav) {

                window.addEventListener('scroll', () => {

                    if (window.scrollY > 50) {
                        nav.classList.add('shadow-lg');
                    } else {
                        nav.classList.remove('shadow-lg');
                    }

                });

            }

        });
    </script>
</body>

</html>