<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men haqimda | Azatbek Ermalaev</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        
        /* Cyan + Navy + White Colors */
        :root {
            --cyan: #00d4ff;
            --cyan-dark: #00b8d4;
            --cyan-light: #e6f9ff;
            --navy: #0a192f;
            --navy-light: #112240;
            --navy-medium: #1a365d;
            --white: #ffffff;
            --white-soft: #f8fafc;
        }

        .bg-cyan {
            background-color: var(--cyan);
        }
        .bg-cyan-dark {
            background-color: var(--cyan-dark);
        }
        .bg-cyan-light {
            background-color: var(--cyan-light);
        }
        .bg-navy {
            background-color: var(--navy);
        }
        .bg-navy-light {
            background-color: var(--navy-light);
        }
        .bg-navy-medium {
            background-color: var(--navy-medium);
        }
        .bg-white-soft {
            background-color: var(--white-soft);
        }

        .text-cyan {
            color: var(--cyan);
        }
        .text-cyan-dark {
            color: var(--cyan-dark);
        }
        .text-navy {
            color: var(--navy);
        }
        .text-navy-light {
            color: var(--navy-light);
        }

        .border-cyan {
            border-color: var(--cyan);
        }
        .border-cyan-light {
            border-color: var(--cyan-light);
        }
        .border-navy {
            border-color: var(--navy);
        }

        .text-gradient-cyan {
            background: linear-gradient(135deg, var(--cyan), var(--navy));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .bg-gradient-cyan-navy {
            background: linear-gradient(135deg, var(--cyan), var(--navy));
        }

        .bg-grid-cyan {
            background-image: 
                linear-gradient(rgba(0, 212, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 212, 255, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
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
            background: var(--cyan);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .hover-effect {
            transition: all 0.3s ease;
        }
        
        .hover-effect:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 212, 255, 0.12);
        }

        .icon-box {
            width: 44px;
            height: 44px;
            background: rgba(0, 212, 255, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--cyan-dark);
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .icon-box:hover {
            background: var(--cyan);
            color: white;
            transform: translateY(-2px);
        }

        .btn-cyan {
            background: var(--cyan);
            color: var(--navy);
            transition: all 0.3s ease;
        }

        .btn-cyan:hover {
            background: var(--cyan-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 212, 255, 0.25);
        }

        .btn-outline-cyan {
            border: 1.5px solid var(--cyan);
            color: var(--cyan-dark);
            transition: all 0.3s ease;
        }

        .btn-outline-cyan:hover {
            background: var(--cyan);
            color: var(--navy);
            box-shadow: 0 8px 30px rgba(0, 212, 255, 0.15);
        }

        .card-cyan {
            border: 1px solid rgba(0, 212, 255, 0.1);
            transition: all 0.3s ease;
        }

        .card-cyan:hover {
            border-color: var(--cyan);
            box-shadow: 0 12px 40px rgba(0, 212, 255, 0.08);
        }

        .footer-link-cyan {
            transition: all 0.2s ease;
        }

        .footer-link-cyan:hover {
            color: var(--cyan);
            transform: translateX(4px);
        }

        .divider-cyan {
            background: linear-gradient(90deg, transparent, var(--cyan), transparent);
            height: 2px;
        }

        .progress-bar-cyan {
            background: var(--cyan);
            height: 100%;
            border-radius: 999px;
            transition: width 1s ease;
        }

        .progress-track {
            background: rgba(0, 212, 255, 0.1);
            height: 6px;
            border-radius: 999px;
            overflow: hidden;
        }

        .glow-text {
            text-shadow: 0 0 40px rgba(0, 212, 255, 0.08);
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--white-soft);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--cyan);
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--cyan-dark);
        }
    </style>
