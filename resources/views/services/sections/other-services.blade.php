<!-- Other Services Section -->
<div class="py-16">
    <div class="max-w-7xl mx-auto px-5 md:px-10">
        <div class="anim-section">
            <h2 class="text-6xl text-ark-brown  font-medium mb-12">Other Services</h2>
        </div>
        <div class="grid grid-cols-1 anim-section md:grid-cols-2 gap-8">
            @foreach($otherServices as $service)
            <a href="{{ $service->url }}" class="bg-ark-black/5 backdrop-blur-xs border border-ark-brown/10 transition-all duration-300 rounded-lg shadow-lg lg:flex">
                <div class="service-img">
                    <img src="{{ $service->cover_image }}" alt="{{ $service->title }}" class="w-full h-[300px] object-cover rounded-t-lg lg:rounded-l-lg transition-all duration-300">
                </div>
                <div class="p-8 anim-section ">
                    <h3 class="text-2xl md:text-3xl  text-ark-brown font-medium mb-4">{{ $service->full_title }}</h3>
                    <p class="text-white  font-[ubuntu] mb-6">{{ $service->description }}</p>
                    <div class="inline-block  font-[ubuntu] bg-ark-brown text-white px-4 py-2 rounded-md hover:bg-ark-brown/90 transition-colors duration-300">Learn More</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
