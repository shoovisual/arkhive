<section class="min-h-screen md:flex flex flex-col px-8 py-20" id="services">
  <div class="container px-0 lg:px-10 lg:flex lg:flex-row flex-col justify-center mx-auto">
    <!-- Left sticky section -->
    <div class="lg:w-1/2 w-full anim-section pr-8">
        <div class="lg:sticky lg:top-1/2 transform  py-4">
            <h2 class="text-6xl  text-ark-brown font-medium mb-8">Our Services</h2>
            <p class="text-xl  text-white font-[Montserrat]">
                We offer a range of services to help you manage your documents effectively and efficiently.
            </p>
        </div>
    </div>

    <!-- Right scrollable content -->
    <div class="lg:w-3/4 space-y-8 overflow-none pr-4">
        <div class="grid grid-cols-1 anim-section md:grid-cols-2 gap-8">
            @foreach ($services as $service)
                <a href="{{ $service->url }}" class="group flex justify-center items-center md:flex-col relative  service-card bg-ark-brown/2 shadow-lg backdrop-blur-xs p-10 space-x-3 md:space-x-0 md:space-y-6 rounded-xl border border-ark-brown/10">
                    <div class="service-icon flex justify-center ">
                        <img src="{{ $service->service_icon }}" alt="{{ $service->title }}" class="w-14 md:w-28 md:h-28 md:mb-4 group-hover:scale-120 group-hover:rotate-3 transition-all duration-300">
                    </div>
                    <div class="service-desc text-center px-5  items-center justify-center">
                        <h3 class="text-[32px] text-white font-medium md:mb-10">{{ $service->title }}</h3>
                    </div>
                    <div class="card-footer hidden md:block absolute  bottom-0 w-full py-3 right-0 rounded-b-xl text-center">
                        <p class="text-2xl text-white font-medium px-4 py-2 group-hover:ml-5 transition-all duration-300 rounded-md"><i class="bi bi-chevron-right"></i></p>
                    </div>
                </a>
            @endforeach
            <a href="/contact" class="service-card group  bg-ark-brown text-ark-black py-10 px-4 flex items-center rounded-lg shadow-lg">
                <div class="flex flex-col service-desc space-y-6 text-center">
                    <h3 class="md:text-6xl text-5xl  font-medium">What is the Cost to You?</h3>
                    <p class="text-6xl  px-4 py-2 group-hover:ml-5 transition-all duration-300 rounded-md"><i class="bi group-hover:ml-5 transition-all duration-300  bi-chevron-right"></i></p>
                </div>
            </a>
        </div>
    </div>
  </div>
</section>
