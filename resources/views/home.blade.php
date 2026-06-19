@extends('layouts.app')

@section('title', 'LotusRise Global — Shop Smart. Earn Smart. Grow Smart.')

@section('content')

<!-- Section 3 – Hero Section -->
<section class="relative overflow-hidden pt-16 pb-24 lg:pt-24 lg:pb-32 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Content Column -->
            <div class="lg:col-span-6 space-y-8 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-[#C5A85A]/10 border border-[#C5A85A]/20 text-[#C5A85A] text-xs font-semibold uppercase tracking-wider">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#C5A85A]"></span>
                    One Platform. Endless Opportunities.
                </div>
                
                <h1 class="text-5xl sm:text-6xl font-extrabold tracking-tight text-[#0D0C0A] leading-[1.1] text-center lg:text-left flex flex-col gap-1.5">
                    <span id="text-scene-0" class="block transition-all duration-700 ease-out will-change-transform cursor-pointer origin-left">
                        <span class="text-[#C5A85A]">Shop</span> Smart.
                    </span>
                    <span id="text-scene-1" class="block transition-all duration-700 ease-out will-change-transform cursor-pointer opacity-30 origin-left">
                        <span class="text-[#C5A85A]">Earn</span> Smart.
                    </span>
                    <span id="text-scene-2" class="block transition-all duration-700 ease-out will-change-transform cursor-pointer opacity-30 origin-left">
                        <span class="text-[#C5A85A]">Grow</span> Smart.
                    </span>
                </h1>
                
                <p class="text-base sm:text-lg text-[#1D1B18]/70 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    LotusRise connects customers, vendors, agents, logistics partners and financial service providers through one digital ecosystem.
                </p>
                
                <!-- Hero Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start items-center gap-4 pt-2">
                    <a href="{{ route('services') }}#marketplace" id="btn-scene-0" class="w-full sm:w-auto flex items-center justify-center gap-2 px-8 py-4 bg-[#C5A85A] text-[#0D0C0A] font-bold rounded-xl shadow-md transition duration-300 border border-transparent">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Start Shopping</span>
                    </a>
                    <a href="{{ route('vendors') }}" id="btn-scene-1" class="w-full sm:w-auto flex items-center justify-center gap-2 px-8 py-4 bg-[#0D0C0A] text-[#FAF8F5] font-bold rounded-xl shadow-md transition duration-300 border border-transparent">
                        <i class="fa-solid fa-store"></i>
                        <span>Become a Vendor</span>
                    </a>
                    <a href="{{ route('agents') }}" id="btn-scene-2" class="w-full sm:w-auto flex items-center justify-center gap-2 px-8 py-4 bg-white border border-[#0D0C0A]/10 text-[#0D0C0A] font-bold rounded-xl shadow-sm transition duration-300">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Become an Agent</span>
                    </a>
                </div>
            </div>
            
            <!-- Right Graphic Column – Arch Scene -->
            <div class="lg:col-span-6 relative flex flex-col items-center justify-center">

                <!-- Arch backdrop SVG -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none">
                    <svg viewBox="0 0 520 580" class="w-full max-w-lg" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M60 580 L60 240 Q60 30 260 30 Q460 30 460 240 L460 580 Z" fill="#EDE8E0" opacity="0.65"/>
                        <path d="M80 580 L80 248 Q80 60 260 60 Q440 60 440 248 L440 580 Z" fill="#F2EDE6" opacity="0.45"/>
                    </svg>
                </div>

                <!-- Scene wrapper -->
                <div class="relative w-full max-w-lg" style="min-height: 440px;">

                    <!-- Scene 1: Shop Smart – Analytics Tablet + Coins -->
                    <div id="img-scene-0" class="transition-scene absolute inset-0 opacity-100 scale-100 translate-x-0 z-10 flex items-end justify-center pb-4">
                        <!-- Stacked coin tower left -->
                        <div class="absolute bottom-8 left-6 flex flex-col items-center gap-[3px] pointer-events-none z-20">
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm border-t border-[#F0D880]/60"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm border-t border-[#F0D880]/60"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm border-t border-[#F0D880]/60"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm border-t border-[#F0D880]/60"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm border-t border-[#F0D880]/60"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm border-t border-[#F0D880]/60"></div>
                        </div>
                        <!-- Shorter coin stack left-center -->
                        <div class="absolute bottom-4 left-20 flex flex-col items-center gap-[3px] pointer-events-none z-20 rotate-6">
                            <div class="w-9 h-[6px] rounded-full bg-gradient-to-r from-[#D4AF5A] via-[#B8952A] to-[#8A6A1E] shadow-sm"></div>
                            <div class="w-9 h-[6px] rounded-full bg-gradient-to-r from-[#D4AF5A] via-[#B8952A] to-[#8A6A1E] shadow-sm"></div>
                            <div class="w-9 h-[6px] rounded-full bg-gradient-to-r from-[#D4AF5A] via-[#B8952A] to-[#8A6A1E] shadow-sm"></div>
                        </div>
                        <!-- Flat scattered coins -->
                        <div class="absolute bottom-2 left-36 w-9 h-9 rounded-full bg-gradient-to-br from-[#F0D880] via-[#C5A85A] to-[#8A6A1E] shadow-lg border border-[#E8C96A]/50 pointer-events-none z-20" style="box-shadow: inset 0 2px 4px rgba(255,220,100,0.4)"></div>
                        <div class="absolute bottom-6 right-10 w-10 h-10 rounded-full bg-gradient-to-br from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-lg border border-[#F0D880]/40 pointer-events-none z-20" style="box-shadow: inset 0 2px 5px rgba(255,220,100,0.4)"></div>
                        <div class="absolute bottom-1 right-24 w-7 h-7 rounded-full bg-gradient-to-br from-[#D4AF5A] to-[#8A6A1E] shadow-md pointer-events-none z-20"></div>
                        <div class="absolute bottom-14 right-6 w-5 h-5 rounded-full bg-gradient-to-br from-[#C5A85A] to-[#7A5A10] shadow-sm pointer-events-none z-20 opacity-70"></div>
                        <!-- Tablet image (no card border) -->
                        <img src="{{ asset('images/lotusRise_analytics_growth.png') }}"
                             alt="Financial Analytics Dashboard"
                             class="relative z-10 w-[78%] max-w-xs drop-shadow-2xl transition-transform duration-700 hover:scale-105"
                             style="filter: drop-shadow(0 20px 45px rgba(197,168,90,0.25)); transform-origin: bottom center;">
                    </div>

                    <!-- Scene 2: Earn Smart – Logistics -->
                    <div id="img-scene-1" class="transition-scene absolute inset-0 opacity-0 scale-95 translate-x-8 z-0 flex items-end justify-center pb-4">
                        <div class="absolute bottom-8 left-6 flex flex-col items-center gap-[3px] pointer-events-none z-20">
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm"></div>
                        </div>
                        <div class="absolute bottom-4 right-10 w-8 h-8 rounded-full bg-gradient-to-br from-[#E8C96A] to-[#9A7A2E] shadow-md pointer-events-none z-20"></div>
                        <div class="absolute bottom-2 right-20 w-6 h-6 rounded-full bg-gradient-to-br from-[#C5A85A] to-[#8A6A1E] shadow-sm pointer-events-none z-20"></div>
                        <img src="{{ asset('images/lotusRise_express_logistics.jpg') }}"
                             alt="Earn Smart - Logistics & Fleet"
                             class="relative z-10 w-[78%] max-w-xs rounded-3xl drop-shadow-2xl transition-transform duration-700 hover:scale-105"
                             style="filter: drop-shadow(0 20px 45px rgba(197,168,90,0.25)); transform-origin: bottom center;">
                    </div>

                    <!-- Scene 3: Grow Smart -->
                    <div id="img-scene-2" class="transition-scene absolute inset-0 opacity-0 scale-95 translate-x-8 z-0 flex items-end justify-center pb-4">
                        <div class="absolute bottom-8 right-6 flex flex-col items-center gap-[3px] pointer-events-none z-20">
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm"></div>
                            <div class="w-10 h-[7px] rounded-full bg-gradient-to-r from-[#E8C96A] via-[#C5A85A] to-[#9A7A2E] shadow-sm"></div>
                        </div>
                        <div class="absolute bottom-4 left-10 w-9 h-9 rounded-full bg-gradient-to-br from-[#E8C96A] to-[#9A7A2E] shadow-md pointer-events-none z-20"></div>
                        <div class="absolute bottom-1 left-20 w-6 h-6 rounded-full bg-gradient-to-br from-[#C5A85A] to-[#8A6A1E] shadow-sm pointer-events-none z-20"></div>
                        <img src="{{ asset('images/lotusRise_shop_ecosystem.png') }}"
                             alt="Grow Smart - Vendor Analytics"
                             class="relative z-10 w-[78%] max-w-xs drop-shadow-2xl transition-transform duration-700 hover:scale-105"
                             style="filter: drop-shadow(0 20px 45px rgba(197,168,90,0.25)); transform-origin: bottom center;">
                    </div>

                </div>

                <!-- Interactive Progress Indicators (Pills) -->
                <div class="flex justify-center items-center gap-3 mt-4 z-20 relative">
                    <button id="indicator-pill-0" class="group relative w-16 h-1.5 rounded-full bg-black/10 overflow-hidden focus:outline-none transition hover:bg-black/20" title="Shop Smart">
                        <span class="progress-pill-fill absolute left-0 top-0 bottom-0 w-0 bg-[#C5A85A] rounded-full"></span>
                    </button>
                    <button id="indicator-pill-1" class="group relative w-16 h-1.5 rounded-full bg-black/10 overflow-hidden focus:outline-none transition hover:bg-black/20" title="Earn Smart">
                        <span class="progress-pill-fill absolute left-0 top-0 bottom-0 w-0 bg-[#C5A85A] rounded-full"></span>
                    </button>
                    <button id="indicator-pill-2" class="group relative w-16 h-1.5 rounded-full bg-black/10 overflow-hidden focus:outline-none transition hover:bg-black/20" title="Grow Smart">
                        <span class="progress-pill-fill absolute left-0 top-0 bottom-0 w-0 bg-[#C5A85A] rounded-full"></span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Section 4 – Capabilities Grid (5 Columns) -->
<section class="py-20 bg-[#FAF8F5] border-t border-[#1D1B18]/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            
            <!-- Card 1: Marketplace -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:bg-[#C5A85A] group-hover:text-[#0D0C0A] transition duration-300">
                        <i class="fa-solid fa-bag-shopping text-base"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#0D0C0A] tracking-tight">LotusRise Marketplace</h3>
                    <p class="text-xs text-[#1D1B18]/60 leading-relaxed">Buy products from verified vendors across multiple categories.</p>
                </div>
                <a href="{{ route('services') }}#marketplace" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#C5A85A] hover:text-[#0D0C0A] mt-6 transition">
                    <span>Shop Now</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <!-- Card 2: Logistics -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:bg-[#C5A85A] group-hover:text-[#0D0C0A] transition duration-300">
                        <i class="fa-solid fa-truck text-base"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#0D0C0A] tracking-tight">LotusRise Logistics</h3>
                    <p class="text-xs text-[#1D1B18]/60 leading-relaxed">Source, ship and deliver products locally and internationally.</p>
                </div>
                <a href="{{ route('services') }}#logistics" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#C5A85A] hover:text-[#0D0C0A] mt-6 transition">
                    <span>Learn More</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <!-- Card 3: Investment Rewards -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:bg-[#C5A85A] group-hover:text-[#0D0C0A] transition duration-300">
                        <i class="fa-solid fa-gift text-base"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#0D0C0A] tracking-tight">Investment Rewards</h3>
                    <p class="text-xs text-[#1D1B18]/60 leading-relaxed">Earn cashback and rewards that can be directed to licensed investment providers.</p>
                </div>
                <a href="{{ route('services') }}#investment" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#C5A85A] hover:text-[#0D0C0A] mt-6 transition">
                    <span>Explore Rewards</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <!-- Card 4: Business Solutions -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:bg-[#C5A85A] group-hover:text-[#0D0C0A] transition duration-300">
                        <i class="fa-solid fa-briefcase text-base"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#0D0C0A] tracking-tight">Business Solutions</h3>
                    <p class="text-xs text-[#1D1B18]/60 leading-relaxed">Powerful tools for vendors, agents and businesses to manage operations efficiently.</p>
                </div>
                <a href="{{ route('services') }}#vendor-solutions" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#C5A85A] hover:text-[#0D0C0A] mt-6 transition">
                    <span>Discover Solutions</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <!-- Card 5: Agent Network -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div class="space-y-4">
                    <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center group-hover:bg-[#C5A85A] group-hover:text-[#0D0C0A] transition duration-300">
                        <i class="fa-solid fa-users text-base"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#0D0C0A] tracking-tight">Agent Network</h3>
                    <p class="text-xs text-[#1D1B18]/60 leading-relaxed">Join our agent network and earn income by serving customers and vendors.</p>
                </div>
                <a href="{{ route('agents') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#C5A85A] hover:text-[#0D0C0A] mt-6 transition">
                    <span>Join Now</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Section: Lotus AI Console -->
<section id="lotus-ai" class="py-24 bg-[#0D0C0A] text-[#FAF8F5] relative overflow-hidden border-t border-[#1D1B18]/5">
    <!-- Ambient luxury background glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] h-[80%] rounded-full bg-[#C5A85A]/5 filter blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-12">
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Central Intelligence</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Lotus AI Intelligent Terminal</h2>
            <p class="text-base text-[#FAF8F5]/60 max-w-xl mx-auto">Analyze customs compliance, calculate EAC dynamic shipping tariffs, request freight routes, or talk directly with our voice copilot.</p>
        </div>
        
        <x-lotus-ai-console />
    </div>
</section>

<!-- Section 5 – How LotusRise Works -->
<section class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0D0C0A] tracking-tight">How LotusRise Works</h2>
        </div>

        <!-- Flow wrapper -->
        <div class="flex flex-col lg:flex-row items-center lg:justify-between gap-8 lg:gap-4 relative">
            
            <!-- Step 1 -->
            <div class="flex flex-col items-center text-center space-y-3 flex-1">
                <div class="w-12 h-12 rounded-full bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center text-lg shadow-sm border border-[#C5A85A]/25">
                    <i class="fa-regular fa-file-lines"></i>
                </div>
                <div>
                    <span class="block text-xs uppercase tracking-widest font-extrabold text-[#C5A85A]">Step 1</span>
                    <p class="text-xs text-[#1D1B18]/70 leading-relaxed max-w-[180px] mt-1">Customer submits request or places order.</p>
                </div>
            </div>

            <!-- Arrow 1 -->
            <div class="hidden lg:flex text-gray-300 text-lg"><i class="fa-solid fa-chevron-right"></i></div>
            <div class="flex lg:hidden text-gray-300 text-lg rotate-90"><i class="fa-solid fa-chevron-right"></i></div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center text-center space-y-3 flex-1">
                <div class="w-12 h-12 rounded-full bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center text-lg shadow-sm border border-[#C5A85A]/25">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <span class="block text-xs uppercase tracking-widest font-extrabold text-[#C5A85A]">Step 2</span>
                    <p class="text-xs text-[#1D1B18]/70 leading-relaxed max-w-[180px] mt-1">Vendor confirms availability.</p>
                </div>
            </div>

            <!-- Arrow 2 -->
            <div class="hidden lg:flex text-gray-300 text-lg"><i class="fa-solid fa-chevron-right"></i></div>
            <div class="flex lg:hidden text-gray-300 text-lg rotate-90"><i class="fa-solid fa-chevron-right"></i></div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center text-center space-y-3 flex-1">
                <div class="w-12 h-12 rounded-full bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center text-lg shadow-sm border border-[#C5A85A]/25">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <div>
                    <span class="block text-xs uppercase tracking-widest font-extrabold text-[#C5A85A]">Step 3</span>
                    <p class="text-xs text-[#1D1B18]/70 leading-relaxed max-w-[180px] mt-1">Payment is completed.</p>
                </div>
            </div>

            <!-- Arrow 3 -->
            <div class="hidden lg:flex text-gray-300 text-lg"><i class="fa-solid fa-chevron-right"></i></div>
            <div class="flex lg:hidden text-gray-300 text-lg rotate-90"><i class="fa-solid fa-chevron-right"></i></div>

            <!-- Step 4 -->
            <div class="flex flex-col items-center text-center space-y-3 flex-1">
                <div class="w-12 h-12 rounded-full bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center text-lg shadow-sm border border-[#C5A85A]/25">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <div>
                    <span class="block text-xs uppercase tracking-widest font-extrabold text-[#C5A85A]">Step 4</span>
                    <p class="text-xs text-[#1D1B18]/70 leading-relaxed max-w-[180px] mt-1">Logistics partner delivers.</p>
                </div>
            </div>

            <!-- Arrow 4 -->
            <div class="hidden lg:flex text-gray-300 text-lg"><i class="fa-solid fa-chevron-right"></i></div>
            <div class="flex lg:hidden text-gray-300 text-lg rotate-90"><i class="fa-solid fa-chevron-right"></i></div>

            <!-- Step 5 -->
            <div class="flex flex-col items-center text-center space-y-3 flex-1">
                <div class="w-12 h-12 rounded-full bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center text-lg shadow-sm border border-[#C5A85A]/25">
                    <i class="fa-solid fa-gift"></i>
                </div>
                <div>
                    <span class="block text-xs uppercase tracking-widest font-extrabold text-[#C5A85A]">Step 5</span>
                    <p class="text-xs text-[#1D1B18]/70 leading-relaxed max-w-[180px] mt-1">Customer receives order and earns rewards.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section 7 – Portfolio -->
<section class="py-24 bg-[#0D0C0A] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-6 mb-16">
            <div class="space-y-3">
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Our Portfolio</h2>
            </div>
            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#C5A85A] hover:underline">
                <span>View All Projects</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

        <!-- Portfolio Cards Grid (4 Columns) with Image backgrounds -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Card 1: Retail & E-Commerce -->
            <div class="relative rounded-2xl overflow-hidden h-80 border border-white/10 group flex flex-col justify-end p-6 shadow-md hover:border-[#C5A85A]/40 transition duration-300">
                <!-- Background Image & Overlay -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" 
                     style="background-image: url('{{ asset('images/portfolio_retail.png') }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-black/30"></div>
                
                <!-- Content -->
                <div class="relative z-10 space-y-2">
                    <span class="text-[9px] uppercase font-bold text-[#C5A85A] tracking-wider block">Retail & E-Commerce</span>
                    <h3 class="text-base font-bold text-white leading-tight">Retail & E-Commerce</h3>
                    <p class="text-xs text-white/70 leading-relaxed line-clamp-2">Empowering vendors and brands to reach more customers.</p>
                </div>
            </div>

            <!-- Card 2: Logistics & Delivery -->
            <div class="relative rounded-2xl overflow-hidden h-80 border border-white/10 group flex flex-col justify-end p-6 shadow-md hover:border-[#C5A85A]/40 transition duration-300">
                <!-- Background Image & Overlay -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" 
                     style="background-image: url('{{ asset('images/portfolio_logistics.png') }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-black/30"></div>
                
                <!-- Content -->
                <div class="relative z-10 space-y-2">
                    <span class="text-[9px] uppercase font-bold text-[#C5A85A] tracking-wider block">Logistics & Delivery</span>
                    <h3 class="text-base font-bold text-white leading-tight">Logistics & Delivery</h3>
                    <p class="text-xs text-white/70 leading-relaxed line-clamp-2">Reliable logistics solutions that connect people and businesses.</p>
                </div>
            </div>

            <!-- Card 3: Investment & Finance -->
            <div class="relative rounded-2xl overflow-hidden h-80 border border-white/10 group flex flex-col justify-end p-6 shadow-md hover:border-[#C5A85A]/40 transition duration-300">
                <!-- Background Image & Overlay -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" 
                     style="background-image: url('{{ asset('images/portfolio_finance.png') }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-black/30"></div>
                
                <!-- Content -->
                <div class="relative z-10 space-y-2">
                    <span class="text-[9px] uppercase font-bold text-[#C5A85A] tracking-wider block">Investment & Finance</span>
                    <h3 class="text-base font-bold text-white leading-tight">Investment & Finance</h3>
                    <p class="text-xs text-white/70 leading-relaxed line-clamp-2">Helping customers grow through smart investment opportunities.</p>
                </div>
            </div>

            <!-- Card 4: Business Solutions -->
            <div class="relative rounded-2xl overflow-hidden h-80 border border-white/10 group flex flex-col justify-end p-6 shadow-md hover:border-[#C5A85A]/40 transition duration-300">
                <!-- Background Image & Overlay -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105" 
                     style="background-image: url('{{ asset('images/portfolio_business.png') }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-black/30"></div>
                
                <!-- Content -->
                <div class="relative z-10 space-y-2">
                    <span class="text-[9px] uppercase font-bold text-[#C5A85A] tracking-wider block">Business Solutions</span>
                    <h3 class="text-base font-bold text-white leading-tight">Business Solutions</h3>
                    <p class="text-xs text-white/70 leading-relaxed line-clamp-2">Digital tools and services that simplify and grow your business.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Section 8 – Statistics -->
<section class="bg-[#0D0C0A] py-16 px-4 sm:px-6 lg:px-8 border-t border-white/5">
    <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-5 gap-8 text-center text-white">
        
        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-users text-[#C5A85A] text-lg"></i>
                <span class="text-3xl font-extrabold text-[#C5A85A]">{{ $counts['customers'] }}</span>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-white/40 font-bold">Happy Customers</span>
        </div>

        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-store text-[#C5A85A] text-lg"></i>
                <span class="text-3xl font-extrabold text-[#C5A85A]">{{ $counts['vendors'] }}</span>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-white/40 font-bold">Verified Vendors</span>
        </div>

        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-globe text-[#C5A85A] text-lg"></i>
                <span class="text-3xl font-extrabold text-[#C5A85A]">{{ $counts['countries'] }}</span>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-white/40 font-bold">Countries Reached</span>
        </div>

        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-truck text-[#C5A85A] text-lg"></i>
                <span class="text-3xl font-extrabold text-[#C5A85A]">{{ $counts['deliveries'] }}</span>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-white/40 font-bold">Deliveries Completed</span>
        </div>

        <div class="col-span-2 lg:col-span-1 flex flex-col items-center justify-center gap-2">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-credit-card text-[#C5A85A] text-lg"></i>
                <span class="text-3xl font-extrabold text-[#C5A85A]">{{ $counts['transactions'] }}</span>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-white/40 font-bold">Transactions Processed</span>
        </div>

    </div>
</section>

<!-- Section 9 – Testimonials -->
<section class="py-24 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Success Stories</h2>
            <p class="text-3xl sm:text-4xl font-extrabold text-[#0D0C0A] tracking-tight">Voices of the Ecosystem</p>
            <p class="text-base text-[#1D1B18]/70">Read how vendors, agents, and business owners have scaled using our unified platform.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Vendor Story -->
            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                <div class="flex gap-1 text-yellow-400"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <p class="text-sm text-[#1D1B18]/75 leading-relaxed italic">
                    "Before joining LotusRise, sourcing orders from Mbeya and Kigoma was extremely manual. Now, my bulk electronics inventory is listed online, and deliveries are coordinated automatically. My wholesale volume has doubled."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center font-bold text-xs">AJ</div>
                    <div>
                        <span class="block font-bold text-sm text-[#0D0C0A]">Athumani Juma</span>
                        <span class="text-xs text-[#1D1B18]/50">Owner, Kariakoo Wholesale Ltd</span>
                    </div>
                </div>
            </div>

            <!-- Agent Story -->
            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                <div class="flex gap-1 text-yellow-400"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <p class="text-sm text-[#1D1B18]/75 leading-relaxed italic">
                    "Working as an agent in Mwanza is amazing. I help local retailers order stock safely from Dar, track the shipments, and earn reliable weekly commission checks. The training provided helped me grow my client list."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center font-bold text-xs">SJ</div>
                    <div>
                        <span class="block font-bold text-sm text-[#0D0C0A]">Sarah Joseph</span>
                        <span class="text-xs text-[#1D1B18]/50">LotusRise Agent, Nyamagana</span>
                    </div>
                </div>
            </div>

            <!-- Customer Story -->
            <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                <div class="flex gap-1 text-yellow-400"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                <p class="text-sm text-[#1D1B18]/75 leading-relaxed italic">
                    "Procuring products from Kariakoo was always risky. LotusRise escrow payments gave me total peace of mind. The delivery consolidation service saved me 40% on cargo shipping fees."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center font-bold text-xs">DM</div>
                    <div>
                        <span class="block font-bold text-sm text-[#0D0C0A]">David Minja</span>
                        <span class="text-xs text-[#1D1B18]/50">Retail Shop Owner, Dodoma</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section 10 – Call to Action -->
<section class="py-24 bg-[#0D0C0A] text-white border-t border-white/5 relative">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 space-y-8 relative z-10">
        <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight">Ready to grow with LotusRise?</h2>
        <p class="text-base text-white/60 max-w-xl mx-auto leading-relaxed">Join Tanzania's leading digital commerce, sourcing, and logistics ecosystem. Get started today as a merchant or local agent.</p>
        
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('vendors') }}" class="w-full sm:w-auto px-8 py-4 bg-[#C5A85A] hover:bg-[#C5A85A]/90 text-[#0D0C0A] font-bold rounded-xl shadow-md transition duration-200">
                Become a Vendor
            </a>
            <a href="{{ route('agents') }}" class="w-full sm:w-auto px-8 py-4 bg-white/10 hover:bg-white/20 text-white font-bold rounded-xl border border-white/10 transition duration-200">
                Become an Agent
            </a>
            <a href="{{ route('contact') }}" class="w-full sm:w-auto px-8 py-4 bg-transparent hover:underline text-[#C5A85A] font-bold transition">
                Contact Us
            </a>
        </div>
    </div>
</section>

@section('scripts')
<style>
    .transition-scene {
        transition: transform 800ms cubic-bezier(0.16, 1, 0.3, 1), opacity 800ms cubic-bezier(0.16, 1, 0.3, 1);
        will-change: transform, opacity;
    }
    
    @keyframes goldGlowPulse {
        0%, 100% {
            box-shadow: 0 0 15px rgba(197, 168, 90, 0.15);
        }
        50% {
            box-shadow: 0 0 25px rgba(197, 168, 90, 0.45);
        }
    }
    
    .cta-active-glow {
        transform: scale(1.02) !important;
        animation: goldGlowPulse 2.5s infinite ease-in-out;
        border-color: #C5A85A !important;
    }

    .text-active-glow {
        transform: scale(1.02);
        opacity: 1 !important;
    }
    
    .text-inactive {
        opacity: 0.3;
    }

    .hover-tilt-effect {
        transition: transform 600ms cubic-bezier(0.16, 1, 0.3, 1), box-shadow 600ms cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .hover-tilt-effect:hover {
        transform: translateY(-8px) scale(1.01) !important;
        box-shadow: 0 30px 60px rgba(197, 168, 90, 0.15) !important;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let currentScene = 0;
        const totalScenes = 3;
        const intervalTime = 6000;
        let intervalId = null;
        const progressPills = document.querySelectorAll('.progress-pill-fill');

        const scenes = [
            { textId: 'text-scene-0', btnId: 'btn-scene-0', imgId: 'img-scene-0' },
            { textId: 'text-scene-1', btnId: 'btn-scene-1', imgId: 'img-scene-1' },
            { textId: 'text-scene-2', btnId: 'btn-scene-2', imgId: 'img-scene-2' }
        ];

        function setScene(index) {
            // Reset progress bars
            progressPills.forEach((pill) => {
                pill.style.width = '0%';
                pill.style.transition = 'none';
            });

            scenes.forEach((scene, i) => {
                const imgEl = document.getElementById(scene.imgId);
                const textEl = document.getElementById(scene.textId);
                const btnEl = document.getElementById(scene.btnId);

                if (i === index) {
                    // Active / Entering
                    imgEl.classList.remove('opacity-0', 'scale-95', 'translate-x-8', '-translate-x-8', 'z-0', 'pointer-events-none');
                    imgEl.classList.add('opacity-100', 'scale-100', 'translate-x-0', 'z-10', 'pointer-events-auto');

                    textEl.classList.remove('text-inactive');
                    textEl.classList.add('text-active-glow');

                    btnEl.classList.add('cta-active-glow');
                } else if (i === currentScene) {
                    // Exiting to left
                    imgEl.classList.remove('opacity-100', 'scale-100', 'translate-x-0', 'translate-x-8', 'z-10', 'pointer-events-auto');
                    imgEl.classList.add('opacity-0', 'scale-95', '-translate-x-8', 'z-0', 'pointer-events-none');

                    textEl.classList.remove('text-active-glow');
                    textEl.classList.add('text-inactive');

                    btnEl.classList.remove('cta-active-glow');
                } else {
                    // Idle in queue (right side)
                    imgEl.classList.remove('opacity-100', 'scale-100', 'translate-x-0', '-translate-x-8', 'z-10', 'pointer-events-auto');
                    imgEl.classList.add('opacity-0', 'scale-95', 'translate-x-8', 'z-0', 'pointer-events-none');

                    textEl.classList.remove('text-active-glow');
                    textEl.classList.add('text-inactive');

                    btnEl.classList.remove('cta-active-glow');
                }
            });

            currentScene = index;

            // Trigger progress bar filling
            setTimeout(() => {
                const activePill = progressPills[index];
                if (activePill) {
                    activePill.style.transition = 'width 6000ms linear';
                    activePill.style.width = '100%';
                }
            }, 50);
        }

        function startLoop() {
            if (intervalId) clearInterval(intervalId);
            
            // Initial transition for current scene progress pill
            const activePill = progressPills[currentScene];
            if (activePill) {
                activePill.style.transition = 'width 6000ms linear';
                activePill.style.width = '100%';
            }

            intervalId = setInterval(() => {
                let nextScene = (currentScene + 1) % totalScenes;
                setScene(nextScene);
            }, intervalTime);
        }

        // Set initial state styling
        scenes.forEach((scene, i) => {
            const textEl = document.getElementById(scene.textId);
            const btnEl = document.getElementById(scene.btnId);
            if (i === 0) {
                textEl.classList.add('text-active-glow');
                btnEl.classList.add('cta-active-glow');
            } else {
                textEl.classList.add('text-inactive');
            }
        });

        // Add event listeners for click triggers
        scenes.forEach((scene, index) => {
            const textEl = document.getElementById(scene.textId);
            if (textEl) {
                textEl.addEventListener('click', () => {
                    if (index !== currentScene) {
                        setScene(index);
                        startLoop();
                    }
                });
            }

            const indicator = document.getElementById(`indicator-pill-${index}`);
            if (indicator) {
                indicator.addEventListener('click', () => {
                    if (index !== currentScene) {
                        setScene(index);
                        startLoop();
                    }
                });
            }
        });

        startLoop();
    });
</script>
@endsection

@endsection
