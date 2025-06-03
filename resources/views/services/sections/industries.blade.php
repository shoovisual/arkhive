<!-- Sectors We Serve Section -->
<div class="bg-ark-black/10 py-16">
    <div class="max-w-7xl mx-auto px-10">
        <div class="">
            <h2 class="md:text-6xl text-4xl text-ark-brown  font-medium mb-4">Working with a wide <br> range of sectors</h2>
            <p class="text-lg mb-5  font-[Montserrat] text-white/70">We work with a wide range of sectors, including:</p>
        </div>
        <div class="grid grid-cols-1 items-center md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($sectors['sectors'] as $sector)
                <div class="bg-ark-black/10 backdrop-blur-md border  flex flex-col justify-center group items-center cursor-pointer font-[Montserrat] border-ark-brown/10 p-6 rounded-lg shadow-md">
                    <img src="{{ $sector['icon'] }}" alt="{{ $sector['name'] }}" class="w-26 h-26  mb-4  transition-transform group-hover:scale-110">
                    <p class="text-xl  text-white text-center font-regular mb-4">{{ $sector['name'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>


