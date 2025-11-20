@extends('layouts.master')

@section('meta')
    <meta name="description" content="PDPA Compliance services at Arkhive Africa. We help organizations ensure compliance with Tanzania Personal Data Protection Act (PDPA 2022) through secure document management and data protection practices." />
    <meta name="keywords" content="PDPA Compliance, Tanzania PDPA, Personal Data Protection Act, Data Protection Compliance, Document Security, Privacy Compliance, Data Management Compliance" />
    <meta property="og:description" content="PDPA Compliance services at Arkhive Africa. We help organizations ensure compliance with Tanzania Personal Data Protection Act (PDPA 2022) through secure document management and data protection practices." />
    <meta property="og:keywords" content="PDPA Compliance, Tanzania PDPA, Personal Data Protection Act, Data Protection Compliance, Document Security, Privacy Compliance, Data Management Compliance" />
@endsection

@section('title', 'PDPA Compliance')

@section('content')
<main class="w-full">
    {{-- Hero Section --}}
    <div class="breadcrump h-[80vh] relative overflow-hidden w-full flex mx-auto items-center lg:px-20 bg-cover bg-center" style="background-image: url('img/contact-cover.webp'); background-repeat: no-repeat; background-size: cover">
        <div class="absolute inset-0 bg-black/50 transition-all"></div>
        <div class="flex justify-center flex-col items-center mx-auto lg:max-w-6xl">
            <div class="relative flex lg:w-6xl flex-col px-5 z-10 text-white">
                <h2 class="text-[64px] lg:w-xl leading-15 font-[500] mb-8">PDPA Compliance</h2>
                <p class="text-xl font-[Montserrat] text-white/90 max-w-3xl">
                    From Compliance Risk to Business Assurance
                </p>
            </div>
        </div>
    </div>

    {{-- Main Content Section --}}
    <div class="lg:max-w-7xl mx-auto lg:px-10 px-5 py-20">
        {{-- Introduction Section --}}
        <div class="mb-16">
            <h3 class="text-4xl text-ark-brown font-medium mb-6">Introduction: From Compliance Risk to Business Assurance</h3>
            <p class="text-lg text-white font-[Montserrat] mb-4 leading-relaxed">
                The Tanzania Personal Data Protection Act (PDPA 2022) requires rigorous accountability and demonstrable protection of all personal and sensitive data. For businesses dealing with vast volumes of paper and digital records, compliance can feel overwhelming.
            </p>
            <p class="text-lg text-white font-[Montserrat] mb-4 leading-relaxed">
                ARKHIVE simplifies this burden. By providing secure document scanning, indexing, storage, retrieval management and certified destruction, we directly support your compliance framework, transforming your records from a liability into a secure, accessible asset.
            </p>
        </div>

        {{-- Compliance Checklist Section --}}
        <div class="mb-16">
            <h3 class="text-4xl text-ark-brown font-medium mb-8">How ARKHIVE Directly Supports Your Compliance Checklist</h3>
            <p class="text-lg text-white font-[Montserrat] mb-8 leading-relaxed">
                Your PDPA compliance requires action across several areas. ARKHIVE is your partner for key requirements under Data Security and Management and Data Subject Rights.
            </p>
            
            {{-- Compliance Table --}}
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-ark-brown/30 bg-ark-black/5 backdrop-blur-xs">
                    <thead>
                        <tr class="bg-ark-brown/20">
                            <th class="border border-ark-brown/30 px-6 py-4 text-left text-ark-brown font-medium text-lg font-[Montserrat]">PDPA Requirement</th>
                            <th class="border border-ark-brown/30 px-6 py-4 text-left text-ark-brown font-medium text-lg font-[Montserrat]">ARKHIVE Service Solution</th>
                            <th class="border border-ark-brown/30 px-6 py-4 text-left text-ark-brown font-medium text-lg font-[Montserrat]">Compliance Benefit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-ark-black/10 transition-colors">
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Manage Third-Party Providers</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Licensed and Professional Secure Third-Party Partnership (DPA)</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">We operate under a formal Data Processing Agreement (DPA) with defined security clauses, ensuring strict service provider management.</td>
                        </tr>
                        <tr class="hover:bg-ark-black/10 transition-colors">
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Implement Security Measures</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Certified Physical & Digital Security</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Optimized storage conditions for paper records and advanced digital access controls/audit trails that prevent unauthorized access.</td>
                        </tr>
                        <tr class="hover:bg-ark-black/10 transition-colors">
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Dispose of Data</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Certified Document Destruction</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Auditable, secure shredding guarantees permanent and irrevocable destruction of unneeded personal data, fulfilling disposal policies. Certificate of Destruction provided.</td>
                        </tr>
                        <tr class="hover:bg-ark-black/10 transition-colors">
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Respond to Access/Correction Requests</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Bulk Scanning, Indexing, and Rapid Retrieval</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Convert paperwork into searchable digital files for rapid retrieval, enabling a timely response to Data Subject Access Rights (DSARs).</td>
                        </tr>
                        <tr class="hover:bg-ark-black/10 transition-colors">
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Establish Data Retention Policies</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Policy-Driven Data Management</td>
                            <td class="border border-ark-brown/30 px-6 py-4 text-white font-[Montserrat]">Our system enforces your defined retention and disposal policies through system alerts and scheduled, certified destruction.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Download Section --}}
        <div class="mb-16">
            <div class="bg-ark-brown/10 border border-ark-brown/30 rounded-lg p-12 text-center">
                <h3 class="text-4xl text-ark-brown font-medium mb-6">Need a Quick Compliance Overview?</h3>
                <p class="text-lg text-white font-[Montserrat] mb-8 max-w-2xl mx-auto">
                    Download our one-page guide covering the key principles, data subject rights, and penalties under the Tanzanian PDPA.
                </p>
                <button type="button" id="downloadPDPCBtn" class="inline-flex items-center gap-3 bg-ark-brown text-ark-black font-medium px-8 py-4 rounded-md text-lg font-[Montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    DOWNLOAD PDPA AWARENESS PDF
                </button>
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="bg-ark-brown/10 border border-ark-brown/30 rounded-lg p-12 text-center">
            <h3 class="text-4xl text-ark-brown font-medium mb-6">Ready to Ensure PDPA Compliance?</h3>
            <p class="text-lg text-white font-[Montserrat] mb-8 max-w-2xl mx-auto">
                Contact us today to learn how our secure document management services can help your organization 
                meet PDPA compliance requirements and protect personal data.
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-ark-brown text-ark-black font-medium px-8 py-4 rounded-md text-lg font-[Montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out">
                Contact Us
            </a>
        </div>
    </div>
</main>

<!-- Success Popup -->
<div id="successPopup" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-[60] hidden items-center justify-center" style="display: none;">
    <div class="bg-ark-black border border-ark-brown/30 rounded-lg p-8 max-w-md w-full mx-4 relative animate-fade-in">
        <div class="text-center">
            <div class="mb-4 flex justify-center">
                <svg class="w-16 h-16 text-ark-brown" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-2xl text-ark-brown font-medium mb-4 font-[Montserrat]">Thank You!</h3>
            <p class="text-white font-[Montserrat] mb-6">Thank you for downloading the PDPA Awareness Guide.</p>
            <button id="closeSuccessPopup" class="bg-ark-brown text-ark-black font-medium px-8 py-3 rounded-md text-lg font-[Montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out">
                Close
            </button>
        </div>
    </div>
</div>

<!-- Download Modal -->
<div id="downloadModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 hidden items-center justify-center" style="display: none;">
    <div class="bg-ark-black border border-ark-brown/30 rounded-lg p-8 max-w-md w-full mx-4 relative">
        <button id="closeModal" class="absolute top-4 right-4 text-white hover:text-ark-brown transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <h3 class="text-2xl text-ark-brown font-medium mb-4 font-[Montserrat]">Download PDPA Awareness Guide</h3>
        <p class="text-white font-[Montserrat] mb-6">Please provide your email address to download the PDPA Awareness Guide.</p>
        
        <form id="downloadForm" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-white mb-2 font-[Montserrat]">Email Address</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-4 py-3 rounded-md border border-ark-brown/30 bg-ark-black/50 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50 font-[Montserrat]" 
                    placeholder="your.email@example.com">
                <div id="emailError" class="text-red-400 text-sm mt-1 hidden font-[Montserrat]"></div>
            </div>
            
            <div class="flex gap-4">
                <button type="submit" id="submitDownload" class="flex-1 bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[Montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out">
                    Download
                </button>
                <button type="button" id="cancelDownload" class="px-6 py-3 rounded-md border border-white/20 bg-ark-black/60 hover:bg-ark-black text-white transition font-[Montserrat]">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const downloadBtn = document.getElementById('downloadPDPCBtn');
    const modal = document.getElementById('downloadModal');
    const closeModal = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelDownload');
    const downloadForm = document.getElementById('downloadForm');
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const submitBtn = document.getElementById('submitDownload');

    // Open modal
    downloadBtn.addEventListener('click', function() {
        modal.classList.remove('hidden');
        modal.style.display = 'flex';
        emailInput.focus();
    });

    // Close modal
    function closeModalFunc() {
        modal.classList.add('hidden');
        modal.style.display = 'none';
        downloadForm.reset();
        emailError.classList.add('hidden');
    }

    closeModal.addEventListener('click', closeModalFunc);
    cancelBtn.addEventListener('click', closeModalFunc);

    // Close on outside click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModalFunc();
        }
    });

    // Success popup elements
    const successPopup = document.getElementById('successPopup');
    const closeSuccessPopup = document.getElementById('closeSuccessPopup');

    // Show success popup
    function showSuccessPopup() {
        successPopup.classList.remove('hidden');
        successPopup.style.display = 'flex';
    }

    // Close success popup
    function closeSuccessPopupFunc() {
        successPopup.classList.add('hidden');
        successPopup.style.display = 'none';
    }

    closeSuccessPopup.addEventListener('click', closeSuccessPopupFunc);
    
    // Close success popup on outside click
    successPopup.addEventListener('click', function(e) {
        if (e.target === successPopup) {
            closeSuccessPopupFunc();
        }
    });

    // Handle form submission
    downloadForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const email = emailInput.value.trim();
        
        // Reset error
        emailError.classList.add('hidden');
        
        // Basic email validation
        if (!email || !email.includes('@')) {
            emailError.textContent = 'Please enter a valid email address';
            emailError.classList.remove('hidden');
            return;
        }

        // Disable submit button
        submitBtn.disabled = true;
        submitBtn.textContent = 'Downloading...';

        try {
            const formData = new FormData();
            formData.append('email', email);
            formData.append('_token', document.querySelector('input[name="_token"]').value);

            const response = await fetch('{{ route("services.pdpc-download") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                }
            });

            if (response.ok) {
                // Get the blob from response
                const blob = await response.blob();
                
                // Create download link
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'PDPA-Awareness-Guide.pdf';
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
                document.body.removeChild(a);

                // Close modal
                closeModalFunc();
                
                // Show custom success popup
                showSuccessPopup();
            } else {
                const data = await response.json();
                emailError.textContent = data.message || 'An error occurred. Please try again.';
                emailError.classList.remove('hidden');
            }
        } catch (error) {
            console.error('Error:', error);
            emailError.textContent = 'An error occurred. Please try again later.';
            emailError.classList.remove('hidden');
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Download';
        }
    });
});
</script>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

.animate-fade-in {
    animation: fadeIn 0.3s ease-out;
}
</style>

@endsection

