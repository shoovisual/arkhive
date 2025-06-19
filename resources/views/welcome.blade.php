@extends('layouts.home-layout')
@section('title', 'Home')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<main id="servicesWrapper" class="flex lg:flex-row flex-col h-[100dvh] w-full overflow-hidden">
    @foreach($services as $index => $service)
    <a href="{{ $service->url }}"
       class="service-slide services-card group relative overflow-hidden bg-center bg-cover transition-transform duration-500 ease-in-out grayscale-90 hover:grayscale-0 origin-left"
       style="background-image: url('{{ $service->cover_image }}');"
       data-index="{{ $index }}">

        <div class="absolute inset-0 bg-black/70 overlay z-10 transition-all"></div>

        <div class="relative z-20 flex flex-col items-center mt-15 justify-center h-full w-full text-gray-500 text-center px-6">
            <!-- Sub Title 1 -->
            <h4 class="block lg:hidden text-white text-2xl font-[600] uppercase font-[montserrat] mb-4">
                {{ $service->sub_1 }}
            </h4>
            <h4 class="hidden lg:group-hover:block -translate-y-2 text-white text-4xl font-[600] uppercase font-[montserrat] lg:group-hover:translate-y-2 transition-all duration-500 mb-4">
                {{ $service->sub_1 }}
            </h4>

            <!-- Title -->
            <h2 class="text-4xl lg:group-hover:text-6xl transition-all duration-500 font-[800] uppercase text-white font-[montserrat] mb-4">
                {{ $service->title }}
            </h2>

            <!-- Sub Title 2 -->
            <h4 class="block lg:hidden text-white text-2xl font-[600] uppercase font-[montserrat] mb-4">
                {{ $service->sub_2 }}
            </h4>
            <h4 class="hidden lg:group-hover:block -translate-y-2 text-white text-4xl font-[600] uppercase font-[montserrat] lg:group-hover:translate-y-2 transition-all duration-500 mb-8">
                {{ $service->sub_2 }}
            </h4>

            <!-- Button -->
            <div class="hidden lg:flex absolute bottom-24 lg:group-hover:bottom-26 h-16 w-16 lg:group-hover:h-32 lg:group-hover:w-32 bg-black/0 border-2 border-gray-500 lg:group-hover:border-white/0 lg:group-hover:bg-black/50 items-center justify-center rounded-full transition-all duration-500">
                <i class="icon-class lg:group-hover:hidden lg:group-hover:rotate-45 text-4xl bi bi-plus"></i>
                <p class="hidden lg:group-hover:block text-white font-[Montserrat] text-xl">Go</p>
            </div>
        </div>
    </a>
    @endforeach
</main>


<script>
    const slides = document.querySelectorAll(".service-slide");
    let activeSlide = null;
    let hoverTimeouts = new Map();
    let currentAnimations = [];

    function resetAll() {
        // Kill any ongoing animations
        currentAnimations.forEach(anim => anim.kill());
        currentAnimations = [];

        slides.forEach((s) => {
            currentAnimations.push(
                gsap.to(s, {
                    flexBasis: `${100 / slides.length}%`,
                    duration: 0.3,
                    ease: "power3.out"
                })
            );
            currentAnimations.push(
                gsap.to(s.querySelector(".overlay"), {
                    backgroundColor: "rgba(0,0,0,0.70)",
                    duration: 0.3,
                    ease: "power3.out"
                })
            );
        });
    }

    slides.forEach((slide) => {
        // Set initial flex-basis
        slide.style.flexBasis = `${100 / slides.length}%`;

        slide.addEventListener("mouseenter", () => {
            // Clear any previous timeout
            clearTimeout(hoverTimeouts.get(slide));

            // Start timeout for hover
            const timeout = setTimeout(() => {
                activeSlide = slide;

                currentAnimations.forEach(anim => anim.kill());
                currentAnimations = [];

                slides.forEach((s) => {
                    if (s === slide) {
                        currentAnimations.push(
                            gsap.to(s, {
                                flexBasis: "50%",
                                duration: 0.7,
                                ease: "power3.out"
                            })
                        );
                        currentAnimations.push(
                            gsap.to(s.querySelector(".overlay"), {
                                backgroundColor: "rgba(0,0,0,0.3)",
                                duration: 0.7,
                                ease: "power3.out"
                            })
                        );
                    } else {
                        currentAnimations.push(
                            gsap.to(s, {
                                flexBasis: `${50 / (slides.length - 1)}%`,
                                duration: 0.7,
                                ease: "power3.out"
                            })
                        );
                        currentAnimations.push(
                            gsap.to(s.querySelector(".overlay"), {
                                backgroundColor: "rgba(0,0,0,0.70)",
                                duration: 0.7,
                                ease: "power3.out"
                            })
                        );
                    }
                });
            }, 100); // hover delay

            hoverTimeouts.set(slide, timeout);
        });

        slide.addEventListener("mouseleave", () => {
            // Cancel timeout if still pending
            clearTimeout(hoverTimeouts.get(slide));
            hoverTimeouts.delete(slide);

            // Reset animations if leaving early or after animation
            activeSlide = null;
            resetAll();
        });
    });
</script>

