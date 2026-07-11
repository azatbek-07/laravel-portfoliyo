<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aloqa | Azatbek Ermalaev</title>
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
        
        .contact-link {
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 212, 255, 0.08);
            background: white;
        }
        
        .contact-link:hover {
            background: var(--cyan-light);
            border-color: var(--cyan);
            transform: translateX(4px);
            box-shadow: 0 8px 30px rgba(0, 212, 255, 0.08);
        }
        
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            background: var(--white-soft);
        }
        
        .input-field:focus {
            border-color: var(--cyan);
            box-shadow: 0 0 0 3px rgba(0, 212, 255, 0.1);
            outline: none;
            background: white;
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

        .contact-icon-wrapper {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .contact-icon-telegram {
            background: var(--cyan);
            color: var(--navy);
        }

        .contact-icon-instagram {
            background: linear-gradient(135deg, #f58529, #dd2a7b, #8134af);
            color: white;
        }

        .contact-icon-github {
            background: var(--navy);
            color: white;
        }

        .contact-icon-location {
            background: var(--cyan-light);
            color: var(--cyan-dark);
        }

        .contact-icon-university {
            background: var(--cyan-light);
            color: var(--cyan-dark);
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
                <a href="/about" class="block text-sm text-gray-600 font-medium py-2">Men haqimda</a>
                <a href="/projects" class="block text-sm text-gray-600 font-medium py-2">Loyihalar</a>
                <a href="/contact" class="block text-sm text-cyan font-semibold py-2">Aloqa</a>
            </div>
        </div>
    </nav>

    <!-- Contact Content -->
    <section class="pt-24 pb-20 bg-grid-cyan min-h-screen relative overflow-hidden">
        <!-- Dekorativ elementlar -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-navy/5 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="mb-16">
                <span class="inline-block px-4 py-1.5 bg-cyan/10 text-cyan-dark text-xs font-semibold rounded-full mb-4">
                    <i class="fas fa-envelope mr-2"></i>Bog'lanish
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-navy mb-4 glow-text">
                    <span class="text-gradient-cyan">Aloqa</span>
                </h1>
                <p class="text-gray-500 text-lg max-w-2xl">
                    Men bilan bog'lanmoqchi bo'lsangiz, quyidagi manzillar orqali murojaat qiling.
                    Loyihalar, hamkorlik yoki savollar uchun doim ochiqman.
                </p>
                <div class="divider-cyan w-24 mt-4"></div>
            </div>
            
            <div class="grid md:grid-cols-5 gap-8">
                <!-- Contact Links - Left Side -->
                <div class="md:col-span-2 space-y-4">
                    <!-- Telegram -->
                    <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="contact-link flex items-center space-x-4 rounded-2xl p-5 hover-effect">
                        <div class="contact-icon-wrapper contact-icon-telegram">
                            <i class="fab fa-telegram-plane"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Telegram</p>
                            <p class="text-sm font-semibold text-navy truncate">@A_z_a_t_b_e_k</p>
                        </div>
                        <i class="fas fa-arrow-right text-cyan text-sm"></i>
                    </a>
                    
                    <!-- Instagram -->
                    <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="contact-link flex items-center space-x-4 rounded-2xl p-5 hover-effect">
                        <div class="contact-icon-wrapper contact-icon-instagram">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Instagram</p>
                            <p class="text-sm font-semibold text-navy truncate">ermalaev_azatbek</p>
                        </div>
                        <i class="fas fa-arrow-right text-cyan text-sm"></i>
                    </a>
                    
                    <!-- GitHub -->
                    <a href="https://github.com/azatbek-07" target="_blank" class="contact-link flex items-center space-x-4 rounded-2xl p-5 hover-effect">
                        <div class="contact-icon-wrapper contact-icon-github">
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">GitHub</p>
                            <p class="text-sm font-semibold text-navy truncate">azatbek-07</p>
                        </div>
                        <i class="fas fa-arrow-right text-cyan text-sm"></i>
                    </a>
                    
                    <!-- Location -->
                    <div class="contact-link flex items-center space-x-4 rounded-2xl p-5 cursor-default">
                        <div class="contact-icon-wrapper contact-icon-location">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Manzil</p>
                            <p class="text-sm font-semibold text-navy">Samarqand, O'zbekiston</p>
                        </div>
                    </div>
                    
                    <!-- University -->
                    <div class="contact-link flex items-center space-x-4 rounded-2xl p-5 cursor-default">
                        <div class="contact-icon-wrapper contact-icon-university">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Universitet</p>
                            <p class="text-sm font-semibold text-navy">SamDU • 2-kurs</p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form - Right Side -->
                <div class="md:col-span-3">
                    <div class="bg-white border border-cyan/10 rounded-2xl p-8 card-cyan">
                        <div class="icon-box mb-6">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h3 class="text-lg font-bold text-navy mb-2">Xabar yuborish</h3>
                        <p class="text-sm text-gray-500 mb-8">
                            Savollaringiz yoki takliflaringiz bo'lsa, bemalol yozing. Tez orada javob beraman.
                        </p>
                        
                        <form class="space-y-5">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Ismingiz</label>
                                    <input type="text" placeholder="Azatbek" class="input-field w-full px-4 py-3 rounded-xl text-sm">
                                </div>
                                
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Email</label>
                                    <input type="email" placeholder="azatbek@example.com" class="input-field w-full px-4 py-3 rounded-xl text-sm">
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Mavzu</label>
                                <input type="text" placeholder="Loyiha taklifi" class="input-field w-full px-4 py-3 rounded-xl text-sm">
                            </div>
                            
                            <div>
                                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Xabar</label>
                                <textarea rows="5" placeholder="Xabaringizni bu yerga yozing..." class="input-field w-full px-4 py-3 rounded-xl text-sm resize-none"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full px-6 py-3.5 btn-cyan text-sm font-semibold rounded-xl flex items-center justify-center space-x-2">
                                <i class="fas fa-paper-plane"></i>
                                <span>Yuborish</span>
                            </button>
                        </form>
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
    </script>
</body>
</html>