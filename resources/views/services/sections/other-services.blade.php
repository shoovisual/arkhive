<!-- Other Services Section -->
<div class="py-16">
    <div class="max-w-7xl mx-auto px-10">
        <div class="anim-section">
            <h2 class="text-6xl text-ark-brown anim-child font-medium mb-12">Other Services</h2>
        </div>
        <div class="grid grid-cols-1 anim-section md:grid-cols-2 gap-8">
            @foreach($otherServices as $service)
            <div class="bg-black/20 anim-child hover:bg-black/30 transition-all duration-300 rounded-lg shadow-lg flex">
                <div class="service-img">
                    <img src="{{ $service->cover_image }}" alt="{{ $service->title }}" class="w-full h-[300px] object-cover rounded-l-lg transition-all duration-300">
                </div>
                <div class="p-8 anim-section anim-child">
                    <h3 class="text-3xl anim-child text-ark-brown font-medium mb-4">{{ $service->full_title }}</h3>
                    <p class="text-white anim-child font-[Montserrat] mb-6">{{ $service->description }}</p>
                    <a href="{{ $service->url }}" class="inline-block anim-child font-[Montserrat] bg-ark-brown text-white px-6 py-2 rounded-md hover:bg-ark-brown/90 transition-colors duration-300">Learn More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
