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
        
        .gradient-text {
            background: linear-gradient(135deg, #1e40af, #3b82f6, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #1d4ed8 100%);
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
        
        .project-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .project-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(30, 64, 175, 0.2);
        }
        
        .project-card:hover .project-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        .project-icon {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-blue-50">
    
    <!-- Navbar -->
    <nav class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="index.html" class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white text-xl font-bold shadow-lg">
                        AE
                    </div>
                    <span class="text-xl font-bold text-blue-900">Ermalaev</span>
                </a>
                
                <div class="hidden md:flex items-center space-x-1">
                    <a href="index.html" class="nav-link px-4 py-2 text-gray-600 hover:text-blue-600 font-medium transition-colors">Asosiy</a>
                    <a href="about.html" class="nav-link px-4 py-2 text-gray-600 hover:text-blue-600 font-medium transition-colors">Men haqimda</a>
                    <a href="projects.html" class="nav-link active px-4 py-2 text-blue-600 font-medium transition-colors">Loyihalarim</a>
                    <a href="contact.html" class="px-6 py-2.5 gradient-bg text-white rounded-lg hover:shadow-lg transition-all font-medium ml-4">Aloqa</a>
                </div>
                
                <div class="md:hidden">
                    <button id="menu-btn" class="text-gray-600 hover:text-blue-600 transition-colors">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-2">
                <a href="index.html" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">Asosiy</a>
                <a href="about.html" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">Men haqimda</a>
                <a href="projects.html" class="block px-4 py-3 text-blue-600 bg-blue-50 rounded-lg font-medium">Loyihalarim</a>
                <a href="contact.html" class="block px-4 py-3 gradient-bg text-white rounded-lg text-center">Aloqa</a>
            </div>
        </div>
    </nav>

    <!-- Projects Content -->
    <section class="pt-28 pb-20 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-20">
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                    <span class="gradient-text">Loyihalarim</span>
                </h1>
                <p class="text-xl text-gray-500 max-w-3xl mx-auto">
                    Men bajargan loyihalar va ishlanmalar
                </p>
            </div>
            
            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1: SamDU Oshxona -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg">
                    <div class="gradient-bg p-8 flex items-center justify-center">
                        <span class="project-icon text-7xl">🍽️</span>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900">SamDU Oshxona</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Web-sayt</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Samarqand Davlat Universiteti oshxonasi haqida to'liq ma'lumot beruvchi zamonaviy web-sayt
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm rounded-lg">HTML5</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm rounded-lg">CSS3</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm rounded-lg">JavaScript</span>
                        </div>
                        <div class="flex space-x-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-4 py-3 border-2 border-gray-200 text-gray-700 rounded-xl hover:border-blue-500 hover:text-blue-600 transition-all text-center font-medium">
                                <i class="fab fa-github mr-2"></i>GitHub
                            </a>
                            <a href="#" class="flex-1 px-4 py-3 gradient-bg text-white rounded-xl hover:shadow-lg transition-all text-center font-medium">
                                <i class="fas fa-eye mr-2"></i>Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2: Register & Login -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg">
                    <div class="gradient-bg p-8 flex items-center justify-center">
                        <span class="project-icon text-7xl">🔐</span>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900">Login & Register</h3>
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">Tizim</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Foydalanuvchilarni ro'yxatdan o'tkazish va tizimga kirish uchun autentifikatsiya tizimi
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm rounded-lg">HTML5</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm rounded-lg">CSS3</span>
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm rounded-lg">JS</span>
                        </div>
                        <div class="flex space-x-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-4 py-3 border-2 border-gray-200 text-gray-700 rounded-xl hover:border-blue-500 hover:text-blue-600 transition-all text-center font-medium">
                                <i class="fab fa-github mr-2"></i>GitHub
                            </a>
                            <a href="#" class="flex-1 px-4 py-3 gradient-bg text-white rounded-xl hover:shadow-lg transition-all text-center font-medium">
                                <i class="fas fa-eye mr-2"></i>Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3: Coming Soon -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg border-2 border-dashed border-gray-300">
                    <div class="bg-gray-100 p-8 flex items-center justify-center">
                        <span class="text-7xl opacity-30">🚀</span>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-400 mb-4">Yangi loyiha</h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Keyingi loyihangiz shu yerda bo'ladi. Yangi g'oyalar va texnologiyalar bilan.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-gray-100 text-gray-400 text-sm rounded-lg">???</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-400 text-sm rounded-lg">???</span>
                        </div>
                        <button disabled class="w-full px-4 py-3 bg-gray-100 text-gray-400 rounded-xl cursor-not-allowed font-medium">
                            <i class="fas fa-clock mr-2"></i>Tez kunda
                        </button>
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