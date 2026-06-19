@extends('layouts.app')

@section('title', 'Portfolio & Case Studies — LotusRise Global')

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-16 border-b border-[#C5A85A]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <h1 class="text-4xl font-extrabold tracking-tight">Portfolio & Success Stories</h1>
        <p class="text-base text-white/60 max-w-xl mx-auto">Explore how we help businesses, carriers, and agents collaborate across Tanzanian regions.</p>
    </div>
</section>

<!-- Projects Showcase -->
<section class="py-20 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-16">
            @foreach($projects as $project)
                <div id="{{ $project->slug }}" class="bg-white p-8 sm:p-12 rounded-3xl border border-gray-100 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-12 items-start scroll-mt-28">
                    
                    <!-- Left: Category & Description -->
                    <div class="lg:col-span-7 space-y-5">
                        <span class="text-xs uppercase font-bold text-[#C5A85A] tracking-widest block">{{ $project->category }}</span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0D0C0A]">{{ $project->title }}</h2>
                        <p class="text-sm text-[#1D1B18]/70 leading-relaxed">{{ $project->description }}</p>
                    </div>

                    <!-- Right: Success Details / Metrics -->
                    <div class="lg:col-span-5 bg-gray-50 p-6 rounded-2xl border border-gray-100 flex flex-col gap-4">
                        <span class="text-xs font-bold text-[#0D0C0A] uppercase tracking-wider block border-b border-gray-200 pb-2">Impact Case Study</span>
                        <p class="text-xs text-[#1D1B18]/75 italic leading-relaxed">
                            "{{ $project->case_study }}"
                        </p>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            <span class="text-[10px] text-gray-500 uppercase font-semibold">Active Operational System</span>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