</head>
<body class="bg-white-soft text-gray-800">
    
    <!-- Navbar -->
    <nav class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-cyan/10">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-extrabold tracking-tight">
                    <span class="text-navy">A</span><span class="text-cyan">E</span>
                </a>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link text-gray-600 hover:text-cyan text-sm font-medium">Asosiy</a>
                    <a href="/about" class="nav-link active text-cyan text-sm font-semibold">Men haqimda</a>
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
                <a href="/" class="block text-sm text-gray-600 font-medium py-2">Asosiy</a>
                <a href="/about" class="block text-sm text-cyan font-semibold py-2">Men haqimda</a>
                <a href="/projects" class="block text-sm text-gray-600 font-medium py-2">Loyihalar</a>
                <a href="/contact" class="block text-sm text-gray-600 font-medium py-2">Aloqa</a>
            </div>
        </div>
    </nav>

    <!-- About Content -->
    <section class="pt-24 pb-20 bg-grid-cyan relative overflow-hidden">
        <!-- Dekorativ elementlar -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-navy/5 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="mb-16">
                <span class="inline-block px-4 py-1.5 bg-cyan/10 text-cyan-dark text-xs font-semibold rounded-full mb-4">
                    <i class="fas fa-user mr-2"></i>Haqimda
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-navy mb-4 glow-text">
                    Men <span class="text-gradient-cyan">haqimda</span>
                </h1>
                <p class="text-gray-500 text-lg max-w-2xl">
                    Kimligim, qayerdan ekanligim va qanday texnologiyalar bilan ishlashim haqida
                </p>
                <div class="divider-cyan w-24 mt-4"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Left Column - Personal Info -->
                <div class="md:col-span-1 space-y-6">
                    <div class="bg-white border border-cyan/10 rounded-2xl p-6 card-cyan">
                        <div class="icon-box mb-4">
                            <i class="fas fa-user"></i>
                        </div>
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">Shaxsiy ma'lumotlar</h3>
                        <div class="space-y-4">
                            <div>
                                <span class="text-xs text-gray-400">Ism</span>
                                <p class="text-sm font-semibold text-navy">Azatbek Ermalaev</p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-400">Yashash joyi</span>
                                <p class="text-sm font-semibold text-navy">Samarqand, O'zbekiston</p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-400">Tug'ilgan joy</span>
                                <p class="text-sm font-semibold text-navy">Qoraqalpog'iston</p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-400">Universitet</span>
                                <p class="text-sm font-semibold text-navy">Samarqand Davlat Universiteti</p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-400">Fakultet</span>
                                <p class="text-sm font-semibold text-navy">Sun'iy intellekt va raqamli texnologiyalar</p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-400">Kurs</span>
                                <p class="text-sm font-semibold text-navy">2-kurs</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Card -->
                    <div class="bg-gradient-cyan-navy rounded-2xl p-6 text-white">
                        <h3 class="text-xs font-semibold text-cyan/60 uppercase tracking-wider mb-4">Bog'lanish</h3>
                        <div class="space-y-3">
                            <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="flex items-center space-x-2 text-sm text-cyan/80 hover:text-white transition-colors">
                                <i class="fab fa-telegram-plane"></i>
                                <span>@A_z_a_t_b_e_k</span>
                            </a>
                            <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="flex items-center space-x-2 text-sm text-cyan/80 hover:text-white transition-colors">
                                <i class="fab fa-instagram"></i>
                                <span>ermalaev_azatbek</span>
                            </a>
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex items-center space-x-2 text-sm text-cyan/80 hover:text-white transition-colors">
                                <i class="fab fa-github"></i>
                                <span>azatbek-07</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Skills & Interests -->
                <div class="md:col-span-2 space-y-6">
                    <!-- Bio -->
                    <div class="bg-white border border-cyan/10 rounded-2xl p-6 card-cyan">
                        <div class="icon-box mb-4">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            Sun'iy intellekt va raqamli texnologiyalar fakultetida 2-kurs talabasiman. 
                            Full Stack dasturchi bo'lishni maqsad qilganman. Frontend va Backend texnologiyalarini 
                            o'rganyapman. PHP, C++, JavaScript, React, HTML, CSS va Laravel frameworkida ishlayman. 
                            Kelajakda katta loyihalarda ishlash va o'z startapimni yaratish niyatim bor.
                        </p>
                    </div>
                    
                    <!-- Frontend Skills -->
                    <div class="bg-white border border-cyan/10 rounded-2xl p-6 card-cyan">
                        <div class="icon-box mb-4">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-6">Frontend ko'nikmalar</h3>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">HTML / CSS</span>
                                    <span class="text-sm font-medium text-cyan-dark">90%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar-cyan" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">JavaScript</span>
                                    <span class="text-sm font-medium text-cyan-dark">80%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar-cyan" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">React.js</span>
                                    <span class="text-sm font-medium text-cyan-dark">70%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar-cyan" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">Tailwind CSS</span>
                                    <span class="text-sm font-medium text-cyan-dark">85%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar-cyan" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Backend Skills -->
                    <div class="bg-white border border-cyan/10 rounded-2xl p-6 card-cyan">
                        <div class="icon-box mb-4">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-6">Backend ko'nikmalar</h3>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">PHP</span>
                                    <span class="text-sm font-medium text-cyan-dark">75%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar-cyan" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">Laravel</span>
                                    <span class="text-sm font-medium text-cyan-dark">70%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar-cyan" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">C++</span>
                                    <span class="text-sm font-medium text-cyan-dark">65%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar-cyan" style="width: 65%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">Git / GitHub</span>
                                    <span class="text-sm font-medium text-cyan-dark">70%</span>
                                </div>
                                <div class="progress-track">
                                    <div class="progress-bar-cyan" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Interests -->
                    <div class="bg-white border border-cyan/10 rounded-2xl p-6 card-cyan">
                        <div class="icon-box mb-4">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-6">Qiziqishlar</h3>
                        <div class="grid sm:grid-cols-3 gap-4">
                            <div class="bg-cyan-light rounded-xl p-4 text-center hover:bg-cyan/20 transition-colors border border-cyan/10">
                                <div class="text-3xl mb-2">🤖</div>
                                <h4 class="text-sm font-semibold text-navy">Sun'iy Intellekt</h4>
                                <p class="text-xs text-gray-500 mt-1">AI va raqamli texnologiyalar</p>
                            </div>
                            <div class="bg-cyan-light rounded-xl p-4 text-center hover:bg-cyan/20 transition-colors border border-cyan/10">
                                <div class="text-3xl mb-2">💻</div>
                                <h4 class="text-sm font-semibold text-navy">Full Stack</h4>
                                <p class="text-xs text-gray-500 mt-1">Frontend + Backend</p>
                            </div>
                            <div class="bg-cyan-light rounded-xl p-4 text-center hover:bg-cyan/20 transition-colors border border-cyan/10">
                                <div class="text-3xl mb-2">🚀</div>
                                <h4 class="text-sm font-semibold text-navy">Startup</h4>
                                <p class="text-xs text-gray-500 mt-1">O'z loyihalarim</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Education Timeline -->
                    <div class="bg-white border border-cyan/10 rounded-2xl p-6 card-cyan">
                        <div class="icon-box mb-4">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-6">Ta'lim</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-2.5 h-2.5 bg-cyan rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <h4 class="text-sm font-semibold text-navy">Samarqand Davlat Universiteti</h4>
                                    <p class="text-xs text-gray-500">Sun'iy intellekt va raqamli texnologiyalar fakulteti</p>
                                    <p class="text-xs text-cyan-dark font-medium mt-1">2023 - Hozirgacha • 2-kurs</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-2.5 h-2.5 bg-gray-300 rounded-full mt-2 flex-shrink-0"></div>
                                <div>
                                    <h4 class="text-sm font-semibold text-navy">O'rta maktab</h4>
                                    <p class="text-xs text-gray-500">Qoraqalpog'iston</p>
                                    <p class="text-xs text-gray-400 mt-1">Umumiy o'rta ta'lim</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-cyan/10 bg-navy text-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-12">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="text-2xl font-extrabold mb-3">
                        <span class="text-navy bg-white px-2 py-1 rounded">A</span>
                        <span class="text-cyan">E</span>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed max-w-xs">
                        Full Stack dasturchi. Frontend va Backend texnologiyalari bilan ishlayman.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-xs font-semibold text-cyan uppercase tracking-wider mb-4">Sahifalar</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Asosiy sahifa</a></li>
                        <li><a href="/about" class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Men haqimda</a></li>
                        <li><a href="/projects" class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Loyihalarim</a></li>
                        <li><a href="/contact" class="footer-link-cyan text-sm text-gray-400 hover:text-cyan transition-colors">Aloqa</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-xs font-semibold text-cyan uppercase tracking-wider mb-4">Bog'lanish</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-telegram-plane text-cyan"></i>
                                <span>@A_z_a_t_b_e_k</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-instagram text-cyan"></i>
                                <span>ermalaev_azatbek</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/azatbek-07" target="_blank" class="footer-link-cyan flex items-center space-x-2 text-sm text-gray-400 hover:text-cyan transition-colors">
                                <i class="fab fa-github text-gray-400"></i>
                                <span>azatbek-07</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-10 pt-6 border-t border-cyan/10 flex flex-col md:flex-row justify-between items-center space-y-2 md:space-y-0">
                <p class="text-xs text-gray-500">© 2024 Azatbek Ermalaev</p>
                <div class="flex items-center space-x-4 text-xs text-gray-500">
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

        // Progress bar animation on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bars = entry.target.querySelectorAll('.progress-bar-cyan');
                    bars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0%';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 100);
                    });
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.progress-track').forEach(track => {
            observer.observe(track.closest('.grid') || track.closest('div'));
        });
    </script>
</body>
</html>