@extends('layouts.admin')

@section('title', 'Blog Management — LotusRise Global')
@section('page_title', 'Blog & Insights Manager')

@section('content')
<div class="space-y-8">

    <div class="flex justify-between items-center">
        <p class="text-sm text-gray-500">Create and manage blog articles shown on the public website.</p>
        <a href="{{ route('admin.blog.create') }}" class="px-5 py-2.5 bg-[#C5A85A] hover:bg-[#C5A85A]/90 text-[#0D0C0A] font-bold text-xs rounded-xl shadow-sm transition">
            <i class="fa-solid fa-plus mr-1.5"></i>Write New Article
        </a>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="text-gray-400 font-bold uppercase tracking-wider border-b border-gray-100">
                        <th class="py-3 px-4">Article Title</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Excerpt</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4">Published</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-800">
                    @forelse($posts as $post)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="py-4 px-4 font-bold text-gray-900 max-w-xs">{{ $post->title }}</td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-lg bg-[#C5A85A]/10 text-[#C5A85A] font-bold text-[9px] uppercase tracking-wider">{{ $post->category }}</span>
                            </td>
                            <td class="py-4 px-4 max-w-xs text-gray-500 truncate">{{ $post->excerpt }}</td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider
                                    @if($post->status === 'published') bg-emerald-50 text-emerald-700 border border-emerald-200
                                    @else bg-gray-100 text-gray-500 border border-gray-200
                                    @endif">
                                    {{ $post->status }}
                                </span>
                            </td>
                            <td class="py-4 px-4 text-gray-400 whitespace-nowrap">{{ $post->created_at->format('d M, Y') }}</td>
                            <td class="py-4 px-4 text-right flex justify-end gap-2">
                                <a href="{{ route('blog.show', $post->slug) }}" target="_blank" class="px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-lg text-[10px] transition">
                                    View
                                </a>
                                <a href="{{ route('admin.blog.edit', $post->id) }}" class="px-3 py-1.5 bg-blue-50 hover:bg-blue-100 text-blue-700 font-bold rounded-lg text-[10px] transition">
                                    Edit
                                </a>
                                <form action="{{ route('admin.blog.delete', $post->id) }}" method="POST" onsubmit="return confirm('Delete this article permanently?')">
                                    @csrf
                                    <button type="submit" class="px-3 py-1.5 bg-rose-100 hover:bg-rose-200 text-rose-700 font-bold rounded-lg text-[10px] transition">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-gray-400">No articles published yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
