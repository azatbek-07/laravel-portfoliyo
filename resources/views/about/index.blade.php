@extends('layouts.app')

@section('title', 'About sahifa - Portfoliyo')

@section('content')

    <!-- About Content -->
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user mr-1">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                            </svg>
                            Haqimda
                        </span>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 mb-4">
                            Men <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">haqimda</span>
                        </h1>
                        <p class="text-slate-500 text-lg max-w-2xl mx-auto lg:mx-0">
                            Kimligim, qayerdan ekanligim va qanday texnologiyalar bilan ishlashim haqida
                        </p>
                    </div>
                   
                </div>
                <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mt-4 mx-auto lg:mx-0"></div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Left Column - Personal Info -->
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-shadow duration-300">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-4 shadow-lg shadow-cyan-500/25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                            </svg>
                        </div>
                        <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-4">Shaxsiy ma'lumotlar</h3>
                        <div class="space-y-4">
                            <div class="group">
                                <span class="text-xs text-slate-400 flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-cyan-500">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                                    </svg>
                                    Ism
                                </span>
                                <p class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">Azatbek Ermalaev</p>
                            </div>
                            <div class="group">
                                <span class="text-xs text-slate-400 flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-cyan-500">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    Yashash joyi
                                </span>
                                <p class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">Samarqand, O'zbekiston</p>
                            </div>
                            <div class="group">
                                <span class="text-xs text-slate-400 flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flag text-cyan-500">
                                        <path d="M4 21V3"/><path d="M4 7h12l-1.5-3L16 7h4v7h-4l-1.5 3L12 14H4"/>
                                    </svg>
                                    Tug'ilgan joy
                                </span>
                                <p class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">Qoraqalpog'iston</p>
                            </div>
                            <div class="group">
                                <span class="text-xs text-slate-400 flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-2 text-cyan-500">
                                        <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12h4"/><path d="M6 16h4"/><path d="M6 8h4"/><path d="M14 8h4"/><path d="M14 12h4"/><path d="M14 16h4"/>
                                    </svg>
                                    Universitet
                                </span>
                                <p class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">Samarqand Davlat Universiteti</p>
                            </div>
                            <div class="group">
                                <span class="text-xs text-slate-400 flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain text-cyan-500">
                                        <path d="M12 4a4 4 0 0 1 3.5 6A4 4 0 0 1 12 18a4 4 0 0 1-3.5-6A4 4 0 0 1 12 4Z"/><path d="M12 2v2"/><path d="M12 18v2"/><path d="M17.5 8.5 19 7"/><path d="M5 7l1.5 1.5"/><path d="M17.5 15.5 19 17"/><path d="M5 17l1.5-1.5"/><path d="M22 12h-2"/><path d="M4 12H2"/>
                                    </svg>
                                    Fakultet
                                </span>
                                <p class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">Sun'iy intellekt va raqamli texnologiyalar</p>
                            </div>
                            <div class="group">
                                <span class="text-xs text-slate-400 flex items-center gap-1.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open text-cyan-500">
                                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                    </svg>
                                    Kurs
                                </span>
                                <p class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">2-kurs</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="relative overflow-hidden bg-gradient-to-br from-cyan-600 to-blue-700 rounded-2xl p-6 text-white shadow-xl shadow-cyan-500/25">
                        <div class="absolute -top-20 -right-20 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
                        <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
                        <div class="relative z-10">
                            <h3 class="text-xs font-semibold text-cyan-200 uppercase tracking-wider mb-4 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send">
                                    <path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4Z"/>
                                </svg>
                                Bog'lanish
                            </h3>
                            <div class="space-y-3">
                                <a href="https://t.me/A_z_a_t_b_e_k" target="_blank"
                                    class="flex items-center space-x-3 text-sm text-cyan-100 hover:text-white transition-all hover:translate-x-1 group">
                                    <span class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-white/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send">
                                            <path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4Z"/>
                                        </svg>
                                    </span>
                                    <span>@A_z_a_t_b_e_k</span>
                                </a>
                                <a href="https://instagram.com/ermalaev_azatbek" target="_blank"
                                    class="flex items-center space-x-3 text-sm text-cyan-100 hover:text-white transition-all hover:translate-x-1 group">
                                    <span class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-white/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram">
                                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                        </svg>
                                    </span>
                                    <span>ermalaev_azatbek</span>
                                </a>
                                <a href="https://github.com/azatbek-07" target="_blank"
                                    class="flex items-center space-x-3 text-sm text-cyan-100 hover:text-white transition-all hover:translate-x-1 group">
                                    <span class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center group-hover:bg-white/20 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github">
                                            <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/>
                                        </svg>
                                    </span>
                                    <span>azatbek-07</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Skills & Interests -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Bio -->
                    <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-shadow duration-300 relative overflow-hidden">
                        <div class="absolute -top-12 -right-12 w-32 h-32 bg-cyan-100/30 rounded-full blur-2xl"></div>
                        <div class="relative">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-4 shadow-lg shadow-cyan-500/25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote">
                                    <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 2v7c0 1.25.75 2 2 2h2c0 3-2 5-3 6"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2h-4c-1.25 0-2 .75-2 2v7c0 1.25.75 2 2 2h2c0 3-2 5-3 6"/>
                                </svg>
                            </div>
                            <p class="text-slate-600 leading-relaxed">
                                Sun'iy intellekt va raqamli texnologiyalar fakultetida 2-kurs talabasiman.
                                Full Stack dasturchi bo'lishni maqsad qilganman. Frontend va Backend texnologiyalarini
                                o'rganyapman. PHP, C++, JavaScript, React, HTML, CSS va Laravel frameworkida ishlayman.
                                Kelajakda katta loyihalarda ishlash va o'z startapimni yaratish niyatim bor.
                            </p>
                        </div>
                    </div>

                    <!-- Frontend Skills -->
                    <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-laptop">
                                    <path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9"/><path d="M4 18h16"/><path d="M12 11v4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Frontend</h3>
                                <p class="text-sm font-medium text-slate-700">Ko'nikmalar</p>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">HTML / CSS</span>
                                    <span class="text-sm font-bold text-cyan-600">90%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full transition-all duration-1000" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">JavaScript</span>
                                    <span class="text-sm font-bold text-cyan-600">80%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full transition-all duration-1000" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">React.js</span>
                                    <span class="text-sm font-bold text-cyan-600">70%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full transition-all duration-1000" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">Tailwind CSS</span>
                                    <span class="text-sm font-bold text-cyan-600">85%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full transition-all duration-1000" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backend Skills -->
                    <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server">
                                    <rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6.01" y1="6" y2="6"/><line x1="6" x2="6.01" y1="18" y2="18"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Backend</h3>
                                <p class="text-sm font-medium text-slate-700">Ko'nikmalar</p>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">PHP</span>
                                    <span class="text-sm font-bold text-cyan-600">75%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full transition-all duration-1000" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">Laravel</span>
                                    <span class="text-sm font-bold text-cyan-600">70%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full transition-all duration-1000" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">C++</span>
                                    <span class="text-sm font-bold text-cyan-600">65%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full transition-all duration-1000" style="width: 65%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">Git / GitHub</span>
                                    <span class="text-sm font-bold text-cyan-600">70%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full transition-all duration-1000" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Interests -->
                        <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-shadow duration-300">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb">
                                        <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6"/><path d="M10 22h4"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Qiziqishlar</h3>
                                    <p class="text-sm font-medium text-slate-700">Mening hobbiylarim</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-3">
                                <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl p-4 hover:from-cyan-100 hover:to-blue-100 transition-all duration-300 border border-cyan-200/30 group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <span class="text-2xl">🤖</span>
                                        <div>
                                            <h4 class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">Sun'iy Intellekt</h4>
                                            <p class="text-xs text-slate-500">AI va raqamli texnologiyalar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl p-4 hover:from-cyan-100 hover:to-blue-100 transition-all duration-300 border border-cyan-200/30 group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <span class="text-2xl">💻</span>
                                        <div>
                                            <h4 class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">Full Stack</h4>
                                            <p class="text-xs text-slate-500">Frontend + Backend</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl p-4 hover:from-cyan-100 hover:to-blue-100 transition-all duration-300 border border-cyan-200/30 group cursor-pointer">
                                    <div class="flex items-center gap-3">
                                        <span class="text-2xl">🚀</span>
                                        <div>
                                            <h4 class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors">Startup</h4>
                                            <p class="text-xs text-slate-500">O'z loyihalarim</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Education Timeline -->
                        <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-shadow duration-300">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap">
                                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Ta'lim</h3>
                                    <p class="text-sm font-medium text-slate-700">Mening yo'lim</p>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="relative pl-6 border-l-2 border-cyan-400 pb-4">
                                    <div class="absolute -left-1.5 top-0 w-3 h-3 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full shadow-lg shadow-cyan-500/25"></div>
                                    <h4 class="text-sm font-semibold text-slate-800">Samarqand Davlat Universiteti</h4>
                                    <p class="text-xs text-slate-500">Sun'iy intellekt va raqamli texnologiyalar fakulteti</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span class="text-xs font-medium text-cyan-600 bg-cyan-50 px-2 py-0.5 rounded">2025 - Hozirgacha</span>
                                        <span class="text-xs text-slate-400">• 2-kurs</span>
                                    </div>
                                </div>
                                <div class="relative pl-6 border-l-2 border-slate-200 pb-4">
                                    <div class="absolute -left-1.5 top-0 w-3 h-3 bg-slate-300 rounded-full"></div>
                                    <h4 class="text-sm font-semibold text-slate-800">O'rta maktab</h4>
                                    <p class="text-xs text-slate-500">Qoraqalpog'iston</p>
                                    <div class="flex items-center gap-2 mt-1">
                                        <span class="text-xs text-slate-400">Umumiy o'rta ta'lim</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection