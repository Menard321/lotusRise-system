@extends('layouts.app')

@section('title', 'Blog & Insights — LotusRise Global')

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-16 border-b border-[#C5A85A]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <h1 class="text-4xl font-extrabold tracking-tight">Blog & Industry Insights</h1>
        <p class="text-base text-white/60 max-w-xl mx-auto">Read research, sourcing guides, and technology analysis for small businesses in East Africa.</p>
    </div>
</section>

<!-- Blog Index Section -->
<section class="py-20 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Main Content Area -->
            <div class="lg:col-span-8 space-y-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    @forelse($posts as $post)
                        <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm flex flex-col justify-between hover:shadow-md transition duration-200 group">
                            <div class="p-6 space-y-4">
                                <span class="text-[10px] uppercase font-bold text-[#C5A85A] tracking-wider block">{{ $post->category }}</span>
                                <h3 class="text-lg font-bold text-[#0D0C0A] group-hover:text-[#C5A85A] transition duration-200">
                                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                                <p class="text-xs text-[#1D1B18]/70 leading-relaxed">{{ $post->excerpt }}</p>
                            </div>
                            <div class="px-6 pb-6 pt-4 border-t border-gray-50 flex items-center justify-between">
                                <span class="text-[10px] text-gray-400">{{ $post->created_at->format('M d, Y') }}</span>
                                <a href="{{ route('blog.show', $post->slug) }}" class="text-xs font-bold text-[#C5A85A] hover:underline">Read Article <i class="fa-solid fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-500 py-12 lg:col-span-2">No articles listed under this category.</p>
                    @endforelse
                </div>
            </div>

            <!-- Right Sidebar Filters -->
            <div class="lg:col-span-4 space-y-8">
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm space-y-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#0D0C0A] block border-b border-gray-100 pb-2">Filter Categories</span>
                    <nav class="flex flex-col gap-2">
                        <a href="{{ route('blog') }}" class="px-4 py-2 text-xs rounded-xl font-medium transition {{ !$category ? 'bg-[#0D0C0A] text-white' : 'hover:bg-gray-50 text-gray-600' }}">All Categories</a>
                        @foreach($categories as $cat)
                            <a href="{{ route('blog', ['category' => $cat]) }}" class="px-4 py-2 text-xs rounded-xl font-medium transition {{ $category === $cat ? 'bg-[#0D0C0A] text-white' : 'hover:bg-gray-50 text-gray-600' }}">{{ $cat }}</a>
                        @endforeach
                    </nav>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
