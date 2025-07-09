@extends('layouts.home-layout')

@section('title', 'Cookie Policy')

@section('content')
<div class="empty-breadcrumb spacer h-[30vh]"> </div>
<div class="container py-12 max-w-4xl mx-auto text-white">
    <h1 class="text-6xl text-ark-brown font-regular mb-8">Cookie Policy</h1>
    <p class="mb-4 font-[Montserrat]">Effective Date: June 15, 2025</p>

    <h2 class="text-xl font-regular mt-6 mb-2">1. What Are Cookies?</h2>
    <p class="mb-4 font-[Montserrat]">Cookies are small files stored on your device that help personalize your browsing experience.</p>

    <h2 class="text-xl font-regular mt-6 mb-2">2. Types of Cookies We Use</h2>
    <ul class="list-none font-[Montserrat] ml-5 mb-4">
        <li>Essential Cookies</li>
        <li>Analytical Cookies</li>
        <li>Functionality Cookies</li>
    </ul>

    <h2 class="text-xl font-regular mt-6 mb-2">3. Managing Cookies</h2>
    <p class="mb-4 font-[Montserrat]">You can change cookie preferences via your browser settings. Disabling may affect performance.</p>

    <h2 class="text-xl font-regular mt-6 mb-2">4. Third-Party Cookies</h2>
    <p class="mb-4 font-[Montserrat]">We use tools like Google Analytics that may also store cookies to help us improve user experience.</p>
</div>
@endsection
