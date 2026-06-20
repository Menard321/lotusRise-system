@extends('layouts.admin')

@section('title', 'Manage Vendors — LotusRise Global')
@section('page_title', 'Wholesale Vendors Onboarding')

@section('page_title_badge')
<span class="px-3 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-amber-50 text-amber-700 border border-amber-200 shadow-sm">
    REVIEW REQUIRED
</span>
@endsection

@section('content')
<div class="space-y-8">

    <!-- Analytics Metrics Ribbon -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-2xl border border-[#C5A85A]/15 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-[10px] uppercase tracking-[0.15em] font-extrabold text-[#13110E]/50">Total Pending Vendors</span>
                <h3 class="text-xl font-bold text-[#0D0C0A] tracking-tight">
                    {{ 12 + $vendors->where('status', 'pending')->count() }} Merchant Stores
                </h3>
            </div>
            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center border border-amber-100">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
        </div>
        
        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-2xl border border-[#C5A85A]/15 shadow-sm flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-[10px] uppercase tracking-[0.15em] font-extrabold text-[#13110E]/50">Approved Ecosystem Stores</span>
                <h3 class="text-xl font-bold text-[#0D0C0A] tracking-tight">
                    {{ 103 + $vendors->where('status', 'approved')->count() }} Platforms
                </h3>
            </div>
            <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center border border-emerald-100">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>
    </div>

    <!-- Data Interaction Ledger -->
    <div class="bg-white p-6 rounded-[2rem] border border-[#C5A85A]/15 shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="text-gray-400 font-bold uppercase tracking-wider border-b border-gray-100 pb-3">
                        <th class="py-4 px-6 text-[10px] tracking-wider">Business Details</th>
                        <th class="py-4 px-6 text-[10px] tracking-wider">Owner Profile</th>
                        <th class="py-4 px-6 text-[10px] tracking-wider">TIN / VRN Registry</th>
                        <th class="py-4 px-6 text-[10px] tracking-wider">Market Sector</th>
                        <th class="py-4 px-6 text-[10px] tracking-wider">Physical Infrastructure</th>
                        <th class="py-4 px-6 text-[10px] tracking-wider">Verification Status</th>
                        <th class="py-4 px-6 text-right text-[10px] tracking-wider">Action Gate</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-gray-800">
                    @forelse($vendors as $vendor)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <!-- Business Details -->
                            <td class="py-5 px-6">
                                <span class="font-bold text-sm block text-gray-900 leading-tight">{{ $vendor->business_name }}</span>
                                <span class="text-[10px] text-gray-400 block mt-1 font-mono">{{ $vendor->email }} | {{ $vendor->phone_number }}</span>
                            </td>
                            
                            <!-- Owner Profile -->
                            <td class="py-5 px-6 font-semibold text-gray-700">{{ $vendor->owner_name }}</td>
                            
                            <!-- TIN / VRN Registry -->
                            <td class="py-5 px-6 font-mono text-[11px]">
                                <span class="block">TIN: {{ $vendor->tin }}</span>
                                <span class="text-[10px] text-gray-400 block mt-0.5">VRN: {{ $vendor->vrn ?? 'N/A' }}</span>
                            </td>
                            
                            <!-- Market Sector -->
                            <td class="py-5 px-6">
                                <span class="px-2.5 py-1 rounded bg-[#C5A85A]/10 text-[#C5A85A] font-bold text-[9px] uppercase tracking-wider">{{ $vendor->business_category }}</span>
                            </td>
                            
                            <!-- Physical Infrastructure -->
                            <td class="py-5 px-6 text-gray-600 font-medium">
                                <i class="fa-solid fa-location-dot text-[#C5A85A] mr-1 text-[10px]"></i>{{ $vendor->location }}
                            </td>
                            
                            <!-- Verification Status -->
                            <td class="py-5 px-6">
                                <span class="px-3.5 py-1.5 rounded-full text-[9px] font-bold uppercase tracking-widest border
                                    @if($vendor->status === 'pending') bg-yellow-50 text-yellow-700 border-yellow-200
                                    @elseif($vendor->status === 'approved') bg-emerald-50 text-emerald-700 border-emerald-200
                                    @else bg-rose-50 text-rose-700 border-rose-200
                                    @endif">
                                    {{ $vendor->status }}
                                </span>
                            </td>
                            
                            <!-- Action Gate -->
                            <td class="py-5 px-6 text-right flex justify-end gap-3 items-center">
                                @if($vendor->status !== 'approved')
                                    <form action="{{ route('admin.vendors.status', $vendor->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="approved">
                                        <button type="submit" class="px-4 py-2 border border-emerald-500/25 bg-emerald-50 text-emerald-700 hover:bg-emerald-600 hover:text-white rounded-xl text-[10px] uppercase tracking-widest font-bold transition duration-200 shadow-sm">
                                            Approve Facility
                                        </button>
                                    </form>
                                @endif
                                @if($vendor->status !== 'suspended')
                                    <form action="{{ route('admin.vendors.status', $vendor->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="suspended">
                                        <button type="submit" class="px-4 py-2 border border-rose-500/25 bg-rose-50 text-rose-700 hover:bg-rose-600 hover:text-white rounded-xl text-[10px] uppercase tracking-widest font-bold transition duration-200 shadow-sm">
                                            Suspend Facility
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-12 text-center text-gray-400">
                                <i class="fa-solid fa-circle-exclamation text-xl text-gray-300 block mb-2"></i>
                                No wholesale vendors found in database.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

