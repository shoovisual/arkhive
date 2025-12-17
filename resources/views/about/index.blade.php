@extends('layouts.master')
@section('meta')
    <meta name="description" content="Learn more about Arkhive Africa, your trusted partner for document management solutions. We specialize in secure archiving, efficient bulk scanning, and confidential shredding services." />
    <meta name="keywords" content="About Arkhive Africa, Document management company, Secure archiving, Bulk scanning services, Confidential shredding, Document storage Africa" />
    <meta property="og:description" content="Learn more about Arkhive Africa, your trusted partner for document management solutions. We specialize in secure archiving, efficient bulk scanning, and confidential shredding services." />
    <meta property="og:keywords" content="About Arkhive Africa, Document management company, Secure archiving, Bulk scanning services, Confidential shredding, Document storage Africa" />
@endsection
@section('title', 'About us')
@section('content')


<div class="h-[70dvh] md:h-[70vh] lg:h-[90vh] relative overflow-hidden md:w-full flex mx-auto items-center px-3 md:px-20" style="background-image: url('img/hero-bg.webp'); background-position: center; background-size: cover">
    <div class="absolute inset-0 bg-black/40 transition-all"></div>
    <div class="flex justify-center md:flex-col items-center mx-auto w-full lg:max-w-6xl">
        <div class="relative md:flex anim-section w-auto lg:w-6xl flex-col px-5 z-10 text-white">
            <h2 class="text-[38px] anim-child md:text-left md:text-[64px] lg:w-xl md:leading-15 font-[500] mb-8">@yield('title')</h2>
            <p class="text-xl md:w-xl font-[montserrat] anim-child">We are dedicated to providing the best document management solutions for our clients.</p>
        </div>
    </div>
</div>

