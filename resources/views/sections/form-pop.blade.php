<!-- Chat Popup -->
    <div id="chatPopup" class="fixed bottom-5 right-24 z-40 w-xl bg-ark-black/80 border-2 border-white/10 backdrop-blur-md rounded-2xl shadow-2xl hidden">
        <!-- Header -->
        <div class="bg-gray-800 flex justify-between items-center text-white text-lg font-semibold p-4 rounded-t-2xl">
            <h3 class="text-2xl font-[Montserrat] text-ark-brown font-medium">Get a Free Assessment</h3>
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

        <div class="p-4 gap-4">
                <div class="flex justify-center flex-col mx-auto item-center text-white gap-y-4 font-[Montserrat]">
                    <div class="contact-form col-span-4">

                        {{-- <p class="text-md text-white font-[Montserrat] mb-6">
                            Answer a few quick questions and we’ll get back to you with a solution.
                        </p> --}}

                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-4 rounded relative mb-4">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-4 rounded relative mb-4">
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-4 rounded relative mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('service.form.submit') }}" method="POST" class="flex flex-col gap-y-6 font-[Montserrat]">
                            @csrf
                            <input type="hidden" name="service_name" value="{{ $currentService->title }}">

                            @if(isset($currentService->questions) && $currentService->questions)
                                @foreach(json_decode($currentService->questions) as $index => $question)
                                <input type="hidden" name="service_questions[]" value="{{ $question->text }}">
                                <div x-data="{ selected: null }" class="mb-6">
                                <p class="text-white text-[16px] mb-2">{{ $question->text }}</p>
                                    <div class="relative flex w-[90px] rounded-md overflow-hidden border border-ark-brown/40 bg-ark-black/30">
                                        <!-- Sliding background -->
                                        <div
                                        class="absolute top-0 left-0 h-full w-1/2 bg-ark-brown transition-all duration-300 z-0"
                                        :class="{ 'translate-x-0': selected === 'no', 'translate-x-full': selected === 'yes' }"
                                        style="will-change: transform;"
                                        ></div>

                                        <!-- No (Left side now) -->
                                        <label class="w-1/2 relative z-10 cursor-pointer text-center">
                                        <input type="radio" name="question_{{ $index }}" value="no" x-model="selected" class="hidden" required>
                                        <div class="px-3 py-2 text-white text-[14px] transition-all duration-300"
                                            :class="{ 'text-black': selected === 'no', 'text-white': selected !== 'no' }">
                                            No
                                        </div>
                                        </label>

                                        <!-- Yes (Right side now) -->
                                        <label class="w-1/2 relative z-10 cursor-pointer text-center">
                                        <input type="radio" name="question_{{ $index }}" value="yes" x-model="selected" class="hidden" required>
                                        <div class="px-3 py-2 text-white text-[14px] transition-all duration-300"
                                            :class="{ 'text-black': selected === 'yes', 'text-white': selected !== 'yes' }">
                                            Yes
                                        </div>
                                        </label>
                                    </div>
                                </div>

                                @endforeach
                            @endif


                            {{-- Name and Phone --}}
                            <div class="flex flex-col sm:flex-row gap-4">
                                <input type="text" name="name" placeholder="Name" required
                                    class="w-full p-3 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">
                                <input type="text" name="phone" placeholder="Phone" required
                                    class="w-full p-3 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">
                            </div>

                            {{-- Email --}}
                            <input type="email" name="email" placeholder="Email" required
                                class="w-full p-3 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">

                            {{-- Submit Button --}}
                            <button type="submit" class="bg-ark-brown text-black w-full font-medium px-6 py-3 rounded-full text-md cursor-pointer font-[Montserrat] shadow hover:bg-ark-brown transition duration-300 ease-in-out self-start">
                                Get Free Consultation
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
