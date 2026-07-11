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
        
        .timeline-item {
            position: relative;
            padding-left: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: #3b82f6;
            border-radius: 50%;
            border: 3px solid #dbeafe;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 1.5rem;
            bottom: -1rem;
            width: 2px;
            background: #dbeafe;
        }
        
        .timeline-item:last-child::after {
            display: none;
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
                    <a href="about.html" class="nav-link active px-4 py-2 text-blue-600 font-medium transition-colors">Men haqimda</a>
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
                <a href="about.html" class="block px-4 py-3 text-blue-600 bg-blue-50 rounded-lg font-medium">Men haqimda</a>
                <a href="projects.html" class="block px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">Loyihalarim</a>
                <a href="contact.html" class="block px-4 py-3 gradient-bg text-white rounded-lg text-center">Aloqa</a>
            </div>
        </div>
    </nav>

    <!-- About Content -->
    <section class="pt-28 pb-20 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-20">
                <h1 class="text-5xl md:text-6xl font-black text-gray-900 mb-6">
                    Men <span class="gradient-text">Haqimda</span>
                </h1>
                <p class="text-xl text-gray-500 max-w-3xl mx-auto">
                    Kimligim, qayerdan ekanligim va nimalar bilan shug'ullanishim haqida qisqacha ma'lumot
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Left Column -->
                <div class="space-y-8">
                    <!-- Personal Info -->
                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white text-2xl mr-4">👤</span>
                            Shaxsiy ma'lumotlar
                        </h2>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-500">Ism</span>
                                <span class="font-semibold text-gray-900">Azatbek Ermalaev</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-500">Yashash joyi</span>
                                <span class="font-semibold text-gray-900">Samarqand</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-100">
                                <span class="text-gray-500">Tug'ilgan joy</span>
                                <span class="font-semibold text-gray-900">Qoraqalpog'iston</span>
                            </div>
                            <div class="flex justify-between items-center py-3">
                                <span class="text-gray-500">Universitet</span>
                                <span class="font-semibold text-gray-900">SamDU</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Education -->
                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white text-2xl mr-4">🎓</span>
                            Ta'lim
                        </h2>
                        <div class="space-y-6">
                            <div class="timeline-item">
                                <h3 class="text-lg font-bold text-gray-900">Sun'iy intellekt va raqamli texnologiyalar</h3>
                                <p class="text-blue-600 font-medium">2023 - Hozirgacha</p>
                                <p class="text-gray-500 mt-1">Samarqand Davlat Universiteti</p>
                                <p class="text-gray-400 text-sm">2-kurs talabasi</p>
                            </div>
                            <div class="timeline-item">
                                <h3 class="text-lg font-bold text-gray-900">O'rta maktab</h3>
                                <p class="text-blue-600 font-medium">Qoraqalpog'iston</p>
                                <p class="text-gray-500 mt-1">Umumiy o'rta ta'lim</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column -->
                <div class="space-y-8">
                    <!-- Interests -->
                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white text-2xl mr-4">💡</span>
                            Qiziqishlarim
                        </h2>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4 p-4 bg-blue-50 rounded-2xl">
                                <div class="text-3xl">🤖</div>
                                <div>
                                    <h3 class="font-bold text-gray-900">Sun'iy Intellekt</h3>
                                    <p class="text-gray-600 text-sm">AI texnologiyalari, Machine Learning va Deep Learning</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-4 bg-blue-50 rounded-2xl">
                                <div class="text-3xl">💻</div>
                                <div>
                                    <h3 class="font-bold text-gray-900">Web Dasturlash</h3>
                                    <p class="text-gray-600 text-sm">Frontend va Backend texnologiyalar</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-4 bg-blue-50 rounded-2xl">
                                <div class="text-3xl">📱</div>
                                <div>
                                    <h3 class="font-bold text-gray-900">Raqamli Texnologiyalar</h3>
                                    <p class="text-gray-600 text-sm">Innovatsion yechimlar va raqamli transformatsiya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Skills -->
                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center text-white text-2xl mr-4">⚡</span>
                            Ko'nikmalar
                        </h2>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-700 font-medium">HTML/CSS</span>
                                    <span class="text-blue-600 font-semibold">85%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full gradient-bg rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-700 font-medium">JavaScript</span>
                                    <span class="text-blue-600 font-semibold">70%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full gradient-bg rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-700 font-medium">Python</span>
                                    <span class="text-blue-600 font-semibold">60%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full gradient-bg rounded-full" style="width: 60%"></div>
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