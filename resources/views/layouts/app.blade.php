<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LotusRise Global — Shop Smart. Earn Smart. Grow Smart.')</title>
    <meta name="description" content="@yield('meta_description', 'LotusRise Global connects customers, vendors, agents, and logistics providers in Tanzania through a unified digital ecosystem.')">
    <meta name="keywords" content="LotusRise, Tanzania, E-commerce, Logistics, Sourcing, Kariakoo, Agents, Vendor Tools">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-[#FAF8F5] text-[#1D1B18] flex flex-col min-h-screen">

    <!-- Section 1 – Top Bar -->
    <div class="bg-[#0D0C0A] text-[#FAF8F5]/80 text-xs py-2.5 px-4 sm:px-6 lg:px-8 border-b border-[#FAF8F5]/10">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <!-- Left Info -->
            <div class="flex flex-wrap justify-center sm:justify-start items-center gap-x-6 gap-y-1">
                <a href="tel:+255742123456" class="hover:text-[#C5A85A] transition duration-150 flex items-center gap-1.5">
                    <i class="fa-solid fa-phone text-[#C5A85A]"></i>
                    <span>+255 742 123 456</span>
                </a>
                <a href="https://wa.me/255742123456" target="_blank" class="hover:text-[#C5A85A] transition duration-150 flex items-center gap-1.5">
                    <i class="fa-brands fa-whatsapp text-green-500"></i>
                    <span>WhatsApp Us</span>
                </a>
                <a href="mailto:info@lotusriseglobal.com" class="hover:text-[#C5A85A] transition duration-150 flex items-center gap-1.5">
                    <i class="fa-solid fa-envelope text-[#C5A85A]"></i>
                    <span>info@lotusriseglobal.com</span>
                </a>
            </div>
            <!-- Right Socials & Links -->
            <div class="flex items-center gap-4">
                <span class="text-[#FAF8F5]/50">Follow us:</span>
                <div class="flex items-center gap-3">
                    <a href="#" class="hover:text-[#C5A85A] transition duration-150"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-[#C5A85A] transition duration-150"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-[#C5A85A] transition duration-150"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-[#C5A85A] transition duration-150"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 – Header / Sticky Navbar -->
    <header class="sticky top-0 z-50 bg-[#FAF8F5]/90 backdrop-blur-md border-b border-[#1D1B18]/5 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                    <div class="w-10 h-10 rounded-xl bg-[#0D0C0A] flex items-center justify-center text-[#C5A85A] group-hover:bg-[#C5A85A] group-hover:text-[#0D0C0A] transition-all duration-300">
                        <!-- Custom Lotus SVG -->
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C11.5 5 9 8.5 6 9.5c3 1 5 4.5 6 7.5 1-3 3-6.5 6-7.5-3-1-5-4.5-6-7.5zm0 18c-1.5-2.5-4-3-6-3.5 2-.5 4.5-1 6-3.5 1.5 2.5 4 3 6 3.5-2 .5-4.5 1-6 3.5z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-bold tracking-tight text-[#0D0C0A] leading-none">LotusRise</span>
                        <span class="text-[9px] uppercase tracking-[0.25em] font-semibold text-[#C5A85A] mt-0.5">Global</span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150">Home</a>
                    
                    <!-- About Us Dropdown -->
                    <div class="relative dropdown-container">
                        <button type="button" class="dropdown-trigger flex items-center gap-1 px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150 focus:outline-none">
                            <span>About Us</span>
                            <i class="fa-solid fa-chevron-down text-[10px] opacity-70 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-1 w-52 rounded-xl bg-[#FAF8F5] border border-[#1D1B18]/10 shadow-lg py-2 hidden opacity-0 scale-95 origin-top-left transition-all duration-200">
                            <a href="{{ route('about') }}#story" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">Our Story</a>
                            <a href="{{ route('about') }}#vision" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">Vision & Mission</a>
                            <a href="{{ route('about') }}#team" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">Leadership Team</a>
                            <a href="{{ route('about') }}#partners" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">Strategic Partners</a>
                            <a href="{{ route('about') }}#faqs" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">FAQs</a>
                        </div>
                    </div>

                    <!-- Services Dropdown -->
                    <div class="relative dropdown-container">
                        <button type="button" class="dropdown-trigger flex items-center gap-1 px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150 focus:outline-none">
                            <span>Services</span>
                            <i class="fa-solid fa-chevron-down text-[10px] opacity-70 transition-transform duration-200"></i>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-1 w-64 rounded-xl bg-[#FAF8F5] border border-[#1D1B18]/10 shadow-lg py-2 hidden opacity-0 scale-95 origin-top-left transition-all duration-200">
                            <a href="{{ route('services') }}#marketplace" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">
                                <span class="font-medium block">LotusRise Marketplace</span>
                                <span class="text-xs text-[#1D1B18]/60">Connecting customers & vendors</span>
                            </a>
                            <a href="{{ route('services') }}#logistics" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">
                                <span class="font-medium block">LotusRise Logistics</span>
                                <span class="text-xs text-[#1D1B18]/60">Procurement & regional delivery</span>
                            </a>
                            <a href="{{ route('services') }}#vendor-solutions" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">
                                <span class="font-medium block">Vendor Solutions</span>
                                <span class="text-xs text-[#1D1B18]/60">SME digital growth tools</span>
                            </a>
                            <a href="{{ route('services') }}#agent-network" class="block px-4 py-2.5 text-sm text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A] transition">
                                <span class="font-medium block">Agent Network</span>
                                <span class="text-xs text-[#1D1B18]/60">Commission earning opportunities</span>
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('vendors') }}" class="px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150">Vendors</a>
                    <a href="{{ route('agents') }}" class="px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150">Agents</a>
                    <a href="{{ route('portfolio') }}" class="px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150">Portfolio</a>
                    <a href="{{ route('careers') }}" class="px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150">Careers</a>
                    <a href="{{ route('blog') }}" class="px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150">Blog & Insights</a>
                    <a href="{{ route('contact') }}" class="px-3 py-2 text-sm font-medium text-[#0D0C0A] hover:text-[#C5A85A] transition duration-150">Contact Us</a>
                </nav>

                <!-- Desktop CTAs -->
                <div class="hidden lg:flex items-center gap-3">
                    @auth
                        <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : (auth()->user()->isVendor() ? route('vendor.dashboard') : route('agent.dashboard')) }}" class="px-4 py-2 text-sm font-medium text-[#0D0C0A] border border-[#0D0C0A]/20 hover:border-[#0D0C0A] rounded-full transition duration-200">
                            Dashboard
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-red-600 hover:text-red-800 transition">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2 text-sm font-medium text-[#0D0C0A] border border-[#0D0C0A]/20 hover:border-[#0D0C0A] hover:bg-[#0D0C0A]/5 rounded-xl transition duration-200">
                            Login
                        </a>
                        <a href="{{ route('agents') }}#packages" class="px-5 py-2.5 text-sm font-semibold text-[#FAF8F5] bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] rounded-xl shadow-sm transition duration-300">
                            Get Started
                        </a>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex lg:hidden">
                    <button type="button" id="mobile-menu-btn" class="text-[#0D0C0A] hover:text-[#C5A85A] p-2 focus:outline-none">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-[#FAF8F5] border-t border-[#1D1B18]/5 transition-all duration-300">
            <div class="px-4 pt-2 pb-6 space-y-1 sm:px-6">
                <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10 hover:text-[#C5A85A]">Home</a>
                
                <!-- About Accordion -->
                <div>
                    <button class="w-full flex justify-between items-center px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10" onclick="toggleMobileSubmenu('mob-about')">
                        <span>About Us</span>
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div id="mob-about" class="hidden pl-6 py-1 space-y-1">
                        <a href="{{ route('about') }}#story" class="block px-3 py-2 text-sm text-[#1D1B18]/75">Our Story</a>
                        <a href="{{ route('about') }}#vision" class="block px-3 py-2 text-sm text-[#1D1B18]/75">Vision & Mission</a>
                        <a href="{{ route('about') }}#team" class="block px-3 py-2 text-sm text-[#1D1B18]/75">Leadership Team</a>
                        <a href="{{ route('about') }}#partners" class="block px-3 py-2 text-sm text-[#1D1B18]/75">Strategic Partners</a>
                        <a href="{{ route('about') }}#faqs" class="block px-3 py-2 text-sm text-[#1D1B18]/75">FAQs</a>
                    </div>
                </div>

                <!-- Services Accordion -->
                <div>
                    <button class="w-full flex justify-between items-center px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10" onclick="toggleMobileSubmenu('mob-services')">
                        <span>Services</span>
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div id="mob-services" class="hidden pl-6 py-1 space-y-1">
                        <a href="{{ route('services') }}#marketplace" class="block px-3 py-2 text-sm text-[#1D1B18]/75">LotusRise Marketplace</a>
                        <a href="{{ route('services') }}#logistics" class="block px-3 py-2 text-sm text-[#1D1B18]/75">LotusRise Logistics</a>
                        <a href="{{ route('services') }}#vendor-solutions" class="block px-3 py-2 text-sm text-[#1D1B18]/75">Vendor Solutions</a>
                        <a href="{{ route('services') }}#agent-network" class="block px-3 py-2 text-sm text-[#1D1B18]/75">Agent Network</a>
                    </div>
                </div>

                <a href="{{ route('vendors') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10">Vendors</a>
                <a href="{{ route('agents') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10">Agents</a>
                <a href="{{ route('portfolio') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10">Portfolio</a>
                <a href="{{ route('careers') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10">Careers</a>
                <a href="{{ route('blog') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10">Blog & Insights</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] hover:bg-[#C5A85A]/10">Contact Us</a>

                <div class="pt-4 border-t border-[#1D1B18]/10 flex flex-col gap-3">
                    @auth
                        <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : (auth()->user()->isVendor() ? route('vendor.dashboard') : route('agent.dashboard')) }}" class="w-full text-center py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] border border-[#0D0C0A]/20">
                            Dashboard
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                            @csrf
                            <button type="submit" class="w-full text-center py-2.5 rounded-lg text-base font-medium text-red-600 bg-red-50">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="w-full text-center py-2.5 rounded-lg text-base font-medium text-[#0D0C0A] border border-[#0D0C0A]/20">Login</a>
                        <a href="{{ route('agents') }}#packages" class="w-full text-center py-2.5 rounded-lg text-base font-medium text-[#FAF8F5] bg-[#0D0C0A]">Get Started</a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <!-- Alert Notifications -->
    <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 mt-4">
        @if(session('success'))
            <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-800 p-4 rounded-r-xl shadow-sm flex items-start gap-3">
                <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                <div>
                    <span class="font-semibold">Success!</span>
                    <p class="text-sm mt-0.5">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-800 p-4 rounded-r-xl shadow-sm flex items-start gap-3">
                <i class="fa-solid fa-circle-xmark text-rose-500 mt-1"></i>
                <div>
                    <span class="font-semibold">Error!</span>
                    <p class="text-sm mt-0.5">{{ session('error') }}</p>
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-800 p-4 rounded-r-xl shadow-sm">
                <div class="flex items-start gap-3 mb-2">
                    <i class="fa-solid fa-circle-exclamation text-rose-500 mt-1"></i>
                    <span class="font-semibold">Please check the following errors:</span>
                </div>
                <ul class="list-disc list-inside text-sm space-y-0.5 pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#0D0C0A] text-[#FAF8F5]/80 border-t border-[#FAF8F5]/5 pt-16 pb-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
            <!-- Brand & Info -->
            <div class="lg:col-span-2 flex flex-col gap-6">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                    <div class="w-10 h-10 rounded-xl bg-[#FAF8F5] flex items-center justify-center text-[#0D0C0A]">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C11.5 5 9 8.5 6 9.5c3 1 5 4.5 6 7.5 1-3 3-6.5 6-7.5-3-1-5-4.5-6-7.5zm0 18c-1.5-2.5-4-3-6-3.5 2-.5 4.5-1 6-3.5 1.5 2.5 4 3 6 3.5-2 .5-4.5 1-6 3.5z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-bold tracking-tight text-[#FAF8F5] leading-none">LotusRise</span>
                        <span class="text-[9px] uppercase tracking-[0.25em] font-semibold text-[#C5A85A] mt-0.5">Global</span>
                    </div>
                </a>
                <p class="text-sm text-[#FAF8F5]/60 max-w-sm leading-relaxed">
                    LotusRise Global is Tanzania's leading digital commerce, logistics, and agent coordination platform designed to simplify trade across East Africa.
                </p>
                <div class="flex flex-col gap-2 text-sm">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-location-dot text-[#C5A85A] w-5"></i>
                        <span>Kariakoo, Dar es Salaam, Tanzania</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-clock text-[#C5A85A] w-5"></i>
                        <span>Mon - Sat: 8:00 AM - 6:00 PM</span>
                    </div>
                </div>
            </div>

            <!-- Company Links -->
            <div class="flex flex-col gap-5">
                <span class="text-sm font-bold uppercase tracking-wider text-[#FAF8F5] border-b border-[#FAF8F5]/10 pb-2">Company</span>
                <nav class="flex flex-col gap-3 text-sm">
                    <a href="{{ route('about') }}" class="hover:text-[#C5A85A] transition">About Us</a>
                    <a href="{{ route('portfolio') }}" class="hover:text-[#C5A85A] transition">Portfolio</a>
                    <a href="{{ route('careers') }}" class="hover:text-[#C5A85A] transition">Careers</a>
                    <a href="{{ route('contact') }}" class="hover:text-[#C5A85A] transition">Contact Us</a>
                </nav>
            </div>

            <!-- Services Links -->
            <div class="flex flex-col gap-5">
                <span class="text-sm font-bold uppercase tracking-wider text-[#FAF8F5] border-b border-[#FAF8F5]/10 pb-2">Services</span>
                <nav class="flex flex-col gap-3 text-sm">
                    <a href="{{ route('services') }}#marketplace" class="hover:text-[#C5A85A] transition">Marketplace</a>
                    <a href="{{ route('services') }}#logistics" class="hover:text-[#C5A85A] transition">Logistics</a>
                    <a href="{{ route('services') }}#vendor-solutions" class="hover:text-[#C5A85A] transition">Vendor Solutions</a>
                    <a href="{{ route('services') }}#agent-network" class="hover:text-[#C5A85A] transition">Agent Network</a>
                </nav>
            </div>

            <!-- Resources Links -->
            <div class="flex flex-col gap-5">
                <span class="text-sm font-bold uppercase tracking-wider text-[#FAF8F5] border-b border-[#FAF8F5]/10 pb-2">Resources</span>
                <nav class="flex flex-col gap-3 text-sm">
                    <a href="{{ route('blog') }}" class="hover:text-[#C5A85A] transition">Blog & Insights</a>
                    <a href="{{ route('about') }}#faqs" class="hover:text-[#C5A85A] transition">FAQs</a>
                    <a href="#" class="hover:text-[#C5A85A] transition">Privacy Policy</a>
                    <a href="#" class="hover:text-[#C5A85A] transition">Terms & Conditions</a>
                </nav>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="max-w-7xl mx-auto pt-8 border-t border-[#FAF8F5]/10 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-[#FAF8F5]/40">
            <span>&copy; {{ date('Y') }} LotusRise Company Limited. All rights reserved.</span>
            <div class="flex gap-4">
                <span>Tagline: Shop Smart. Earn Smart. Grow Smart.</span>
            </div>
        </div>
    </footer>

    <!-- Interactive Navigation Scripts -->
    <script>
        // Sticky Header Effect
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('shadow-md', 'bg-white');
                header.classList.remove('bg-[#FAF8F5]/90');
            } else {
                header.classList.remove('shadow-md', 'bg-white');
                header.classList.add('bg-[#FAF8F5]/90');
            }
        });

        // Desktop Dropdowns hover and click trigger
        const dropdownContainers = document.querySelectorAll('.dropdown-container');
        dropdownContainers.forEach(container => {
            const trigger = container.querySelector('.dropdown-trigger');
            const menu = container.querySelector('.dropdown-menu');
            const icon = trigger.querySelector('.fa-chevron-down');

            const showMenu = () => {
                menu.classList.remove('hidden');
                setTimeout(() => {
                    menu.classList.remove('opacity-0', 'scale-95');
                    menu.classList.add('opacity-100', 'scale-100');
                    if (icon) icon.classList.add('rotate-180');
                }, 10);
            };

            const hideMenu = () => {
                menu.classList.remove('opacity-100', 'scale-100');
                menu.classList.add('opacity-0', 'scale-95');
                if (icon) icon.classList.remove('rotate-180');
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 200);
            };

            // Toggle on click
            trigger.addEventListener('click', (e) => {
                e.stopPropagation();
                const isHidden = menu.classList.contains('hidden');
                // Close other menus first
                dropdownContainers.forEach(c => {
                    if (c !== container) {
                        const otherMenu = c.querySelector('.dropdown-menu');
                        const otherIcon = c.querySelector('.fa-chevron-down');
                        otherMenu.classList.add('hidden', 'opacity-0', 'scale-95');
                        otherMenu.classList.remove('opacity-100', 'scale-100');
                        if (otherIcon) otherIcon.classList.remove('rotate-180');
                    }
                });

                if (isHidden) showMenu();
                else hideMenu();
            });

            // Close when clicking outside
            document.addEventListener('click', (e) => {
                if (!container.contains(e.target)) {
                    hideMenu();
                }
            });
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            } else {
                mobileMenu.classList.add('hidden');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });

        // Mobile Submenu togglers
        function toggleMobileSubmenu(id) {
            const submenu = document.getElementById(id);
            const isHidden = submenu.classList.contains('hidden');
            const parentBtn = submenu.previousElementSibling;
            const arrow = parentBtn.querySelector('.fa-chevron-down');
            
            if (isHidden) {
                submenu.classList.remove('hidden');
                if (arrow) arrow.classList.add('rotate-180');
            } else {
                submenu.classList.add('hidden');
                if (arrow) arrow.classList.remove('rotate-180');
            }
        }
    </script>
    @yield('scripts')
</body>
</html>
