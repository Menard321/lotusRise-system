@extends('layouts.app')

@section('title', 'Join as an Agent — LotusRise Global')

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-16 border-b border-[#C5A85A]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <h1 class="text-4xl font-extrabold tracking-tight">Become a LotusRise Agent</h1>
        <p class="text-base text-white/60 max-w-xl mx-auto">Earn income, help local businesses source products safely, and expand commerce networks in your region.</p>
    </div>
</section>

<!-- Why Become an Agent -->
<section class="py-20 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="space-y-6">
                <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Earn & Learn</span>
                <h2 class="text-3xl font-bold text-[#0D0C0A]">Empower Your Local Community</h2>
                <p class="text-sm text-[#1D1B18]/70 leading-relaxed">
                    LotusRise agents are independent local representatives who connect shopkeepers and individual buyers upcountry with Kariakoo wholesale suppliers. By managing orders and resolving customer questions, you become the primary contact of trust in your district.
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                    <div class="flex gap-3"><i class="fa-solid fa-sack-dollar text-[#C5A85A] text-lg mt-0.5"></i><div><span class="font-bold text-sm text-[#0D0C0A]">High Commissions</span><p class="text-xs text-gray-500 mt-0.5">Earn commission on every wholesale cargo shipment routed through your code.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-graduation-cap text-[#C5A85A] text-lg mt-0.5"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Professional Training</span><p class="text-xs text-gray-500 mt-0.5">Learn digital sales, customer relations, and business management in our bootcamps.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-mobile-screen-button text-[#C5A85A] text-lg mt-0.5"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Digital Tools</span><p class="text-xs text-gray-500 mt-0.5">Track registrations, subscriptions, and commissions on your custom dashboard.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-handshake text-[#C5A85A] text-lg mt-0.5"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Networking</span><p class="text-xs text-gray-500 mt-0.5">Connect with bulk suppliers, vendors, and regional business leaders.</p></div></div>
                </div>
            </div>

            <!-- Dashboard Mockup Image -->
            <div class="bg-gradient-to-tr from-[#0d0c0a] to-[#1a1712] p-8 sm:p-12 rounded-3xl border border-[#C5A85A]/15 shadow-xl text-white flex flex-col gap-6">
                <span class="text-xs font-bold text-[#C5A85A] uppercase tracking-wider block">Agent Earning Potential</span>
                <div class="space-y-4">
                    <div class="flex justify-between items-center bg-white/5 p-4 rounded-xl border border-white/5">
                        <span class="text-xs">Active Registered Wholesalers</span>
                        <span class="text-sm font-bold text-[#C5A85A]">8 Merchants</span>
                    </div>
                    <div class="flex justify-between items-center bg-white/5 p-4 rounded-xl border border-white/5">
                        <span class="text-xs">Total Group Orders Routed</span>
                        <span class="text-sm font-bold text-[#C5A85A]">TZS 4.2M</span>
                    </div>
                    <div class="flex justify-between items-center bg-white/5 p-4 rounded-xl border border-white/5">
                        <span class="text-xs">Your Net Commission (5%)</span>
                        <span class="text-sm font-bold text-emerald-400">TZS 210,000</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Subscription Packages Section -->
<section id="packages" class="py-20 bg-[#FAF8F5] border-t border-[#1D1B18]/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Pricing</span>
            <h2 class="text-3xl font-bold text-[#0D0C0A]">Subscription Packages</h2>
            <p class="text-sm text-[#1D1B18]/70">Choose an agent package to activate your network lead generation panel. Higher periods offer reduced fees.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($packages as $pkg)
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col justify-between hover:border-[#C5A85A] transition duration-300">
                    <div class="space-y-6">
                        <div>
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">{{ $pkg['name'] }}</span>
                            <span class="text-2xl font-extrabold text-[#0D0C0A] block mt-2">{{ $pkg['price'] }}</span>
                            <span class="text-xs text-gray-500">per {{ $pkg['period'] }}</span>
                        </div>
                        <ul class="space-y-2.5 text-xs text-gray-600">
                            @foreach($pkg['features'] as $f)
                                <li class="flex items-center gap-2">
                                    <i class="fa-solid fa-check text-emerald-500 shrink-0"></i>
                                    <span>{{ $f }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="#registration" onclick="selectPackage('{{ $pkg['id'] }}')" class="mt-8 block text-center py-3 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-white text-xs font-bold rounded-xl transition duration-200">
                        Choose Package
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Registration Form Section -->
<section id="registration" class="py-20 bg-[#FAF8F5] border-t border-[#1D1B18]/5">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 sm:p-10 rounded-3xl border border-[#1D1B18]/5 shadow-lg space-y-6">
            <div class="text-center space-y-1">
                <span class="text-lg font-bold text-[#0D0C0A] block">Agent Sign Up Form</span>
                <p class="text-xs text-gray-500">Become a certified partner and start earning commissions upcountry.</p>
            </div>

            <form action="{{ route('agents.register') }}" method="POST" class="space-y-5">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Full Name -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Full Name</label>
                        <input type="text" name="full_name" required value="{{ old('full_name') }}"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>
                    <!-- Phone -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Phone Number</label>
                        <input type="text" name="phone_number" required placeholder="+255 6XX XXX XXX" value="{{ old('phone_number') }}"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Email -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Email Address</label>
                        <input type="email" name="email" required value="{{ old('email') }}"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                    <!-- Occupation -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Current Occupation</label>
                        <input type="text" name="occupation" required placeholder="e.g. Shop Owner, Student" value="{{ old('occupation') }}"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Region -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Region</label>
                        <select name="region" required
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A] text-gray-700">
                            <option value="">Select Region</option>
                            <option value="Dar es Salaam">Dar es Salaam</option>
                            <option value="Mwanza">Mwanza</option>
                            <option value="Arusha">Arusha</option>
                            <option value="Dodoma">Dodoma</option>
                            <option value="Mbeya">Mbeya</option>
                            <option value="Zanzibar">Zanzibar</option>
                        </select>
                    </div>
                    <!-- District -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">District</label>
                        <input type="text" name="district" required placeholder="e.g. Nyamagana, Ilala, Chuni" value="{{ old('district') }}"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Preferred Package -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Preferred Package</label>
                        <select name="preferred_package" id="preferred_package" required
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A] text-gray-700">
                            <option value="">Select Package</option>
                            <option value="weekly">Weekly (TZS 10,000)</option>
                            <option value="monthly">Monthly (TZS 35,000)</option>
                            <option value="six_months">Six Months (TZS 180,000)</option>
                            <option value="annual">Annual (TZS 320,000)</option>
                        </select>
                    </div>
                    <!-- Password -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Set Password (For Dashboard Login)</label>
                        <input type="password" name="password" required placeholder="Minimum 6 characters"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>
                </div>

                <button type="submit"
                    class="w-full flex justify-center py-3.5 px-4 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-white font-bold rounded-xl shadow-md transition duration-200">
                    Apply & Proceed to Subscription Payment Simulation
                </button>
            </form>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    function selectPackage(packageId) {
        document.getElementById('preferred_package').value = packageId;
        const formSection = document.getElementById('registration');
        formSection.scrollIntoView({ behavior: 'smooth' });
    }
</script>
@endsection
