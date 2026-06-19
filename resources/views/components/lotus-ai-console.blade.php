<div class="w-full max-w-4xl mx-auto bg-[#13110E] border border-[#C5A85A]/15 rounded-3xl p-6 sm:p-8 shadow-2xl space-y-6 text-[#FAF8F5]">
    
    <!-- Console Header -->
    <div class="flex items-center justify-between pb-4 border-b border-[#FAF8F5]/5">
        <div class="flex items-center gap-3">
            <div class="relative flex h-3 w-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#C5A85A]/65 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-[#C5A85A]"></span>
            </div>
            <span class="text-xs uppercase tracking-[0.25em] font-extrabold text-[#C5A85A]">Lotus AI Terminal</span>
        </div>
        <span class="text-[10px] text-[#FAF8F5]/40 font-mono tracking-wider">v1.2-secure</span>
    </div>

    <!-- AI Streaming Response Output Area -->
    <div id="ai-response-container" class="hidden transition-all duration-500 ease-out bg-[#0D0C0A] border border-[#FAF8F5]/5 rounded-2xl p-6 min-h-[120px] max-h-[350px] overflow-y-auto font-mono text-sm leading-relaxed text-[#FAF8F5]/90 space-y-4">
        <div class="flex items-center gap-2 text-xs text-[#C5A85A] border-b border-[#FAF8F5]/5 pb-2">
            <i class="fa-solid fa-microchip"></i>
            <span>SYSTEM RESPONSE DIRECTORY</span>
        </div>
        <div id="ai-response-text" class="space-y-3"></div>
        <div id="ai-response-cursor" class="inline-block w-1.5 h-4 bg-[#C5A85A] animate-pulse"></div>
        
        <!-- Action block (e.g. dynamic buttons depending on response type) -->
        <div id="ai-response-actions" class="hidden pt-4 border-t border-[#FAF8F5]/5"></div>
    </div>

    <!-- Live Recording / Voice Copilot Feedback Overlay -->
    <div id="ai-voice-panel" class="hidden bg-[#C5A85A]/10 border border-[#C5A85A]/30 rounded-2xl p-6 flex flex-col items-center justify-center space-y-4 transition duration-300">
        <div class="flex items-center gap-2">
            <!-- Pulsing recording wave dots -->
            <span class="w-2.5 h-2.5 rounded-full bg-red-500 animate-ping"></span>
            <span class="text-xs font-bold uppercase tracking-wider text-red-400">Listening (Bilingual Copilot)</span>
        </div>
        <!-- Visual Waveform simulation -->
        <div class="flex items-center gap-1.5 h-8">
            <span class="w-1 bg-[#C5A85A] rounded-full animate-[wave_1.2s_infinite_ease-in-out]"></span>
            <span class="w-1 bg-[#C5A85A] rounded-full animate-[wave_0.8s_infinite_ease-in-out_0.2s]"></span>
            <span class="w-1 bg-[#C5A85A] rounded-full animate-[wave_1.4s_infinite_ease-in-out_0.4s]"></span>
            <span class="w-1 bg-[#C5A85A] rounded-full animate-[wave_0.9s_infinite_ease-in-out_0.1s]"></span>
            <span class="w-1 bg-[#C5A85A] rounded-full animate-[wave_1.1s_infinite_ease-in-out_0.3s]"></span>
        </div>
        <p class="text-xs text-[#FAF8F5]/60 italic" id="voice-status-msg">Speak in Swahili or English to log shipment or check tariffs...</p>
        <button type="button" id="btn-stop-recording" class="px-4 py-2 bg-red-600/80 hover:bg-red-600 text-white text-xs font-bold rounded-lg transition">
            Stop and Process
        </button>
    </div>

    <!-- Input Terminal Console -->
    <form id="lotus-ai-form" class="space-y-4">
        @csrf
        <div class="relative flex items-center">
            <!-- Input Terminal Icon -->
            <span class="absolute left-4 text-[#C5A85A] text-sm font-bold font-mono">></span>
            
            <input type="text" id="ai-input" name="query" required
                class="block w-full pl-10 pr-12 py-4 bg-[#0D0C0A] border border-[#FAF8F5]/10 rounded-2xl text-sm placeholder-[#FAF8F5]/35 focus:outline-none focus:border-[#C5A85A]/50 focus:ring-1 focus:ring-[#C5A85A]/50 transition duration-300 font-mono"
                placeholder="Query compliance, freight routes, or voice instructions...">
            
            <!-- Voice Input Mic Button Trigger -->
            <button type="button" id="btn-voice-trigger" 
                class="absolute right-4 text-[#FAF8F5]/40 hover:text-[#C5A85A] transition duration-200 focus:outline-none"
                title="Bilingual Voice Copilot">
                <i class="fa-solid fa-microphone text-base"></i>
            </button>
        </div>

        <div class="flex flex-col sm:flex-row justify-between items-stretch sm:items-center gap-4">
            <!-- Loading indicator -->
            <div id="ai-loading" class="hidden flex items-center gap-2.5 text-xs text-[#C5A85A] font-mono">
                <i class="fa-solid fa-spinner animate-spin"></i>
                <span>Querying Lotus AI database...</span>
            </div>
            
            <!-- Standard Submit -->
            <button type="submit" id="btn-ai-submit"
                class="ml-auto w-full sm:w-auto px-6 py-3 bg-[#C5A85A] hover:bg-[#C5A85A]/90 text-[#0D0C0A] text-xs font-extrabold uppercase tracking-wider rounded-xl shadow-md transition duration-300 hover:-translate-y-0.5">
                Execute Command
            </button>
        </div>
    </form>

    <!-- Suggestion Pills -->
    <div class="space-y-2.5 pt-2">
        <span class="text-[10px] uppercase font-bold text-[#FAF8F5]/40 tracking-wider block">Recommended Scenarios</span>
        <div class="flex flex-wrap gap-2">
            <button type="button" class="suggestion-pill text-xs px-3.5 py-2.5 rounded-xl bg-[#1A1815] border border-[#FAF8F5]/5 text-[#FAF8F5]/75 hover:border-[#C5A85A]/40 hover:text-[#C5A85A] transition duration-200 text-left">
                📦 Tariff: Electronics from Dar to Kampala
            </button>
            <button type="button" class="suggestion-pill text-xs px-3.5 py-2.5 rounded-xl bg-[#1A1815] border border-[#FAF8F5]/5 text-[#FAF8F5]/75 hover:border-[#C5A85A]/40 hover:text-[#C5A85A] transition duration-200 text-left">
                🚛 Route Legs: Arusha return loads
            </button>
            <button type="button" class="suggestion-pill text-xs px-3.5 py-2.5 rounded-xl bg-[#1A1815] border border-[#FAF8F5]/5 text-[#FAF8F5]/75 hover:border-[#C5A85A]/40 hover:text-[#C5A85A] transition duration-200 text-left">
                📈 Demand Forecast: Soap velocity in Mwanza
            </button>
            <button type="button" class="suggestion-pill text-xs px-3.5 py-2.5 rounded-xl bg-[#1A1815] border border-[#FAF8F5]/5 text-[#FAF8F5]/75 hover:border-[#C5A85A]/40 hover:text-[#C5A85A] transition duration-200 text-left">
                🎙️ Swahili Command: "Tuma mzigo Dodoma"
            </button>
        </div>
    </div>

