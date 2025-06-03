<!-- Sectors We Serve Section -->
<div class="bg-ark-black/10 py-16">
    <div class="max-w-7xl mx-auto px-10">
        <div class="anim-section">
            <h2 class="md:text-6xl text-4xl text-ark-brown anim-child font-medium mb-4">Working with a wide <br> range of sectors</h2>
            <p class="text-lg mb-5 anim-child font-[Montserrat] text-white/70">We work with a wide range of sectors, including:</p>
        </div>
        <div class="grid grid-cols-1 items-center anim-section md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($sectors['sectors'] as $sector)
                <div class="bg-ark-black/10 backdrop-blur-md border anim-child flex flex-col justify-center items-center cursor-pointer font-[Montserrat] border-ark-brown/10 p-6 rounded-lg shadow-md transition-transform hover:scale-105">
                    <img src="{{ $sector['icon'] }}" alt="{{ $sector['name'] }}" class="w-26 h-26 anim-child mb-4">
                    <p class="text-xl anim-child text-white text-center font-regular mb-4">{{ $sector['name'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>


