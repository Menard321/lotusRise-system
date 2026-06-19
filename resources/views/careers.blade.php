@extends('layouts.app')

@section('title', 'Careers — LotusRise Global')

@section('content')

<!-- Header Banner -->
<section class="bg-[#0D0C0A] text-white py-16 border-b border-[#C5A85A]/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <h1 class="text-4xl font-extrabold tracking-tight">Careers at LotusRise Global</h1>
        <p class="text-base text-white/60 max-w-xl mx-auto">Join a fast-growing digital commerce and logistics team making real impact across Tanzania.</p>
    </div>
</section>

<!-- Main Careers List -->
<section class="py-20 bg-[#FAF8F5]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 space-y-4">
            <span class="text-xs uppercase tracking-[0.2em] font-extrabold text-[#C5A85A]">Work With Us</span>
            <h2 class="text-3xl font-bold text-[#0D0C0A]">Open Positions</h2>
            <p class="text-sm text-[#1D1B18]/70">Review our available postings. If you don't find a matching role, apply for general consideration below.</p>
        </div>

        <div class="space-y-6">
            @forelse($careers as $job)
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col justify-between gap-6 hover:border-[#C5A85A] transition duration-200">
                    <div class="space-y-4">
                        <div class="flex flex-wrap justify-between items-start gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-[#0D0C0A]">{{ $job->title }}</h3>
                                <div class="flex items-center gap-4 text-xs text-gray-500 mt-1">
                                    <span><i class="fa-solid fa-location-dot mr-1"></i>{{ $job->location }}</span>
                                    <span><i class="fa-solid fa-briefcase mr-1"></i>{{ $job->type }}</span>
                                </div>
                            </div>
                            <span class="text-xs px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 font-semibold border border-emerald-100">Hiring</span>
                        </div>
                        
                        <div class="text-sm text-[#1D1B18]/75 leading-relaxed space-y-2">
                            <span class="block font-bold text-xs uppercase tracking-wider text-gray-700">Role Description</span>
                            <p>{{ $job->description }}</p>
                        </div>

                        <div class="text-sm text-[#1D1B18]/75 leading-relaxed space-y-2">
                            <span class="block font-bold text-xs uppercase tracking-wider text-gray-700">Requirements</span>
                            <p class="whitespace-pre-line">{{ $job->requirements }}</p>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-gray-100">
                        <button type="button" onclick="openApplyModal({{ $job->id }}, '{{ $job->title }}')"
                            class="px-6 py-2.5 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-white text-xs font-bold rounded-xl shadow-sm transition">
                            Apply for this Position
                        </button>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 py-12">No current job openings are listed. Check back soon!</p>
            @endforelse
        </div>

    </div>
</section>

<!-- Job Application Modal -->
<div id="apply-modal" class="fixed inset-0 z-50 bg-[#0d0c0a]/80 backdrop-blur-sm hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-xl w-full p-8 relative shadow-2xl border border-gray-100 max-h-[90vh] overflow-y-auto">
        <button onclick="closeApplyModal()" class="absolute top-6 right-6 text-gray-400 hover:text-gray-600"><i class="fa-solid fa-xmark text-xl"></i></button>
        
        <h3 class="text-xl font-bold text-[#0D0C0A] mb-1">Submit Application</h3>
        <p class="text-xs text-gray-500 mb-6">Applying for: <strong id="modal-job-title" class="text-[#C5A85A]">General Position</strong></p>

        <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <input type="hidden" name="career_id" id="modal-career-id">
            
            <!-- Full Name -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Full Name</label>
                <input type="text" name="full_name" required class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Email -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Email Address</label>
                    <input type="email" name="email" required class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                </div>
                <!-- Phone -->
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Phone Number</label>
                    <input type="text" name="phone" required placeholder="+255 7XX XXX XXX" class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]">
                </div>
            </div>

            <!-- CV Upload -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Upload Resume (PDF, DOCX - Max 4MB)</label>
                <input type="file" name="resume" required accept=".pdf,.doc,.docx" class="block w-full text-xs text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 cursor-pointer">
            </div>

            <!-- Cover Letter -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-1">Cover Letter</label>
                <textarea name="cover_letter" required rows="4" placeholder="Briefly describe why you are a fit for this role and LotusRise Global..." class="block w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:border-[#C5A85A]"></textarea>
            </div>

            <button type="submit" class="w-full py-3.5 bg-[#0D0C0A] hover:bg-[#C5A85A] hover:text-[#0D0C0A] text-white font-bold rounded-xl shadow-md transition">
                Submit CV Application
            </button>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    const modal = document.getElementById('apply-modal');
    const modalJobTitle = document.getElementById('modal-job-title');
    const modalCareerId = document.getElementById('modal-career-id');

    function openApplyModal(id, title) {
        modalCareerId.value = id;
        modalJobTitle.innerText = title;
        modal.classList.remove('hidden');
    }

    function closeApplyModal() {
        modal.classList.add('hidden');
    }
</script>
@endsection
