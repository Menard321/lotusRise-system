@extends('layouts.app')

@section('title', 'Login — LotusRise Global')

@section('content')
<div class="min-h-[70vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-cover bg-center" style="background-image: linear-gradient(to bottom, rgba(250, 248, 245, 0.9), rgba(250, 248, 245, 0.95));">
    <div class="max-w-md w-full space-y-8 bg-[#0D0C0A] text-[#FAF8F5] p-8 sm:p-10 rounded-2xl shadow-xl border border-[#C5A85A]/20">
        
        <!-- Logo & Header -->
        <div class="text-center">
            <div class="mx-auto w-12 h-12 rounded-xl bg-[#C5A85A] flex items-center justify-center text-[#0D0C0A] mb-4">
                <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C11.5 5 9 8.5 6 9.5c3 1 5 4.5 6 7.5 1-3 3-6.5 6-7.5-3-1-5-4.5-6-7.5zm0 18c-1.5-2.5-4-3-6-3.5 2-.5 4.5-1 6-3.5 1.5 2.5 4 3 6 3.5-2 .5-4.5 1-6 3.5z"/>
                </svg>
            </div>
            <h2 class="text-2xl font-bold tracking-tight">Welcome back</h2>
            <p class="mt-1 text-sm text-[#FAF8F5]/60">Sign in to your LotusRise Global workspace</p>
        </div>

        <!-- Form -->
        <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
            @csrf
            
            <div class="space-y-4">
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
                    <div class="flex justify-between items-center mb-1.5">
                        <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-[#FAF8F5]/70">Password</label>
                        <a href="#" class="text-xs text-[#C5A85A] hover:text-[#C5A85A]/80 transition">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-[#FAF8F5]/40">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full pl-10 pr-4 py-3 bg-[#13110E] border border-[#FAF8F5]/15 rounded-xl text-sm placeholder-[#FAF8F5]/30 focus:outline-none focus:border-[#C5A85A] focus:ring-1 focus:ring-[#C5A85A] transition"
                            placeholder="••••••••">
                    </div>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember" name="remember" type="checkbox"
                    class="h-4 w-4 rounded border-[#FAF8F5]/20 bg-[#13110E] text-[#C5A85A] focus:ring-offset-[#0D0C0A] focus:ring-[#C5A85A]">
                <label for="remember" class="ml-2.5 block text-sm text-[#FAF8F5]/75 select-none">
                    Remember my credentials
                </label>
            </div>

            <!-- Submit -->
            <div class="space-y-4">
                <button type="submit"
                    class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl text-sm font-semibold text-[#0D0C0A] bg-[#C5A85A] hover:bg-[#C5A85A]/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#0D0C0A] focus:ring-[#C5A85A] shadow-md transition duration-200">
                    Sign In
                </button>
                <div class="text-center pt-2">
                    <span class="text-xs text-[#FAF8F5]/60">New to LotusRise? </span>
                    <a href="{{ route('register') }}" class="text-xs text-[#C5A85A] font-semibold hover:underline">I don't have an account</a>
                </div>
            </div>
        </form>

        <!-- Credentials Quick Access (Testing Helper) -->
        <div class="mt-8 pt-6 border-t border-[#FAF8F5]/10 space-y-3">
            <span class="block text-xs font-bold text-[#C5A85A] uppercase tracking-wider text-center">Demo Quick Login Credentials</span>
            <div class="grid grid-cols-1 gap-2 text-xs text-[#FAF8F5]/65">
                <div class="p-2.5 rounded-lg bg-[#13110E] border border-[#FAF8F5]/5 flex justify-between items-center">
                    <div>
                        <span class="block font-semibold text-[#FAF8F5]">Administrator</span>
                        <span>admin@lotusriseglobal.com</span>
                    </div>
                    <button type="button" onclick="fillForm('admin@lotusriseglobal.com')" class="text-[#C5A85A] hover:underline font-medium">Use</button>
                </div>
                <div class="p-2.5 rounded-lg bg-[#13110E] border border-[#FAF8F5]/5 flex justify-between items-center">
                    <div>
                        <span class="block font-semibold text-[#FAF8F5]">Verified Vendor</span>
                        <span>vendor@lotusriseglobal.com</span>
                    </div>
                    <button type="button" onclick="fillForm('vendor@lotusriseglobal.com')" class="text-[#C5A85A] hover:underline font-medium">Use</button>
                </div>
                <div class="p-2.5 rounded-lg bg-[#13110E] border border-[#FAF8F5]/5 flex justify-between items-center">
                    <div>
                        <span class="block font-semibold text-[#FAF8F5]">Registered Agent</span>
                        <span>agent@lotusriseglobal.com</span>
                    </div>
                    <button type="button" onclick="fillForm('agent@lotusriseglobal.com')" class="text-[#C5A85A] hover:underline font-medium">Use</button>
                </div>
            </div>
            <p class="text-[10px] text-center text-[#FAF8F5]/40">Password for all test accounts is <strong class="text-[#C5A85A]">password</strong></p>
        </div>
        
    </div>
</div>
@endsection

@section('scripts')
<script>
    function fillForm(email) {
        document.getElementById('email').value = email;
        document.getElementById('password').value = 'password';
    }
</script>
@endsection
