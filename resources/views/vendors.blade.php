@extends('layouts.app')

@section('title', 'Join as a Vendor — LotusRise Global')

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-16 border-b border-[#C5A85A]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <h1 class="text-4xl font-extrabold tracking-tight">Become a Verified LotusRise Vendor</h1>
        <p class="text-base text-white/60 max-w-xl mx-auto">Access a massive nationwide network of retail buyers and agents with automated logistics consolidation.</p>
    </div>
</section>

<section class="py-20 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            
            <!-- Left Info Column -->
            <div class="lg:col-span-5 space-y-8">
                <div class="space-y-4">
                    <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Why Partner With Us</span>
                    <h2 class="text-3xl font-bold text-[#0D0C0A]">Grow Your Wholesale Trade</h2>
                    <p class="text-sm text-[#1D1B18]/70 leading-relaxed">
                        We resolve the biggest headache of wholesale supply: regional distribution and collection risk. Listed products are made visible to hundreds of agents upcountry who coordinate order aggregates.
                    </p>
                </div>

                <!-- Benefits List -->
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-emerald-500 text-lg mt-0.5"></i>
                        <div>
                            <span class="font-bold text-sm text-[#0D0C0A]">Guaranteed Escrow Payments</span>
                            <p class="text-xs text-[#1D1B18]/60 mt-0.5">Never worry about bad checks or delayed cash flow. Funds are cleared before shipping and held in escrow.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-emerald-500 text-lg mt-0.5"></i>
                        <div>
                            <span class="font-bold text-sm text-[#0D0C0A]">Consolidated Shipping pickup</span>
                            <p class="text-xs text-[#1D1B18]/60 mt-0.5">LotusRise Logistics coordinates direct courier pickups from your store, consolidating freight at our Dar es Salaam warehouses.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-emerald-500 text-lg mt-0.5"></i>
                        <div>
                            <span class="font-bold text-sm text-[#0D0C0A]">Stock and Pricing Tools</span>
                            <p class="text-xs text-[#1D1B18]/60 mt-0.5">Access a dashboard to track inventory thresholds, orders, and sales reports in real time.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Registration Form Column -->
            <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-[#1D1B18]/5 shadow-lg">
                <span class="text-lg font-bold text-[#0D0C0A] block mb-1">Vendor Application Form</span>
                <p class="text-xs text-[#1D1B18]/50 mb-6">Provide registered company credentials. Platform admins review all submissions within 24 hours.</p>

                <form action="{{ route('vendors.register') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Business Name -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Business Name</label>
                            <input type="text" name="business_name" required value="{{ old('business_name') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                        <!-- Owner Name -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Owner / Director Name</label>
                            <input type="text" name="owner_name" required value="{{ old('owner_name') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- TIN -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">TIN (Taxpayer Identification Number)</label>
                            <input type="text" name="tin" required placeholder="XXX-XXX-XXX" value="{{ old('tin') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                        <!-- VRN -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">VRN (VAT Registration Number - Optional)</label>
                            <input type="text" name="vrn" placeholder="Optional" value="{{ old('vrn') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Phone -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Phone Number</label>
                            <input type="text" name="phone_number" required placeholder="+255 7XX XXX XXX" value="{{ old('phone_number') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                        <!-- Email -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Business Email Address</label>
                            <input type="email" name="email" required value="{{ old('email') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Location -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Physical Location</label>
                            <input type="text" name="location" required placeholder="e.g. Kariakoo Market, Dar es Salaam" value="{{ old('location') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                        <!-- Business Category -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Business Category</label>
                            <select name="business_category" required
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A] text-gray-700">
                                <option value="">Select Category</option>
                                <option value="Electronics & Home Appliances">Electronics & Home Appliances</option>
                                <option value="Fashion & Textiles">Fashion & Textiles</option>
                                <option value="Building & Hardware Materials">Building & Hardware Materials</option>
                                <option value="Agricultural Tools & Inputs">Agricultural Tools & Inputs</option>
                                <option value="Cosmetics & Personal Care">Cosmetics & Personal Care</option>
                            </select>
                        </div>
                    </div>

                    <!-- Website URL -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Website URL (Optional)</label>
                        <input type="url" name="website" placeholder="https://example.com" value="{{ old('website') }}"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>

                    <!-- Business Description -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Business Description</label>
                        <textarea name="business_description" required rows="3" placeholder="Brief details about the products you supply and wholesale capacities..."
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]"></textarea>
                    </div>

                    <!-- Create Password -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Set Password (For Dashboard Login)</label>
                        <input type="password" name="password" required placeholder="Minimum 6 characters"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center py-3.5 px-4 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-white font-bold rounded-xl shadow-md transition duration-200">
                        Submit Registration Application
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
