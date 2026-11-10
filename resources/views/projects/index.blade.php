@extends('layouts.app')

@section('title', __('meta.projects_title'))

@section('content')

<section class="pt-24 pb-20 bg-gradient-to-br from-slate-50 via-white to-cyan-50/30 relative overflow-hidden">

    {{-- ========================= --}}
    {{-- DEKORATIV ELEMENTLAR --}}
    {{-- ========================= --}}

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
                        {{ __('projects.badge') }}
                    </span>

                    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 mb-4">
                        <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">
                            {{ __('projects.title') }}
                        </span>
                    </h1>

                    <p class="text-slate-500 text-lg max-w-2xl mx-auto lg:mx-0">
                        {{ __('projects.subtitle') }}
                    </p>

                </div>

            </div>

            <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mt-4 mx-auto lg:mx-0"></div>

        </div>

        {{-- ========================= --}}
        {{-- FILTER BUTTONS --}}
        {{-- ========================= --}}

        @php
            $activeFilter = $statusFilter ?? null;
        @endphp

        <div class="flex flex-wrap gap-3 mb-10 justify-center lg:justify-start">

            <a href="{{ route('projects') }}"
                class="px-5 py-2 text-sm font-semibold rounded-full transition-all hover:-translate-y-0.5 {{ !$activeFilter ? 'bg-gradient-to-r from-cyan-500 to-blue-500 text-white shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40' : 'bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-600 hover:border-cyan-400 hover:text-cyan-600' }}">
                <i data-lucide="list" class="w-4 h-4 inline-block mr-2"></i>
                {{ __('projects.filter_all') }}
            </a>

            <a href="{{ route('projects', ['status' => 'completed']) }}"
                class="px-5 py-2 text-sm font-medium rounded-full transition-all hover:-translate-y-0.5 {{ $activeFilter === 'completed' ? 'bg-gradient-to-r from-cyan-500 to-blue-500 text-white shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40' : 'bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-600 hover:border-cyan-400 hover:text-cyan-600' }}">
                <i data-lucide="circle-check" class="w-4 h-4 inline-block mr-2 {{ $activeFilter === 'completed' ? 'text-white' : 'text-emerald-500' }}"></i>
                {{ __('projects.filter_completed') }}
            </a>

            <a href="{{ route('projects', ['status' => 'in_progress']) }}"
                class="px-5 py-2 text-sm font-medium rounded-full transition-all hover:-translate-y-0.5 {{ $activeFilter === 'in_progress' ? 'bg-gradient-to-r from-cyan-500 to-blue-500 text-white shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40' : 'bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-600 hover:border-cyan-400 hover:text-cyan-600' }}">
                <i data-lucide="clock" class="w-4 h-4 inline-block mr-2 {{ $activeFilter === 'in_progress' ? 'text-white' : 'text-amber-500' }}"></i>
                {{ __('projects.filter_in_progress') }}
            </a>

        </div>

        {{-- ========================= --}}
        {{-- PROJECTS --}}
        {{-- ========================= --}}

        @if ($projects->count() > 0)

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            @foreach ($projects as $project)

            {{-- PROJECT CARD --}}
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
                        alt="{{ $project->translated_title }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/20 to-transparent"></div>

                    @else

                    <div
                        class="w-full h-full bg-gradient-to-br {{ $project->gradient ?? 'from-cyan-400 to-blue-500' }} flex items-center justify-center">
                        <i data-lucide="code-2" class="w-16 h-16 text-white"></i>
                    </div>

                    @endif

                    {{-- STATUS --}}
                    <div class="absolute top-4 right-4">

                        @if ($project->status === 'Ishlab chiqilmoqda')

                        <span
                            class="inline-flex items-center px-3 py-1 bg-amber-500/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full shadow-lg">
                            <i data-lucide="loader-circle" class="w-3.5 h-3.5 mr-1.5 animate-spin"></i>
                            {{ $project->translated_status }}
                        </span>

                        @else

                        <span
                            class="inline-flex items-center px-3 py-1 bg-emerald-500/90 backdrop-blur-sm text-white text-xs font-semibold rounded-full shadow-lg">
                            <i data-lucide="circle" class="w-3.5 h-3.5 mr-1.5 fill-current"></i>
                            {{ $project->translated_status }}
                        </span>

                        @endif

                    </div>

                </div>

                {{-- PROJECT CONTENT --}}
                <div class="p-6">

                    {{-- TITLE --}}
                    <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-cyan-600 transition-colors">
                        {{ $project->translated_title }}
                    </h3>

                    {{-- DESCRIPTION --}}
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        {{ $project->translated_description }}
                    </p>

                    {{-- TECHNOLOGIES --}}
                    <div class="flex flex-wrap gap-2 mb-5">
                        @if (is_array($project->techs))
                            @foreach ($project->techs as $tech)
                                <span class="px-3 py-1 bg-cyan-50 text-cyan-600 text-xs font-semibold rounded-lg border border-cyan-100">
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
                            class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-700 text-sm font-medium rounded-xl hover:bg-cyan-50 hover:text-cyan-600 transition-all text-center">
                            <i data-lucide="github" class="w-4 h-4 inline-block mr-2"></i>
                            {{ __('projects.code') }}
                        </a>
                        @endif

                        {{-- DEMO --}}
                        @if ($project->demo_active && $project->demo)
                        <a
                            href="{{ $project->demo }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex-1 px-4 py-2.5 bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-sm font-semibold rounded-xl hover:shadow-lg hover:shadow-cyan-500/30 transition-all text-center">
                            <i data-lucide="external-link" class="w-4 h-4 inline-block mr-2"></i>
                            {{ __('projects.demo') }}
                        </a>
                        @else
                        <span
                            class="flex-1 px-4 py-2.5 bg-slate-100 text-slate-500 text-sm font-medium rounded-xl text-center border border-slate-200">
                            <i data-lucide="clock" class="w-4 h-4 inline-block mr-2"></i>
                            {{ __('projects.soon') }}
                        </span>
                        @endif

                    </div>

                </div>

            </div>

            @endforeach

        </div>

        {{-- ========================= --}}
        {{-- PAGINATION --}}
        {{-- ========================= --}}

        @if ($projects->hasPages())

        <div class="flex justify-center items-center gap-3 mt-14">

            {{-- PREVIOUS --}}
            @if ($projects->onFirstPage())
            <span class="w-11 h-11 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-300 cursor-not-allowed">
                <i data-lucide="chevron-left" class="w-5 h-5"></i>
            </span>
            @else
            <a href="{{ $projects->previousPageUrl() }}"
                class="w-11 h-11 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-cyan-500 hover:text-white hover:border-cyan-500 transition-all">
                <i data-lucide="chevron-left" class="w-5 h-5"></i>
            </a>
            @endif

            {{-- PAGE NUMBERS --}}
            @foreach ($projects->getUrlRange(1, $projects->lastPage()) as $page => $url)
                @if ($page == $projects->currentPage())
                <span class="w-11 h-11 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 text-white flex items-center justify-center font-semibold shadow-lg shadow-cyan-500/30">
                    {{ $page }}
                </span>
                @else
                <a href="{{ $url }}"
                    class="w-11 h-11 rounded-full border border-slate-200 bg-white text-slate-700 flex items-center justify-center font-medium hover:bg-cyan-500 hover:text-white hover:border-cyan-500 transition-all">
                    {{ $page }}
                </a>
                @endif
            @endforeach

            {{-- NEXT --}}
            @if ($projects->hasMorePages())
            <a href="{{ $projects->nextPageUrl() }}"
                class="w-11 h-11 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-cyan-500 hover:text-white hover:border-cyan-500 transition-all">
                <i data-lucide="chevron-right" class="w-5 h-5"></i>
            </a>
            @else
            <span class="w-11 h-11 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-300 cursor-not-allowed">
                <i data-lucide="chevron-right" class="w-5 h-5"></i>
            </span>
            @endif

        </div>

        @endif

        @else

        {{-- ========================= --}}
        {{-- EMPTY --}}
        {{-- ========================= --}}

        <div class="text-center py-20">
            <div class="w-20 h-20 mx-auto mb-5 rounded-2xl bg-cyan-50 flex items-center justify-center">
                <i data-lucide="folder-open" class="w-10 h-10 text-cyan-500"></i>
            </div>
            <h3 class="text-xl font-bold text-slate-700 mb-2">
                {{ __('projects.empty_title') }}
            </h3>
            <p class="text-slate-500">
                {{ __('projects.empty_desc') }}
            </p>
        </div>

        @endif

        {{-- ========================= --}}
        {{-- FUTURE PROJECT --}}
        {{-- ========================= --}}

        <div class="mt-12">
            <div class="group border-2 border-dashed border-slate-300/50 hover:border-cyan-400 rounded-2xl p-12 text-center bg-white/40 backdrop-blur-sm hover:bg-white/60 transition-all duration-300 cursor-pointer">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-100 to-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <i data-lucide="plus" class="w-8 h-8 text-cyan-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-slate-400 group-hover:text-cyan-600 transition-colors">
                    {{ __('projects.future_title') }}
                </h3>
                <p class="text-sm text-slate-400 max-w-md mx-auto mt-1">
                    {{ __('projects.future_desc') }}
                </p>
            </div>
        </div>

    </div>

</section>

@endsection
