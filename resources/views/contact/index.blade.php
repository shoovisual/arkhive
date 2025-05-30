@extends('layouts.master')
@section('title', 'Contact Us')

@section('content')
<main class="w-full">
    {{-- Breadcrumb Section (Optional, you can customize or remove) --}}
    <div  class="breadcrump h-[80vh] relative overflow-hidden w-full flex mx-auto items-center px-20 bg-cover bg-center" style="background-image: url('img/contact-cover.webp'); background-repeat: no-repeat; background-size: cover" >
        <div class="absolute inset-0 bg-black/70 transition-all"></div>
        <div class="flex justify-center flex-col items-center mx-auto max-w-6xl">
            <div class="relative flex w-6xl flex-col px-5 z-10 text-white">
            <h2 class="text-[64px] w-xl leading-15 font-[500] mb-8">@yield('title')</h2>
            </div>
        </div>
    </div>


    {{-- Contact Information Section --}}
    <div class="max-w-7xl mx-auto px-10 py-20 grid grid-cols-1 md:grid-cols-6 gap-12">
        <div class="contact-info col-span-2 flex flex-col gap-y-6">
            <h3 class="text-4xl text-ark-brown font-medium mb-4">Contact Details</h3>
            <div class="flex gap-x-4 text-white text-lg font-[Montserrat]">
                <i class="bi bi-geo-alt-fill text-ark-brown text-2xl"></i>
                <a href="https://maps.app.goo.gl/3NDbT5jLuoF39YsX6">Ubungo Business Park, Morogoro Road, P.O. BOX 79910, Dar es Salaam, Tanzania.</a>
            </div>
            <div class="flex gap-x-4 text-white text-lg font-[Montserrat]">
                <i class="bi bi-telephone-fill text-ark-brown text-2xl"></i>
                <a href="tel:+255712185393">+255 712 185 393</a>
            </div>
            <div class="flex gap-x-4 text-white text-lg font-[Montserrat]">
                <i class="bi bi-envelope-fill text-ark-brown text-2xl"></i>
                <a href="mailto:clientservices@arkhiveafrica.com">clientservices@arkhiveafrica.com</a>
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
            <p class="text-xl text-white font-[Montserrat] mb-6">
                Fill out the form below and we will get back to you as soon as possible.
            </p>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="flex flex-col gap-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-white text-lg font-[Montserrat] mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-none bg-ark-brown/5 backdrop-blur-sm border-b border-ark-brown/30 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50" required>
                </div>
                <div>
                    <label for="email" class="block text-white text-lg font-[Montserrat] mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-none bg-ark-brown/5 backdrop-blur-sm border-b border-ark-brown/30 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50" required>
                </div>
                <div>
                    <label for="subject" class="block text-white text-lg font-[Montserrat] mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-none bg-ark-brown/5 backdrop-blur-sm border-b border-ark-brown/30 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50">
                </div>
                <div>
                    <label for="message" class="block text-white text-lg font-[Montserrat] mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 rounded-none bg-ark-brown/5 backdrop-blur-sm border-b border-ark-brown/30 text-white focus:outline-none focus:ring-2 focus:ring-ark-brown/50" required></textarea>
                </div>
                <button type="submit" class="bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[Montserrat] hover:bg-ark-brown/80 transition duration-300 ease-in-out self-start">Send Message</button>
            </form>
        </div>
    </div>

    {{-- Map Section (Optional) --}}
    {{-- You can embed a map here if needed --}}
    {{-- <div class="w-full h-[500px] bg-gray-200">
        <!-- Map Embed Code -->
    </div> --}}

</main>
@endsection
