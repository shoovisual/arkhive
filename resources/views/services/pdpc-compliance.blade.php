@extends('layouts.master')

@section('meta')
    <meta name="description" content="PDPA Compliance services at Arkhive Africa. We help organizations ensure compliance with Tanzania Personal Data Protection Act (PDPA 2022) through secure document management and data protection practices." />
    <meta name="keywords" content="PDPA Compliance, Tanzania PDPA, Personal Data Protection Act, Data Protection Compliance, Document Security, Privacy Compliance, Data Management Compliance" />
    <meta property="og:description" content="PDPA Compliance services at Arkhive Africa. We help organizations ensure compliance with Tanzania Personal Data Protection Act (PDPA 2022) through secure document management and data protection practices." />
    <meta property="og:keywords" content="PDPA Compliance, Tanzania PDPA, Personal Data Protection Act, Data Protection Compliance, Document Security, Privacy Compliance, Data Management Compliance" />
@endsection

@section('title', 'PDPA Compliance')

@section('content')

<div class="h-[70dvh] md:h-[70vh] lg:h-[90vh] relative overflow-hidden md:w-full flex mx-auto items-center px-3 md:px-20" style="background-image: url('img/hero-bg.webp'); background-position: center; background-size: cover">
    <div class="absolute inset-0 bg-black/40 transition-all"></div>
    <div class="flex justify-center md:flex-col items-center mx-auto w-full lg:max-w-6xl">
        <div class="relative md:flex anim-section w-auto lg:w-6xl flex-col px-5 z-10 text-white">
            <h2 class="text-[38px] anim-child md:text-left md:text-[64px] lg:w-xl md:leading-15 font-[500] mb-8">@yield('title')</h2>
            <p class="text-xl md:w-xl font-[montserrat] anim-child">From Compliance Risk to Business Assurance</p>
        </div>
    </div>
</div>

