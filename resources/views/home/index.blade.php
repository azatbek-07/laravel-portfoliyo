@extends('layouts.app')

@section('title', 'Bosh sahifa - Portfoliyo')

@section('content')

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-16 bg-gradient-to-br from-slate-50 via-white to-cyan-50/30 relative overflow-hidden">
        <!-- Dekorativ blobs -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-cyan-200/30 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-200/20 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-100/10 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div>
                        <span class="inline-flex items-center px-4 py-1.5 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 text-cyan-600 text-xs font-semibold rounded-full border border-cyan-200/30 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
                            </svg>
                            Full Stack Developer
                        </span>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-extrabold text-slate-800 leading-tight">
                        Azatbek<br>
                        <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">Ermalaev</span>
                    </h1>

                    <p class="text-lg text-slate-600 leading-relaxed max-w-lg">
                        Sun'iy intellekt va raqamli texnologiyalar fakulteti talabasi.
                        Samarqandda 2-kursda o'qiyman. Asli Qoraqalpog'istondanman.
                    </p>

                    <div class="flex items-center space-x-4 text-sm text-slate-500">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1.5 text-cyan-500">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                            </svg>
                            Samarqand, O'zbekiston
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-3 pt-2">
                        <a href="/projects" class="px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold rounded-xl hover:shadow-lg hover:shadow-cyan-500/30 transition-all hover:-translate-y-0.5 inline-flex items-center">
                            Loyihalarim
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ml-2">
                                <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="/about" class="px-6 py-3 bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-700 text-sm font-semibold rounded-xl hover:border-cyan-400 hover:text-cyan-600 hover:shadow-lg transition-all hover:-translate-y-0.5 inline-flex items-center">
                            Men haqimda
                        </a>
                    </div>

                    <div class="flex items-center space-x-4 pt-4">
                        <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="w-11 h-11 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-xl flex items-center justify-center text-slate-500 hover:border-cyan-400 hover:text-cyan-600 hover:shadow-lg hover:-translate-y-0.5 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4Z"/>
                            </svg>
                        </a>
                        <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="w-11 h-11 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-xl flex items-center justify-center text-slate-500 hover:border-pink-400 hover:text-pink-600 hover:shadow-lg hover:-translate-y-0.5 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                            </svg>
                        </a>
                        <a href="https://github.com/azatbek-07" target="_blank" class="w-11 h-11 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-xl flex items-center justify-center text-slate-500 hover:border-slate-400 hover:text-slate-800 hover:shadow-lg hover:-translate-y-0.5 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="relative">
                        <div class="w-full h-96 bg-gradient-to-br from-cyan-50 to-blue-50/50 rounded-2xl border border-cyan-200/30 flex items-center justify-center shadow-2xl shadow-cyan-100/30 relative overflow-hidden">
                            <!-- Background pattern -->
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwNmI2ZDQiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDM0djItSDI0di0yaDEyek0zNiAyNHYySDI0di0yaDEyeiIvPjwvZz48L2c+PC9zdmc+')] opacity-50"></div>
                            <div class="relative z-10 text-center">
                                <div class="text-8xl font-extrabold">
                                    <span class="text-slate-800">A</span><span class="text-cyan-500">E</span>
                                </div>
                                <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mx-auto my-4"></div>
                                <p class="text-sm font-semibold text-cyan-600">Full Stack Developer</p>
                                <div class="flex justify-center gap-3 mt-4">
                                    <span class="px-3 py-1 bg-white/80 backdrop-blur-sm rounded-lg text-xs font-medium text-slate-600 border border-slate-200/60">PHP</span>
                                    <span class="px-3 py-1 bg-white/80 backdrop-blur-sm rounded-lg text-xs font-medium text-slate-600 border border-slate-200/60">Laravel</span>
                                    <span class="px-3 py-1 bg-white/80 backdrop-blur-sm rounded-lg text-xs font-medium text-slate-600 border border-slate-200/60">React</span>
                                </div>
                            </div>
                            <!-- Gradient overlay -->
                            <div class="absolute -top-20 -right-20 w-40 h-40 bg-cyan-200/20 rounded-full blur-2xl"></div>
                            <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-blue-200/20 rounded-full blur-2xl"></div>
                        </div>

                        <!-- Dekorativ kartochkalar -->
                        <div class="absolute -top-4 -right-4 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-xl px-4 py-3 shadow-xl shadow-slate-200/50">
                            <p class="text-xs text-slate-400 font-medium">Talaba</p>
                            <p class="text-lg font-extrabold text-slate-800">2-kurs</p>
                        </div>

                        <div class="absolute -bottom-4 -left-4 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-xl px-4 py-3 shadow-xl shadow-slate-200/50">
                            <p class="text-xs text-slate-400 font-medium">Universitet</p>
                            <p class="text-sm font-bold text-slate-800">SamDU</p>
                        </div>

                        <!-- Dekorativ nuqtalar -->
                        <div class="absolute top-1/2 -right-6 w-3 h-3 bg-cyan-500 rounded-full animate-pulse shadow-lg shadow-cyan-500/50"></div>
                        <div class="absolute top-1/3 -left-6 w-2.5 h-2.5 bg-blue-500 rounded-full shadow-lg shadow-blue-500/50"></div>
                        <div class="absolute bottom-1/3 -right-6 w-2 h-2 bg-emerald-400 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection