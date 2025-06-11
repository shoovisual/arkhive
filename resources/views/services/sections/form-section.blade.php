<div class="image-slider">
        <div class="max-w-7xl mx-auto px-10">
            <div class="header text-4xl text-ark-brown font-medium mb-8">
                Our Security Features
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="image-card flex justify-center col-span-2 mx-auto item-center text-white gap-y-4 p-2 font-[Montserrat]">
                    <img src="{{ asset('img/services/archiving-2.webp') }}" alt="Document Archiving" class="h-[100%] rounded-lg object-cover">
                </div>
                <div class="flex justify-center flex-col col-span-3 mx-auto item-center text-white gap-y-4 font-[Montserrat]">
                    <div class="contact-form col-span-4">
                        <h3 class="text-4xl text-ark-brown font-medium mb-4">Get a Free Assessment</h3>
                        <p class="text-md text-white font-[Montserrat] mb-6">
                            Answer a few quick questions and we’ll get back to you with a solution.
                        </p>

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

                        <form action="#" method="POST" class="flex flex-col gap-y-6 font-[Montserrat]">
                            @csrf

                            @if(isset($currentService->questions) && $currentService->questions)
                            <div class="grid col-grid-1 md:grid-cols-2 mt-3 gap-x-3">
                                @foreach(json_decode($currentService->questions) as $question)
                                <div x-data="{ selected: 'yes' }" class="mb-6">
                                    <p class="text-white mb-2">{{ $question->text }}</p>

                                    <div class="relative flex w-[130px] rounded-md overflow-hidden border border-ark-brown/40 bg-ark-black/30">
                                        <!-- Sliding background -->
                                        <div class="absolute top-0 left-0 h-full w-1/2 bg-ark-brown transition-all duration-300 z-0" :class="{ 'translate-x-0': selected === 'yes', 'translate-x-full': selected === 'no' }" style="will-change: transform;"></div>

                                        <!-- Yes -->
                                        <label class="w-1/2 relative z-10 cursor-pointer text-center">
                                            <input type="radio" :name="'question_' + $loop->index" value="yes" x-model="selected" class="hidden" required>
                                            <div class="px-3 py-2 text-white peer-checked:text-black transition-all duration-300" :class="{ 'text-black': selected === 'yes', 'text-white': selected !== 'yes' }">
                                                Yes
                                            </div>
                                        </label>

                                        <!-- No -->
                                        <label class="w-1/2 relative z-10 cursor-pointer text-center">
                                            <input type="radio" :name="'question_' + $loop->index" value="no" x-model="selected" class="hidden" required>
                                            <div class="px-3 py-2 text-white peer-checked:text-black transition-all duration-300" :class="{ 'text-black': selected === 'no', 'text-white': selected !== 'no' }">
                                                No
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            @endif


                            {{-- Name and Phone --}}
                            <div class="flex flex-col sm:flex-row gap-4">
                                <input type="text" name="name" placeholder="Name" required
                                    class="w-full px-4 py-4 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">
                                <input type="text" name="phone" placeholder="Phone" required
                                    class="w-full px-4 py-4 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">
                            </div>

                            {{-- Email --}}
                            <input type="email" name="email" placeholder="Email" required
                                class="w-full px-4 py-4 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">

                            {{-- Submit Button --}}
                            <button type="submit" class="bg-ark-brown text-black font-medium px-6 py-3 rounded shadow hover:bg-ark-brown transition duration-300 ease-in-out self-start">
                                Submit
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