<div class="md:max-w-7xl py-10 mx-auto px-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 my-10">
        <div class="flex flex-col anim-section gap-y-4">
            <h2 class="md:text-5xl text-2xl text-ark-brown font-medium  mb-8">We are a <span class="text-white"> document management company</span> operating since 2016</h2>

            {{-- <div class="contact-btn">
                <a href="{{ route('contact') }}" class="bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out">Contact Us <i class="bi ml-3 bi-chevron-right"></i></a>
            </div> --}}
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <img src="{{ asset('img/document_storage.webp') }}" alt="Arkhive Document Storage" class="object-cover md:gsap-image  gsap-scroll-image rounded-lg shadow-lg">
            <img src="{{ asset('img/document_secured_access.webp') }}" alt="Arkhive Document Secured Access" class="object-cover md:gsap-image  gsap-scroll-image rounded-lg shadow-lg">
        </div>
    </div>
    <div class="lg:grid grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 md:flex md:flex-row-reverse items-center gap-8 my-10">
        <div class="grid grid-cols-1 anim-section">
            <img src="{{ asset('img/about-section.webp') }}" alt="Arkhive Document Storage" class="object-cover gsap-scroll-image md:h-[250px] lg:h-[400px]  w-full rounded-lg shadow-lg">
        </div>
        <div class="flex flex-col anim-section">
            <p class="text-lg mb-6 md:w-xl text-white font-[montserrat]">
                We are highly professional experts with a combined experience of over 10 years in the industry
            </p>
            <div class=" text-white py-10">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12 stats-wrapper">
                    <div class="stat-box text-center font-[montserrat] px-6">
                        <div class="text-4xl text-ark-brown font-medium mb-2 count-up" data-count="2000000">0</div>
                        <div class="text-md">Stored <br />Documents</div>
                    </div>
                    <div class="stat-box text-center font-[montserrat] px-6 border-l md:border-x border-white">
                        <div class="text-4xl text-ark-brown font-medium mb-2 count-up" data-count="120">0</div>
                        <div class="text-md">Trusted <br /> Customers</div>
                    </div>
                    <div class="stat-box text-center font-[montserrat] px-6">
                        <div class="text-4xl text-ark-brown font-medium mb-2 count-up" data-count="10">0</div>
                        <div class="text-md">Years of <br /> Experience</div>
                    </div>
                    <div class="stat-box text-center font-[montserrat] px-6 border-l border-white">
                        <div class="text-4xl text-ark-brown font-medium mb-2 count-up" data-count="8">0</div>
                        <div class="text-md">Industries <br /> Served</div>
                    </div>
                </div>

                <div class="flex flex-col md:justify-center lg:justify-start sm:flex-row gap-4">
                    <a href="/contact" class="border border-ark-brown bg-ark-brown px-6 py-3 text-center font-[montserrat] font-medium hover:bg-ark-brown/50 transition-colors rounded"> Let&apos;s Talk </a>
                    <a href="#services" class="border border-ark-brown px-6 py-3 text-center font-[montserrat] font-medium hover:bg-ark-brown/10 transition-colors rounded">Check Our Services</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="our-people py-10">
    <div class="max-w-7xl mx-auto md:px-10 px-6">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
            <div class="col-span-1">
                <h3 class="text-6xl text-ark-brown font-medium mb-8">Our people</h3>
            </div>
            <div class="col-span-4">
                <p class="text-lg text-white font-[montserrat] lg:px-6 lg:border-l border-ark-brown/40">
                    Our people are our strength. Our highly trained team manages your documents with expertise and meticulous attention to detail. Rigorous background checks, including police checks, ensure the utmost security and integrity for your sensitive information at every stage.
                </p>
            </div>
        </div>


        <blockquote class="font-regular md:text-center flex flex-col md:justify-center backdrop-blur-sm mt-10 p-4 dark:text-white">
            <div class="flex md:justify-center items-center mb-4">
                <svg id="Layer_1" class="w-[60px] mb-4 fill-ark-brown" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.79 33.28">
                    <path d="M28.52,33.28h9.51c2.63,0,4.75-2.13,4.75-4.75v-9.51c0-2.63-2.13-4.75-4.75-4.75h-9.51v-2.38c0-3.94,3.19-7.13,7.13-7.13h2.38c1.31,0,2.38-1.06,2.38-2.38s-1.06-2.38-2.38-2.38h-2.38c-6.56,0-11.88,5.32-11.89,11.89v16.64c0,2.63,2.13,4.75,4.75,4.75ZM4.75,33.28h9.51c2.63,0,4.75-2.13,4.75-4.75v-9.51c0-2.63-2.13-4.75-4.75-4.75H4.75v-2.38c0-3.94,3.19-7.13,7.13-7.13h2.38c1.31,0,2.38-1.06,2.38-2.38s-1.06-2.38-2.38-2.38h-2.38C5.32,0,0,5.32,0,11.89v16.64c0,2.63,2.13,4.75,4.75,4.75Z"/>
                </svg>
            </div>
            <p class="md:text-5xl text-xl text-white">Focused on <span class="text-ark-brown">enhancing</span> the efficiency and effectiveness of organizations by bringing <span class="text-ark-brown">Order</span> and <span class="text-ark-brown">Access</span> to recorded information. </p>
        </blockquote>


    </div>
</section>

<div class="h-[60vh] border-y border-ark-brown/10 bg-cover hidden lg:block bg-center bg-no-repeat" style="background-image: url('img/timeline-01.png');">
    {{-- <img src="{{ asset('img/timeline-01.png') }}" alt=""> --}}
</div>

<div class="md:h-[100vh] h-[100vh] border-y border-ark-brown/10 bg-contain bg-center lg:hidden block bg-no-repeat" style="background-image: url('img/timeline-mobile-01.png');">
    {{-- <img src="{{ asset('img/timeline-01.png') }}" alt=""> --}}
</div>

<div class="my-12">
    <div class="max-w-7xl mx-auto px-10">
        <div class="anim-section">
        <h3 class="text-6xl text-ark-brown font-medium mb-8">Our core values</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($coreValues as $title => $description)
                <div class="bg-ark-black/5 backdrop-blur-sm border border-ark-brown/40 p-6 rounded-lg shadow-lg">
                    <h4 class="text-[26px] text-ark-brown font-medium mb-4">{{ $title }}</h4>
                    <p class="text-white font-regular font-[montserrat]">{{ $description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- CTA --}}
