<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel — LotusRise Global')</title>
    
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
<body class="bg-[#FAF8F5] text-[#1D1B18] flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#0D0C0A] text-[#FAF8F5]/80 flex flex-col justify-between shrink-0 hidden md:flex border-r border-[#1D1B18]/10">
        <div class="flex flex-col gap-8 p-6">
            <!-- Brand -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg bg-[#C5A85A] flex items-center justify-center text-[#0D0C0A]">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C11.5 5 9 8.5 6 9.5c3 1 5 4.5 6 7.5 1-3 3-6.5 6-7.5-3-1-5-4.5-6-7.5zm0 18c-1.5-2.5-4-3-6-3.5 2-.5 4.5-1 6-3.5 1.5 2.5 4 3 6 3.5-2 .5-4.5 1-6 3.5z"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-lg font-bold tracking-tight text-[#FAF8F5] leading-none">LotusRise</span>
                    <span class="text-[8px] uppercase tracking-[0.25em] font-semibold text-[#C5A85A] mt-0.5">Admin</span>
                </div>
            </a>

            <!-- Nav Links -->
            <nav class="flex flex-col gap-1.5">
                <span class="text-[10px] uppercase font-bold text-[#FAF8F5]/40 tracking-wider mb-2">Operations</span>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.dashboard') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5 hover:text-[#FAF8F5]' }}">
                    <i class="fa-solid fa-gauge w-5"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.vendors') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.vendors') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5 hover:text-[#FAF8F5]' }}">
                    <i class="fa-solid fa-store w-5"></i>
                    <span>Manage Vendors</span>
                </a>
                <a href="{{ route('admin.agents') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.agents') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5 hover:text-[#FAF8F5]' }}">
                    <i class="fa-solid fa-users-gear w-5"></i>
                    <span>Manage Agents</span>
                </a>
                <a href="{{ route('admin.inquiries') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.inquiries') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5 hover:text-[#FAF8F5]' }}">
                    <i class="fa-solid fa-envelope-open-text w-5"></i>
                    <span>Inquiries / Leads</span>
                </a>

                <span class="text-[10px] uppercase font-bold text-[#FAF8F5]/40 tracking-wider mt-6 mb-2">Content</span>
                <a href="{{ route('admin.portfolio') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.portfolio*') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5 hover:text-[#FAF8F5]' }}">
                    <i class="fa-solid fa-briefcase w-5"></i>
                    <span>Portfolio</span>
                </a>
                <a href="{{ route('admin.blog') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.blog*') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5 hover:text-[#FAF8F5]' }}">
                    <i class="fa-solid fa-feather-pointed w-5"></i>
                    <span>Blog Posts</span>
                </a>
            </nav>
        </div>

        <!-- User Profile Card -->
        <div class="p-6 border-t border-[#FAF8F5]/10 flex flex-col gap-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-[#FAF8F5]/10 flex items-center justify-center text-[#C5A85A] font-bold">
                    A
                </div>
                <div class="flex flex-col truncate">
                    <span class="text-sm font-semibold text-[#FAF8F5] leading-tight truncate">Administrator</span>
                    <span class="text-xs text-[#C5A85A]">LotusRise Global</span>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="w-full">
                @csrf
                <button type="submit" class="w-full py-2.5 rounded-xl border border-red-500/20 text-red-400 hover:bg-red-500/10 text-xs font-semibold transition">
                    <i class="fa-solid fa-right-from-bracket mr-1.5"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-grow flex flex-col min-h-screen">
        <!-- Top Header -->
        <header class="h-16 border-b border-[#1D1B18]/5 bg-[#FAF8F5] flex items-center justify-between px-6 shrink-0 shadow-sm">
            <div class="flex items-center gap-4">
                <button id="sidebar-toggle" class="text-[#0D0C0A] hover:text-[#C5A85A] md:hidden focus:outline-none">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
                <h1 class="text-lg font-semibold tracking-tight text-[#0D0C0A]">@yield('page_title', 'Admin Dashboard')</h1>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="text-xs text-[#0D0C0A] bg-[#0D0C0A]/5 px-3 py-1.5 rounded-full border border-[#0D0C0A]/10 hover:bg-[#0D0C0A]/10 transition">
                    <i class="fa-solid fa-arrow-up-right-from-square mr-1.5"></i>Visit Site
                </a>
            </div>
        </header>

        <!-- Notifications inside panel -->
        <div class="px-6 mt-4">
            @if(session('success'))
                <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-800 p-4 rounded-r-xl shadow-sm flex items-start gap-3">
                    <i class="fa-solid fa-circle-check text-emerald-500 mt-1"></i>
                    <div>
                        <span class="font-semibold">Success</span>
                        <p class="text-sm mt-0.5">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-rose-50 border-l-4 border-rose-500 text-rose-800 p-4 rounded-r-xl shadow-sm flex items-start gap-3">
                    <i class="fa-solid fa-circle-xmark text-rose-500 mt-1"></i>
                    <div>
                        <span class="font-semibold">Error</span>
                        <p class="text-sm mt-0.5">{{ session('error') }}</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Render Content -->
        <main class="flex-grow p-6">
            @yield('content')
        </main>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-sidebar" class="fixed inset-0 z-50 bg-[#0d0c0a]/80 backdrop-blur-sm hidden flex">
        <div class="w-64 bg-[#0D0C0A] h-full flex flex-col justify-between p-6">
            <div class="flex flex-col gap-8">
                <!-- Close and logo -->
                <div class="flex justify-between items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-[#C5A85A] flex items-center justify-center text-[#0D0C0A]">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C11.5 5 9 8.5 6 9.5c3 1 5 4.5 6 7.5 1-3 3-6.5 6-7.5-3-1-5-4.5-6-7.5zm0 18c-1.5-2.5-4-3-6-3.5 2-.5 4.5-1 6-3.5 1.5 2.5 4 3 6 3.5-2 .5-4.5 1-6 3.5z"/>
                            </svg>
                        </div>
                        <span class="font-bold text-[#FAF8F5]">LotusRise Admin</span>
                    </a>
                    <button id="sidebar-close" class="text-[#FAF8F5]/60 hover:text-[#FAF8F5]"><i class="fa-solid fa-xmark text-xl"></i></button>
                </div>

                <!-- Links -->
                <nav class="flex flex-col gap-1.5 text-[#FAF8F5]/80">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.dashboard') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5' }}">Dashboard</a>
                    <a href="{{ route('admin.vendors') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.vendors') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5' }}">Vendors</a>
                    <a href="{{ route('admin.agents') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.agents') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5' }}">Agents</a>
                    <a href="{{ route('admin.inquiries') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.inquiries') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5' }}">Inquiries / Leads</a>
                    <a href="{{ route('admin.portfolio') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.portfolio*') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5' }}">Portfolio</a>
                    <a href="{{ route('admin.blog') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition {{ request()->routeIs('admin.blog*') ? 'bg-[#C5A85A] text-[#0D0C0A]' : 'hover:bg-[#FAF8F5]/5' }}">Blog Posts</a>
                </nav>
            </div>

            <!-- Profile & Logout -->
            <div class="border-t border-[#FAF8F5]/10 pt-4 flex flex-col gap-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-2.5 rounded-xl border border-red-500/20 text-red-400 hover:bg-red-500/10 text-xs font-semibold">Logout</button>
                </form>
            </div>
        </div>
        <div class="flex-grow" id="sidebar-overlay-right"></div>
    </div>

    <script>
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const sidebarClose = document.getElementById('sidebar-close');
        const sidebarOverlayRight = document.getElementById('sidebar-overlay-right');

        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', () => {
                mobileSidebar.classList.remove('hidden');
            });
        }

        const closeSidebar = () => {
            mobileSidebar.classList.add('hidden');
        };

        if (sidebarClose) sidebarClose.addEventListener('click', closeSidebar);
        if (sidebarOverlayRight) sidebarOverlayRight.addEventListener('click', closeSidebar);
    </script>
    @yield('scripts')
</body>
</html>
