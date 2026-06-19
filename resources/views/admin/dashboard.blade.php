@extends('layouts.admin')

@section('title', 'Admin Dashboard — LotusRise Global')
@section('page_title', 'LotusRise Operational Control Panel')

@section('content')
<div class="space-y-8">

    <!-- Overview Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
        
        <!-- Total Users -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-center text-[#FAF8F5]/40">
                <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Total Accounts</span>
                <i class="fa-solid fa-users text-[#C5A85A] text-lg"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold text-[#0D0C0A]">{{ $total_users }}</span>
                <p class="text-[10px] text-gray-400 font-semibold">Registered site profiles</p>
            </div>
        </div>

        <!-- Vendors -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-center text-[#FAF8F5]/40">
                <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Suppliers / Vendors</span>
                <i class="fa-solid fa-store text-[#C5A85A] text-lg"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold text-[#0D0C0A]">{{ $total_vendors }}</span>
                <p class="text-[10px] text-gray-400 font-semibold">Listed wholesale catalogs</p>
            </div>
        </div>

        <!-- Agents -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-center text-[#FAF8F5]/40">
                <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Onboarded Agents</span>
                <i class="fa-solid fa-users-gear text-[#C5A85A] text-lg"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold text-[#0D0C0A]">{{ $total_agents }}</span>
                <p class="text-[10px] text-gray-400 font-semibold">Active upcountry reps</p>
            </div>
        </div>

        <!-- Inquiries -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div class="flex justify-between items-center text-[#FAF8F5]/40">
                <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Leads / Inquiries</span>
                <i class="fa-solid fa-envelope-open-text text-[#C5A85A] text-lg"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold text-[#0D0C0A]">{{ $total_inquiries }}</span>
                <p class="text-[10px] text-gray-400 font-semibold">Public customer submissions</p>
            </div>
        </div>

    </div>

    <!-- Recent Inquiries -->
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
        <div class="flex justify-between items-center border-b border-gray-100 pb-3">
            <span class="text-sm font-bold uppercase tracking-wider text-[#0D0C0A]">Recent Support Inquiries</span>
            <a href="{{ route('admin.inquiries') }}" class="text-xs text-[#C5A85A] font-semibold hover:underline">View All Messages</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="text-gray-400 font-bold uppercase tracking-wider border-b border-gray-100">
                        <th class="py-3 px-4">Contact</th>
                        <th class="py-3 px-4">Subject</th>
                        <th class="py-3 px-4">Message</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-[#1D1B18]/80">
                    @foreach($recent_inquiries as $inq)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="py-4 px-4">
                                <span class="font-bold block text-gray-800">{{ $inq->name }}</span>
                                <span class="text-[10px] text-gray-400 block mt-0.5">{{ $inq->email }}</span>
                            </td>
                            <td class="py-4 px-4 font-semibold text-gray-700">{{ $inq->subject }}</td>
                            <td class="py-4 px-4 max-w-sm truncate">{{ $inq->message }}</td>
                            <td class="py-4 px-4">
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-wider
                                    @if($inq->status === 'new') bg-yellow-50 text-yellow-700 border border-yellow-200
                                    @else bg-emerald-50 text-emerald-700 border border-emerald-200
                                    @endif">
                                    {{ $inq->status }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
