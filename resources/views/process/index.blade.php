@extends('layouts.master')
@section('title', 'Our Process')
@section('content')
<div class="h-[70dvh] md:h-[70vh] lg:h-[90vh] relative overflow-hidden md:w-full flex mx-auto items-center px-3 md:px-20" style="background-image: url('img/document_storage.webp'); background-position: center; background-size: cover">
    <div class="absolute inset-0 bg-black/40 transition-all"></div>
    <div class="flex justify-center md:flex-col items-center mx-auto w-full lg:max-w-6xl">
        <div class="relative md:flex w-auto lg:w-6xl flex-col px-5 z-10 text-white">
            <h2 class="text-[38px] md:text-left md:text-[64px] lg:w-xl md:leading-15 font-[500] mb-8">Our Process</h2>
        </div>
    </div>
</div>
    <section class="process-section">
        <div class="max-w-7xl mx-auto px-4 mb-5 py-8">

            <div class="process-steps items-center mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="process-step lg:text-left text-center lg:mt-10 text-white group">
                    <div class="process-icon bg-[#25282A]/10 mx-auto backdrop-blur-xs border-2 border-ark-brown/10 flex justify-center w-fit rounded-xl shadow-lg ">
                        <img src="{{ asset('img/process/assess.png') }}" alt="Arkhive Process" class="w-[300px] group-hover:scale-110 transition-all duration-300">
                    </div>
                    <div class="process-text px-12">
                        <h2 class="my-4 text-[52px]">Assess</h2>
                        <p class="font-[Montserrat]">Initial discussion to understand your document management needs.</p>
                    </div>
                </div>

                <div class="process-step lg:text-left text-center text-white group">
                    <div class="process-icon bg-[#25282A]/10 mx-auto backdrop-blur-xs border-2 border-ark-brown/10 flex justify-center w-fit rounded-xl shadow-lg ">
                        <img src="{{ asset('img/process/customize.png') }}" alt="Arkhive Process" class="w-[300px] group-hover:scale-110 transition-all duration-300">
                    </div>
                    <div class="process-text px-12">
                        <h2 class="my-4 text-[52px]">Customize</h2>
                        <p class="font-[Montserrat]">Evaluation of your current document workflow and requirements.</p>
                    </div>
                </div>

                <div class="process-step lg:text-left text-center lg:mt-10 text-white group">
                    <div class="process-icon bg-[#25282A]/10 mx-auto backdrop-blur-xs border-2 border-ark-brown/10 flex justify-center w-fit rounded-xl shadow-lg ">
                        <img src="{{ asset('img/process/align.png') }}" alt="Arkhive Process" class="w-[300px] group-hover:scale-110 transition-all duration-300">
                    </div>
                    <div class="process-text px-12">
                        <h2 class="my-4 text-[52px]">Align</h2>
                        <p class="font-[Montserrat]">Customized plan for your document management system.</p>
                    </div>
                </div>

                <div class="process-step lg:text-left text-center lg:mt-10 text-white group">
                    <div class="process-icon bg-[#25282A]/10 mx-auto backdrop-blur-xs border-2 border-ark-brown/10 flex justify-center w-fit rounded-xl shadow-lg ">
                        <img src="{{ asset('img/process/execute.png') }}" alt="Arkhive Process" class="w-[300px] group-hover:scale-110 transition-all duration-300">
                    </div>
                    <div class="process-text px-12">
                        <h2 class="my-4 text-[52px]">Execute</h2>
                        <p class="font-[Montserrat]">Deployment of the agreed document management solution.</p>
                    </div>
                </div>

                <div class="process-step lg:text-left text-center text-white group">
                    <div class="process-icon bg-[#25282A]/10 mx-auto backdrop-blur-xs border-2 border-ark-brown/10 flex justify-center w-fit rounded-xl shadow-lg ">
                        <img src="{{ asset('img/process/report.png') }}" alt="Arkhive Process" class="w-[300px] group-hover:scale-110 transition-all duration-300">
                    </div>
                    <div class="process-text px-12">
                        <h2 class="my-4 text-[52px]">Report</h2>
                        <p class="font-[Montserrat]">Continuous maintenance and support for your system.</p>
                    </div>
                </div>

                <div class="process-step mx-auto lg:mt-0 text-black group flex flex-col justify-center rounded-xl shadow-lg bg-ark-brown h-[395px] items-center">
                    <h2 class="my-4 text-5xl text-center px-4">Want to know more?</h2>
                    <a href="{{ route('contact') }}" class="font-[Montserrat]">Let's Talk <i class="bi bi-chevron-right ml-2"></i></a>
                </div>
            </div>
        </div>

        {{-- CTA --}}
        <div class="relative overflow-hidden lg:w-7xl rounded-2xl flex mx-auto items-center py-10" style="background-image: url('img/cta-bg.webp'); background-position: bottom; background-size: cover">
            <div class="absolute inset-0 bg-black/70 bg-blend-multiply transition-all"></div>
            <div class="container flex justify-center py-5 items-center mx-auto">
                <div class="relative grid grid-cols-1 md:grid-cols-2 px-5 z-10">
                    <div class="flex flex-col mb-8 md:mb-0 gap-y-4">
                        <h2 class="text-2xl text-ark-brown">Got a document headache?</h2>
                        <h2 class="text-6xl text-white">Tell us everything.</h2>
                    </div>
                    <div class="flex md:justify-center items-center">
                        <div class="contact-btn">
                            <a href="{{ route('contact') }}" class="bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[Montserrat] hover:bg-white/80 transition duration-300 ease-in-out">Contact Us <i class="bi ml-3 bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Industries --}}
        @include('services.sections.industries')
    </section>

@endsection
