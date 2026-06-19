@extends('layouts.app')

@section('title', 'Contact Us — LotusRise Global')

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-16 border-b border-[#C5A85A]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <h1 class="text-4xl font-extrabold tracking-tight">Contact LotusRise Global</h1>
        <p class="text-base text-white/60 max-w-xl mx-auto">Get in touch with our customer support, logistics consolidation desks, or vendor managers.</p>
    </div>
</section>

<section class="py-20 bg-[#FAF8F5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Left Info Panel -->
            <div class="lg:col-span-5 space-y-8">
                <div class="space-y-4">
                    <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Connect With Us</span>
                    <h2 class="text-3xl font-bold text-[#0D0C0A]">We'd Love to Hear From You</h2>
                    <p class="text-sm text-[#1D1B18]/70 leading-relaxed">
                        Our corporate office is located in the central trade zone of Dar es Salaam. Reach out for partnership inquiries, regional shipping arrangements, or bulk procurement support.
                    </p>
                </div>

                <div class="space-y-4 text-sm">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center shrink-0"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <span class="block font-bold text-[#0D0C0A]">Call Support</span>
                            <a href="tel:+255742123456" class="text-gray-500 hover:text-[#C5A85A]">+255 742 123 456</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center shrink-0"><i class="fa-brands fa-whatsapp text-emerald-600"></i></div>
                        <div>
                            <span class="block font-bold text-[#0D0C0A]">WhatsApp Chat</span>
                            <a href="https://wa.me/255742123456" target="_blank" class="text-gray-500 hover:text-[#C5A85A]">WhatsApp Us Directly</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center shrink-0"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <span class="block font-bold text-[#0D0C0A]">Email Enquiries</span>
                            <a href="mailto:info@lotusriseglobal.com" class="text-gray-500 hover:text-[#C5A85A]">info@lotusriseglobal.com</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center shrink-0"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <span class="block font-bold text-[#0D0C0A]">Physical Headquarters</span>
                            <span class="text-gray-500">Kariakoo Wholesale Hub, Ilala District, Dar es Salaam, Tanzania</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[#C5A85A]/10 text-[#C5A85A] flex items-center justify-center shrink-0"><i class="fa-solid fa-clock"></i></div>
                        <div>
                            <span class="block font-bold text-[#0D0C0A]">Operational Hours</span>
                            <span class="text-gray-500 block">Monday — Friday: 8:00 AM — 6:00 PM</span>
                            <span class="text-gray-500 block">Saturday: 8:00 AM — 2:00 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Google Maps Card Mockup -->
                <div class="bg-white rounded-3xl p-4 border border-gray-100 shadow-sm relative overflow-hidden h-52 flex items-center justify-center text-center">
                    <div class="absolute inset-0 bg-[#0D0C0A]/95 flex flex-col justify-center items-center text-white p-4 space-y-3">
                        <i class="fa-solid fa-map-location-dot text-3xl text-[#C5A85A]"></i>
                        <span class="block font-bold text-sm">Dar es Salaam Main HQ Marker</span>
                        <p class="text-[10px] text-white/50 max-w-xs leading-relaxed">Central Trade Hub, Msimbazi Street, Kariakoo</p>
                    </div>
                </div>
            </div>

            <!-- Right Contact Form Column -->
            <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-[#1D1B18]/5 shadow-lg">
                <span class="text-lg font-bold text-[#0D0C0A] block mb-1">Send a Message</span>
                <p class="text-xs text-gray-500 mb-6">Complete the fields below. A local partner manager will reach out soon.</p>

                <form action="{{ route('contact.inquire') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Name -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Your Name</label>
                            <input type="text" name="name" required value="{{ old('name') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                        <!-- Phone -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Phone Number</label>
                            <input type="text" name="phone" required placeholder="+255 7XX XXX XXX" value="{{ old('phone') }}"
                                class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Email Address</label>
                        <input type="email" name="email" required value="{{ old('email') }}"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>

                    <!-- Subject -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Subject</label>
                        <input type="text" name="subject" required value="{{ old('subject') }}"
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Message Detail</label>
                        <textarea name="message" required rows="4" placeholder="Detail your inquiries, cargo details, or bulk requests..."
                            class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full flex justify-center py-3.5 px-4 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-white font-bold rounded-xl shadow-md transition duration-200">
                        Submit Contact Inquiry
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
