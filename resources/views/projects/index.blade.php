@extends('layouts.app')

@section('title', 'Loyihalarim - Portfoliyo')

@section('content')

    <!-- Projects Content -->
    <section class="pt-24 pb-20 bg-gradient-to-br from-slate-50 via-white to-cyan-50/30 relative overflow-hidden">
        <!-- Dekorativ elementlar -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-cyan-200/30 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-200/20 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-100/10 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="mb-16 text-center lg:text-left">
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between">
                    <div>
                        <span class="inline-flex items-center px-4 py-1.5 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 text-cyan-600 text-xs font-semibold rounded-full mb-4 border border-cyan-200/30 backdrop-blur-sm">
                            <span class="w-1.5 h-1.5 bg-cyan-500 rounded-full mr-2 animate-pulse"></span>
                            <i class="fas fa-code mr-2"></i>Loyihalar
                        </span>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 mb-4">
                            <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">Loyihalarim</span>
                        </h1>
                        <p class="text-slate-500 text-lg max-w-2xl mx-auto lg:mx-0">
                            Men bajargan loyihalar va ishlanmalar. Har bir loyiha yangi tajriba va bilim manbai.
                        </p>
                    </div>
                    <div class="hidden lg:block">
                        <div class="flex items-center gap-2 text-sm text-slate-400">
                            <span class="w-12 h-px bg-gradient-to-r from-transparent to-cyan-400"></span>
                            <span>#projects</span>
                        </div>
                    </div>
                </div>
                <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mt-4 mx-auto lg:mx-0"></div>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap gap-3 mb-10 justify-center lg:justify-start">
                <button class="px-5 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold rounded-full shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 transition-all hover:-translate-y-0.5">
                    <i class="fas fa-th-list mr-2"></i>Barchasi
                </button>
                <button class="px-5 py-2 bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-600 text-sm font-medium rounded-full hover:border-cyan-400 hover:text-cyan-600 transition-all hover:-translate-y-0.5">
                    <i class="fas fa-check-circle mr-2 text-emerald-500"></i>Yakunlangan
                </button>
                <button class="px-5 py-2 bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-600 text-sm font-medium rounded-full hover:border-cyan-400 hover:text-cyan-600 transition-all hover:-translate-y-0.5">
                    <i class="fas fa-clock mr-2 text-amber-500"></i>Ishlab chiqilmoqda
                </button>
            </div>
            
            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Project 1: SamDU Oshxona -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl overflow-hidden shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-cyan-200/30 transition-all duration-500 hover:-translate-y-2">
                    <div class="relative h-48 bg-gradient-to-br from-cyan-400 to-blue-500 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDM0djItSDI0di0yaDEyek0zNiAyNHYySDI0di0yaDEyeiIvPjwvZz48L2c+PC9zdmc+')] opacity-20"></div>
                        <div class="relative z-10 w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30 shadow-2xl">
                            <i class="fas fa-utensils text-4xl text-white"></i>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center px-3 py-1 bg-emerald-500/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full shadow-lg">
                                <span class="w-1.5 h-1.5 bg-white rounded-full mr-1.5 animate-pulse"></span>
                                Yakunlangan
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-cyan-600 transition-colors">SamDU Oshxona</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Samarqand Davlat Universiteti oshxonasi haqida to'liq ma'lumot beruvchi zamonaviy web-sayt. 
                            Menyu, narxlar, ish vaqti va kontakt ma'lumotlari mavjud.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-5">
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">HTML5</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">CSS3</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">JavaScript</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">Responsive</span>
                        </div>
                        
                        <div class="flex gap-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-xl hover:bg-cyan-50 hover:text-cyan-600 hover:border-cyan-200 transition-all text-center border border-transparent hover:border-cyan-200">
                                <i class="fab fa-github mr-2"></i>Kod
                            </a>
                            <a href="#" class="flex-1 px-4 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold rounded-xl hover:shadow-lg hover:shadow-cyan-500/30 transition-all hover:-translate-y-0.5 text-center">
                                <i class="fas fa-external-link-alt mr-2"></i>Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2: Register & Login -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl overflow-hidden shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-cyan-200/30 transition-all duration-500 hover:-translate-y-2">
                    <div class="relative h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDM0djItSDI0di0yaDEyek0zNiAyNHYySDI0di0yaDEyeiIvPjwvZz48L2c+PC9zdmc+')] opacity-20"></div>
                        <div class="relative z-10 w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30 shadow-2xl">
                            <i class="fas fa-lock text-4xl text-white"></i>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center px-3 py-1 bg-emerald-500/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full shadow-lg">
                                <span class="w-1.5 h-1.5 bg-white rounded-full mr-1.5 animate-pulse"></span>
                                Yakunlangan
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-cyan-600 transition-colors">Register & Login Tizimi</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Foydalanuvchilarni ro'yxatdan o'tkazish va tizimga kirish uchun to'liq autentifikatsiya tizimi. 
                            Validatsiya, xavfsizlik tekshiruvlari va zamonaviy UI bilan.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-5">
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">HTML5</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">CSS3</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">JavaScript</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">PHP</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">MySQL</span>
                        </div>
                        
                        <div class="flex gap-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-xl hover:bg-cyan-50 hover:text-cyan-600 hover:border-cyan-200 transition-all text-center border border-transparent hover:border-cyan-200">
                                <i class="fab fa-github mr-2"></i>Kod
                            </a>
                            <a href="#" class="flex-1 px-4 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold rounded-xl hover:shadow-lg hover:shadow-cyan-500/30 transition-all hover:-translate-y-0.5 text-center">
                                <i class="fas fa-external-link-alt mr-2"></i>Demo
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3: E-commerce Platform -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl overflow-hidden shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-cyan-200/30 transition-all duration-500 hover:-translate-y-2">
                    <div class="relative h-48 bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDM0djItSDI0di0yaDEyek0zNiAyNHYySDI0di0yaDEyeiIvPjwvZz48L2c+PC9zdmc+')] opacity-20"></div>
                        <div class="relative z-10 w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30 shadow-2xl">
                            <i class="fas fa-shopping-cart text-4xl text-white"></i>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center px-3 py-1 bg-amber-500/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full shadow-lg">
                                <i class="fas fa-spinner fa-spin mr-1.5"></i>
                                Ishlab chiqilmoqda
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-cyan-600 transition-colors">E-commerce Platform</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            To'liq funksional onlayn-do'kon platformasi. Mahsulotlar katalogi, savat, buyurtma 
                            qilish va to'lov tizimi. Laravel va React asosida qurilmoqda.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-5">
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">React.js</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">Laravel</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">Tailwind CSS</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">REST API</span>
                        </div>
                        
                        <div class="flex gap-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-xl hover:bg-cyan-50 hover:text-cyan-600 hover:border-cyan-200 transition-all text-center border border-transparent hover:border-cyan-200">
                                <i class="fab fa-github mr-2"></i>Kod
                            </a>
                            <a href="#" class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-500 text-sm font-medium rounded-xl cursor-not-allowed text-center border border-slate-200">
                                <i class="fas fa-clock mr-2"></i>Tez orada
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 4: AI Chat Assistant -->
                <div class="group bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl overflow-hidden shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-cyan-200/30 transition-all duration-500 hover:-translate-y-2">
                    <div class="relative h-48 bg-gradient-to-br from-rose-400 to-pink-500 flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDM0djItSDI0di0yaDEyek0zNiAyNHYySDI0di0yaDEyeiIvPjwvZz48L2c+PC9zdmc+')] opacity-20"></div>
                        <div class="relative z-10 w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30 shadow-2xl">
                            <i class="fas fa-robot text-4xl text-white"></i>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center px-3 py-1 bg-amber-500/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full shadow-lg">
                                <i class="fas fa-spinner fa-spin mr-1.5"></i>
                                Ishlab chiqilmoqda
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-cyan-600 transition-colors">AI Chat Assistant</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Sun'iy intellekt asosida ishlovchi chat assistant. Foydalanuvchilarga savollarga 
                            javob berish, tavsiyalar va yordam berish uchun mo'ljallangan.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-5">
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">Python</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">TensorFlow</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">NLP</span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">React.js</span>
                        </div>
                        
                        <div class="flex gap-3">
                            <a href="https://github.com/azatbek-07" target="_blank" class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-xl hover:bg-cyan-50 hover:text-cyan-600 hover:border-cyan-200 transition-all text-center border border-transparent hover:border-cyan-200">
                                <i class="fab fa-github mr-2"></i>Kod
                            </a>
                            <a href="#" class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-500 text-sm font-medium rounded-xl cursor-not-allowed text-center border border-slate-200">
                                <i class="fas fa-clock mr-2"></i>Tez orada
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 text-center shadow-xl shadow-slate-200/50">
                    <div class="text-3xl font-extrabold text-cyan-600">4</div>
                    <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Jami loyihalar</p>
                </div>
                <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 text-center shadow-xl shadow-slate-200/50">
                    <div class="text-3xl font-extrabold text-emerald-500">2</div>
                    <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Yakunlangan</p>
                </div>
                <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 text-center shadow-xl shadow-slate-200/50">
                    <div class="text-3xl font-extrabold text-amber-500">2</div>
                    <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Ishlab chiqilmoqda</p>
                </div>
                <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 text-center shadow-xl shadow-slate-200/50">
                    <div class="text-3xl font-extrabold text-cyan-600">7</div>
                    <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">Texnologiyalar</p>
                </div>
            </div>
            
            <!-- Future Projects -->
            <div class="mt-10">
                <div class="group border-2 border-dashed border-slate-300/50 hover:border-cyan-400 rounded-2xl p-12 text-center bg-white/40 backdrop-blur-sm hover:bg-white/60 transition-all duration-300 cursor-pointer">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-100 to-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-plus text-2xl text-cyan-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-slate-400 group-hover:text-cyan-600 transition-colors">Yangi loyiha qo'shish</h3>
                    <p class="text-sm text-slate-400 max-w-md mx-auto mt-1">
                        Keyingi loyihangiz shu yerda bo'ladi. Yangi g'oyalar va texnologiyalar bilan yanada kuchli portfolio.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection