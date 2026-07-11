<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Azatbek Ermalaev | Portfolio</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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

    <!-- Navbar -->
    <nav class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-cyan/10">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-extrabold tracking-tight">
                    <span class="text-navy">A</span><span class="text-cyan">E</span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link active text-cyan text-sm font-semibold">Asosiy</a>
                    <a href="/about" class="nav-link text-gray-600 hover:text-cyan text-sm font-medium">Men haqimda</a>
                    <a href="/projects" class="nav-link text-gray-600 hover:text-cyan text-sm font-medium">Loyihalar</a>
                    <a href="/contact" class="ml-2 px-5 py-2 btn-cyan text-sm font-semibold rounded-lg">
                        Aloqa
                    </a>
                </div>

                <button id="menu-btn" class="md:hidden text-gray-600">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-cyan/10">
            <div class="px-6 py-5 space-y-3">
                <a href="/" class="block text-sm text-cyan font-semibold py-2">Asosiy</a>
                <a href="/about" class="block text-sm text-gray-600 font-medium py-2">Men haqimda</a>
                <a href="/projects" class="block text-sm text-gray-600 font-medium py-2">Loyihalar</a>
                <a href="/contact" class="block text-sm text-gray-600 font-medium py-2">Aloqa</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-16 bg-grid-cyan relative overflow-hidden">
        <!-- Dekorativ cyan blobs -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-navy/5 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div>
                        <span class="badge-cyan">
                            <i class="fas fa-code mr-2"></i>Full Stack Developer
                        </span>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-extrabold text-navy leading-tight glow-text">
                        Azatbek<br>
                        <span class="text-gradient-cyan">Ermalaev</span>
                    </h1>

                    <p class="text-lg text-gray-600 leading-relaxed max-w-lg">
                        Sun'iy intellekt va raqamli texnologiyalar fakulteti talabasi.
                        Samarqandda 2-kursda o'qiyman. Asli Qoraqalpog'istondanman.
                    </p>

                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <span class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-1.5 text-cyan"></i>
                            Samarqand, O'zbekiston
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-3 pt-2">
                        <a href="/projects" class="px-6 py-3 btn-cyan text-sm font-semibold rounded-lg hover-effect">
                            Loyihalarim
                            <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                        <a href="/about" class="px-6 py-3 btn-outline-cyan text-sm font-semibold rounded-lg hover-effect">
                            Men haqimda
                        </a>
                    </div>

                    <div class="flex items-center space-x-4 pt-4">
                        <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="icon-box-cyan w-10 h-10 bg-white rounded-lg flex items-center justify-center text-gray-500">
                            <i class="fab fa-telegram-plane text-base"></i>
                        </a>
                        <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="icon-box-cyan w-10 h-10 bg-white rounded-lg flex items-center justify-center text-gray-500">
                            <i class="fab fa-instagram text-base"></i>
                        </a>
                        <a href="https://github.com/azatbek-07" target="_blank" class="icon-box-cyan w-10 h-10 bg-white rounded-lg flex items-center justify-center text-gray-500">
                            <i class="fab fa-github text-base"></i>
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="relative">
                        <div class="w-full h-96 bg-gradient-to-br from-cyan-50 to-navy/5 rounded-2xl border-2 border-cyan/20 flex items-center justify-center card-cyan">
                            <div class="text-center">
                                <div class="text-7xl font-extrabold">
                                    <span class="text-navy">A</span><span class="text-cyan">E</span>
                                </div>
                                <div class="divider-cyan w-16 mx-auto my-3"></div>
                                <p class="text-sm font-semibold text-cyan">Full Stack Developer</p>
                            </div>
                        </div>

                        <!-- Dekorativ kartochkalar -->
                        <div class="absolute -top-4 -right-4 bg-white border-2 border-cyan/20 rounded-xl px-4 py-3 shadow-lg">
                            <p class="text-xs text-gray-500 font-medium">Talaba</p>
                            <p class="text-lg font-extrabold text-navy">2-kurs</p>
                        </div>

                        <div class="absolute -bottom-4 -left-4 bg-white border-2 border-cyan/20 rounded-xl px-4 py-3 shadow-lg">
                            <p class="text-xs text-gray-500 font-medium">Universitet</p>
                            <p class="text-sm font-bold text-navy">SamDU</p>
                        </div>

                        <!-- Dekorativ cyan nuqta -->
                        <div class="absolute top-1/2 -right-6 w-3 h-3 bg-cyan rounded-full animate-pulse"></div>
                        <div class="absolute top-1/3 -left-6 w-2 h-2 bg-navy rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="/" class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Asosiy sahifa</a></li>
                        <li><a href="/about" class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Men haqimda</a></li>
                        <li><a href="/projects" class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Loyihalarim</a></li>
                        <li><a href="/contact" class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Aloqa</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-semibold text-cyan uppercase tracking-wider mb-5">Bog'lanish</h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-telegram-plane text-cyan text-base"></i>
                                <span>@A_z_a_t_b_e_k</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-instagram text-cyan text-base"></i>
                                <span>ermalaev_azatbek</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/azatbek-07" target="_blank" class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-github text-gray-400 text-base"></i>
                                <span>azatbek-07</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-cyan/10 flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">
                <p class="text-xs text-gray-500">© 2024 Azatbek Ermalaev</p>
                <div class="flex items-center space-x-6 text-xs text-gray-500">
                    <a href="/about" class="footer-link-cyan hover:text-cyan transition-colors">Men haqimda</a>
                    <a href="/projects" class="footer-link-cyan hover:text-cyan transition-colors">Loyihalar</a>
                    <a href="/contact" class="footer-link-cyan hover:text-cyan transition-colors">Aloqa</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });
    </script>
</body>
</html>