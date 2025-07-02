@if (!Request::is('/'))

@php
    $serviceRoutes = ['services.archiving', 'services.scanning', 'services.shredding'];
    $isServicePage = in_array(Route::currentRouteName(), $serviceRoutes);
@endphp

<!-- Toggle Button -->
@if($isServicePage)
    @include('sections.form-pop')
@endif


        {{-- <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed bottom-6 right-6 bg-white text-black px-3 md:py-2 py-3 rounded-full shadow-md hover:bg-gray-100 cursor-pointer">
            <i class="bi bi-chevron-up text-2xl"></i>
        </button> --}}

        @if($isServicePage)
        <div class="fixed bottom-6 right-2 md:right-6 z-50 gap-4 floating-btn flex flex-row-reverse md:flex-col">
            <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class=" bg-white text-black px-4 md:px-3 py-4 rounded-full shadow-md hover:bg-gray-100 cursor-pointer">
                <i class="bi bi-chevron-up text-lg lg:text-2xl"></i>
            </button>
            <button id="toggleChat" class=" bg-ark-black border border-ark-brown/30 text-white px-4 py-4 rounded-full flex items-center justify-center shadow-lg hover:bg-[#1b1b1b] cursor-pointer">
                <i class="bi bi-chat-square-dots text-lg lg:text-2xl"></i>
            </button>
        </div>
        @else
        <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="fixed bottom-6 right-6 bg-white text-black px-3 py-2 rounded-full shadow-md hover:bg-gray-100 cursor-pointer">
            <i class="bi bi-chevron-up text-2xl"></i>
        </button>
        @endif

    <script>
        const toggleBtn = document.getElementById('toggleChat');
        const chatPopup = document.getElementById('chatPopup');
        const closeBtn = document.getElementById('closeChat');
        let hasOpenedOnScroll = false;

        // Toggle form on main chat icon click
        toggleBtn.addEventListener('click', () => {
            chatPopup.classList.toggle('hidden');
        });

        // Close form on close button click
        closeBtn.addEventListener('click', () => {
            chatPopup.classList.add('hidden');
        });

        // Open form when scrolling halfway down the page
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY + window.innerHeight;
            const pageHeight = document.documentElement.scrollHeight;

            if (scrollPosition >= pageHeight / 2 && !hasOpenedOnScroll) {
            chatPopup.classList.remove('hidden');
            hasOpenedOnScroll = true;
            }
        });
    </script>


    <footer class="bg-ark-black text-white border-t border-white/10 py-8">
        <div class="container mx-auto px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Useful Links Section -->
                <div>
                    <div class="space-y-4 w-[200px]">
                        <img src="{{ asset('img/main-logo.svg') }}" alt="">
                    </div>
                    <h4 class="mt-2 font-[Garamond] text-ark-blue text-[17px] md:text-[18px] ml-[2px] font-medium">It is not a priority, until it is.</h4>
                </div>

                <!-- Contact Section -->
                <div>
                    <h3 class="text-2xl font-medium mb-4">Contact</h3>
                    <div class="space-y-2 font-[Montserrat]">
                        <div class="phone mt-6 group flex items-center gap-4">
                            <div class="icon"><i class="px-[14px] py-[12px] rounded-full bg-ark-brown text-ark-black text-lg bi bi-telephone-fill"></i></div>
                            <a href="https://wa.me/255747888555" target="_blank" class="icon"><i class="px-[14px] py-[12px] rounded-full bg-ark-brown text-ark-black text-lg bi bi-whatsapp"></i></a>
                            <div class="number">
                                <p>Phone:</p>
                                <a class="group-hover:text-ark-brown" href="tel:+255747888555 "> +255 747 888 555 </a>
                            </div>
                        </div>
                        <div class="phone mt-6 group flex items-center gap-4">
                            <div class="icon"><i class="px-[14px] py-[12px] rounded-full bg-ark-brown text-ark-black text-lg bi bi-envelope-fill"></i></div>
                            <div class="number">
                                <p>Email:</p>
                                <a class="group-hover:text-ark-brown" href="mailto:clientservices@arkhive.africa">clientservices@arkhive.africa</a>
                            </div>
                        </div>
                        <div class="phone mt-6 group flex items-center gap-4">
                            <div class="icon"><i class="px-[14px] py-[12px] rounded-full bg-ark-brown text-ark-black text-lg bi bi-geo-alt-fill"></i></div>
                            <div class="number">
                                <p>Address:</p>
                                <a class="group-hover:text-ark-brown" href="https://maps.app.goo.gl/3NDbT5jLuoF39YsX6">Ubungo Business Park, Morogoro Road, <br> P.O. BOX 79910, Dar es Salaam, Tanzania.</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Legal Section -->
                <div>
                    <h3 class="text-2xl font-medium mb-4">Legal</h3>
                    <ul class="space-y-2 block md:flex md:space-x-6 lg:block font-[Montserrat]">
                        <li><a href="#" class="hover:text-ark-brown transition-all duration-300">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:text-ark-brown transition-all duration-300">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-ark-brown transition-all duration-300">Cookie Policy</a></li>
                        <li><a href="#" class="hover:text-ark-brown transition-all duration-300">Data Compliance</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="mt-8 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <!-- Copyright -->
                <div class="text-md font-[Montserrat]">
                    <p class="text-white/70 text-sm">©{{ date('Y') }} All Rights Reserved. Arkhive Africa</p>
                </div>

                <!-- Social Media Icons -->
                <div class="flex space-x-4">
                    <div class="flex gap-8">
                        <a href="https://www.linkedin.com/company/arkhiveafrica" target="_blank" ><i class="bi bi-linkedin text-white text-2xl"></i></a>
                        <a href="https://instagram.com/arkhive.africa" target="_blank" ><i class="bi bi-instagram text-white text-2xl"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100092265805657" target="_blank" ><i class="bi bi-facebook text-white text-2xl"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
@endif

