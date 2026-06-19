@extends('layouts.app')

@section('title', $post->seo_title ?? $post->title . ' — LotusRise Global')
@section('meta_description', $post->seo_description ?? $post->excerpt)

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-16 border-b border-[#C5A85A]/10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-[10px] uppercase font-bold text-[#C5A85A] tracking-wider block">{{ $post->category }}</span>
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight leading-tight">{{ $post->title }}</h1>
        <div class="flex justify-center items-center gap-4 text-xs text-white/50 pt-2">
            <span>By LotusRise Research</span>
            <span>&bull;</span>
            <span>Published on {{ $post->created_at->format('M d, Y') }}</span>
        </div>
    </div>
</section>

<!-- Article Content -->
<article class="py-20 bg-[#FAF8F5]">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-white p-8 sm:p-12 rounded-3xl border border-gray-100 shadow-sm text-sm sm:text-base text-gray-800 leading-relaxed space-y-6">
            <!-- Render paragraphs -->
            @foreach(explode("\n\n", $post->content) as $para)
                <p>{{ $para }}</p>
            @endforeach
        </div>

        <!-- Back to blog link -->
        <div class="mt-12 text-center">
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-sm font-bold text-[#C5A85A] hover:text-[#0D0C0A] transition">
                <i class="fa-solid fa-arrow-left-long"></i>
                <span>Back to Insights Blog</span>
            </a>
        </div>

        <!-- Related Articles Grid -->
        @if($related->count() > 0)
            <div class="mt-20 border-t border-gray-200 pt-16 space-y-8">
                <h3 class="text-xl font-bold text-[#0D0C0A] text-center">Related Insights</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($related as $rel)
                        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col justify-between hover:border-[#C5A85A] transition duration-200">
                            <div class="space-y-3">
                                <span class="text-[9px] uppercase font-bold text-[#C5A85A] tracking-wider block">{{ $rel->category }}</span>
                                <h4 class="font-bold text-sm text-[#0D0C0A] leading-tight hover:text-[#C5A85A]"><a href="{{ route('blog.show', $rel->slug) }}">{{ $rel->title }}</a></h4>
                            </div>
                            <a href="{{ route('blog.show', $rel->slug) }}" class="text-[10px] font-bold text-[#C5A85A] hover:underline mt-4 block">Read Post <i class="fa-solid fa-arrow-right ml-0.5"></i></a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</article>

@endsection
