@extends('layouts.app')

@section('title', 'About sahifa - Portfoliyo')

@section('content')

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
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">Shaxsiy ma'lumotlar
                        </h3>
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
                            <a href="https://t.me/A_z_a_t_b_e_k" target="_blank"
                                class="flex items-center space-x-2 text-sm text-cyan/80 hover:text-white transition-colors">
                                <i class="fab fa-telegram-plane"></i>
                                <span>@A_z_a_t_b_e_k</span>
                            </a>
                            <a href="https://instagram.com/ermalaev_azatbek" target="_blank"
                                class="flex items-center space-x-2 text-sm text-cyan/80 hover:text-white transition-colors">
                                <i class="fab fa-instagram"></i>
                                <span>ermalaev_azatbek</span>
                            </a>
                            <a href="https://github.com/azatbek-07" target="_blank"
                                class="flex items-center space-x-2 text-sm text-cyan/80 hover:text-white transition-colors">
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
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-6">Frontend ko'nikmalar
                        </h3>
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
                        <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-6">Backend ko'nikmalar
                        </h3>
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
                            <div
                                class="bg-cyan-light rounded-xl p-4 text-center hover:bg-cyan/20 transition-colors border border-cyan/10">
                                <div class="text-3xl mb-2">🤖</div>
                                <h4 class="text-sm font-semibold text-navy">Sun'iy Intellekt</h4>
                                <p class="text-xs text-gray-500 mt-1">AI va raqamli texnologiyalar</p>
                            </div>
                            <div
                                class="bg-cyan-light rounded-xl p-4 text-center hover:bg-cyan/20 transition-colors border border-cyan/10">
                                <div class="text-3xl mb-2">💻</div>
                                <h4 class="text-sm font-semibold text-navy">Full Stack</h4>
                                <p class="text-xs text-gray-500 mt-1">Frontend + Backend</p>
                            </div>
                            <div
                                class="bg-cyan-light rounded-xl p-4 text-center hover:bg-cyan/20 transition-colors border border-cyan/10">
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
                                    <p class="text-xs text-gray-500">Sun'iy intellekt va raqamli texnologiyalar fakulteti
                                    </p>
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

@endsection