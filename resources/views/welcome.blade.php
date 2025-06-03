@extends('layouts.home-layout')
@section('title', 'Home')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<main id="servicesWrapper" class="flex md:flex-row flex-col h-screen w-full overflow-hidden">
    @foreach($services as $index => $service)
    <a href="{{ $service->url }}" class="service-slide services-card group relative overflow-hidden bg-center bg-cover transition-transform duration-500 ease-in-out grayscale-90 hover:grayscale-0 origin-left" style="background-image: url('{{ $service->cover_image }}'); transform: scaleX(1);" data-index="{{ $index }}">
        <div class="absolute inset-0 bg-black/70 overlay z-10 transition-all"></div>
        <div class="relative z-20 flex flex-col items-center mt-15 justify-center h-full w-full text-gray-500 text-center px-6">
            <h4 class="hidden group-hover:block -translate-y-2 font-[600] uppercase font-[montserrat] text-white group-hover:translate-y-2 transition-all duration-500 text-4xl mb-4">{{ $service->sub_1 }}</h4>
            <h2 class="text-4xl group-hover:text-6xl transition-all duration-500 font-[800] uppercase text-white font-[montserrat] mb-4">{{ $service->title }}</h2>
            <h4 class="hidden group-hover:block -translate-y-2 font-[600] uppercase font-[montserrat] text-white hover:translate-y-2 transition-all duration-500 text-4xl mb-8">{{ $service->sub_2 }}</h4>
            <div class="button absolute bottom-24 group-hover:bottom-26 h-16 w-16 group-hover:h-32 group-hover:w-32 bg-black/0 border-2 border-gray-500 group-hover:border-white/0 group-hover:bg-black/50 flex items-center justify-center rounded-full transition-all duration-500">
                <i class="icon-class group-hover:hidden group-hover:rotate-45 text-4xl bi bi-plus"></i>
                <p class="hidden text-white font-[Montserrat] text-xl group-hover:block">Go</p>
            </div>
        </div>
    </a>
    @endforeach
</main>

<script>
    const slides = document.querySelectorAll(".service-slide");
    let activeSlide = null;

    slides.forEach((slide, index) => {
        // Set initial basis
        slide.style.flexBasis = `${100 / slides.length}%`;

        slide.addEventListener("mouseenter", () => {
            activeSlide = slide;
            slides.forEach((s, i) => {
                if (s === slide) {
                    gsap.to(s, {
                        flexBasis: "50%",
                        duration: 1,
                        ease: "power3.out"
                    });
                    gsap.to(s.querySelector(".overlay"), {
                        backgroundColor: "rgba(0,0,0,0.3)",
                        duration: 1,
                        ease: "power3.out"
                    });
                } else {
                    gsap.to(s, {
                        flexBasis: `${50 / (slides.length - 1)}%`,
                        duration: 1,
                        ease: "power3.out"
                    });
                    gsap.to(s.querySelector(".overlay"), {
                        backgroundColor: "rgba(0,0,0,0.70)",
                        duration: 1,
                        ease: "power3.out"
                    });
                }
            });
        });

        slide.addEventListener("mouseleave", () => {
            activeSlide = null;
            slides.forEach((s) => {
                gsap.to(s, {
                    flexBasis: `${100 / slides.length}%`,
                    duration: 0.3,
                    ease: "power3.out"
                });
                gsap.to(s.querySelector(".overlay"), {
                    backgroundColor: "rgba(0,0,0,0.70)",
                    duration: 0.3,
                    ease: "power3.out"
                });
            });
        });
    });
</script>

