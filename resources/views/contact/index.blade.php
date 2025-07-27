@extends('layouts.master')

@section('meta')
    <meta property="og:description" content="Get in touch with Arkhive Africa for all your document management needs. We offer secure archiving, efficient bulk scanning, and confidential shredding services. Contact us today!" />
    <meta property="og:keywords" content="Contact Arkhive Africa, Arkhive Africa Contacts, Document management contact, Secure archiving, Bulk scanning contact, Confidential shredding contact" />
@endsection

@section('title', 'Contact Us')

@section('content')
<main class="w-full">
    {{-- Breadcrumb Section (Optional, you can customize or remove) --}}
    <div  class="breadcrump h-[80vh] relative overflow-hidden w-full flex mx-auto items-center lg:px-20 bg-cover bg-center" style="background-image: url('img/contact-cover.webp'); background-repeat: no-repeat; background-size: cover" >
        <div class="absolute inset-0 bg-black/50 transition-all"></div>
        <div class="flex justify-center flex-col items-center mx-auto lg:max-w-6xl">
            <div class="relative flex lg:w-6xl flex-col px-5 z-10 text-white">
            <h2 class="text-[64px] lg:w-xl leading-15 font-[500] mb-8">@yield('title')</h2>
            </div>
        </div>
    </div>


    {{-- Contact Information Section --}}
    <div class="lg:max-w-7xl mx-auto lg:px-10 px-5 py-20 grid grid-cols-1 md:grid-cols-6 gap-12">
        <div class="contact-info col-span-2 flex flex-col gap-y-6">
            <h3 class="text-4xl text-ark-brown font-medium mb-4">Contact Details</h3>
            <div class="flex gap-x-4 text-white text-md font-[Montserrat]">
                <i class="bi bi-geo-alt-fill text-ark-brown text-2xl"></i>
                <a href="https://maps.app.goo.gl/3NDbT5jLuoF39YsX6">Ubungo Business Park, Morogoro Road, P.O. BOX 79910, Dar es Salaam, Tanzania.</a>
            </div>
            <div class="flex gap-x-4 text-white text-md font-[Montserrat]">
                <i class="bi bi-telephone-fill text-ark-brown text-2xl"></i>
                <a href="https://wa.me/255747888555" target="_blank"><i class="bi bi-whatsapp text-ark-brown text-2xl"></i></a>
                <a href="tel:+255747888555"> +255 747 888 555 </a>
            </div>
            <div class="flex gap-x-4 text-white text-md font-[Montserrat]">
                <i class="bi bi-envelope-fill text-ark-brown text-2xl"></i>
                <a href="mailto:clientservices@arkhive.africa">clientservices@arkhive.africa</a>
            </div>
            {{-- Add Social Media Links if needed --}}
            <div class="flex gap-x-6 mt-4">
                <a href="https://www.facebook.com/profile.php?id=100092265805657" target="_blank" class="text-white hover:text-ark-brown transition-colors duration-300"><i class="bi bi-facebook text-3xl"></i></a>
                <a href="https://instagram.com/arkhive.africa" target="_blank" class="text-white hover:text-ark-brown transition-colors duration-300"><i class="bi bi-instagram text-3xl"></i></a>
                <a href="https://www.linkedin.com/company/arkhiveafrica" target="_blank" class="text-white hover:text-ark-brown transition-colors duration-300"><i class="bi bi-linkedin text-3xl"></i></a>
            </div>
        </div>

        {{-- Contact Form Section (Placeholder) --}}
        <div class="contact-form col-span-4">
            <h3 class="text-4xl text-ark-brown font-medium mb-4">Send us a Message</h3>
            <p class="text-md text-white font-[Montserrat] mb-6">
                Fill out the form below and we will get back to you as soon as possible.
            </p>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-4 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border font-[Montserrat] border-red-400 text-red-700 px-4 py-4 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-4 rounded relative mb-4" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" id="contact-form" class="flex font-[Montserrat] flex-col gap-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-white mb-2">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Full Name" class="placeholder:font-[Montserrat] placeholder:text-white/20 w-full px-4 py-4 rounded-md border shadow-lg bg-ark-brown/0 backdrop-blur-sm border-b border-ark-brown/30 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50" required>
                </div>
                <div>
                    <label for="email" class="block text-white mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email" class="placeholder:font-[Montserrat] placeholder:text-white/20 w-full px-4 py-4 rounded-md border shadow-lg bg-ark-brown/0 backdrop-blur-sm border-b border-ark-brown/30 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50" required>
                </div>
                <div>
                    <label for="phone" class="block text-white mb-2">Phone Number</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter Phone Number"
                        maxlength="13"
                        pattern="^\+?\d{9,13}$"
                        class="placeholder:font-[Montserrat] placeholder:text-white/20 w-full px-4 py-4 rounded-md border shadow-lg bg-ark-brown/0 backdrop-blur-sm border-b border-ark-brown/30 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50"
                        autocomplete="off" required>
                </div>


                <div x-data="{ isOpen: false, selected: null, services: {{ json_encode($services->pluck('title')) }}, placeholder: 'Select Service' }" class="relative font-[Montserrat]">

                    <input type="hidden" name="service" x-model="selected" required>

                    <label class="block text-white mb-2">
                        What service are you interested in?
                    </label>

                    <button type="button" @click="isOpen = !isOpen" class="w-full px-4 py-4 text-left bg-ark-black/5 backdrop-blur-sm border border-ark-brown/30 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50" >
                        <span x-text="selected || placeholder"></span>
                        <svg class="absolute right-3 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div x-show="isOpen" @click.away="isOpen = false" class="absolute z-10 mt-1 w-full rounded-md shadow-lg bg-ark-black/50 backdrop-blur-sm border border-ark-brown/30" >
                        <ul class="py-1 max-h-60 overflow-auto">
                            <template x-for="(service, index) in services" :key="index">
                                <li @click="selected = service; isOpen = false" class="px-4 py-3 text-white hover:bg-ark-black/30 cursor-pointer" >
                                    <span x-text="service"></span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-white mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" class="w-full px-4 py-4 rounded-md border shadow-lg bg-ark-brown/0 backdrop-blur-sm border-b border-ark-brown/30 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50" required></textarea>
                </div>


                <button type="submit" data-sitekey="{{ config('services.recaptcha.site_key') }}" data-callback='onSubmit' data-action='submit' class="bg-ark-brown text-ark-black g-recaptcha font-medium px-4 py-3 rounded-md text-md cursor-pointer font-[Montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out self-start">Send Message</button>
            </form>
        </div>
    </div>

    {{-- Map Section (Optional) --}}
    {{-- You can embed a map here if needed --}}
    <div class="w-full h-[500px] bg-gray-200">
        <!-- Map Embed Code -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7800441588543!2d39.2191999!3d-6.7965949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4fef0d13a259%3A0x6b9c93442cf13258!2sARKHIVE!5e0!3m2!1sen!2stz!4v1749061602159!5m2!1sen!2stz" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</main>


<!-- Add this in your layout file's head -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form'); // Adjust selector if needed
    const nameInput = document.getElementById('name');
    const messageInput = document.getElementById('message');

    function containsLink(text) {
        const linkRegex = /(https?:\/\/|www\.)[^\s]+/i;
        return linkRegex.test(text);
    }

    function isValidFullName(name) {
        return /^[A-Za-z]+(?:\s[A-Za-z]+)+$/.test(name.trim());
    }

    form.addEventListener('submit', function (e) {
        const nameValue = nameInput.value.trim();
        const messageValue = messageInput.value.trim();

        if (!isValidFullName(nameValue)) {
            e.preventDefault();
            alert('Please enter your full name (first and last name only).');
            nameInput.focus();
            return;
        }

        if (containsLink(nameValue) || containsLink(messageValue)) {
            e.preventDefault();
            alert('Links are not allowed in the name or message.');
            return;
        }
    });
});

</script>

<script>
   function onSubmit(token) {
     document.getElementById("contact-form").submit();
   }
 </script>


@endsection
