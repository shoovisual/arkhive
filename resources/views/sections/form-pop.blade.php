<!-- Chat Popup -->
    <div id="chatPopup" class="fixed bottom-20 md:bottom-5 left-4 md:left-auto right-4 md:right-24 z-40 w-auto lg:w-xl bg-ark-black/80 border-2 border-white/10 backdrop-blur-md rounded-2xl shadow-2xl hidden">
        <!-- Header -->
        <div class="bg-black/0 border-b border-white/20 flex justify-between items-center text-white text-lg font-semibold p-2 lg:p-4 rounded-t-2xl">
            <h3 class="md:text-2xl text-lg font-[Montserrat] text-ark-brown font-medium">Get a Free Assessment</h3>
            <button id="closeChat" class="cursor-pointer text-white bg-gray-700 hover:bg-gray-600 rounded-full w-10 h-10 group flex items-center justify-center">
                <svg id="Layer_1" data-name="Layer 1" stroke="currentColor" class="w-5 h-5 stroke-1 group-hover:rotate-90 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.86 19.86">
                    <line class="cls-1" x1="17.36" y1="2.5" x2="2.5" y2="17.36"/>
                    <line class="cls-1" x1="2.5" y1="2.5" x2="17.36" y2="17.36"/>
                </svg>
            </button>
        </div>

        <!-- Chat Buttons -->
        {{-- <div class="bg-white flex flex-col gap-3 p-4">
        @foreach ($services as $service)
        <button class="border border-gray-300 text-gray-800 font-medium rounded-full py-2 px-4 hover:bg-ark-black hover:text-white">
            {{ $service->title }}
        </button>
        @endforeach
        </div> --}}


        @include('services.sections.form-section')

    </div>
