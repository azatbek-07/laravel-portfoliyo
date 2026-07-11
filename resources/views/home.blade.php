<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azatbek Ermalaev | Portfolio</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #1e40af, #3b82f6, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #1d4ed8 100%);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .nav-link {
            position: relative;
            padding-bottom: 4px;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #60a5fa;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .card {
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(30, 64, 175, 0.3);
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .animate-left {
            animation: slideInLeft 0.8s ease-out;
        }
        
        .animate-right {
            animation: slideInRight 0.8s ease-out;
        }
        
        .skill-bar {
            transition: width 1.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-blue-50">
    
    <!-- Navbar -->
    <nav class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="index.html" class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white text-xl font-bold shadow-lg">
                        AE
                    </div>
                    <span class="text-xl font-bold text-blue-900">Ermalaev</span>
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="index.html" class="nav-link active px-4 py-2 text-blue-600 font-medium transition-colors">Asosiy</a>
                    <a href="about.html" class="nav-link px-4 py-2 text-gray-600 hover:text-blue-600 font-medium transition-colors">Men haqimda</a>
                    <a href="projects.html" class="nav-link px-4 py-2 text-gray-600 hover:text-blue-600 font-medium transition-colors">Loyihalarim</a>
                    <a href="contact.html" class="px-6 py-2.5 gradient-bg text-white rounded-lg hover:shadow-lg transition-all font-medium ml-4">
                        Aloqa
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="menu-btn" class="text-gray-600 hover:text-blue-600 transition-colors">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-2">
                <a href="index.html" class="block px-4 py-3 text-blue-600 bg-blue-50 rounded-lg font-medium">Asosiy</a>
                <a href="about.html" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">Men haqimda</a>
                <a href="projects.html" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">Loyihalarim</a>
                <a href="contact.html" class="block px-4 py-3 gradient-bg text-white rounded-lg text-center">Aloqa</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-20 bg-gradient-to-br from-white via-blue-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="space-y-8 animate-left">
                    <div>
                        <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold mb-6">
                            👋 Salom!
                        </span>
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-gray-900 leading-tight mb-4">
                            Men <span class="gradient-text">Azatbek</span>
                        </h1>
                        <h2 class="text-2xl md:text-3xl text-gray-600 font-light">
                            Sun'iy intellekt va raqamli texnologiyalar
                        </h2>
                    </div>
                    
                    <p class="text-lg text-gray-500 leading-relaxed">
                        Samarqandda 2-kurs talabasi. Qoraqalpog'istonda tug'ilganman. 
                        Zamonaviy texnologiyalar va dasturlashga qiziqaman.
                    </p>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="projects.html" class="px-8 py-4 gradient-bg text-white rounded-xl hover:shadow-xl transition-all transform hover:scale-105 font-semibold text-lg">
                            <i class="fas fa-code mr-2"></i>Loyihalarim
                        </a>
                        <a href="contact.html" class="px-8 py-4 border-2 border-blue-200 text-blue-600 rounded-xl hover:bg-blue-50 transition-all transform hover:scale-105 font-semibold text-lg">
                            <i class="fas fa-paper-plane mr-2"></i>Bog'lanish
                        </a>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="flex space-x-3 pt-4">
                        <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-all transform hover:scale-110">
                            <i class="fab fa-telegram-plane text-xl"></i>
                        </a>
                        <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-all transform hover:scale-110">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://github.com/azatbek-07" target="_blank" class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition-all transform hover:scale-110">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Right Image -->
                <div class="flex justify-center animate-right">
                    <div class="relative">
                        <div class="w-80 h-80 md:w-96 md:h-96 gradient-bg rounded-full flex items-center justify-center shadow-2xl">
                            <div class="text-9xl filter drop-shadow-lg">👨‍💻</div>
                        </div>
                        <!-- Floating cards -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-2xl p-4 shadow-xl">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl">🚀</span>
                                <div>
                                    <p class="text-sm font-bold text-gray-800">2-kurs</p>
                                    <p class="text-xs text-gray-500">Samarqand</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl p-4 shadow-xl">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl">💡</span>
                                <div>
                                    <p class="text-sm font-bold text-gray-800">AI & Digital</p>
                                    <p class="text-xs text-gray-500">Texnologiyalar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>