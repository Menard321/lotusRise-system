@extends('layouts.app')

@section('title', 'Register — LotusRise Global')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-cover bg-center" style="background-image: linear-gradient(to bottom, rgba(250, 248, 245, 0.9), rgba(250, 248, 245, 0.95));">
    <div class="max-w-md w-full space-y-8 bg-[#0D0C0A] text-[#FAF8F5] p-8 sm:p-10 rounded-2xl shadow-xl border border-[#C5A85A]/20">
        
        <!-- Logo & Header -->
        <div class="text-center">
            <div class="mx-auto w-12 h-12 rounded-xl bg-[#C5A85A] flex items-center justify-center text-[#0D0C0A] mb-4">
                <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C11.5 5 9 8.5 6 9.5c3 1 5 4.5 6 7.5 1-3 3-6.5 6-7.5-3-1-5-4.5-6-7.5zm0 18c-1.5-2.5-4-3-6-3.5 2-.5 4.5-1 6-3.5 1.5 2.5 4 3 6 3.5-2 .5-4.5 1-6 3.5z"/>
                </svg>
            </div>
            <h2 class="text-2xl font-bold tracking-tight">Create your account</h2>
            <p class="mt-1 text-sm text-[#FAF8F5]/60">Join Tanzania's leading digital trade ecosystem</p>
        </div>

        <!-- Luxury Role Tabs -->
        <div class="flex p-1 rounded-xl bg-[#13110E] border border-[#FAF8F5]/5 mt-6">
            <button type="button" onclick="switchTab('customer')" id="tab-customer" 
                class="flex-1 text-center py-2.5 text-xs font-semibold rounded-lg transition-all duration-300 bg-[#C5A85A] text-[#0D0C0A]">
                Customer
            </button>
            <button type="button" onclick="switchTab('vendor')" id="tab-vendor" 
                class="flex-1 text-center py-2.5 text-xs font-semibold rounded-lg transition-all duration-300 text-[#FAF8F5]/60 hover:text-[#FAF8F5]">
                Vendor
            </button>
            <button type="button" onclick="switchTab('agent')" id="tab-agent" 
                class="flex-1 text-center py-2.5 text-xs font-semibold rounded-lg transition-all duration-300 text-[#FAF8F5]/60 hover:text-[#FAF8F5]">
                Agent
            </button>
        </div>

        <!-- Panel 1: Customer (Direct Form) -->
        <div id="panel-customer" class="transition-all duration-300 block">
            <form class="space-y-5" action="{{ route('register') }}" method="POST">
                @csrf
                
                <div class="space-y-4">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-[#FAF8F5]/70 mb-1.5">Full Name</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-[#FAF8F5]/40">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input id="name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}"
                                class="block w-full pl-10 pr-4 py-3 bg-[#13110E] border border-[#FAF8F5]/15 rounded-xl text-sm placeholder-[#FAF8F5]/30 focus:outline-none focus:border-[#C5A85A] focus:ring-1 focus:ring-[#C5A85A] transition"
                                placeholder="Your Name">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-[#FAF8F5]/70 mb-1.5">Email Address</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-[#FAF8F5]/40">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}"
                                class="block w-full pl-10 pr-4 py-3 bg-[#13110E] border border-[#FAF8F5]/15 rounded-xl text-sm placeholder-[#FAF8F5]/30 focus:outline-none focus:border-[#C5A85A] focus:ring-1 focus:ring-[#C5A85A] transition"
                                placeholder="name@domain.com">
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-[#FAF8F5]/70 mb-1.5">Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-[#FAF8F5]/40">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input id="password" name="password" type="password" autocomplete="new-password" required
                                class="block w-full pl-10 pr-4 py-3 bg-[#13110E] border border-[#FAF8F5]/15 rounded-xl text-sm placeholder-[#FAF8F5]/30 focus:outline-none focus:border-[#C5A85A] focus:ring-1 focus:ring-[#C5A85A] transition"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-xs font-semibold uppercase tracking-wider text-[#FAF8F5]/70 mb-1.5">Confirm Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-[#FAF8F5]/40">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="block w-full pl-10 pr-4 py-3 bg-[#13110E] border border-[#FAF8F5]/15 rounded-xl text-sm placeholder-[#FAF8F5]/30 focus:outline-none focus:border-[#C5A85A] focus:ring-1 focus:ring-[#C5A85A] transition"
                                placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit"
                        class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl text-sm font-semibold text-[#0D0C0A] bg-[#C5A85A] hover:bg-[#C5A85A]/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0D0C0A] focus:ring-[#C5A85A] shadow-md transition duration-200">
                        Create Account
                    </button>
                </div>
            </form>
        </div>

        <!-- Panel 2: Vendor Promo Card -->
        <div id="panel-vendor" class="transition-all duration-300 hidden space-y-6">
            <div class="p-6 rounded-2xl bg-[#13110E] border border-[#FAF8F5]/5 space-y-4">
                <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center">
                    <i class="fa-solid fa-store text-lg"></i>
                </div>
                <h3 class="text-lg font-bold">LotusRise Wholesaler Program</h3>
                <p class="text-xs text-[#FAF8F5]/70 leading-relaxed">
                    Gain direct access to thousands of regional customers, manage digital products, issue electronic tax receipts, and automate bulk deliveries across Tanzania.
                </p>
                <div class="space-y-2 pt-2">
                    <div class="flex items-center gap-2 text-xs text-[#FAF8F5]/80">
                        <i class="fa-solid fa-check text-emerald-500"></i>
                        <span>Zero setup fee for wholesale merchants</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-[#FAF8F5]/80">
                        <i class="fa-solid fa-check text-emerald-500"></i>
                        <span>Integrated cargo carrier pick-up</span>
                    </div>
                </div>
            </div>
            
            <a href="{{ route('vendors') }}#registration" 
                class="w-full flex justify-center items-center gap-2 py-4 px-4 rounded-xl text-sm font-semibold text-[#0D0C0A] bg-[#C5A85A] hover:bg-[#C5A85A]/90 transition duration-200">
                <span>Start Merchant Application</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

        <!-- Panel 3: Agent Promo Card -->
        <div id="panel-agent" class="transition-all duration-300 hidden space-y-6">
            <div class="p-6 rounded-2xl bg-[#13110E] border border-[#FAF8F5]/5 space-y-4">
                <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center">
                    <i class="fa-solid fa-user-tie text-lg"></i>
                </div>
                <h3 class="text-lg font-bold">LotusRise Agent Network</h3>
                <p class="text-xs text-[#FAF8F5]/70 leading-relaxed">
                    Represent LotusRise in your region. Help local buyers coordinate purchases, verify upcountry vendors, route transactions, and earn guaranteed weekly commissions.
                </p>
                <div class="space-y-2 pt-2">
                    <div class="flex items-center gap-2 text-xs text-[#FAF8F5]/80">
                        <i class="fa-solid fa-check text-emerald-500"></i>
                        <span>Flexible weekly & monthly commission plans</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-[#FAF8F5]/80">
                        <i class="fa-solid fa-check text-emerald-500"></i>
                        <span>Marketing materials & digital tools provided</span>
                    </div>
                </div>
            </div>
            
            <a href="{{ route('agents') }}#registration" 
                class="w-full flex justify-center items-center gap-2 py-4 px-4 rounded-xl text-sm font-semibold text-[#0D0C0A] bg-[#C5A85A] hover:bg-[#C5A85A]/90 transition duration-200">
                <span>Start Agent Application</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

        <!-- Link back to login -->
        <div class="text-center pt-2 border-t border-[#FAF8F5]/10">
            <span class="text-xs text-[#FAF8F5]/60">Already have an account? </span>
            <a href="{{ route('login') }}" class="text-xs text-[#C5A85A] font-semibold hover:underline">Sign In</a>
        </div>
        
    </div>
</div>
@endsection

@section('scripts')
<script>
    function switchTab(role) {
        // Update tabs styling
        const roles = ['customer', 'vendor', 'agent'];
        roles.forEach(r => {
            const tab = document.getElementById(`tab-${r}`);
            const panel = document.getElementById(`panel-${r}`);
            
            if (r === role) {
                tab.classList.add('bg-[#C5A85A]', 'text-[#0D0C0A]');
                tab.classList.remove('text-[#FAF8F5]/60');
                
                panel.classList.remove('hidden');
                panel.classList.add('block');
            } else {
                tab.classList.remove('bg-[#C5A85A]', 'text-[#0D0C0A]');
                tab.classList.add('text-[#FAF8F5]/60');
                
                panel.classList.add('hidden');
                panel.classList.remove('block');
            }
        });
    }
</script>
@endsection
