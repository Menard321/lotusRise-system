@extends('layouts.admin')

@section('title', 'Portfolio Management — LotusRise Global')
@section('page_title', 'Portfolio & Projects Manager')

@section('content')
<div class="space-y-8">

    <div class="flex justify-between items-center">
        <div>
            <p class="text-sm text-gray-500">Manage success stories and case studies shown publicly.</p>
        </div>
        <a href="{{ route('admin.portfolio.create') }}" class="px-5 py-2.5 bg-[#C5A85A] hover:bg-[#C5A85A]/90 text-[#0D0C0A] font-bold text-xs rounded-xl shadow-sm transition">
            <i class="fa-solid fa-plus mr-1.5"></i>Add New Project
        </a>
    </div>

    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="text-gray-400 font-bold uppercase tracking-wider border-b border-gray-100">
                        <th class="py-3 px-4">Project Title</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Description</th>
                        <th class="py-3 px-4">Created</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-800">
                    @forelse($projects as $project)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="py-4 px-4 font-bold text-gray-900">{{ $project->title }}</td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-lg bg-[#C5A85A]/10 text-[#C5A85A] font-bold text-[9px] uppercase tracking-wider">{{ $project->category }}</span>
                            </td>
                            <td class="py-4 px-4 max-w-xs text-gray-500 truncate">{{ $project->description }}</td>
                            <td class="py-4 px-4 text-gray-400 whitespace-nowrap">{{ $project->created_at->format('d M, Y') }}</td>
                            <td class="py-4 px-4 text-right flex justify-end gap-2">
                                <a href="{{ route('admin.portfolio.edit', $project->id) }}" class="px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-lg text-[10px] transition">
                                    Edit
                                </a>
                                <form action="{{ route('admin.portfolio.delete', $project->id) }}" method="POST" onsubmit="return confirm('Delete this project?')">
                                    @csrf
                                    <button type="submit" class="px-3 py-1.5 bg-rose-100 hover:bg-rose-200 text-rose-700 font-bold rounded-lg text-[10px] transition">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-gray-400">No projects listed. Add one above.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
