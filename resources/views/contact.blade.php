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
        
        .contact-card {
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(30, 64, 175, 0.15);
        }
        
        .input-field {
            transition: all 0.3s ease;
        }
        
        .input-field:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(30, 64, 175, 0.1);
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
                    <a href="projects.html" class="nav-link px-4 py-2 text-gray-600 hover:text-blue-600 font-medium transition-colors">Loyihalarim</a>
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
                <a href="projects.html" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">Loyihalarim</a>
                <a href="contact.html" class="block px-4 py-3 text-blue-600 bg-blue-50 rounded-lg font-medium">Aloqa</a>
            </div>
        </div>
    </nav>

    <!-- Contact Content -->
    <section class="pt-28 pb-20 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-20">
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                    <span class="gradient-text">Aloqa</span>
                </h1>
                <p class="text-xl text-gray-500 max-w-3xl mx-auto">
                    Men bilan bog'lanmoqchi bo'lsangiz, quyidagi manzillar orqali murojaat qiling
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <!-- Contact Cards -->
                <div class="space-y-6">
                    <!-- Telegram -->
                    <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="contact-card bg-white rounded-2xl p-6 shadow-lg flex items-center space-x-4 border-2 border-transparent hover:border-blue-200">
                        <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                            <i class="fab fa-telegram-plane"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-500">Telegram</p>
                            <p class="text-lg font-bold text-gray-900">@A_z_a_t_b_e_k</p>
                            <p class="text-sm text-blue-600">Xabar yuborish →</p>
                        </div>
                    </a>
                    
                    <!-- Instagram -->
                    <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="contact-card bg-white rounded-2xl p-6 shadow-lg flex items-center space-x-4 border-2 border-transparent hover:border-pink-200">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-500">Instagram</p>
                            <p class="text-lg font-bold text-gray-900">ermalaev_azatbek</p>
                            <p class="text-sm text-pink-600">Profilni ko'rish →</p>
                        </div>
                    </a>
                    
                    <!-- GitHub -->
                    <a href="https://github.com/azatbek-07" target="_blank" class="contact-card bg-white rounded-2xl p-6 shadow-lg flex items-center space-x-4 border-2 border-transparent hover:border-gray-300">
                        <div class="w-16 h-16 bg-gray-900 rounded-2xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-500">GitHub</p>
                            <p class="text-lg font-bold text-gray-900">azatbek-07</p>
                            <p class="text-sm text-gray-600">Kodlarni ko'rish →</p>
                        </div>
                    </a>
                    
                    <!-- Email -->
                    <div class="contact-card bg-white rounded-2xl p-6 shadow-lg flex items-center space-x-4 border-2 border-transparent hover:border-blue-200">
                        <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center text-white text-2xl flex-shrink-0">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="text-lg font-bold text-gray-900">azatbek@example.com</p>
                            <p class="text-sm text-blue-600">Email yuborish →</p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="bg-white rounded-3xl p-8 shadow-xl">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center">
                        <span class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white text-xl mr-4">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        Xabar yuborish
                    </h2>
                    
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ismingiz</label>
                            <input type="text" placeholder="Ismingizni kiriting" class="input-field w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" placeholder="Email manzilingiz" class="input-field w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Xabar</label>
                            <textarea rows="4" placeholder="Xabaringizni yozing..." class="input-field w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all resize-none"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full px-6 py-4 gradient-bg text-white rounded-xl hover:shadow-xl transition-all transform hover:scale-105 font-semibold text-lg">
                            <i class="fas fa-paper-plane mr-2"></i>Yuborish
                        </button>
                    </form>
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