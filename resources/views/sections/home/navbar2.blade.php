<nav class="w-full fixed top-0 py-2 z-30 transition-opacity duration-300 bg-[#121212]/40 backdrop-blur-sm" id="navbar">
    <div class="mx-auto px-5 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="relative gap-x-10 flex items-center justify-between">
                <div class="flex flex-shrink-0 items-center">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('img/main-logo.svg') }}" alt="Arkhive Africa Logo" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="nav-menu-2 hidden lg:flex items-center justify-center">
                <div class="text-white flex space-x-4 md:space-y-12 mt-5 md:mt-10 px-4 md:px-12 lg:px-24">
                    <a href="/" class="group block text-[16px] font-[Montserrat] font-regular px-3 transition-all duration-300 {{ request()->is('/') ? 'text-ark-brown' : '' }}">
                        <div class="flex items-baseline">
                            <span class="group-hover:text-ark-brown transition-colors duration-300">Home</span>
                        </div>
                    </a>
                    <a href="{{ route('about') }}" class="group block text-[16px] font-[Montserrat] font-regular px-3 transition-all duration-300 {{ request()->is('about') ? 'text-ark-brown' : '' }}">
                        <div class="flex items-baseline">
                            <span class="group-hover:text-ark-brown transition-colors duration-300">About us</span>
                        </div>
                    </a>
                    <a href="{{ route('services.index') }}" class="group block text-[16px] font-[Montserrat] font-regular px-3 transition-all duration-300 {{ request()->is('services') ? 'text-ark-brown' : '' }}">
                        <div class="flex items-baseline">
                            <span class="group-hover:text-ark-brown transition-colors duration-300">Our Services</span>
                        </div>
                    </a>
                    <a href="/process" class="group block text-[16px] font-[Montserrat] font-regular px-3 transition-all duration-300 {{ request()->is('process') ? 'text-ark-brown' : '' }}">
                        <div class="flex items-baseline">
                            <span class="group-hover:text-ark-brown transition-colors duration-300">Our Process</span>
                        </div>
                    </a>
                    <a href="{{ route('contact') }}" class="group block text-[16px] font-[Montserrat] font-regular px-3 transition-all duration-300 {{ request()->is('contact-') ? 'text-ark-brown' : '' }}">
                        <div class="flex items-baseline">
                            <span class="group-hover:text-ark-brown transition-colors duration-300">Contact</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="navbar-right lg:hidden flex md:gap-x-[5em] gap-x-3 justify-center items-center">
                <!-- New Button for Submitting Brief -->
                <a href="{{ route('contact') }}" class="relative regular-button bg-ark-black hover:bg-[#121212] font-[Montserrat] w-fit group md:px-6 md:py-3 px-3 py-2 rounded-full border-ark-brown border text-white md:text-lg text-[14px] font-medium transition-all duration-300">
                    Contact us
                </a>
                <div class="menu-opener cursor-pointer">
                    <svg width="47" height="26" viewBox="0 0 47 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.762695 2.13129H45.9998" stroke="white" strokeWidth="5" />
                        <path d="M0.762695 12.8945H45.9998" stroke="white" strokeWidth="5" />
                        <path d="M14.2007 23.8687L45.9999 23.6577" stroke="white" strokeWidth="5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 100) {
            // Change '100' to the desired scroll height
            navbar.classList.add('bg-[#1b1b1b]/20');
            navbar.classList.add('backdrop-blur-sm');
        } else {
            navbar.classList.remove('bg-[#1b1b1b]/20');
            navbar.classList.remove('backdrop-blur-sm');
        }
    });
</script>

