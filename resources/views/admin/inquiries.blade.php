@extends('layouts.admin')

@section('title', 'Contact Inquiries — LotusRise Global')
@section('page_title', 'Contact Leads & Inquiries')

@section('content')
<div class="space-y-8">

    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="text-gray-400 font-bold uppercase tracking-wider border-b border-gray-100">
                        <th class="py-3 px-4">Sender Details</th>
                        <th class="py-3 px-4">Subject</th>
                        <th class="py-3 px-4">Message</th>
                        <th class="py-3 px-4">Date</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-800">
                    @forelse($inquiries as $inq)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="py-4 px-4">
                                <span class="font-bold block text-gray-900">{{ $inq->name }}</span>
                                <span class="text-[10px] text-gray-400 block mt-0.5">{{ $inq->email }}</span>
                                <span class="text-[10px] text-gray-400 block">{{ $inq->phone }}</span>
                            </td>
                            <td class="py-4 px-4 font-semibold">{{ $inq->subject }}</td>
                            <td class="py-4 px-4 max-w-xs">
                                <p class="text-gray-600 leading-relaxed line-clamp-2">{{ $inq->message }}</p>
                            </td>
                            <td class="py-4 px-4 text-gray-400 whitespace-nowrap">{{ $inq->created_at->format('d M, Y') }}</td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider
                                    @if($inq->status === 'new') bg-yellow-50 text-yellow-700 border border-yellow-200
                                    @elseif($inq->status === 'read') bg-blue-50 text-blue-700 border border-blue-200
                                    @else bg-emerald-50 text-emerald-700 border border-emerald-200
                                    @endif">
                                    {{ $inq->status }}
                                </span>
                            </td>
                            <td class="py-4 px-4 text-right">
                                @if($inq->status !== 'resolved')
                                    <form action="{{ route('admin.inquiries.resolve', $inq->id) }}" method="POST" class="inline">
                                        @csrf
                                        <button type="submit" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-lg text-[10px] transition">
                                            Mark Resolved
                                        </button>
                                    </form>
                                @else
                                    <span class="text-[10px] text-gray-400 font-semibold">Resolved</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-gray-400">No inquiries received yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