<div class="relative overflow-hidden md:w-7xl rounded-2xl flex mx-auto items-center py-10" style="background-image: url('img/cta-bg.webp'); background-position: bottom; background-size: cover">
    <div class="absolute inset-0 bg-black/70 bg-blend-multiply transition-all"></div>
    <div class="container flex justify-center py-5 items-center mx-auto">
        <div class="relative grid grid-cols-1 md:grid-cols-2 px-5 z-10">
            <div class="flex flex-col mb-8 md:mb-0 gap-y-4">
                <h2 class="text-2xl text-ark-brown font-[montserrat]">Got a document headache?</h2>
                <h2 class="text-6xl text-white">Tell us everything.</h2>
            </div>
            <div class="flex md:justify-center items-center">
                <div class="contact-btn">
                    <a href="{{ route('contact') }}" class="bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[montserrat] hover:bg-white/80 transition duration-300 ease-in-out">Contact Us <i class="bi ml-3 bi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


@include('services.sections.services-section')

@include('services.sections.industries')

{{-- CTA --}}
<div class="relative overflow-hidden w-full flex mx-auto items-center py-10" style="background-image: url('img/cta-bg.webp'); background-position: bottom; background-size: cover">
    <div class="absolute inset-0 bg-black/80 transition-all"></div>
    <div class="container flex justify-center py-10 items-center mx-auto">
        <div class="relative grid grid-cols-1 md:grid-cols-2 px-5 z-10">
            <div class="flex flex-col gap-y-4">
                <h2 class="text-2xl text-ark-brown font-[montserrat]">Got a document headache?</h2>
                <h2 class="text-6xl text-white">Tell us everything.</h2>
            </div>
            <div class="flex md:justify-center md:mt-0 mt-8 items-center">
                <div class="contact-btn">
                    <a href="{{ route('contact') }}" class="bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[montserrat] hover:bg-white/80 transition duration-300 ease-in-out">Contact Us <i class="bi ml-3 bi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('.gsap-image').forEach((img, index) => {
        gsap.from(img, {
            scrollTrigger: {
                trigger: img,
                start: "top 80%", // when the image is near the viewport
                toggleActions: "play none none none",
            },
            x: 100,
            opacity: 0,
            duration: 1,
            ease: "power2.out",
            delay: index * 0.2 // slight stagger effect
        });
    });
</script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('.gsap-scroll-image').forEach((img) => {
        gsap.fromTo(img,
            { y: 50 }, // start 30px lower
            {
                y: -50, // move 30px upward as you scroll
                ease: "none",
                scrollTrigger: {
                    trigger: img,
                    start: "top bottom", // when image enters viewport
                    end: "bottom top",   // until it leaves viewport
                    scrub: true,         // link to scroll position
                }
            }
        );
    });
</script>



<script>

   function runCounters(section) {
    const counters = section.querySelectorAll(".count-up");
    counters.forEach(counter => {
        const target = +counter.dataset.count;
        gsap.fromTo(counter,
            { innerText: 0 },
            {
                innerText: target,
                duration: 3,
                ease: "power1.out",
                snap: { innerText: 1 },
                onUpdate() {
                    const value = Math.floor(counter.innerText);
                    let displayValue;

                    if (target >= 1000000) {
                        displayValue = (value / 1000000).toFixed(0) + "M" + (value >= 1000000 ? "+" : "");
                    } else if (target >= 1000) {
                        displayValue = (value / 1000).toFixed(0) + "K" + (value >= 1000 ? "+" : "");
                    } else if (target >= 100) {
                        displayValue = value.toFixed(0) + (value >= 100 ? "+" : "");
                    } else {
                        displayValue = value.toLocaleString();
                    }

                    counter.innerText = displayValue;
                }
            }
        );
    });
}



    gsap.utils.toArray(".anim-section").forEach(section => {
    const children = section.querySelectorAll(".anim-child");

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

