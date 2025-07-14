<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

<div class="image-slider">
        <div class="max-w-7xl mx-auto p-4 lg:p-10">
            <div class="flex md:flex-row flex-col justify-center items-center gap-4">
                {{-- <div class="image-card md:w-1/2 flex justify-center col-span-2 mx-auto item-center text-white gap-y-4 p-2 font-[Montserrat]">
                    <img src="{{ $currentService->cover_image }}" alt="Document Archiving" class="aspect-video rounded-lg object-cover">
                </div> --}}
                <div class="col-span-3 gap-y-4 font-[Montserrat]">
                    <div class="contact-form">
                        @if(session('success'))
                            <div x-data="{ show: true }"
                                x-init="setTimeout(() => show = false, 3000)"
                                x-show="show"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="bg-green-100 border gsap-slide-in border-green-400 text-green-700 px-4 py-4 rounded relative mb-4">
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

                        <form action="{{ route('service.form.submit') }}" onsubmit="return validateForm(this)"  method="POST" class="flex form flex-col gap-y-6 font-[Montserrat]">
                            @csrf
                            <input type="hidden" name="service_name" value="{{ $currentService->title }}">

                            @if(isset($currentService->questions) && $currentService->questions)
                                @foreach(json_decode($currentService->questions) as $index => $question)

                                @php
                                    $questionIndex = $index + 1;
                                @endphp

                                <input type="hidden" name="service_questions[]" value="{{ $question->text }}">
                                    <p class="text-white text-sm md:text-[16px] gsap-slide-in">{{ $question->text }}</p>
                                @endforeach
                            @endif

                            <div class="flex flex-col gap-y-6 form gsap-slide-in">
                                <input type="email" name="email" placeholder="Email" required
                                    class="w-full p-3 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">

                                <div class="flex flex-col sm:flex-row gap-4">
                                    <input type="text" name="name" id="name" placeholder="Name" required
                                        class="w-full p-3 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">

                                    <input type="text" name="phone" placeholder="Phone" required
                                        class="w-full p-3 bg-ark-black/5 placeholder-white/60 text-white border border-ark-brown/30 backdrop-blur-xs rounded shadow focus:outline-none focus:ring-2 focus:ring-ark-brown">
                                </div>


                                {{-- Submit Button --}}
                                <button type="submit" class="bg-ark-brown text-black w-full font-medium px-6 py-3 rounded-full text-md cursor-pointer font-[Montserrat] shadow hover:bg-ark-brown transition duration-300 ease-in-out self-start">
                                    Get Free Consultation
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        gsap.registerPlugin(ScrollTrigger);

        gsap.from(".gsap-slide-in", {
            scrollTrigger: {
                trigger: ".gsap-slide-in",
                start: "top 80%",
                toggleActions: "play none none none",
            },
            y: 50,
            opacity: 0,
            duration: 1.3,
            ease: "power3.out"
        });
    });
</script>

<script>
function containsLink(str) {
    const pattern = /(https?:\/\/|www\.|\.\w{2,})/gi;
    return pattern.test(str);
}

function validateForm(form) {
    const name = form.name.value.trim();
    const phone = form.phone.value.trim();
    const email = form.email.value.trim();

    if (containsLink(name) || containsLink(phone)) {
        alert("Links are not allowed in Name or Phone fields.");
        return false;
    }

    // Optional: ensure name has at least two words
    if (name.split(" ").length < 2) {
        alert("Please enter your full name (first and last name).");
        return false;
    }

    return true; // allow form submission
}
</script>
