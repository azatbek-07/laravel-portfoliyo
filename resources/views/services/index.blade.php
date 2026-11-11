@extends('layouts.app')

@section('title', __('meta.services_title'))

@section('content')

<section class="pt-24 pb-20 bg-gradient-to-br from-slate-50 via-white to-cyan-50/30 relative overflow-hidden">

    {{-- Dekorativ blobs --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-cyan-200/30 to-transparent rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-200/20 to-transparent rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-100/10 rounded-full blur-3xl"></div>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 relative z-10">

        {{-- HEADER --}}
        <div class="mb-16 text-center max-w-3xl mx-auto">
            <span class="inline-flex items-center px-4 py-1.5 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 text-cyan-600 text-xs font-semibold rounded-full mb-4 border border-cyan-200/30 backdrop-blur-sm">
                <span class="w-1.5 h-1.5 bg-cyan-500 rounded-full mr-2 animate-pulse"></span>
                <i data-lucide="sparkles" class="w-4 h-4 mr-2"></i>
                {{ __('services.badge') }}
            </span>

            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 mb-4">
                <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">
                    {{ __('services.title') }}
                </span>
            </h1>

            <p class="text-slate-500 text-lg">
                {{ __('services.subtitle') }}
            </p>

            <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mt-5 mx-auto"></div>
        </div>

        {{-- 3 PRICING PLANS --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

            {{-- PLAN 1: START --}}
            <div class="group flex flex-col justify-between bg-white/90 backdrop-blur-sm border border-slate-200/80 rounded-2xl p-8 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:border-cyan-300 transition-all duration-300 hover:-translate-y-1.5">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="px-3.5 py-1 bg-slate-100 text-slate-700 text-xs font-bold uppercase tracking-wider rounded-full">
                            {{ __('services.plan1.badge') }}
                        </span>
                        <div class="w-11 h-11 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center">
                            <i data-lucide="rocket" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-extrabold text-slate-800 mb-2">
                        {{ __('services.plan1.name') }}
                    </h3>
                    <p class="text-sm text-slate-500 mb-6 min-h-[40px]">
                        {{ __('services.plan1.desc') }}
                    </p>

                    <div class="mb-6 pb-6 border-b border-slate-100">
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-3xl sm:text-4xl font-black text-slate-800">{{ __('services.plan1.price') }}</span>
                            <span class="text-sm font-bold text-cyan-600">{{ __('services.currency') }}</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-1">{{ __('services.plan1.time') }}</p>
                    </div>

                    <ul class="space-y-3.5 mb-8 text-sm text-slate-600">
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan1.f1') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan1.f2') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan1.f3') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan1.f4') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan1.f5') }}</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('contact') }}"
                    class="w-full py-3.5 px-6 rounded-xl bg-slate-100 hover:bg-cyan-500 text-slate-800 hover:text-white font-semibold text-sm text-center transition-all flex items-center justify-center gap-2">
                    <span>{{ __('services.order_btn') }}</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            {{-- PLAN 2: STANDART (FEATURED) --}}
            <div class="relative flex flex-col justify-between bg-gradient-to-b from-slate-900 to-slate-800 text-white border-2 border-cyan-400 rounded-2xl p-8 shadow-2xl shadow-cyan-500/20 lg:-translate-y-3 transition-all duration-300 hover:-translate-y-4">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                    <span class="px-4 py-1 bg-gradient-to-r from-cyan-400 to-blue-500 text-slate-950 text-xs font-extrabold uppercase tracking-wider rounded-full shadow-lg">
                        {{ __('services.popular') }}
                    </span>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-5 mt-1">
                        <span class="px-3.5 py-1 bg-cyan-500/20 text-cyan-300 border border-cyan-500/30 text-xs font-bold uppercase tracking-wider rounded-full">
                            {{ __('services.plan2.badge') }}
                        </span>
                        <div class="w-11 h-11 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center">
                            <i data-lucide="zap" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-extrabold text-white mb-2">
                        {{ __('services.plan2.name') }}
                    </h3>
                    <p class="text-sm text-slate-300 mb-6 min-h-[40px]">
                        {{ __('services.plan2.desc') }}
                    </p>

                    <div class="mb-6 pb-6 border-b border-slate-700/80">
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-3xl sm:text-4xl font-black text-white">{{ __('services.plan2.price') }}</span>
                            <span class="text-sm font-bold text-cyan-400">{{ __('services.currency') }}</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-1">{{ __('services.plan2.time') }}</p>
                    </div>

                    <ul class="space-y-3.5 mb-8 text-sm text-slate-200">
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan2.f1') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan2.f2') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan2.f3') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan2.f4') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan2.f5') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan2.f6') }}</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('contact') }}"
                    class="w-full py-3.5 px-6 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-500 hover:from-cyan-300 hover:to-blue-400 text-slate-950 font-bold text-sm text-center shadow-lg shadow-cyan-500/25 transition-all flex items-center justify-center gap-2">
                    <span>{{ __('services.order_btn') }}</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            {{-- PLAN 3: PREMIUM --}}
            <div class="group flex flex-col justify-between bg-white/90 backdrop-blur-sm border border-slate-200/80 rounded-2xl p-8 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:border-cyan-300 transition-all duration-300 hover:-translate-y-1.5">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <span class="px-3.5 py-1 bg-indigo-50 text-indigo-600 text-xs font-bold uppercase tracking-wider rounded-full">
                            {{ __('services.plan3.badge') }}
                        </span>
                        <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                            <i data-lucide="crown" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <h3 class="text-2xl font-extrabold text-slate-800 mb-2">
                        {{ __('services.plan3.name') }}
                    </h3>
                    <p class="text-sm text-slate-500 mb-6 min-h-[40px]">
                        {{ __('services.plan3.desc') }}
                    </p>

                    <div class="mb-6 pb-6 border-b border-slate-100">
                        <div class="flex items-baseline gap-1.5">
                            <span class="text-3xl sm:text-4xl font-black text-slate-800">{{ __('services.plan3.price') }}</span>
                            <span class="text-sm font-bold text-cyan-600">{{ __('services.currency') }}</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-1">{{ __('services.plan3.time') }}</p>
                    </div>

                    <ul class="space-y-3.5 mb-8 text-sm text-slate-600">
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan3.f1') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan3.f2') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan3.f3') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan3.f4') }}</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="circle-check" class="w-4 h-4 text-emerald-500 shrink-0 mt-0.5"></i>
                            <span>{{ __('services.plan3.f5') }}</span>
                        </li>
                    </ul>
                </div>

                <a href="{{ route('contact') }}"
                    class="w-full py-3.5 px-6 rounded-xl bg-slate-100 hover:bg-cyan-500 text-slate-800 hover:text-white font-semibold text-sm text-center transition-all flex items-center justify-center gap-2">
                    <span>{{ __('services.order_btn') }}</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

        </div>

        {{-- EXTRA NOTE / CTA --}}
        <div class="mt-14 bg-white/80 backdrop-blur-sm border border-slate-200/70 rounded-2xl p-8 text-center shadow-lg">
            <h3 class="text-xl font-bold text-slate-800 mb-2">
                {{ __('services.custom_title') }}
            </h3>
            <p class="text-sm text-slate-500 max-w-2xl mx-auto mb-5">
                {{ __('services.custom_desc') }}
            </p>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold shadow-md shadow-cyan-500/20 hover:shadow-lg transition-all">
                <i data-lucide="message-square" class="w-4 h-4"></i>
                <span>{{ __('services.custom_btn') }}</span>
            </a>
        </div>

    </div>

</section>

@endsection
