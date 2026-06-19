@extends('layouts.dashboard')

@section('title', 'Register Leads — LotusRise Global')
@section('page_title', 'Register & Track Referral Leads')

@section('content')
<div class="space-y-8">

    {{-- Alerts --}}
    @if(session('success'))
        <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-semibold px-4 py-3 rounded-xl">
            <i class="fa-solid fa-circle-check mr-2"></i>{{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Table: Track Referrals -->
        <div class="lg:col-span-8 bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-4">
            <h2 class="text-sm font-bold uppercase tracking-wider text-[#C5A85A]">Your Registered Leads</h2>
            
            @if($leads->isEmpty())
                <div class="text-center py-12 text-[#FAF8F5]/30">
                    <i class="fa-solid fa-users text-3xl mb-3"></i>
                    <p class="text-sm">No leads registered yet. Use the form to add your first referral.</p>
                </div>
            @else
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="border-b border-[#FAF8F5]/10 text-[#FAF8F5]/40 font-bold uppercase tracking-wider">
                            <th class="py-3 px-4">Lead ID</th>
                            <th class="py-3 px-4">Date</th>
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
                                <td class="py-4 px-4 font-semibold">{{ $lead->business_name }}</td>
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
            @endif
        </div>

        <!-- Right Form: Register Lead -->
        <div class="lg:col-span-4 bg-[#13110E] p-6 rounded-2xl border border-[#FAF8F5]/10 space-y-6">
            <div>
                <h3 class="font-bold text-sm uppercase tracking-wider text-[#FAF8F5]">Register New Lead</h3>
                <p class="text-[10px] text-[#FAF8F5]/40 mt-0.5">Input retail shops or vendor merchants in your region to earn commission credit.</p>
            </div>

            @if($errors->any())
                <div class="bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs font-semibold px-3 py-2 rounded-xl">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('agent.leads.store') }}" method="POST" class="space-y-4 text-xs">
                @csrf
                
                <!-- Business Name -->
                <div>
                    <label class="block text-gray-400 uppercase tracking-wider font-semibold mb-1">Business / Lead Name</label>
                    <input type="text" name="business_name" required value="{{ old('business_name') }}"
                        placeholder="e.g. Mwanza Appliance Corner"
                        class="block w-full px-4 py-2.5 bg-gray-900 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                </div>

                <!-- Owner Name -->
                <div>
                    <label class="block text-gray-400 uppercase tracking-wider font-semibold mb-1">Owner Name</label>
                    <input type="text" name="owner_name" required value="{{ old('owner_name') }}"
                        placeholder="e.g. Baraka Minja"
                        class="block w-full px-4 py-2.5 bg-gray-900 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                </div>

                <!-- Contact Phone -->
                <div>
                    <label class="block text-gray-400 uppercase tracking-wider font-semibold mb-1">Contact Phone Number</label>
                    <input type="text" name="phone" required value="{{ old('phone') }}"
                        placeholder="+255 7XX XXX XXX"
                        class="block w-full px-4 py-2.5 bg-gray-900 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-gray-400 uppercase tracking-wider font-semibold mb-1">Lead Category</label>
                    <select name="category" required
                        class="block w-full px-4 py-2.5 bg-gray-900 border border-white/10 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A] text-gray-400">
                        <option value="Retail Customer">Retail Customer</option>
                        <option value="Vendor Merchant">Vendor Merchant</option>
                        <option value="Wholesale Buyer">Wholesale Buyer</option>
                    </select>
                </div>

                <button type="submit" class="w-full py-3 bg-[#C5A85A] hover:bg-[#C5A85A]/90 text-[#0D0C0A] font-bold rounded-xl shadow-md transition">
                    Register Lead Referral
                </button>
            </form>
        </div>

    </div>

</div>
@endsection