</div>

<!-- Waveform Keyframe style locally -->
<style>
    @keyframes wave {
        0%, 100% {
            transform: scaleY(0.3);
        }
        50% {
            transform: scaleY(1);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('lotus-ai-form');
        const input = document.getElementById('ai-input');
        const responseContainer = document.getElementById('ai-response-container');
        const responseText = document.getElementById('ai-response-text');
        const responseCursor = document.getElementById('ai-response-cursor');
        const responseActions = document.getElementById('ai-response-actions');
        const voicePanel = document.getElementById('ai-voice-panel');
        const voiceStatus = document.getElementById('voice-status-msg');
        const loadingIndicator = document.getElementById('ai-loading');
        const btnSubmit = document.getElementById('btn-ai-submit');
        const btnVoice = document.getElementById('btn-voice-trigger');
        const btnStopVoice = document.getElementById('btn-stop-recording');
        const pills = document.querySelectorAll('.suggestion-pill');
        
        let placeholderInterval = null;
        let typingInterval = null;
        let recordingTimeout = null;

        // Custom Simple Markdown Parser
        function parseMarkdownToHtml(markdown) {
            if (!markdown) return '';
            return markdown
                .replace(/### (.*)/g, '<h4 class="text-sm font-bold text-[#C5A85A] tracking-wider uppercase mt-4 mb-2 flex items-center gap-1.5"><i class="fa-solid fa-angle-right text-[10px]"></i> $1</h4>')
                .replace(/\*\*([^*]+)\*\*/g, '<strong class="font-bold text-[#FAF8F5]">$1</strong>')
                .replace(/- (.*)/g, '<div class="flex items-start gap-2 text-xs text-[#FAF8F5]/80 pl-2 mt-1"><span>•</span><span>$1</span></div>')
                .replace(/~~([^~]+)~~/g, '<span class="line-through text-gray-500">$1</span>');
        }

        // Typing effect for streaming responses
        function streamResponseText(fullText, actionHtml = null) {
            clearInterval(typingInterval);
            responseContainer.classList.remove('hidden');
            responseText.innerHTML = '';
            responseCursor.classList.remove('hidden');
            responseActions.classList.add('hidden');
            responseActions.innerHTML = '';

            let i = 0;
            const textLength = fullText.length;
            const speed = 12; // Milliseconds per character

            typingInterval = setInterval(() => {
                if (i < textLength) {
                    // Check if we are inside HTML tag/entities
                    if (fullText[i] === '<') {
                        let tagEnd = fullText.indexOf('>', i);
                        if (tagEnd !== -1) {
                            i = tagEnd;
                        }
                    }
                    
                    const slice = fullText.substring(0, i + 1);
                    responseText.innerHTML = parseMarkdownToHtml(slice);
                    i++;
                    
                    // Keep container scrolled to bottom
                    responseContainer.scrollTop = responseContainer.scrollHeight;
                } else {
                    clearInterval(typingInterval);
                    responseCursor.classList.add('hidden');
                    if (actionHtml) {
                        responseActions.innerHTML = actionHtml;
                        responseActions.classList.remove('hidden');
                        responseContainer.scrollTop = responseContainer.scrollHeight;
                    }
                }
            }, speed);
        }

        // Form Submission lifecycle
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const queryVal = input.value.trim();
            if (!queryVal) return;

            // UI State loading
            loadingIndicator.classList.remove('hidden');
            btnSubmit.disabled = true;
            input.disabled = true;
            voicePanel.classList.add('hidden');

            try {
                const response = await fetch('{{ route("lotus-ai.query") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({ query: queryVal })
                });

                const data = await response.json();
                
                if (data.success || data.response) {
                    streamResponseText(data.response, data.action_html || null);
                } else {
                    streamResponseText("### ⚠️ Connection Error\nCould not fetch response from Lotus AI. Please check query logs.");
                }
            } catch (err) {
                console.error(err);
                streamResponseText("### ⚠️ Exception Error\nFail to establish handshake with local AI database server.");
            } finally {
                loadingIndicator.classList.add('hidden');
                btnSubmit.disabled = false;
                input.disabled = false;
            }
        });

        // Click on suggestion pills
        pills.forEach(pill => {
            pill.addEventListener('click', () => {
                // Strip emoji and indicator prefix from suggestion pills
                const text = pill.innerText.replace(/^[^\w\s🎙️]*\s*/, '').trim();
                // Special case for Swahili pill
                if (text.includes("🎙️ Swahili Command:")) {
                    input.value = "Tuma mzigo Dodoma";
                } else {
                    input.value = text.replace(/^(Tariff:|Route Legs:|Demand Forecast:)\s*/, '');
                }
                form.dispatchEvent(new Event('submit'));
            });
        });

        // Audio Speech Recorder Trigger Simulation
        btnVoice.addEventListener('click', () => {
            voicePanel.classList.remove('hidden');
            voiceStatus.innerText = "Listening to voice input (English/Swahili)...";
            
            // Try requesting real mic access for audio experience validation
            if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ audio: true })
                    .then(stream => {
                        // Successfully requested mic
                        voiceStatus.innerText = "Microphone connected. Speak now...";
                    })
                    .catch(err => {
                        console.log("Mic access refused or unavailable, using simulation.");
                    });
            }

            // Auto transition/mock typing after 4 seconds if not stopped
            clearTimeout(recordingTimeout);
            recordingTimeout = setTimeout(() => {
                stopRecordingAndProcess();
            }, 4200);
        });

        function stopRecordingAndProcess() {
            voicePanel.classList.add('hidden');
            // Mock a speech command input dynamically
            const speechOutputs = [
                "Tuma mzigo Dodoma",
                "Tariff check Dar to Kampala",
                "Forecast soap velocity in Mwanza"
            ];
            const randomVoiceCommand = speechOutputs[Math.floor(Math.random() * speechOutputs.length)];
            input.value = randomVoiceCommand;
            
            // Dispatch/Execute Command
            form.dispatchEvent(new Event('submit'));
        }

        btnStopVoice.addEventListener('click', () => {
            clearTimeout(recordingTimeout);
            stopRecordingAndProcess();
        });

        // Simulated Booking function triggered by dynamically loaded response action HTML
        window.simulatedBooking = function(item, cost) {
            alert(`[Lotus Express Integration]\n\nSuccessfully reserved freight dispatch booking:\n- Sourcing Node: ${item}\n- Simulated Transaction Cost: ${cost}\n\nManifest logged to admin dashboard.`);
        };

        // Text typing placeholder simulations
        const placeholders = [
            "Query compliance: Dar to Kampala electronics...",
            "Find freight matching: Arusha return loads...",
            "Type or try: Forecast soap velocity Mwanza...",
            "Speak command: 'Tuma mzigo Dodoma'..."
        ];
        
        let pIndex = 0;
        let cIndex = 0;
        let currentPlaceholder = "";
        let isDeleting = false;

        function typePlaceholders() {
            const fullText = placeholders[pIndex];
            
            if (isDeleting) {
                currentPlaceholder = fullText.substring(0, cIndex - 1);
                cIndex--;
            } else {
                currentPlaceholder = fullText.substring(0, cIndex + 1);
                cIndex++;
            }

            input.setAttribute('placeholder', currentPlaceholder);

            let typeSpeed = 80;
            if (isDeleting) typeSpeed /= 2;

            if (!isDeleting && cIndex === fullText.length) {
                typeSpeed = 2200; // Pause at full placeholder
                isDeleting = true;
            } else if (isDeleting && cIndex === 0) {
                isDeleting = false;
                pIndex = (pIndex + 1) % placeholders.length;
                typeSpeed = 500; // Pause before typing next word
            }

            setTimeout(typePlaceholders, typeSpeed);
        }

        // Start typing placeholder carousel
        setTimeout(typePlaceholders, 1000);
    });
</script>
