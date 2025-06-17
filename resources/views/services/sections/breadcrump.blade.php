<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <div class="breadcrumb h-[60vh] md:h-[70vh] relative overflow-hidden w-full flex mx-auto items-center px-3 md:px-20" style="background-image: url('{{ $currentService->cover_image }}'); background-position: center; background-size: cover">
        <div class="absolute inset-0 bg-black/50 transition-all"></div>
        <div class="flex justify-center md:flex-col items-center mx-auto w-full lg:max-w-6xl">
            <div class="relative md:flex w-auto lg:w-6xl flex-col px-5 z-10 text-white">
                <h2 class="text-[38px] text-center md:text-left md:text-[64px] lg:w-xl md:leading-15 font-[500] mb-8">{{ $currentService->title }}</h2>
            </div>
            <div class="absolute left-1/2 bottom-10 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="fill-ark-brown bi bi-chevron-double-down" viewBox="0 0 16 16">
                    <path class="chevron-line" fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                    <path class="chevron-line" fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                </svg>
            </div>
        </div>

    </div>

<script>
    gsap.fromTo(".chevron-line",
        { opacity: 0 },
        {
            opacity: 1,
            duration: 1,
            repeat: -1,
            yoyo: true,
            stagger: 0.5,
            ease: "power1.inOut"
        }
    );
</script>
