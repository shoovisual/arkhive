@extends('layouts.master')
@section('meta')
    <meta property="og:description" content="Explore our comprehensive document storage services at Arkhive Africa. We ensure your documents are digitized, organized, and easily accessible for efficient management." />
    <meta property="og:keywords" content="Document scanning, Document indexing, Digital archiving, Document management, Bulk scanning services, Secure document storage" />
@endsection
@section('title', 'Our Services')
@section('content')
<div class=" h-[70dvh] relative overflow-hidden w-full flex mx-auto items-center px-3 md:px-20">
    <div class="flex justify-center md:flex-col items-center mx-auto w-full lg:max-w-6xl">
        <div class="relative md:flex anim-section w-auto lg:w-6xl flex-col px-5 z-10 text-white">
            <h2 class="text-[38px]  md:text-left md:text-[64px] lg:w-xl md:leading-15 font-[500] mb-8">Our Services</h2>
            <p class="text-[29px] leading-[1] italic text-white md:w-xl md:text-left">"When you need a document, how long does it take to find it? Our clients' audits and critical operations are made smooth and faster with effective access to their documents"</p>
            <p class="text-md mt-4 md:w-xl font-[Montserrat]"><span class="font-bold">Neema,</span> <span> Operations Manager.</span></p>
        </div>

    </div>
</div>
    <section class="process-section anim-section">
        <div class="max-w-7xl mx-auto px-4 py-8">
            {{-- <h1 class="md:text-6xl text-4xl text-ark-brown font-medium  mb-8">Our Process</h1> --}}

            <div class="process-steps grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                <a href="{{ $service->url }}" class="group flex justify-center items-center md:flex-col relative  service-card bg-ark-brown/2 shadow-lg backdrop-blur-xs p-3 space-x-3 md:space-x-0 md:space-y-6 rounded-xl border border-ark-brown/10">
                    <div class="service-icon flex justify-center ">
                        <img src="{{ $service->cover_image }}" alt="{{ $service->title }}" class="w-full rounded-lg aspect-square object-cover md:mb-4 group-hover:scale-102 transition-all duration-300">
                    </div>
                    <div class="service-desc text-center px-5  md:mb-10 items-center justify-center">
                        <h3 class="text-[36px] text-ark-brown font-medium">{{ $service->title }}</h3>
                        <p class="text-white font-[Montserrat] my-4  text-lg">{{ $service->description }}</p>
                    </div>
                    <div class="card-footer hidden md:block absolute  bottom-0 w-full py-3 right-0 rounded-b-xl text-center">
                        <p class="text-2xl text-white font-medium px-4 py-2 group-hover:ml-5 transition-all duration-300 rounded-md"><i class="bi bi-chevron-right"></i></p>
                    </div>
                </a>
            @endforeach
            </div>
        </div>

        {{-- CTA --}}
        <div class="relative overflow-hidden lg:w-7xl rounded-2xl flex mx-auto items-center py-10" style="background-image: url('img/cta-bg.webp'); background-position: bottom; background-size: cover">
            <div class="absolute inset-0 bg-black/70 bg-blend-multiply transition-all"></div>
            <div class="container flex justify-center py-5 items-center mx-auto">
                <div class="relative grid grid-cols-1 md:grid-cols-2 px-5 z-10">
                    <div class="flex flex-col mb-8 md:mb-0 gap-y-4">
                        <h2 class="text-2xl text-ark-brown font-[Montserrat]">Got a document headache?</h2>
                        <h2 class="text-6xl text-white">Tell Us Everything.</h2>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>

    gsap.registerPlugin(ScrollTrigger);

    const counters = document.querySelectorAll(".count-up");

    function runCounters(section) {
    const counters = section.querySelectorAll(".count-up");
    counters.forEach(counter => {
        const target = +counter.dataset.count;
        gsap.fromTo(counter,
            { innerText: 0 },
            {
                innerText: target,
                duration: 2,
                ease: "power1.out",
                snap: { innerText: 1 },
                onUpdate() {
                    const value = Math.floor(counter.innerText);
                    counter.innerText =
                        value.toLocaleString() + (target >= 100 ? "+" : "");
                }
            }
        );
    });
    }


    gsap.utils.toArray(".anim-section").forEach(section => {
    const children = section.querySelectorAll(".");

    ScrollTrigger.create({
        trigger: section,
        start: "top 85%",
        end: "bottom 0",
        toggleActions: "play none none none",

        // Animate IN when entering from top (scrolling down)
        onEnter: () => {
            gsap.to(children, {
                opacity: 1,
                y: 0,
                filter: "blur(0px)",
                duration: 1.1,
                ease: "power3.out",
                stagger: 0.15
            });

            if (section.querySelector(".count-up")) runCounters(section);
        },

        // Animate OUT when scrolling back up past this section
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

            // Reset counters
            children.forEach(c => {
                if (c.classList.contains("count-up")) c.innerText = "0";
            });
        }
    });
});


</script>

@endsection
