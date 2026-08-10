@extends('layouts.app')

@section('title', 'Loyihalarim - Portfoliyo')

@section('content')

<section class="pt-24 pb-20 bg-gradient-to-br from-slate-50 via-white to-cyan-50/30 relative overflow-hidden">

    {{-- Dekorativ elementlar --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-cyan-200/30 to-transparent rounded-full blur-3xl"></div>

    <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-200/20 to-transparent rounded-full blur-3xl"></div>

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-100/10 rounded-full blur-3xl"></div>


    <div class="max-w-6xl mx-auto px-6 lg:px-8 relative z-10">

        {{-- ========================= --}}
        {{-- HEADER --}}
        {{-- ========================= --}}

        <div class="mb-16 text-center lg:text-left">

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between">

                <div>

                    <span class="inline-flex items-center px-4 py-1.5 bg-gradient-to-r from-cyan-500/10 to-blue-500/10 text-cyan-600 text-xs font-semibold rounded-full mb-4 border border-cyan-200/30 backdrop-blur-sm">

                        <span class="w-1.5 h-1.5 bg-cyan-500 rounded-full mr-2 animate-pulse"></span>

                        <i data-lucide="code-2" class="w-4 h-4 mr-2"></i>

                        Loyihalar

                    </span>


                    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 mb-4">

                        <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">

                            Loyihalarim

                        </span>

                    </h1>


                    <p class="text-slate-500 text-lg max-w-2xl mx-auto lg:mx-0">

                        Men bajargan loyihalar va ishlanmalar.
                        Har bir loyiha yangi tajriba va bilim manbai.

                    </p>

                </div>

            </div>


            <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mt-4 mx-auto lg:mx-0"></div>

        </div>


        {{-- ========================= --}}
        {{-- FILTER BUTTONS --}}
        {{-- ========================= --}}

        <div class="flex flex-wrap gap-3 mb-10 justify-center lg:justify-start">

            <button
                type="button"
                class="px-5 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold rounded-full shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 transition-all hover:-translate-y-0.5">

                <i data-lucide="list" class="w-4 h-4 inline-block mr-2"></i>

                Barchasi

            </button>


            <button
                type="button"
                class="px-5 py-2 bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-600 text-sm font-medium rounded-full hover:border-cyan-400 hover:text-cyan-600 transition-all hover:-translate-y-0.5">

                <i data-lucide="circle-check" class="w-4 h-4 inline-block mr-2 text-emerald-500"></i>

                Yakunlangan

            </button>


            <button
                type="button"
                class="px-5 py-2 bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-600 text-sm font-medium rounded-full hover:border-cyan-400 hover:text-cyan-600 transition-all hover:-translate-y-0.5">

                <i data-lucide="clock" class="w-4 h-4 inline-block mr-2 text-amber-500"></i>

                Ishlab chiqilmoqda

            </button>

        </div>


        {{-- ========================= --}}
        {{-- PROJECTS GRID --}}
        {{-- ========================= --}}

        @if ($projects->count())

            <div class="grid md:grid-cols-2 gap-8">

                @foreach ($projects as $project)

                    <div
                        class="group bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl overflow-hidden shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-cyan-200/30 transition-all duration-500 hover:-translate-y-2">


                        {{-- PROJECT IMAGE --}}
                        <div class="relative h-48 overflow-hidden">

                            @php

                                $imagePath = public_path('images/' . $project->image);

                                $hasImage = $project->image && file_exists($imagePath);

                            @endphp


                            @if ($hasImage)

                                <img
                                    src="{{ asset('images/' . $project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">


                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/20 to-transparent"></div>

                            @else

                                <div
                                    class="w-full h-full bg-gradient-to-br {{ $project->gradient ?? 'from-cyan-400 to-blue-500' }} flex items-center justify-center relative">

                                    <i
                                        data-lucide="code-2"
                                        class="w-16 h-16 text-white">
                                    </i>

                                </div>

                            @endif


                            {{-- PROJECT ICON --}}
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

                                @if (!$hasImage)

                                    <i
                                        data-lucide="code-2"
                                        class="w-14 h-14 text-white/80">
                                    </i>

                                @endif

                            </div>


                            {{-- STATUS --}}
                            <div class="absolute top-4 right-4">

                                @if ($project->status === 'Ishlab chiqilmoqda')

                                    <span class="inline-flex items-center px-3 py-1 bg-amber-500/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full shadow-lg">

                                        <i
                                            data-lucide="loader-circle"
                                            class="w-3.5 h-3.5 mr-1.5 animate-spin">
                                        </i>

                                        {{ $project->status }}

                                    </span>

                                @else

                                    <span class="inline-flex items-center px-3 py-1 bg-emerald-500/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full shadow-lg">

                                        <span class="w-1.5 h-1.5 bg-white rounded-full mr-1.5 animate-pulse"></span>

                                        {{ $project->status }}

                                    </span>

                                @endif

                            </div>

                        </div>


                        {{-- PROJECT CONTENT --}}
                        <div class="p-6">


                            {{-- TITLE --}}
                            <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-cyan-600 transition-colors">

                                {{ $project->title }}

                            </h3>


                            {{-- DESCRIPTION --}}
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">

                                {{ $project->description }}

                            </p>


                            {{-- TECHNOLOGIES --}}
                            <div class="flex flex-wrap gap-2 mb-5">

                                @if (is_array($project->techs))

                                    @foreach ($project->techs as $tech)

                                        <span
                                            class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">

                                            {{ $tech }}

                                        </span>

                                    @endforeach

                                @endif

                            </div>


                            {{-- BUTTONS --}}
                            <div class="flex gap-3">


                                {{-- GITHUB --}}
                                @if ($project->github)

                                    <a
                                        href="{{ $project->github }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-xl hover:bg-cyan-50 hover:text-cyan-600 hover:border-cyan-200 transition-all text-center border border-transparent hover:border-cyan-200">

                                        <i data-lucide="github" class="w-4 h-4 inline-block mr-2"></i>

                                        Kod

                                    </a>

                                @endif


                                {{-- DEMO ACTIVE --}}
                                @if ($project->demo_active && $project->demo)

                                    <a
                                        href="{{ $project->demo }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="flex-1 px-4 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold rounded-xl hover:shadow-lg hover:shadow-cyan-500/30 transition-all hover:-translate-y-0.5 text-center">

                                        <i data-lucide="external-link" class="w-4 h-4 inline-block mr-2"></i>

                                        Demo

                                    </a>

                                @else

                                    <span
                                        class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-500 text-sm font-medium rounded-xl cursor-not-allowed text-center border border-slate-200">

                                        <i data-lucide="clock" class="w-4 h-4 inline-block mr-2"></i>

                                        Tez orada

                                    </span>

                                @endif


                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            {{-- PROJECTS EMPTY --}}
            <div class="text-center py-20">

                <div class="w-20 h-20 mx-auto mb-5 rounded-2xl bg-cyan-50 flex items-center justify-center">

                    <i data-lucide="folder-open" class="w-10 h-10 text-cyan-500"></i>

                </div>

                <h3 class="text-xl font-bold text-slate-700 mb-2">

                    Hozircha loyihalar mavjud emas

                </h3>

                <p class="text-slate-500">

                    Yangi loyihalar tez orada qo'shiladi.

                </p>

            </div>

        @endif


        {{-- ========================= --}}
        {{-- STATISTICS --}}
        {{-- ========================= --}}

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">


            {{-- TOTAL --}}
            <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 text-center shadow-xl shadow-slate-200/50">

                <div class="text-3xl font-extrabold text-cyan-600">

                    {{ $projects->count() }}

                </div>

                <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">

                    Jami loyihalar

                </p>

            </div>


            {{-- COMPLETED --}}
            <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 text-center shadow-xl shadow-slate-200/50">

                <div class="text-3xl font-extrabold text-emerald-500">

                    {{ $projects->where('status', 'Yakunlangan')->count() }}

                </div>

                <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">

                    Yakunlangan

                </p>

            </div>


            {{-- IN PROGRESS --}}
            <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 text-center shadow-xl shadow-slate-200/50">

                <div class="text-3xl font-extrabold text-amber-500">

                    {{ $projects->where('status', 'Ishlab chiqilmoqda')->count() }}

                </div>

                <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">

                    Ishlab chiqilmoqda

                </p>

            </div>


            {{-- TECHNOLOGIES --}}
            <div class="bg-white/80 backdrop-blur-sm border border-slate-200/60 rounded-2xl p-6 text-center shadow-xl shadow-slate-200/50">

                <div class="text-3xl font-extrabold text-cyan-600">

                    {{ $projects->pluck('techs')->flatten()->unique()->count() }}

                </div>

                <p class="text-xs text-slate-500 font-medium uppercase tracking-wider mt-1">

                    Texnologiyalar

                </p>

            </div>

        </div>


        {{-- ========================= --}}
        {{-- FUTURE PROJECT --}}
        {{-- ========================= --}}

        <div class="mt-10">

            <div
                class="group border-2 border-dashed border-slate-300/50 hover:border-cyan-400 rounded-2xl p-12 text-center bg-white/40 backdrop-blur-sm hover:bg-white/60 transition-all duration-300 cursor-pointer">

                <div
                    class="w-16 h-16 bg-gradient-to-br from-cyan-100 to-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">

                    <i
                        data-lucide="plus"
                        class="w-8 h-8 text-cyan-600">
                    </i>

                </div>


                <h3 class="text-lg font-semibold text-slate-400 group-hover:text-cyan-600 transition-colors">

                    Yangi loyiha qo'shish

                </h3>


                <p class="text-sm text-slate-400 max-w-md mx-auto mt-1">

                    Keyingi loyihangiz shu yerda bo'ladi.
                    Yangi g'oyalar va texnologiyalar bilan yanada kuchli portfolio.

                </p>

            </div>

        </div>

    </div>

</section>

@endsection