<div class="md:max-w-7xl py-10 mx-auto px-10">
    {{-- Introduction Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 my-10">
        <div class="flex flex-col anim-section gap-y-4">
            <h2 class="md:text-6xl text-4xl text-ark-brown font-medium mb-8">From Compliance Risk to Business Assurance</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <img src="{{ asset('img/document_storage.webp') }}" alt="Secure Document Storage" class="object-cover md:gsap-image gsap-scroll-image rounded-lg shadow-lg">
                <img src="{{ asset('img/document_secured_access.webp') }}" alt="Secured Document Access" class="object-cover md:gsap-image gsap-scroll-image rounded-lg shadow-lg">
            </div>
        </div>
        <div class="flex flex-col anim-section gap-y-4">
            <p class="text-lg mb-6 md:w-xl text-white font-[montserrat]">
                The Tanzania Personal Data Protection Act (PDPA 2022) requires rigorous accountability and demonstrable protection of all personal and sensitive data. For businesses dealing with vast volumes of paper and digital records, compliance can feel overwhelming.
            </p>
            <p class="text-lg mb-6 md:w-xl text-white font-[montserrat]">
                ARKHIVE simplifies this burden. By providing secure document scanning, indexing, storage, retrieval management and certified destruction, we directly support your compliance framework, transforming your records from a liability into a secure, accessible asset.
            </p>
        </div>
    </div>

         {{-- Compliance Checklist Section --}}
         <div class="mb-16">
             <h3 class="text-4xl text-ark-brown font-medium mb-8">How ARKHIVE Directly Supports Your Compliance Checklist</h3>
             <p class="text-lg text-white font-[montserrat] mb-8 leading-relaxed">
                 Your PDPA compliance requires action across several areas. ARKHIVE is your partner for key requirements under Data Security and Management and Data Subject Rights.
             </p>
             
             {{-- Compliance Cards --}}
             <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                 <div class="bg-ark-black/5 backdrop-blur-sm border border-ark-brown/40 p-6 rounded-lg shadow-lg anim-section hover:border-ark-brown/60 transition-colors">
                     <h4 class="text-[26px] text-ark-brown font-medium mb-4">Manage Third-Party Providers</h4>
                     <div class="mb-4">
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">ARKHIVE Service Solution:</p>
                         <p class="text-white font-regular font-[montserrat]">Licensed and Professional Secure Third-Party Partnership (DPA)</p>
                     </div>
                     <div>
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">Compliance Benefit:</p>
                         <p class="text-white font-regular font-[montserrat]">We operate under a formal Data Processing Agreement (DPA) with defined security clauses, ensuring strict service provider management.</p>
                     </div>
                 </div>

                 <div class="bg-ark-black/5 backdrop-blur-sm border border-ark-brown/40 p-6 rounded-lg shadow-lg anim-section hover:border-ark-brown/60 transition-colors">
                     <h4 class="text-[26px] text-ark-brown font-medium mb-4">Implement Security Measures</h4>
                     <div class="mb-4">
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">ARKHIVE Service Solution:</p>
                         <p class="text-white font-regular font-[montserrat]">Certified Physical & Digital Security</p>
                     </div>
                     <div>
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">Compliance Benefit:</p>
                         <p class="text-white font-regular font-[montserrat]">Optimized storage conditions for paper records and advanced digital access controls/audit trails that prevent unauthorized access.</p>
                     </div>
                 </div>

                 <div class="bg-ark-black/5 backdrop-blur-sm border border-ark-brown/40 p-6 rounded-lg shadow-lg anim-section hover:border-ark-brown/60 transition-colors">
                     <h4 class="text-[26px] text-ark-brown font-medium mb-4">Dispose of Data</h4>
                     <div class="mb-4">
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">ARKHIVE Service Solution:</p>
                         <p class="text-white font-regular font-[montserrat]">Certified Document Destruction</p>
                     </div>
                     <div>
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">Compliance Benefit:</p>
                         <p class="text-white font-regular font-[montserrat]">Auditable, secure shredding guarantees permanent and irrevocable destruction of unneeded personal data, fulfilling disposal policies. Certificate of Destruction provided.</p>
                     </div>
                 </div>

                 <div class="bg-ark-black/5 backdrop-blur-sm border border-ark-brown/40 p-6 rounded-lg shadow-lg anim-section hover:border-ark-brown/60 transition-colors">
                     <h4 class="text-[26px] text-ark-brown font-medium mb-4">Respond to Access/Correction Requests</h4>
                     <div class="mb-4">
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">ARKHIVE Service Solution:</p>
                         <p class="text-white font-regular font-[montserrat]">Bulk Scanning, Indexing, and Rapid Retrieval</p>
                     </div>
                     <div>
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">Compliance Benefit:</p>
                         <p class="text-white font-regular font-[montserrat]">Convert paperwork into searchable digital files for rapid retrieval, enabling a timely response to Data Subject Access Rights (DSARs).</p>
                     </div>
                 </div>

                 <div class="bg-ark-black/5 backdrop-blur-sm border border-ark-brown/40 p-6 rounded-lg shadow-lg anim-section hover:border-ark-brown/60 transition-colors">
                     <h4 class="text-[26px] text-ark-brown font-medium mb-4">Establish Data Retention Policies</h4>
                     <div class="mb-4">
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">ARKHIVE Service Solution:</p>
                         <p class="text-white font-regular font-[montserrat]">Policy-Driven Data Management</p>
                     </div>
                     <div>
                         <p class="text-sm text-ark-brown/80 font-[montserrat] mb-2 font-semibold">Compliance Benefit:</p>
                         <p class="text-white font-regular font-[montserrat]">Our system enforces your defined retention and disposal policies through system alerts and scheduled, certified destruction.</p>
                     </div>
                 </div>

                 {{-- CTA Card --}}
                 <div class="bg-ark-brown rounded-lg shadow-lg anim-section p-8 flex flex-col items-center justify-center text-center min-h-[300px]">
                     <h4 class="text-3xl md:text-4xl text-ark-black font-medium mb-6">Want to know more?</h4>
                     <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-ark-black font-medium text-xl md:text-2xl font-[montserrat] hover:opacity-80 transition-opacity">
                         Let's Talk
                         <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                         </svg>
                     </a>
                 </div>
             </div>
         </div>

    {{-- Download Section --}}
    <div class="lg:grid grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 md:flex md:flex-row-reverse items-center gap-8 my-10">
        <div class="grid grid-cols-1 anim-section">
            <img src="{{ asset('img/document_secured_access.webp') }}" alt="PDPA Compliance" class="object-cover gsap-scroll-image md:h-[250px] lg:h-[300px] w-full rounded-lg shadow-lg">
        </div>
        <div class="flex flex-col anim-section">
            <h3 class="text-4xl text-ark-brown font-medium mb-6">Need a Quick Compliance Overview?</h3>
            <p class="text-lg mb-6 md:w-xl text-white font-[montserrat]">
                Download our one-page guide covering the key principles, data subject rights, and penalties under the Tanzanian PDPA.
            </p>
            <div class="flex flex-col md:justify-center lg:justify-start sm:flex-row gap-4">
                <button type="button" id="downloadPDPCBtn" class="border border-ark-brown bg-ark-brown px-6 py-3 text-center font-[montserrat] font-medium hover:bg-ark-brown/50 transition-colors rounded cursor-pointer inline-flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download PDPA Guide
                </button>
                <!-- <a href="{{ route('contact') }}" class="border border-ark-brown px-6 py-3 text-center font-[montserrat] font-medium hover:bg-ark-brown/10 transition-colors rounded">
                    Contact Us
                </a> -->
            </div>
        </div>
    </div>
</div>

{{-- CTA --}}
<div class="relative overflow-hidden md:w-7xl rounded-2xl flex mx-auto items-center py-10" style="background-image: url('img/cta-bg.webp'); background-position: bottom; background-size: cover">
    <div class="absolute inset-0 bg-black/70 bg-blend-multiply transition-all"></div>
    <div class="container flex justify-center py-5 items-center mx-auto">
        <div class="relative grid grid-cols-1 md:grid-cols-2 px-5 z-10">
            <div class="flex flex-col mb-8 md:mb-0 gap-y-4">
                <h2 class="text-2xl text-ark-brown font-[montserrat]">Ready to Ensure PDPA Compliance?</h2>
                <h2 class="text-6xl text-white">Let's Talk.</h2>
            </div>
            <div class="flex md:justify-center items-center">
                <div class="contact-btn">
                    <a href="{{ route('contact') }}" class="bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[montserrat] hover:bg-white/80 transition duration-300 ease-in-out">Contact Us <i class="bi ml-3 bi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('services.sections.industries')

<!-- Success Popup -->
<div id="successPopup" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-[60] hidden items-center justify-center" style="display: none;">
    <div class="bg-ark-black border border-ark-brown/30 rounded-lg p-8 max-w-md w-full mx-4 relative animate-fade-in">
        <div class="text-center">
            <div class="mb-4 flex justify-center">
                <svg class="w-16 h-16 text-ark-brown" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-2xl text-ark-brown font-medium mb-4 font-[montserrat]">Thank You!</h3>
            <p class="text-white font-[montserrat] mb-6">Thank you for downloading the PDPA Awareness Guide.</p>
            <button id="closeSuccessPopup" class="bg-ark-brown text-ark-black font-medium px-8 py-3 rounded-md text-lg font-[montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out">
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
        
        <h3 class="text-2xl text-ark-brown font-medium mb-4 font-[montserrat]">Download PDPA Awareness Guide</h3>
        <p class="text-white font-[montserrat] mb-6">Please provide your email address to download the PDPA Awareness Guide.</p>
        
        <form id="downloadForm" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-white mb-2 font-[montserrat]">Email Address</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-4 py-3 rounded-md border border-ark-brown/30 bg-ark-black/50 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50 font-[montserrat]" 
                    placeholder="your.email@example.com">
                <div id="emailError" class="text-red-400 text-sm mt-1 hidden font-[montserrat]"></div>
            </div>
            
            <div class="flex gap-4">
                <button type="submit" id="submitDownload" class="flex-1 bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out">
                    Download
                </button>
                <button type="button" id="cancelDownload" class="px-6 py-3 rounded-md border border-white/20 bg-ark-black/60 hover:bg-ark-black text-white transition font-[montserrat]">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('.gsap-scroll-image').forEach((img) => {
        gsap.fromTo(img,
            { y: 50 },
            {
                y: -50,
                ease: "none",
                scrollTrigger: {
                    trigger: img,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: true,
                }
            }
        );
    });

    gsap.utils.toArray(".anim-section").forEach(section => {
        const children = section.querySelectorAll(".anim-child");

        ScrollTrigger.create({
            trigger: section,
            start: "top 85%",
            end: "bottom 0",
            toggleActions: "play none none none",

            onEnter: () => {
                gsap.to(children, {
                    opacity: 1,
                    y: 0,
                    filter: "blur(0px)",
                    duration: 1.1,
                    ease: "power3.out",
                    stagger: 0.15
                });
            },

            onLeaveBack: () => {
                gsap.to(children, {
                    opacity: 0,
                    y: 50,
                    filter: "blur(8px)",
                    duration: 0.6,
                    ease: "power2.in",
                    stagger: {
                        each: 0.1,
                        from: "end"
                    }
                });
            }
        });
    });
</script>

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
