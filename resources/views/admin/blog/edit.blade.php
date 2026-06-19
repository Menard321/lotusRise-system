@extends('layouts.admin')

@section('title', 'Edit Article — LotusRise Global')
@section('page_title', 'Edit Blog Article')

@section('content')
<div class="max-w-3xl space-y-8">

    <a href="{{ route('admin.blog') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-[#C5A85A] transition">
        <i class="fa-solid fa-arrow-left text-xs"></i> Back to Blog Manager
    </a>

    <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
        <h2 class="text-lg font-bold text-[#0D0C0A] mb-6">Editing: {{ $post->title }}</h2>

        <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Article Title</label>
                <input type="text" name="title" required value="{{ old('title', $post->title) }}"
                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Category</label>
                    <select name="category" required class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A] text-gray-700">
                        @foreach(['Business','Technology','Logistics','Entrepreneurship','E-Commerce','Digital Transformation','SME Growth'] as $cat)
                            <option value="{{ $cat }}" {{ old('category', $post->category) === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">SEO Title (Optional)</label>
                    <input type="text" name="seo_title" value="{{ old('seo_title', $post->seo_title) }}"
                        class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Excerpt / Summary</label>
                <textarea name="excerpt" required rows="2" maxlength="500"
                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">{{ old('excerpt', $post->excerpt) }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Full Article Content</label>
                <textarea name="content" required rows="10"
                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A] font-mono">{{ old('content', $post->content) }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">SEO Meta Description (Optional)</label>
                <textarea name="seo_description" rows="2"
                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">{{ old('seo_description', $post->seo_description) }}</textarea>
            </div>

            <button type="submit" class="w-full py-3.5 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-white font-bold rounded-xl shadow-md transition">
                Update & Republish Article
            </button>
        </form>
    </div>

</div>
@endsection
