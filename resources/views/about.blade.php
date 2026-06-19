@extends('layouts.app')

@section('title', 'About Us — LotusRise Global')

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-20 border-b border-[#C5A85A]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight">About LotusRise Global</h1>
        <p class="text-base text-white/60 max-w-xl mx-auto">Building the infrastructure of trust, logistics, and digital commerce across Tanzania and East Africa.</p>
    </div>
</section>

<!-- Section Our Story -->
<section id="story" class="py-24 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-6">
                <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Our Background</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0D0C0A]">How We Started</h2>
                <p class="text-base text-[#1D1B18]/70 leading-relaxed">
                    LotusRise Global was founded in Tanzania to address a fundamental commerce challenge: upcountry retailers spend too much time, risk, and capital traveling to major commerce hubs like Kariakoo in Dar es Salaam to source stock.
                </p>
                <p class="text-base text-[#1D1B18]/70 leading-relaxed">
                    By developing a unified digital platform combining secure escrow-protected wholesale ordering with optimized consolidation logistics, and deploying a local network of verified agents, we have eliminated intermediate risk. Retailers can now purchase stock confidently from their own shops, knowing delivery is guaranteed.
                </p>
            </div>
            <div class="relative bg-gradient-to-tr from-[#0D0C0A] to-[#1a1815] p-8 sm:p-12 rounded-3xl border border-[#C5A85A]/15 shadow-xl text-white">
                <span class="text-[#C5A85A] text-xs font-bold uppercase tracking-wider block mb-2">Platform Goal</span>
                <h3 class="text-xl font-bold mb-4">Connecting Tanzania's Commercial Ecosystem</h3>
                <p class="text-sm text-white/60 leading-relaxed mb-6">
                    "Our objective is to simplify procurement. We empower the small vendor with global-standard CRM tools and safe cargo routes, while giving young local agents entrepreneurship opportunities."
                </p>
                <span class="block text-xs font-semibold text-[#C5A85A]">— Menard L. Rose, Founder</span>
            </div>
        </div>
    </div>
</section>

<!-- Section Vision & Mission -->
<section id="vision" class="py-24 bg-[#FAF8F5] border-t border-[#1D1B18]/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            <!-- Vision -->
            <div class="bg-white p-10 rounded-3xl border border-[#1D1B18]/5 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center mb-6"><i class="fa-solid fa-eye text-lg"></i></div>
                <h3 class="text-2xl font-extrabold text-[#0D0C0A]">Our Vision</h3>
                <p class="text-base text-[#1D1B18]/75 leading-relaxed">
                    To become Tanzania's leading digital commerce and logistics ecosystem, connecting businesses and customers through robust, reliable, and accessible technology.
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-white p-10 rounded-3xl border border-[#1D1B18]/5 shadow-sm space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center mb-6"><i class="fa-solid fa-paper-plane text-lg"></i></div>
                <h3 class="text-2xl font-extrabold text-[#0D0C0A]">Our Mission</h3>
                <p class="text-base text-[#1D1B18]/75 leading-relaxed">
                    To simplify commerce, sourcing, delivery, and business growth through innovative digital solutions that create sustainable opportunities for all stakeholders.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Section Leadership Team -->
<<section id="team" class="py-24 bg-[#FAF8F5] border-t border-[#1D1B18]/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Leadership</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0D0C0A]">Meet Our Leadership Team</h2>
            <p class="text-base text-[#1D1B18]/70">The dedicated management driving product execution and cargo logistics across East Africa.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-3xl overflow-hidden border border-[#1D1B18]/5 shadow-sm text-center flex flex-col group">
                <div class="aspect-square bg-gray-100 relative overflow-hidden shrink-0">
                    <img src="/images/menard.jpg" alt="Menard Joseph" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold text-[#0D0C0A]">Menard Joseph</h4>
                    <span class="text-xs text-[#C5A85A] font-semibold mt-1 block">IT</span>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden border border-[#1D1B18]/5 shadow-sm text-center flex flex-col group">
                <div class="aspect-square bg-gray-100 relative overflow-hidden shrink-0">
                    <img src="/images/po.jpg" alt="Team Member Name" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold text-[#0D0C0A]">Team Member Name</h4>
                    <span class="text-xs text-[#C5A85A] font-semibold mt-1 block">Operations</span>
                </div>
            </div>

            <div class="bg-white rounded-3xl overflow-hidden border border-[#1D1B18]/5 shadow-sm text-center flex flex-col group">
                <div class="aspect-square bg-gray-100 relative overflow-hidden shrink-0">
                    <img src="/images/team3.jpg" alt="Team Member Name" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-bold text-[#0D0C0A]">Team Member Name</h4>
                    <span class="text-xs text-[#C5A85A] font-semibold mt-1 block">Logistics Management</span>
                </div>
            </div>

        </div> </div>
</section>

<!-- Section Strategic Partners -->
<section id="partners" class="py-24 bg-[#0D0C0A] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-12">
        <div class="space-y-4">
            <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Strategic Collaborators</span>
            <h2 class="text-3xl font-extrabold tracking-tight">Our Partners</h2>
            <p class="text-sm text-white/50 max-w-md mx-auto">We work alongside leading logistics carriers, mobile payment gateways, and banking groups to deliver trust.</p>
        </div>
        
        <div class="flex flex-wrap justify-center items-center gap-12 opacity-60">
            <div class="text-xl font-extrabold tracking-wider text-white">TANZANIA POSTS</div>
            <div class="text-xl font-extrabold tracking-wider text-white">M-PESA ESCROW</div>
            <div class="text-xl font-extrabold tracking-wider text-white">NMB BANK</div>
            <div class="text-xl font-extrabold tracking-wider text-white">CRDB BANK</div>
        </div>
    </div>
</section>

<!-- Section FAQs -->
<section id="faqs" class="py-24 bg-[#FAF8F5]">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 space-y-4">
            <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Got Questions?</span>
            <h2 class="text-3xl font-extrabold text-[#0D0C0A]">Frequently Asked Questions</h2>
            <p class="text-sm text-[#1D1B18]/70">Find rapid answers to standard operational and partner inquiries.</p>
        </div>

        <div class="space-y-4">
            @foreach($faqs as $index => $faq)
                <details class="bg-white rounded-2xl border border-[#1D1B18]/5 shadow-sm p-6 group focus-within:ring-1 focus-within:ring-[#C5A85A] transition duration-200">
                    <summary class="flex justify-between items-center font-bold text-base text-[#0D0C0A] cursor-pointer select-none focus:outline-none">
                        <span>{{ $faq['q'] }}</span>
                        <i class="fa-solid fa-chevron-down text-xs text-[#1D1B18]/50 group-open:rotate-180 transition-transform duration-200"></i>
                    </summary>
                    <p class="mt-4 text-sm text-[#1D1B18]/70 leading-relaxed border-t border-gray-100 pt-4">
                        {{ $faq['a'] }}
                    </p>
                </details>
            @endforeach
        </div>
    </div>
</section>

@endsection
