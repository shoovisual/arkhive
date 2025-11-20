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
                <a href="#" class="inline-flex items-center gap-3 bg-ark-brown text-ark-black font-medium px-8 py-4 rounded-md text-lg font-[Montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    DOWNLOAD PDPA AWARENESS PDF
                </a>
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
@endsection

