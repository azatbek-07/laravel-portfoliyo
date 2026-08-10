@extends('layouts.app')

@section('title', 'Contact Sahifa - Portfoliyo')

@section('content')
    <!-- Contact Content -->
    <section class="pt-24 pb-20 bg-gradient-to-br from-slate-50 via-white to-cyan-50/30 min-h-screen relative overflow-hidden">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="mr-1">
                                <rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                            Bog'lanish
                        </span>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 mb-4">
                            <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">Aloqa</span>
                        </h1>
                        <p class="text-slate-500 text-lg max-w-2xl mx-auto lg:mx-0">
                            Men bilan bog'lanmoqchi bo'lsangiz, quyidagi manzillar orqali murojaat qiling.
                            Loyihalar, hamkorlik yoki savollar uchun doim ochiqman.
                        </p>
                    </div>
                    
                </div>
                <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mt-4 mx-auto lg:mx-0"></div>
            </div>

            <div class="grid lg:grid-cols-5 gap-8">
                <!-- Contact Links - Left Side -->
                <div class="lg:col-span-2 space-y-4">
                    <!-- Telegram -->
                    <a href="https://t.me/A_z_a_t_b_e_k" target="_blank"
                        class="group flex items-center space-x-4 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-5 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-cyan-200/30 hover:border-cyan-300 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/25 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4Z"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Telegram</p>
                            <p class="text-sm font-semibold text-slate-800 group-hover:text-cyan-600 transition-colors truncate">@A_z_a_t_b_e_k</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cyan-500 group-hover:translate-x-1 transition-transform">
                            <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://instagram.com/ermalaev_azatbek" target="_blank"
                        class="group flex items-center space-x-4 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-5 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-pink-200/30 hover:border-pink-300 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center shadow-lg shadow-pink-500/25 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Instagram</p>
                            <p class="text-sm font-semibold text-slate-800 group-hover:text-pink-600 transition-colors truncate">ermalaev_azatbek</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-500 group-hover:translate-x-1 transition-transform">
                            <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>

                    <!-- GitHub -->
                    <a href="https://github.com/azatbek-07" target="_blank"
                        class="group flex items-center space-x-4 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-5 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-slate-300/30 hover:border-slate-400 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-slate-700 to-slate-900 rounded-xl flex items-center justify-center shadow-lg shadow-slate-700/25 group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-slate-400 uppercase tracking-wider">GitHub</p>
                            <p class="text-sm font-semibold text-slate-800 group-hover:text-slate-900 transition-colors truncate">azatbek-07</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400 group-hover:translate-x-1 transition-transform">
                            <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>

                    <!-- Location -->
                    <div class="flex items-center space-x-4 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-5 shadow-xl shadow-slate-200/50 cursor-default">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-xl flex items-center justify-center shadow-lg shadow-emerald-500/25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Manzil</p>
                            <p class="text-sm font-semibold text-slate-800">Samarqand, O'zbekiston</p>
                        </div>
                    </div>

                    <!-- University -->
                    <div class="flex items-center space-x-4 bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-5 shadow-xl shadow-slate-200/50 cursor-default">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl flex items-center justify-center shadow-lg shadow-purple-500/25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12h4"/><path d="M6 16h4"/><path d="M6 8h4"/><path d="M14 8h4"/><path d="M14 12h4"/><path d="M14 16h4"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Universitet</p>
                            <p class="text-sm font-semibold text-slate-800">SamDU • 2-kurs</p>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="flex items-center space-x-4 bg-gradient-to-r from-cyan-50 to-blue-50 border border-cyan-200/50 rounded-2xl p-5 shadow-xl shadow-cyan-100/30 cursor-default">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-slate-400 uppercase tracking-wider">Ish vaqti</p>
                            <p class="text-sm font-semibold text-slate-800">24/7 Online</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form - Right Side -->
                <div class="lg:col-span-3">
                    <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-8 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-shadow duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-cyan-500/25">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4Z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 mb-2">Xabar yuborish</h3>
                        <p class="text-sm text-slate-500 mb-8">
                            Savollaringiz yoki takliflaringiz bo'lsa, bemalol yozing. Tez orada javob beraman.
                        </p>

                        <form class="space-y-5" onsubmit="event.preventDefault(); alert('Xabaringiz yuborildi! Tez orada javob beramiz.');">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline mr-1.5 text-cyan-500">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                                        </svg>
                                        Ismingiz
                                    </label>
                                    <input type="text" placeholder="Azatbek" required
                                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all placeholder:text-slate-400">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline mr-1.5 text-cyan-500">
                                            <rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                        </svg>
                                        Email
                                    </label>
                                    <input type="email" placeholder="azatbek@example.com" required
                                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all placeholder:text-slate-400">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline mr-1.5 text-cyan-500">
                                        <path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2Z"/><path d="M7 7h.01"/>
                                    </svg>
                                    Mavzu
                                </label>
                                <input type="text" placeholder="Loyiha taklifi" required
                                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all placeholder:text-slate-400">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline mr-1.5 text-cyan-500">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                    </svg>
                                    Xabar
                                </label>
                                <textarea rows="5" placeholder="Xabaringizni bu yerga yozing..." required
                                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all resize-none placeholder:text-slate-400"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full px-6 py-3.5 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold rounded-xl hover:shadow-lg hover:shadow-cyan-500/30 transition-all hover:-translate-y-0.5 flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4Z"/>
                                </svg>
                                <span>Yuborish</span>
                            </button>

                            <p class="text-xs text-slate-400 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline mr-1">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                                Ma'lumotlaringiz xavfsiz saqlanadi
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection