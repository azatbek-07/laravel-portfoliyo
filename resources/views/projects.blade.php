<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyihalarim | Azatbek Ermalaev</title>
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
        
        .project-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 212, 255, 0.08);
            background: white;
        }
        
        .project-card:hover {
            transform: translateY(-4px);
            border-color: var(--cyan);
            box-shadow: 0 20px 50px rgba(0, 212, 255, 0.08);
        }
        
        .tech-badge {
            background: var(--cyan-light);
            color: var(--cyan-dark);
            padding: 4px 14px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            border: 1px solid rgba(0, 212, 255, 0.15);
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

        .glow-text {
            text-shadow: 0 0 40px rgba(0, 212, 255, 0.08);
        }

        .project-icon-wrapper {
            background: var(--cyan-light);
            border: 1px solid rgba(0, 212, 255, 0.15);
            padding: 20px;
            border-radius: 12px;
        }

        .status-badge {
            background: var(--cyan);
            color: var(--navy);
            padding: 4px 14px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
        }

        .status-badge-draft {
            background: #e2e8f0;
            color: #64748b;
            padding: 4px 14px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
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
                    <a href="/about" class="nav-link text-gray-600 hover:text-cyan text-sm font-medium">Men haqimda</a>
                    <a href="/projects" class="nav-link active text-cyan text-sm font-semibold">Loyihalar</a>
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
                <a href="/about" class="block text-sm text-gray-600 font-medium py-2">Men haqimda</a>
                <a href="/projects" class="block text-sm text-cyan font-semibold py-2">Loyihalar</a>
                <a href="/contact" class="block text-sm text-gray-600 font-medium py-2">Aloqa</a>
            </div>
        </div>
    </nav>

    <!-- Projects Content -->
    <section class="pt-24 pb-20 bg-grid-cyan relative overflow-hidden">
        <!-- Dekorativ elementlar -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-navy/5 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="mb-16">
                <span class="inline-block px-4 py-1.5 bg-cyan/10 text-cyan-dark text-xs font-semibold rounded-full mb-4">
                    <i class="fas fa-code mr-2"></i>Loyihalar
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-navy mb-4 glow-text">
                    <span class="text-gradient-cyan">Loyihalarim</span>
                </h1>
                <p class="text-gray-500 text-lg max-w-2xl">
                    Men bajargan loyihalar va ishlanmalar. Har bir loyiha yangi tajriba va bilim manbai.
                </p>
                <div class="divider-cyan w-24 mt-4"></div>
            </div>
            
            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Project 1: SamDU Oshxona -->
                <div class="project-card rounded-2xl overflow-hidden">
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <div class="project-icon-wrapper">
                            <i class="fas fa-utensils text-2xl text-cyan-dark"></i>
                        </div>
                        <span class="status-badge">
                            <i class="fas fa-check-circle mr-1.5 text-xs"></i>Yakunlangan
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-navy mb-3">SamDU Oshxona</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-5">
                            Samarqand Davlat Universiteti oshxonasi haqida to'liq ma'lumot beruvchi zamonaviy web-sayt. 
                            Menyu, narxlar, ish vaqti va kontakt ma'lumotlari mavjud. Talabalar uchun qulay interfeys.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="tech-badge">HTML5</span>
                            <span class="tech-badge">CSS3</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">Responsive</span>
                        </div>
                        
                        <div class="flex space-x-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-5 py-2.5 border border-cyan/20 text-gray-700 text-sm font-medium rounded-xl hover:border-cyan hover:text-cyan-dark transition-all text-center">
                                <i class="fab fa-github mr-2"></i>Kod
                            </a>
                            <a href="#" class="flex-1 px-5 py-2.5 btn-cyan text-sm font-semibold rounded-xl text-center">
                                <i class="fas fa-external-link-alt mr-2"></i>Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2: Register & Login -->
                <div class="project-card rounded-2xl overflow-hidden">
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <div class="project-icon-wrapper">
                            <i class="fas fa-lock text-2xl text-cyan-dark"></i>
                        </div>
                        <span class="status-badge">
                            <i class="fas fa-check-circle mr-1.5 text-xs"></i>Yakunlangan
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-navy mb-3">Register & Login Tizimi</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-5">
                            Foydalanuvchilarni ro'yxatdan o'tkazish va tizimga kirish uchun to'liq autentifikatsiya tizimi. 
                            Validatsiya, xavfsizlik tekshiruvlari va zamonaviy UI bilan.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="tech-badge">HTML5</span>
                            <span class="tech-badge">CSS3</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">MySQL</span>
                        </div>
                        
                        <div class="flex space-x-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-5 py-2.5 border border-cyan/20 text-gray-700 text-sm font-medium rounded-xl hover:border-cyan hover:text-cyan-dark transition-all text-center">
                                <i class="fab fa-github mr-2"></i>Kod
                            </a>
                            <a href="#" class="flex-1 px-5 py-2.5 btn-cyan text-sm font-semibold rounded-xl text-center">
                                <i class="fas fa-external-link-alt mr-2"></i>Demo
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3: E-commerce Platform -->
                <div class="project-card rounded-2xl overflow-hidden">
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <div class="project-icon-wrapper">
                            <i class="fas fa-shopping-cart text-2xl text-cyan-dark"></i>
                        </div>
                        <span class="status-badge-draft">
                            <i class="fas fa-clock mr-1.5 text-xs"></i>Ishlab chiqilmoqda
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-navy mb-3">E-commerce Platform</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-5">
                            To'liq funksional onlayn-do'kon platformasi. Mahsulotlar katalogi, savat, buyurtma 
                            qilish va to'lov tizimi. Laravel va React asosida qurilmoqda.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="tech-badge">React.js</span>
                            <span class="tech-badge">Laravel</span>
                            <span class="tech-badge">Tailwind CSS</span>
                            <span class="tech-badge">REST API</span>
                        </div>
                        
                        <div class="flex space-x-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-5 py-2.5 border border-cyan/20 text-gray-700 text-sm font-medium rounded-xl hover:border-cyan hover:text-cyan-dark transition-all text-center">
                                <i class="fab fa-github mr-2"></i>Kod
                            </a>
                            <a href="#" class="flex-1 px-5 py-2.5 border border-cyan/20 text-gray-700 text-sm font-medium rounded-xl hover:border-cyan hover:text-cyan-dark transition-all text-center">
                                <i class="fas fa-external-link-alt mr-2"></i>Demo
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 4: AI Chat Assistant -->
                <div class="project-card rounded-2xl overflow-hidden">
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <div class="project-icon-wrapper">
                            <i class="fas fa-robot text-2xl text-cyan-dark"></i>
                        </div>
                        <span class="status-badge-draft">
                            <i class="fas fa-clock mr-1.5 text-xs"></i>Ishlab chiqilmoqda
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-navy mb-3">AI Chat Assistant</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-5">
                            Sun'iy intellekt asosida ishlovchi chat assistant. Foydalanuvchilarga savollarga 
                            javob berish, tavsiyalar va yordam berish uchun mo'ljallangan.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="tech-badge">Python</span>
                            <span class="tech-badge">TensorFlow</span>
                            <span class="tech-badge">NLP</span>
                            <span class="tech-badge">React.js</span>
                        </div>
                        
                        <div class="flex space-x-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-5 py-2.5 border border-cyan/20 text-gray-700 text-sm font-medium rounded-xl hover:border-cyan hover:text-cyan-dark transition-all text-center">
                                <i class="fab fa-github mr-2"></i>Kod
                            </a>
                            <a href="#" class="flex-1 px-5 py-2.5 border border-cyan/20 text-gray-700 text-sm font-medium rounded-xl hover:border-cyan hover:text-cyan-dark transition-all text-center">
                                <i class="fas fa-external-link-alt mr-2"></i>Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Future Projects / Add New -->
            <div class="mt-10">
                <div class="border-2 border-dashed border-cyan/20 rounded-2xl p-12 text-center hover:border-cyan transition-colors bg-white/50">
                    <div class="icon-box mx-auto mb-4" style="background: var(--cyan-light); color: var(--cyan-dark); width: 56px; height: 56px; font-size: 22px;">
                        <i class="fas fa-plus"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-400 mb-2">Yangi loyiha qo'shish</h3>
                    <p class="text-sm text-gray-400 max-w-md mx-auto">
                        Keyingi loyihangiz shu yerda bo'ladi. Yangi g'oyalar va texnologiyalar bilan yanada kuchli portfolio.
                    </p>
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
    </script>
</body>
</html>