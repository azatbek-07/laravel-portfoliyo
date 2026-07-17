@extends('layouts.app')

@section('title', 'Bosh sahifa - Portfoliyo')

@section('content')


    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-16 bg-grid-cyan relative overflow-hidden">
        <!-- Dekorativ cyan blobs -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-navy/5 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 w-full relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div>
                        <span class="badge-cyan">
                            <i class="fas fa-code mr-2"></i>Full Stack Developer
                        </span>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-extrabold text-navy leading-tight glow-text">
                        Azatbek<br>
                        <span class="text-gradient-cyan">Ermalaev</span>
                    </h1>

                    <p class="text-lg text-gray-600 leading-relaxed max-w-lg">
                        Sun'iy intellekt va raqamli texnologiyalar fakulteti talabasi.
                        Samarqandda 2-kursda o'qiyman. Asli Qoraqalpog'istondanman.
                    </p>

                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                        <span class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-1.5 text-cyan"></i>
                            Samarqand, O'zbekiston
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-3 pt-2">
                        <a href="/projects" class="px-6 py-3 btn-cyan text-sm font-semibold rounded-lg hover-effect">
                            Loyihalarim
                            <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                        <a href="/about" class="px-6 py-3 btn-outline-cyan text-sm font-semibold rounded-lg hover-effect">
                            Men haqimda
                        </a>
                    </div>

                    <div class="flex items-center space-x-4 pt-4">
                        <a href="https://t.me/A_z_a_t_b_e_k" target="_blank" class="icon-box-cyan w-10 h-10 bg-white rounded-lg flex items-center justify-center text-gray-500">
                            <i class="fab fa-telegram-plane text-base"></i>
                        </a>
                        <a href="https://instagram.com/ermalaev_azatbek" target="_blank" class="icon-box-cyan w-10 h-10 bg-white rounded-lg flex items-center justify-center text-gray-500">
                            <i class="fab fa-instagram text-base"></i>
                        </a>
                        <a href="https://github.com/azatbek-07" target="_blank" class="icon-box-cyan w-10 h-10 bg-white rounded-lg flex items-center justify-center text-gray-500">
                            <i class="fab fa-github text-base"></i>
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="relative">
                        <div class="w-full h-96 bg-gradient-to-br from-cyan-50 to-navy/5 rounded-2xl border-2 border-cyan/20 flex items-center justify-center card-cyan">
                            <div class="text-center">
                                <div class="text-7xl font-extrabold">
                                    <span class="text-navy">A</span><span class="text-cyan">E</span>
                                </div>
                                <div class="divider-cyan w-16 mx-auto my-3"></div>
                                <p class="text-sm font-semibold text-cyan">Full Stack Developer</p>
                            </div>
                        </div>

                        <!-- Dekorativ kartochkalar -->
                        <div class="absolute -top-4 -right-4 bg-white border-2 border-cyan/20 rounded-xl px-4 py-3 shadow-lg">
                            <p class="text-xs text-gray-500 font-medium">Talaba</p>
                            <p class="text-lg font-extrabold text-navy">2-kurs</p>
                        </div>

                        <div class="absolute -bottom-4 -left-4 bg-white border-2 border-cyan/20 rounded-xl px-4 py-3 shadow-lg">
                            <p class="text-xs text-gray-500 font-medium">Universitet</p>
                            <p class="text-sm font-bold text-navy">SamDU</p>
                        </div>

                        <!-- Dekorativ cyan nuqta -->
                        <div class="absolute top-1/2 -right-6 w-3 h-3 bg-cyan rounded-full animate-pulse"></div>
                        <div class="absolute top-1/3 -left-6 w-2 h-2 bg-navy rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection