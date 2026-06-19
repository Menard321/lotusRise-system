@extends('layouts.admin')

@section('title', 'Edit Project — LotusRise Global')
@section('page_title', 'Edit Portfolio Project')

@section('content')
<div class="max-w-2xl space-y-8">

    <a href="{{ route('admin.portfolio') }}" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-[#C5A85A] transition">
        <i class="fa-solid fa-arrow-left text-xs"></i> Back to Portfolio
    </a>

    <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
        <h2 class="text-lg font-bold text-[#0D0C0A] mb-6">Edit: {{ $project->title }}</h2>

        <form action="{{ route('admin.portfolio.update', $project->id) }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Project Title</label>
                <input type="text" name="title" required value="{{ old('title', $project->title) }}"
                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Category</label>
                <select name="category" required class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A] text-gray-700">
                    @foreach(['Marketplace','Logistics','Vendor Solutions','Agent Network','Business Support'] as $cat)
                        <option value="{{ $cat }}" {{ old('category', $project->category) === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Project Description</label>
                <textarea name="description" required rows="3"
                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">{{ old('description', $project->description) }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Case Study / Impact Story</label>
                <textarea name="case_study" rows="4"
                    class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">{{ old('case_study', $project->case_study) }}</textarea>
            </div>

            <button type="submit" class="w-full py-3.5 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-white font-bold rounded-xl shadow-md transition">
                Update Portfolio Project
            </button>
        </form>
    </div>

</div>
@endsection