<!-- Full Screen Menu Overlay -->
<div id="fullScreenMenu" class="fixed inset-0 bg-[#1B1B1B] transform font-[Montserrat] translate-y-[-110%] transition-all duration-700 ease-in-out z-[9999]">
    <div class="container h-full flex flex-col">
        <div class="flex justify-between items-center py-8 px-4 md:px-12 lg:px-24">
            <span class="text-white/50 text-sm">Navigation</span>
            {{-- <button id="openForm" class="text-white text-sm">Send a Brief</button> --}}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-5 justify-center">
            <div class="text-white space-y-4 md:space-y-8 mt-5 md:mt-10 px-4 md:px-12 lg:px-24">
                <a href="/" class="group block text-2xl md:text-6xl font-light hover:pl-3 transition-all duration-300">
                    <div class="flex items-baseline">
                        <span class="group-hover:text-ark-brown transition-colors duration-300">Home</span>
                    </div>
                </a>
                <a href="{{ route('about') }}" class="group block text-2xl md:text-6xl font-light hover:pl-3 transition-all duration-300">
                    <div class="flex items-baseline">
                        <span class="group-hover:text-ark-brown transition-colors duration-300">About us</span>
                    </div>
                </a>
                <a href="/process" class="group block text-2xl md:text-6xl font-light hover:pl-3 transition-all duration-300">
                    <div class="flex items-baseline">
                        <span class="group-hover:text-ark-brown transition-colors duration-300">Our Process</span>
                    </div>
                </a>
                <a href="{{ route('contact') }}" class="group block text-2xl md:text-6xl font-light hover:pl-3 transition-all duration-300">
                    <div class="flex items-baseline">
                        <span class="group-hover:text-ark-brown transition-colors duration-300">Contact</span>
                    </div>
                </a>
            </div>
            <div class="text-white space-y-6 px-4 mt-10 md:px-12 lg:px-24">
                <div class="logo-2 w-[200px]">
                    <img src="{{ asset('img/main-logo.svg') }}" alt="Arkhive Africa Logo" />
                </div>
                <h4 class="text-ark-blue font-[Garamond] text-3xl italic font-medium">It is not a priority, until it is.</h4>
                <div class="information">
                    <h3 class="text-lg font-medium">Contact Info</h3>
                    <div class="phone mt-6 flex items-center gap-4">
                        <div class="icon"><i class="px-[14px] py-[12px] rounded-full bg-ark-brown text-ark-black text-lg bi bi-telephone-fill"></i></div>
                        <div class="number">
                            <p>Phone:</p>
                            <a href="tel:+255747888555 "> +255747 888 555 </a>
                        </div>
                    </div>
                    <div class="phone mt-6 flex items-center gap-4">
                        <div class="icon"><i class="px-[14px] py-[12px] rounded-full bg-ark-brown text-ark-black text-lg bi bi-envelope-fill"></i></div>
                        <div class="number">
                            <p>Email:</p>
                            <a href="mailto:clientservices@arkhiveafrica.com">clientservices@arkhiveafrica.com</a>
                        </div>
                    </div>
                    <div class="phone mt-6 flex items-center gap-4">
                        <div class="icon"><i class="px-[14px] py-[12px] rounded-full bg-ark-brown text-ark-black text-lg bi bi-geo-alt-fill"></i></div>
                        <div class="number">
                            <p>Address:</p>
                            <a href="https://maps.app.goo.gl/3NDbT5jLuoF39YsX6">Ubungo Business Park, Morogoro Road, P.O. BOX 79910, <br> Dar es Salaam, Tanzania.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed bottom-0 left-0 w-full bg-[#1B1B1B] py-4">
            <div class="px-10 flex justify-between gap-x-8 items-center">
                <div class="flex md:gap-8 gap-3">
                    <a href="https://www.linkedin.com/company/arkhiveafrica" target="_blank" ><i class="bi bi-linkedin text-white text-xl md:text-2xl"></i></a>
                    <a href="https://instagram.com/arkhive.africa" target="_blank" ><i class="bi bi-instagram text-white text-xl md:text-2xl"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100092265805657" target="_blank" ><i class="bi bi-facebook text-white text-xl md:text-2xl"></i></a>
                </div>
                <div class="lg:flex lg:flex-row flex-col gap-8">
                    <p class="text-white/70 text-sm">©{{ date('Y') }} All Rights Reserved. Arkhive Africa</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Close Button with improved positioning and animation -->
<div id="menuClose" class="fixed top-8 p-4 rounded-full right-8 z-[10000] bg-[#ffffff7e] cursor-pointer hidden opacity-0 transition-opacity duration-300">
    <svg width="15" height="15" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg"
        class="transform hover:rotate-90 transition-transform duration-300">
        <path d="M2.82843 0L0 2.82843L44.1726 47L47 44.1716L2.82843 0Z" fill="white"/>
        <path d="M0 44.1716L2.82843 47L47 2.82843L44.1726 0L0 44.1716Z" fill="white"/>
    </svg>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuOpener = document.querySelector('.menu-opener');
    const menuClose = document.getElementById('menuClose');
    const fullScreenMenu = document.getElementById('fullScreenMenu');
    let isMenuOpen = false;

    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        if (isMenuOpen) {
            fullScreenMenu.classList.remove('translate-y-[-110%]');
            fullScreenMenu.classList.add('translate-y-0');
            menuClose.classList.add('z-[10000]');
            menuClose.classList.remove('hidden');
            setTimeout(() => {
                menuClose.classList.remove('opacity-0');
            }, 100);
            menuOpener.classList.add('hidden');
        } else {
            fullScreenMenu.classList.add('translate-y-[-110%]');
            fullScreenMenu.classList.remove('translate-y-0');
            menuClose.classList.add('opacity-0');
            setTimeout(() => {
                menuClose.classList.add('hidden');
            }, 300);
            menuOpener.classList.remove('hidden');
        }

        document.body.style.overflow = isMenuOpen ? 'hidden' : '';
    }

    menuOpener.addEventListener('click', toggleMenu);
    menuClose.addEventListener('click', toggleMenu);

    // Smooth close animation when clicking links
    const menuLinks = fullScreenMenu.querySelectorAll('a');
    menuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const href = link.getAttribute('href');

            // Animate menu closing
            toggleMenu();

            // Navigate after animation
            setTimeout(() => {
                window.location.href = href;
            }, 700);
        });
    });
});
</script>
