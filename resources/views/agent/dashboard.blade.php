@extends('layouts.dashboard')

@section('title', 'Agent Dashboard — LotusRise Global')
@section('page_title', 'Agent Performance')

@section('content')
<div class="space-y-8">
    
    <!-- Status Banner -->
    <div class="bg-[#13110E] p-6 rounded-2xl border border-[#C5A85A]/20 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
        <div>
            <h2 class="text-xl font-bold">Welcome back, {{ $agent->full_name }}!</h2>
            <p class="text-xs text-[#FAF8F5]/60 mt-1">Onboard upcountry vendors, registers customers leads, and monitor commission checks.</p>
        </div>
        <span class="text-xs px-3.5 py-1.5 rounded-full
            @if($agent->subscription_status === 'active') bg-emerald-500/10 text-emerald-400 border border-emerald-500/20
            @else bg-yellow-500/10 text-yellow-400 border border-yellow-500/20
            @endif">
            <i class="fa-solid fa-circle-check mr-1.5"></i>Status: {{ ucfirst($agent->subscription_status) }}
        </span>
    </div>

    @if($agent->subscription_status !== 'active')
        <!-- Warning Banner -->
        <div class="bg-yellow-500/10 border border-yellow-500/20 p-5 rounded-2xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 text-yellow-400">
            <div class="space-y-1">
                <span class="font-bold text-sm">Subscription Activation Required</span>
                <p class="text-xs text-yellow-400/80 leading-relaxed">
                    Please activate your agent network subscription package to unlock commissions tracking.
                </p>
            </div>
            <a href="{{ route('agent.subscription') }}" class="px-4 py-2 bg-[#C5A85A] text-[#0D0C0A] hover:bg-[#C5A85A]/90 text-xs font-bold rounded-xl transition">
                Simulate Payment Activation
            </a>
        </div>
    @endif

    <!-- KPIs Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        
        <!-- Total Leads -->
        <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
            <div class="flex justify-between items-center">
                <span class="text-xs text-[#FAF8F5]/60 font-semibold uppercase tracking-wider">Registered Leads</span>
                <i class="fa-solid fa-users text-[#C5A85A]"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold">{{ $total_leads }}</span>
                <p class="text-[10px] text-gray-500">Merchants & retail leads</p>
            </div>
        </div>

        <!-- Approved Referrals -->
        <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
            <div class="flex justify-between items-center">
                <span class="text-xs text-[#FAF8F5]/60 font-semibold uppercase tracking-wider">Approved Leads</span>
                <i class="fa-solid fa-circle-check text-[#C5A85A]"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold text-emerald-400">{{ $approved_leads }}</span>
                <p class="text-[10px] text-gray-500">Active purchasing partners</p>
            </div>
        </div>

        <!-- Net Commission -->
        <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
            <div class="flex justify-between items-center">
                <span class="text-xs text-[#FAF8F5]/60 font-semibold uppercase tracking-wider">Commissions Earned</span>
                <i class="fa-solid fa-sack-dollar text-[#C5A85A]"></i>
            </div>
            <div class="space-y-1">
                <span class="text-3xl font-extrabold text-emerald-400">{{ $commission }}</span>
                <p class="text-[10px] text-gray-500">Weekly commission check</p>
            </div>
        </div>

    </div>

    <!-- Recent Referrals Table -->
    <div class="bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
        <div class="flex justify-between items-center">
            <span class="text-sm font-bold uppercase tracking-wider">Recent Registered Leads</span>
            <a href="{{ route('agent.leads') }}" class="text-xs text-[#C5A85A] hover:underline">Register New Lead</a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="border-b border-[#FAF8F5]/10 text-[#FAF8F5]/40 font-bold uppercase tracking-wider">
                        <th class="py-3 px-4">Lead ID</th>
                        <th class="py-3 px-4">Date Registered</th>
                        <th class="py-3 px-4">Business / Lead Name</th>
                        <th class="py-3 px-4">Contact Phone</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#FAF8F5]/5">
                    @foreach($leads as $lead)
                        <tr class="hover:bg-[#FAF8F5]/5 transition duration-150">
                            <td class="py-4 px-4 font-bold text-[#C5A85A]">#{{ str_pad($lead->id, 3, '0', STR_PAD_LEFT) }}</td>
                            <td class="py-4 px-4 text-gray-400">{{ $lead->created_at->format('Y-m-d') }}</td>
                            <td class="py-4 px-4 font-medium">{{ $lead->business_name }}</td>
                            <td class="py-4 px-4">{{ $lead->phone }}</td>
                            <td class="py-4 px-4 text-gray-400">{{ $lead->category }}</td>
                            <td class="py-4 px-4">
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider
                                    @if($lead->status === 'Pending') bg-yellow-500/10 text-yellow-400 border border-yellow-500/20
                                    @else bg-emerald-500/10 text-emerald-400 border border-emerald-500/20
                                    @endif">
                                    {{ $lead->status }}
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
