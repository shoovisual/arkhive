@extends('layouts.home-layout')
@section('title', 'Home')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<main id="servicesWrapper" class="flex md:flex-row flex-col h-screen w-full overflow-hidden">
    @foreach($services as $index => $service)
    <a href="{{ $service->url }}" class="service-slide services-card group relative overflow-hidden bg-center bg-cover transition-transform duration-300 ease-in-out grayscale hover:grayscale-0 origin-left" style="background-image: url('{{ $service->cover_image }}'); transform: scaleX(1);" data-index="{{ $index }}">
        <div class="absolute inset-0 bg-black/85 overlay z-10 transition-all"></div>
        <div class="relative z-20 flex flex-col items-center mt-15 justify-center h-full w-full text-white text-center px-6">
            <h4 class="hidden group-hover:block translate-y-2 font-[600] uppercase font-[montserrat] hover:-translate-y-2 transition-all duration-300 text-4xl mb-4">{{ $service->sub_1 }}</h4>
            <h2 class="text-4xl group-hover:text-6xl transition-all duration-300 font-[800] uppercase font-[montserrat] mb-4">{{ $service->title }}</h2>
            <h4 class="hidden group-hover:block -translate-y-2 font-[600] uppercase font-[montserrat] hover:translate-y-2 transition-all duration-300 text-4xl mb-8">{{ $service->sub_2 }}</h4>
            <div class="button h-16 w-16 hover:h-24 hover:w-24 bg-white/20 hover:bg-white/100 flex items-center justify-center fill-white hover:fill-black rounded-full transition-all duration-500">
                <svg class="arrow group-hover:-rotate-45" viewBox="0 0 24 24" width="32" height="32">
                    <path d="M10.7186 17.7593L4.83753 11.8782L3.46777 13.248L11.6873 21.4675L12.3722 20.7826L19.9068 13.248L18.537 11.8782L12.656 17.7593L12.656 2.09326H10.7186L10.7186 17.7593Z" />
                </svg>
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
                        backgroundColor: "rgba(0,0,0,0.6)",
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
                        backgroundColor: "rgba(0,0,0,0.85)",
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
                    backgroundColor: "rgba(0,0,0,0.85)",
                    duration: 0.3,
                    ease: "power3.out"
                });
            });
        });
    });
</script>

