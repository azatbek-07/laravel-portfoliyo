@extends('layouts.app')

@section('title', 'Contact Sahifa - Portfoliyo')

@section('content')
    <!-- Contact Content -->
    <section class="pt-24 pb-20 bg-grid-cyan min-h-screen relative overflow-hidden">
        <!-- Dekorativ elementlar -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-navy/5 rounded-full blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="mb-16">
                <span class="inline-block px-4 py-1.5 bg-cyan/10 text-cyan-dark text-xs font-semibold rounded-full mb-4">
                    <i class="fas fa-envelope mr-2"></i>Bog'lanish
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-navy mb-4 glow-text">
                    <span class="text-gradient-cyan">Aloqa</span>
                </h1>
                <p class="text-gray-500 text-lg max-w-2xl">
                    Men bilan bog'lanmoqchi bo'lsangiz, quyidagi manzillar orqali murojaat qiling.
                    Loyihalar, hamkorlik yoki savollar uchun doim ochiqman.
                </p>
                <div class="divider-cyan w-24 mt-4"></div>
            </div>

            <div class="grid md:grid-cols-5 gap-8">
                <!-- Contact Links - Left Side -->
                <div class="md:col-span-2 space-y-4">
                    <!-- Telegram -->
                    <a href="https://t.me/A_z_a_t_b_e_k" target="_blank"
                        class="contact-link flex items-center space-x-4 rounded-2xl p-5 hover-effect">
                        <div class="contact-icon-wrapper contact-icon-telegram">
                            <i class="fab fa-telegram-plane"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Telegram</p>
                            <p class="text-sm font-semibold text-navy truncate">@A_z_a_t_b_e_k</p>
                        </div>
                        <i class="fas fa-arrow-right text-cyan text-sm"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://instagram.com/ermalaev_azatbek" target="_blank"
                        class="contact-link flex items-center space-x-4 rounded-2xl p-5 hover-effect">
                        <div class="contact-icon-wrapper contact-icon-instagram">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Instagram</p>
                            <p class="text-sm font-semibold text-navy truncate">ermalaev_azatbek</p>
                        </div>
                        <i class="fas fa-arrow-right text-cyan text-sm"></i>
                    </a>

                    <!-- GitHub -->
                    <a href="https://github.com/azatbek-07" target="_blank"
                        class="contact-link flex items-center space-x-4 rounded-2xl p-5 hover-effect">
                        <div class="contact-icon-wrapper contact-icon-github">
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">GitHub</p>
                            <p class="text-sm font-semibold text-navy truncate">azatbek-07</p>
                        </div>
                        <i class="fas fa-arrow-right text-cyan text-sm"></i>
                    </a>

                    <!-- Location -->
                    <div class="contact-link flex items-center space-x-4 rounded-2xl p-5 cursor-default">
                        <div class="contact-icon-wrapper contact-icon-location">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Manzil</p>
                            <p class="text-sm font-semibold text-navy">Samarqand, O'zbekiston</p>
                        </div>
                    </div>

                    <!-- University -->
                    <div class="contact-link flex items-center space-x-4 rounded-2xl p-5 cursor-default">
                        <div class="contact-icon-wrapper contact-icon-university">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Universitet</p>
                            <p class="text-sm font-semibold text-navy">SamDU • 2-kurs</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form - Right Side -->
                <div class="md:col-span-3">
                    <div class="bg-white border border-cyan/10 rounded-2xl p-8 card-cyan">
                        <div class="icon-box mb-6">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h3 class="text-lg font-bold text-navy mb-2">Xabar yuborish</h3>
                        <p class="text-sm text-gray-500 mb-8">
                            Savollaringiz yoki takliflaringiz bo'lsa, bemalol yozing. Tez orada javob beraman.
                        </p>

                        <form class="space-y-5">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label
                                        class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Ismingiz</label>
                                    <input type="text" placeholder="Azatbek"
                                        class="input-field w-full px-4 py-3 rounded-xl text-sm">
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Email</label>
                                    <input type="email" placeholder="azatbek@example.com"
                                        class="input-field w-full px-4 py-3 rounded-xl text-sm">
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Mavzu</label>
                                <input type="text" placeholder="Loyiha taklifi"
                                    class="input-field w-full px-4 py-3 rounded-xl text-sm">
                            </div>

                            <div>
                                <label
                                    class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-2">Xabar</label>
                                <textarea rows="5" placeholder="Xabaringizni bu yerga yozing..."
                                    class="input-field w-full px-4 py-3 rounded-xl text-sm resize-none"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full px-6 py-3.5 btn-cyan text-sm font-semibold rounded-xl flex items-center justify-center space-x-2">
                                <i class="fas fa-paper-plane"></i>
                                <span>Yuborish</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection