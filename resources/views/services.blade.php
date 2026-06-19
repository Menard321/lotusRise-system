@extends('layouts.app')

@section('title', 'Our Services — LotusRise Global')

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-20 border-b border-[#C5A85A]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">Our Services</h1>
        <p class="text-base text-white/60 max-w-xl mx-auto">Explore how we integrate digital platforms, bulk procurement, and upcountry shipping networks.</p>
    </div>
</section>

<!-- Section 1: Marketplace -->
<section id="marketplace" class="py-24 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Commerce</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0D0C0A]">LotusRise Marketplace</h2>
                <p class="text-base text-[#1D1B18]/70 leading-relaxed">
                    Our digital marketplace connects retail business owners directly with verified wholesalers in Dar es Salaam. We eliminate intermediates, ensuring transparent wholesale prices.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                    <div class="flex gap-3"><i class="fa-solid fa-list-check text-[#C5A85A] mt-1"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Product Listings</span><p class="text-xs text-gray-500 mt-0.5">Explore real-time bulk prices across categories.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-store text-[#C5A85A] mt-1"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Vendor Stores</span><p class="text-xs text-gray-500 mt-0.5">Buy from audited and verified brand suppliers.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-file-invoice text-[#C5A85A] mt-1"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Order Management</span><p class="text-xs text-gray-500 mt-0.5">Track items from payment to final regional delivery.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-headset text-[#C5A85A] mt-1"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Customer Support</span><p class="text-xs text-gray-500 mt-0.5">Dedicated agents to mediate disputes.</p></div></div>
                </div>
            </div>
            <div class="bg-white p-8 rounded-3xl border border-[#1D1B18]/5 shadow-sm space-y-6">
                <span class="text-xs font-bold text-[#C5A85A] uppercase tracking-wider block">Marketplace Core Features</span>
                <div class="space-y-4">
                    <div class="p-4 rounded-xl bg-gray-50 border border-gray-100 flex items-start gap-3">
                        <i class="fa-solid fa-shield-halved text-[#C5A85A] mt-1 text-lg"></i>
                        <div>
                            <span class="font-bold text-sm text-[#0D0C0A]">Escrow Protection</span>
                            <p class="text-xs text-gray-500 mt-1">Funds are released to the vendor only when you verify package delivery upcountry.</p>
                        </div>
                    </div>
                    <div class="p-4 rounded-xl bg-gray-50 border border-gray-100 flex items-start gap-3">
                        <i class="fa-solid fa-percent text-[#C5A85A] mt-1 text-lg"></i>
                        <div>
                            <span class="font-bold text-sm text-[#0D0C0A]">Unified Invoicing</span>
                            <p class="text-xs text-gray-500 mt-1">Combine multiple store products into a single shipping invoice to save money.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Logistics -->
<section id="logistics" class="py-24 bg-[#FAF8F5] border-t border-[#1D1B18]/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="lg:order-2 space-y-6">
                <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Fulfillment</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0D0C0A]">LotusRise Logistics</h2>
                <p class="text-base text-[#1D1B18]/70 leading-relaxed">
                    Moving cargo safely across Tanzanian regions is our specialty. We operate consolidated logistics pathways from Kariakoo, Dar es Salaam upcountry.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                    <div class="flex gap-3"><i class="fa-solid fa-map-location-dot text-[#C5A85A] mt-1"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Kariakoo Procurement</span><p class="text-xs text-gray-500 mt-0.5">Sourcing assistants gather items direct from markets.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-warehouse text-[#C5A85A] mt-1"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Consolidation Hubs</span><p class="text-xs text-gray-500 mt-0.5">Safe storage packaging for regional transits.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-route text-[#C5A85A] mt-1"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Upcountry Delivery</span><p class="text-xs text-gray-500 mt-0.5">Scheduled shipments to Mwanza, Arusha, Mbeya, etc.</p></div></div>
                    <div class="flex gap-3"><i class="fa-solid fa-ferry text-[#C5A85A] mt-1"></i><div><span class="font-bold text-sm text-[#0D0C0A]">Zanzibar Shipments</span><p class="text-xs text-gray-500 mt-0.5">Fast marine cargo transit to Zanzibar ports.</p></div></div>
                </div>
            </div>
            <div class="lg:order-1 bg-white p-8 rounded-3xl border border-[#1D1B18]/5 shadow-sm space-y-6">
                <span class="text-xs font-bold text-[#C5A85A] uppercase tracking-wider block">Logistics Process Flow</span>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="w-8 h-8 rounded-full bg-[#C5A85A] text-[#0D0C0A] flex items-center justify-center shrink-0 font-bold text-xs">A</div>
                        <div>
                            <span class="font-bold text-sm text-[#0D0C0A]">Consolidation at Dar Hub</span>
                            <p class="text-xs text-gray-500 mt-0.5">Wholesalers ship packages to our central Dar es Salaam warehouse.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-8 h-8 rounded-full bg-[#C5A85A] text-[#0D0C0A] flex items-center justify-center shrink-0 font-bold text-xs">B</div>
                        <div>
                            <span class="font-bold text-sm text-[#0D0C0A]">Security Inspection</span>
                            <p class="text-xs text-gray-500 mt-0.5">Items are verified against order manifests to prevent mistakes.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-8 h-8 rounded-full bg-[#C5A85A] text-[#0D0C0A] flex items-center justify-center shrink-0 font-bold text-xs">C</div>
                        <div>
                            <span class="font-bold text-sm text-[#0D0C0A]">Transit & Local Pickup</span>
                            <p class="text-xs text-gray-500 mt-0.5">Goods shipped via partner carriers. Customers pick up at region agent store.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Vendor Solutions -->
<section id="vendor-solutions" class="py-24 bg-[#FAF8F5] border-t border-[#1D1B18]/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Growth</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0D0C0A]">Vendor Solutions</h2>
                <p class="text-base text-[#1D1B18]/70 leading-relaxed">
                    We help local shops and major wholesale suppliers establish a professional digital presence. Our custom vendor tools make uploading inventory and tracking revenue highly efficient.
                </p>
                <div class="pt-4">
                    <a href="{{ route('vendors') }}" class="px-6 py-3.5 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-[#FAF8F5] font-bold rounded-xl shadow-md transition duration-200">
                        Become a Vendor
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
                    <i class="fa-solid fa-chart-line text-[#C5A85A] text-xl"></i>
                    <span class="block font-bold text-[#0D0C0A] text-sm">Sales Analytics</span>
                    <p class="text-xs text-gray-500 leading-relaxed">Detailed graph metrics and sales breakdowns on your custom panel dashboard.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
                    <i class="fa-solid fa-cubes text-[#C5A85A] text-xl"></i>
                    <span class="block font-bold text-[#0D0C0A] text-sm">Inventory Manager</span>
                    <p class="text-xs text-gray-500 leading-relaxed">Quickly update stock values and avoid dispatch errors.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
                    <i class="fa-solid fa-bullhorn text-[#C5A85A] text-xl"></i>
                    <span class="block font-bold text-[#0D0C0A] text-sm">Marketing Tools</span>
                    <p class="text-xs text-gray-500 leading-relaxed">Run promotions and discounts directly to our agents and customers.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-2">
                    <i class="fa-solid fa-shield text-[#C5A85A] text-xl"></i>
                    <span class="block font-bold text-[#0D0C0A] text-sm">TIN Verification</span>
                    <p class="text-xs text-gray-500 leading-relaxed">Build customer trust with our platform-approved badge.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Agent Network -->
<section id="agent-network" class="py-24 bg-[#0D0C0A] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="lg:order-2 space-y-6">
                <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Opportunities</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Agent Network Operations</h2>
                <p class="text-base text-white/60 leading-relaxed">
                    Our agent network is the heartbeat of our trust network. Agents recruit local stores as vendors, register customer leads, and earn substantial commission payouts on all transactions.
                </p>
                <div class="pt-4">
                    <a href="{{ route('agents') }}" class="px-6 py-3.5 bg-[#C5A85A] hover:bg-[#C5A85A]/90 text-[#0D0C0A] font-bold rounded-xl shadow-md transition duration-200">
                        Become an Agent
                    </a>
                </div>
            </div>
            <div class="lg:order-1 grid grid-cols-1 sm:grid-cols-2 gap-6 text-[#0D0C0A]">
                <div class="bg-[#FAF8F5] p-6 rounded-2xl space-y-2 border border-white/10">
                    <i class="fa-solid fa-coins text-[#C5A85A] text-xl"></i>
                    <span class="block font-bold text-[#0D0C0A] text-sm">Weekly Commissions</span>
                    <p class="text-xs text-gray-500">Earn up to 5% commission on all bulk orders placed through your code.</p>
                </div>
                <div class="bg-[#FAF8F5] p-6 rounded-2xl space-y-2 border border-white/10">
                    <i class="fa-solid fa-graduation-cap text-[#C5A85A] text-xl"></i>
                    <span class="block font-bold text-[#0D0C0A] text-sm">Training Programs</span>
                    <p class="text-xs text-gray-500">Regular training bootcamps on entrepreneurship and digital sales.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
