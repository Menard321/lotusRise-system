@extends('layouts.dashboard')

@section('title', 'Subscription Status — LotusRise Global')
@section('page_title', 'Agent Network Subscription')

@section('content')
<div class="space-y-8 max-w-2xl">

    <div>
        <h2 class="text-sm font-bold uppercase tracking-wider text-[#FAF8F5]/60">Subscription Package Portal</h2>
        <p class="text-xs text-[#FAF8F5]/40 mt-0.5">Activate or renew your network lead registration access.</p>
    </div>

    <!-- Active Subscription Details -->
    <div class="bg-[#13110E] p-8 rounded-3xl border border-[#FAF8F5]/10 space-y-6">
        <div class="flex flex-wrap justify-between items-center gap-4 border-b border-[#FAF8F5]/10 pb-4">
            <div>
                <span class="text-xs text-[#FAF8F5]/40 uppercase font-semibold">Your Package Type</span>
                <span class="block text-lg font-bold text-[#C5A85A] mt-0.5 capitalize">{{ $agent->preferred_package }} Package</span>
            </div>
            <span class="text-xs px-3.5 py-1.5 rounded-full font-bold uppercase tracking-wider
                @if($agent->subscription_status === 'active') bg-emerald-500/10 text-emerald-400 border border-emerald-500/20
                @else bg-yellow-500/10 text-yellow-400 border border-yellow-500/20
                @endif">
                {{ $agent->subscription_status }}
            </span>
        </div>

        <div class="grid grid-cols-2 gap-6 text-xs">
            <div>
                <span class="text-[#FAF8F5]/40 font-semibold block mb-1">Pricing Rate</span>
                <span class="font-bold">
                    @if($agent->preferred_package === 'weekly') TZS 10,000 / week
                    @elseif($agent->preferred_package === 'monthly') TZS 35,000 / month
                    @elseif($agent->preferred_package === 'six_months') TZS 180,000 / 6 months
                    @else TZS 320,000 / year
                    @endif
                </span>
            </div>
            <div>
                <span class="text-[#FAF8F5]/40 font-semibold block mb-1">Expiration Date</span>
                <span class="font-bold">
                    @if($agent->subscription_expires_at)
                        {{ $agent->subscription_expires_at->format('d M, Y (H:i)') }}
                    @else
                        Awaiting Activation
                    @endif
                </span>
            </div>
        </div>

        @if($agent->subscription_status !== 'active')
            <!-- Simulation Panel -->
            <div class="bg-[#FAF8F5]/5 p-6 rounded-2xl border border-white/5 space-y-4">
                <span class="font-bold text-xs uppercase tracking-wider text-[#C5A85A] block">Simulated Mobile Money Payment (M-Pesa / Tigo Pesa)</span>
                <p class="text-xs text-[#FAF8F5]/60 leading-relaxed">
                    To activate your agent panel in this demo environment, click the button below to simulate a successful mobile payment transaction.
                </p>
                <form action="{{ route('agent.subscription.activate') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-3.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-xl text-xs shadow-md transition">
                        <i class="fa-solid fa-mobile-screen mr-2"></i>Simulate Payment Confirmation
                    </button>
                </form>
            </div>
        @else
            <div class="bg-emerald-500/10 p-4 rounded-xl border border-emerald-500/20 text-emerald-400 text-xs flex items-center gap-3">
                <i class="fa-solid fa-circle-check text-base"></i>
                <span>Your Agent subscription is fully active. You have full access to record leads and trace commission structures.</span>
            </div>
        @endif

    </div>

</div>
@endsection
