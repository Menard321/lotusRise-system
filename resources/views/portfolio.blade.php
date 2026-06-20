@extends('layouts.app')

@section('title', 'Portfolio & Success Stories — LotusRise Global')

@section('content')

<!-- Styles & Fonts for Editorial Luxury Feel -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap');
    
    .font-serif-editorial {
        font-family: 'Cormorant Garamond', Georgia, serif;
    }
    
    /* Smooth transition for filter effects */
    .project-card {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Seamless Infinite Marquee Scroll */
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee-loop {
        display: flex;
        width: max-content;
        animation: marquee 30s linear infinite;
    }
    .animate-marquee-loop:hover {
        animation-play-state: paused;
    }
</style>

<div class="bg-[#FAF8F5] min-h-screen text-[#13110E] pb-24">

    <!-- 1. HEADER BANNER -->
    <section class="relative pt-24 pb-16 text-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-6">
            <!-- Isolated Pill-Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-[#C5A85A]/30 bg-[#C5A85A]/5 text-[#C5A85A] text-[10px] uppercase tracking-[0.25em] font-bold mx-auto">
                <span class="w-1.5 h-1.5 rounded-full bg-[#C5A85A] animate-pulse"></span>
                Ecosystem Showcase
            </div>
            
            <!-- Headline -->
            <h1 class="text-4xl sm:text-6xl font-light font-serif-editorial text-[#0D0C0A] tracking-tight leading-[1.1] max-w-4xl mx-auto">
                Portfolio & Success Stories
            </h1>
            
            <!-- Subtitle -->
            <p class="text-sm sm:text-base text-[#13110E]/70 max-w-2xl mx-auto leading-relaxed font-sans font-light">
                A showcasing of dynamic regional trade partnerships, innovative logistics networks, and scalable digital solutions driving growth across East Africa.
            </p>
        </div>
    </section>

    <!-- 2. IMPACT METRICS ROW -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Stat 1 -->
            <div class="border border-[#C5A85A]/15 bg-white p-8 rounded-2xl text-center space-y-2 hover:border-[#C5A85A]/35 transition duration-300 shadow-sm">
                <div class="text-3xl sm:text-4xl font-normal font-serif-editorial text-[#C5A85A] tracking-tight">1,000+</div>
                <div class="text-[10px] uppercase tracking-[0.15em] text-[#13110E]/60 font-bold font-sans">Verified Vendors</div>
            </div>
            
            <!-- Stat 2 -->
            <div class="border border-[#C5A85A]/15 bg-white p-8 rounded-2xl text-center space-y-2 hover:border-[#C5A85A]/35 transition duration-300 shadow-sm">
                <div class="text-3xl sm:text-4xl font-normal font-serif-editorial text-[#C5A85A] tracking-tight">10+</div>
                <div class="text-[10px] uppercase tracking-[0.15em] text-[#13110E]/60 font-bold font-sans">Trade Corridors</div>
            </div>
            
            <!-- Stat 3 -->
            <div class="border border-[#C5A85A]/15 bg-white p-8 rounded-2xl text-center space-y-2 hover:border-[#C5A85A]/35 transition duration-300 shadow-sm">
                <div class="text-3xl sm:text-4xl font-normal font-serif-editorial text-[#C5A85A] tracking-tight">25+</div>
                <div class="text-[10px] uppercase tracking-[0.15em] text-[#13110E]/60 font-bold font-sans">Fulfillment Hubs</div>
            </div>
            
            <!-- Stat 4 -->
            <div class="border border-[#C5A85A]/15 bg-white p-8 rounded-2xl text-center space-y-2 hover:border-[#C5A85A]/35 transition duration-300 shadow-sm">
                <div class="text-3xl sm:text-4xl font-normal font-serif-editorial text-[#C5A85A] tracking-tight">2M+</div>
                <div class="text-[10px] uppercase tracking-[0.15em] text-[#13110E]/60 font-bold font-sans">Tons Freight Moved</div>
            </div>
        </div>
    </section>

    <!-- 3. CORE PILLARS MATRIX (GRID CHIPS) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            
            <!-- Chip 1: Marketplace -->
            <button onclick="filterPillar('Marketplace')" id="btn-marketplace" class="pillar-chip bg-white border border-[#C5A85A]/20 hover:border-[#C5A85A] px-5 py-6 rounded-2xl flex flex-col items-center justify-center gap-3.5 transition duration-300 group shadow-sm text-center">
                <div class="w-12 h-12 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:scale-105 transition duration-300">
                    <i class="fa-solid fa-store text-lg"></i>
                </div>
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-[#0D0C0A]">Marketplace</span>
            </button>
            
            <!-- Chip 2: Logistics -->
            <button onclick="filterPillar('Logistics')" id="btn-logistics" class="pillar-chip bg-white border border-[#C5A85A]/20 hover:border-[#C5A85A] px-5 py-6 rounded-2xl flex flex-col items-center justify-center gap-3.5 transition duration-300 group shadow-sm text-center">
                <div class="w-12 h-12 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:scale-105 transition duration-300">
                    <i class="fa-solid fa-truck-fast text-lg"></i>
                </div>
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-[#0D0C0A]">Logistics</span>
            </button>
            
            <!-- Chip 3: Vendor Solutions -->
            <button onclick="filterPillar('Vendor Solutions')" id="btn-vendor-solutions" class="pillar-chip bg-white border border-[#C5A85A]/20 hover:border-[#C5A85A] px-5 py-6 rounded-2xl flex flex-col items-center justify-center gap-3.5 transition duration-300 group shadow-sm text-center">
                <div class="w-12 h-12 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:scale-105 transition duration-300">
                    <i class="fa-solid fa-chart-pie text-lg"></i>
                </div>
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-[#0D0C0A]">Vendor Solutions</span>
            </button>
            
            <!-- Chip 4: Agent Network -->
            <button onclick="filterPillar('Agent Network')" id="btn-agent-network" class="pillar-chip bg-white border border-[#C5A85A]/20 hover:border-[#C5A85A] px-5 py-6 rounded-2xl flex flex-col items-center justify-center gap-3.5 transition duration-300 group shadow-sm text-center">
                <div class="w-12 h-12 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:scale-105 transition duration-300">
                    <i class="fa-solid fa-users-gear text-lg"></i>
                </div>
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-[#0D0C0A]">Agent Network</span>
            </button>
            
            <!-- Chip 5: Business Support Services -->
            <button onclick="filterPillar('Business Support Services')" id="btn-business-support" class="pillar-chip bg-white border border-[#C5A85A]/20 hover:border-[#C5A85A] px-5 py-6 rounded-2xl flex flex-col items-center justify-center gap-3.5 transition duration-300 group shadow-sm text-center col-span-2 sm:col-span-1">
                <div class="w-12 h-12 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:scale-105 transition duration-300">
                    <i class="fa-solid fa-handshake-angle text-lg"></i>
                </div>
                <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-[#0D0C0A]">Business Support</span>
            </button>

        </div>
    </section>

    <!-- 4. NAVIGATION NAVIGATION ROW (FILTER BUTTONS) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12">
        <div class="flex flex-wrap justify-center items-center gap-x-12 gap-y-4 border-b border-[#1D1B18]/5 pb-6">
            <button onclick="filterTab('projects', this)" class="tab-filter-btn text-xs uppercase tracking-[0.2em] font-bold pb-2 border-b-2 border-[#C5A85A] text-[#C5A85A] transition duration-200">
                Projects
            </button>
            <button onclick="filterTab('success-stories', this)" class="tab-filter-btn text-xs uppercase tracking-[0.2em] font-bold pb-2 border-b-2 border-transparent text-[#13110E]/60 hover:text-[#13110E] transition duration-200">
                Success Stories
            </button>
            <button onclick="filterTab('case-studies', this)" class="tab-filter-btn text-xs uppercase tracking-[0.2em] font-bold pb-2 border-b-2 border-transparent text-[#13110E]/60 hover:text-[#13110E] transition duration-200">
                Case Studies
            </button>
            <button onclick="filterTab('insights', this)" class="tab-filter-btn text-xs uppercase tracking-[0.2em] font-bold pb-2 border-b-2 border-transparent text-[#13110E]/60 hover:text-[#13110E] transition duration-200">
                Insights
            </button>
        </div>
    </section>

    <!-- 5. DYNAMIC PROJECTS GRID -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div id="projects-list-container" class="space-y-16">
            
            @php
                $categoryImages = [
                    'Marketplace' => '/images/portfolio_retail.png',
                    'Logistics' => '/images/portfolio_logistics.png',
                    'Vendor Solutions' => '/images/portfolio_finance.png',
                    'Agent Network' => '/images/portfolio_business.png',
                    'Business Support Services' => '/images/portfolio_business.png'
                ];
            @endphp
            
            @forelse($projects as $project)
                @php
                    $projectImage = $categoryImages[$project->category] ?? '/images/portfolio_business.png';
                @endphp
                <div data-category="{{ $project->category }}" class="project-card bg-white p-8 sm:p-12 rounded-[2rem] border border-[#1D1B18]/5 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-12 items-center hover:shadow-md transition duration-500">
                    
                    <!-- Left: Project Visual Mockup Frame -->
                    <div class="lg:col-span-5 relative overflow-hidden rounded-[1.5rem] bg-gray-50 border border-gray-100 aspect-[4/3] group-hover:scale-[1.02] transition duration-500 shadow-inner shrink-0">
                        <img src="{{ $projectImage }}" alt="{{ $project->title }}" class="absolute inset-0 w-full h-full object-cover">
                        <!-- Elegant Inner Gold Border Overlay -->
                        <div class="absolute inset-4 border border-white/20 rounded-[1rem] pointer-events-none"></div>
                    </div>
                    
                    <!-- Right: Info Panel -->
                    <div class="lg:col-span-7 space-y-6">
                        <!-- Category Badge & Status Indicator -->
                        <div class="flex items-center gap-4">
                            <span class="text-xs uppercase font-extrabold text-[#C5A85A] tracking-[0.2em]">{{ $project->category }}</span>
                            <div class="w-1 h-1 rounded-full bg-[#C5A85A]/40"></div>
                            <span class="text-[9px] uppercase font-bold tracking-widest text-[#13110E]/50 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 inline-block"></span>
                                Active Infrastructure
                            </span>
                        </div>
                        
                        <!-- Title (Editorial Serif) -->
                        <h2 class="text-2xl sm:text-3xl font-light font-serif-editorial text-[#0D0C0A] tracking-tight leading-tight">
                            {{ $project->title }}
                        </h2>
                        
                        <!-- Description -->
                        <p class="text-sm sm:text-base text-[#13110E]/70 leading-relaxed font-sans font-light">
                            {{ $project->description }}
                        </p>
                        
                        <!-- Accent Gold Thin Line -->
                        <hr class="border-[#C5A85A]/15 my-6">
                        
                        <!-- Impact Case Study Block -->
                        <div class="space-y-3">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-quote-left text-xs text-[#C5A85A]"></i>
                                <span class="text-[10px] uppercase font-bold tracking-widest text-[#0D0C0A]">Success Case Insight</span>
                            </div>
                            <blockquote class="text-sm text-[#13110E]/80 italic pl-4 border-l border-[#C5A85A]">
                                "{{ $project->case_study }}"
                            </blockquote>
                        </div>
                    </div>
                    
                </div>
            @empty
                <div class="text-center py-20 border border-[#C5A85A]/15 bg-white rounded-[2rem] space-y-4">
                    <i class="fa-solid fa-folder-open text-3xl text-[#C5A85A]/50"></i>
                    <h3 class="text-lg font-bold text-[#0D0C0A]">No Showcase Projects Found</h3>
                    <p class="text-sm text-[#13110E]/60 max-w-sm mx-auto">We are currently preparing details for our active East African logistics and tech operations.</p>
                </div>
            @endforelse

        </div>
    </section>

    <!-- 6. STRATEGIC PARTNERSHIPS MARQUEE -->
    <section class="py-20 bg-white border-y border-[#1D1B18]/5 overflow-hidden mt-16 relative">
        <!-- Overlay Fades for Smooth Edges -->
        <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-white to-transparent z-10"></div>
        <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-white to-transparent z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 text-center">
            <span class="text-[9px] uppercase tracking-[0.25em] font-bold text-[#C5A85A] block">Global Affiliations</span>
        </div>
        
        <!-- Infinite Scroll Loop -->
        <div class="relative w-full overflow-hidden whitespace-nowrap">
            <div class="animate-marquee-loop flex items-center gap-16 md:gap-24">
                
                <!-- Logo slate 1 -->
                <span class="text-xl md:text-2xl font-serif-editorial font-light tracking-widest text-slate-400 select-none">DHL EXPRESS</span>
                <span class="text-xl md:text-2xl font-sans font-extrabold tracking-widest text-slate-400 select-none">USAID</span>
                <span class="text-xl md:text-2xl font-serif-editorial font-bold tracking-tight text-slate-400 select-none">African Dev Bank</span>
                <span class="text-xl md:text-2xl font-sans font-black tracking-tighter italic text-slate-400 select-none">MAERSK</span>
                <span class="text-xl md:text-2xl font-serif-editorial font-medium tracking-wide text-slate-400 select-none">EQUITY BANK</span>
                <span class="text-xl md:text-2xl font-sans font-bold tracking-wide text-slate-400 select-none">HSBC GROUP</span>
                
                <!-- Duplicate Logo slate for infinite scrolling effect -->
                <span class="text-xl md:text-2xl font-serif-editorial font-light tracking-widest text-slate-400 select-none">DHL EXPRESS</span>
                <span class="text-xl md:text-2xl font-sans font-extrabold tracking-widest text-slate-400 select-none">USAID</span>
                <span class="text-xl md:text-2xl font-serif-editorial font-bold tracking-tight text-slate-400 select-none">African Dev Bank</span>
                <span class="text-xl md:text-2xl font-sans font-black tracking-tighter italic text-slate-400 select-none">MAERSK</span>
                <span class="text-xl md:text-2xl font-serif-editorial font-medium tracking-wide text-slate-400 select-none">EQUITY BANK</span>
                <span class="text-xl md:text-2xl font-sans font-bold tracking-wide text-slate-400 select-none">HSBC GROUP</span>
                
            </div>
        </div>
    </section>

    <!-- 7. "PARTNER WITH US" LEAD FORM BLOCK -->
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-24">
        <div class="bg-white p-8 sm:p-16 rounded-[2.5rem] border border-[#C5A85A]/15 shadow-xl relative overflow-hidden">
            <!-- Subtle Gold Accent Glow -->
            <div class="absolute -top-32 -right-32 w-64 h-64 bg-[#C5A85A]/5 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="text-center space-y-4 mb-10">
                <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A] block">Strategic Alliance</span>
                <h2 class="text-3xl sm:text-4xl font-light font-serif-editorial text-[#0D0C0A] tracking-tight">Partner With Us</h2>
                <p class="text-sm text-[#13110E]/60 max-w-lg mx-auto font-sans font-light">
                    Request a custom consultation to integrate with our regional logistics network and wholesale supply chains.
                </p>
            </div>
            
            <!-- Inquire Success / Error Toasts -->
            @if(session('success'))
                <div class="mb-8 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-sm flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-500 text-lg"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            
            @if($errors->any())
                <div class="mb-8 p-4 bg-rose-50 border border-rose-200 text-rose-800 rounded-xl text-sm space-y-1">
                    <div class="flex items-center gap-2 font-bold mb-1">
                        <i class="fa-solid fa-circle-exclamation text-rose-500"></i>
                        <span>Validation Error</span>
                    </div>
                    <ul class="list-disc pl-5 text-xs space-y-0.5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.inquire') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Hidden fields for LeadController compatibility -->
                <input type="hidden" name="subject" id="subject-field" value="Strategic Partnership Request">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Company/Contact Name -->
                    <div class="space-y-2">
                        <label for="name" class="block text-[10px] uppercase tracking-wider font-bold text-[#0D0C0A]">Company Name / Representative</label>
                        <input type="text" id="name" name="name" required placeholder="LotusRise Enterprises"
                               class="w-full bg-[#FAF8F5] border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-1 focus:ring-[#C5A85A] focus:border-[#C5A85A] transition">
                    </div>
                    
                    <!-- Business Type (Dropdown that updates subject before submission) -->
                    <div class="space-y-2">
                        <label for="business_type" class="block text-[10px] uppercase tracking-wider font-bold text-[#0D0C0A]">Business Type</label>
                        <select id="business_type" onchange="updateSubject(this.value)" required
                                class="w-full bg-[#FAF8F5] border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-1 focus:ring-[#C5A85A] focus:border-[#C5A85A] transition">
                            <option value="">Select Sector</option>
                            <option value="Wholesale Supplier">Wholesale Supplier</option>
                            <option value="Regional Retail Franchise">Regional Retail Franchise</option>
                            <option value="Logistics Carrier">Logistics Carrier / Transporter</option>
                            <option value="Investment / Finance Group">Investment & Finance</option>
                            <option value="Other Industry">Other Industry Alliance</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Contact Email -->
                    <div class="space-y-2">
                        <label for="email" class="block text-[10px] uppercase tracking-wider font-bold text-[#0D0C0A]">Business Email</label>
                        <input type="email" id="email" name="email" required placeholder="alliance@company.com"
                               class="w-full bg-[#FAF8F5] border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-1 focus:ring-[#C5A85A] focus:border-[#C5A85A] transition">
                    </div>
                    
                    <!-- Contact Phone -->
                    <div class="space-y-2">
                        <label for="phone" class="block text-[10px] uppercase tracking-wider font-bold text-[#0D0C0A]">Contact Phone</label>
                        <input type="text" id="phone" name="phone" required placeholder="+255 700 000 000"
                               class="w-full bg-[#FAF8F5] border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-1 focus:ring-[#C5A85A] focus:border-[#C5A85A] transition">
                    </div>
                </div>

                <!-- Project Scope (Mapped to message field) -->
                <div class="space-y-2">
                    <label for="message" class="block text-[10px] uppercase tracking-wider font-bold text-[#0D0C0A]">Project Scope & Collaboration Details</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Describe the scale of wholesale sourcing, regional logistics routing, or technical integration requested..."
                              class="w-full bg-[#FAF8F5] border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:ring-1 focus:ring-[#C5A85A] focus:border-[#C5A85A] transition resize-none"></textarea>
                </div>

                <!-- Gradient Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                            class="w-full bg-gradient-to-r from-[#C5A85A] to-[#D9C179] hover:from-[#B09347] hover:to-[#C5A85A] text-white font-bold text-xs uppercase tracking-widest py-4 px-6 rounded-xl transition duration-300 shadow-md">
                        Request Consultation
                    </button>
                </div>
            </form>
        </div>
    </section>

</div>

<!-- Vanilla JS Interactivity & Filtration Logic -->
<script>
    // Selected category/pillar filter
    let activePillar = 'all';
    // Selected type tab filter
    let activeTab = 'projects';

    function filterPillar(pillarName) {
        // Highlight active pillar block
        document.querySelectorAll('.pillar-chip').forEach(btn => {
            btn.classList.remove('border-[#C5A85A]', 'bg-[#C5A85A]/5');
        });
        
        // Find clicked button
        let targetId = '';
        if (pillarName === 'Marketplace') targetId = 'btn-marketplace';
        else if (pillarName === 'Logistics') targetId = 'btn-logistics';
        else if (pillarName === 'Vendor Solutions') targetId = 'btn-vendor-solutions';
        else if (pillarName === 'Agent Network') targetId = 'btn-agent-network';
        else if (pillarName === 'Business Support Services') targetId = 'btn-business-support';
        
        if (pillarName === activePillar) {
            // Toggle off
            activePillar = 'all';
        } else {
            activePillar = pillarName;
            const element = document.getElementById(targetId);
            if (element) {
                element.classList.add('border-[#C5A85A]', 'bg-[#C5A85A]/5');
            }
        }
        
        applyFilters();
    }

    function filterTab(tabName, button) {
        // Reset sub-navigation buttons state
        document.querySelectorAll('.tab-filter-btn').forEach(btn => {
            btn.classList.remove('border-[#C5A85A]', 'text-[#C5A85A]');
            btn.classList.add('border-transparent', 'text-[#13110E]/60');
        });
        
        // Apply active class to current button
        button.classList.add('border-[#C5A85A]', 'text-[#C5A85A]');
        button.classList.remove('border-transparent', 'text-[#13110E]/60');
        
        activeTab = tabName;
        applyFilters();
    }

    function applyFilters() {
        const cards = document.querySelectorAll('.project-card');
        
        cards.forEach(card => {
            const category = card.getAttribute('data-category');
            
            // 1. Pillar filtering
            const matchesPillar = (activePillar === 'all' || category === activePillar);
            
            // 2. Tab type filtering (Simulated sub-categories/statuses for showcase presentation)
            let matchesTab = true;
            if (activeTab === 'success-stories') {
                // Showcase only high impact marketplace/agent categories
                matchesTab = (category === 'Marketplace' || category === 'Agent Network');
            } else if (activeTab === 'case-studies') {
                // Showcase logistics and technical solutions
                matchesTab = (category === 'Logistics' || category === 'Vendor Solutions');
            } else if (activeTab === 'insights') {
                // Focus on operations and logistics
                matchesTab = (category === 'Logistics' || category === 'Business Support Services');
            }
            
            if (matchesPillar && matchesTab) {
                card.style.display = 'grid';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                }, 10);
            } else {
                card.style.opacity = '0';
                card.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 400);
            }
        });
    }

    function updateSubject(sector) {
        const subjectField = document.getElementById('subject-field');
        if (subjectField && sector) {
            subjectField.value = 'Strategic Partnership Request (' + sector + ')';
        } else if (subjectField) {
            subjectField.value = 'Strategic Partnership Request';
        }
    }
</script>

@endsection
