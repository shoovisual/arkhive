@extends('layouts.home-layout')
@section('meta')
    <meta name="description" content="Arkhive Africa offers secure document archiving & retrieval, bulk scanning & indexing, and confidential shredding & recycling. Explore our solutions and get a quote." />
    <meta name="keywords" content="Document archiving, Bulk scanning, Confidential shredding, Records management, Tanzania" />
    <meta property="og:description" content="Secure document archiving, efficient bulk scanning & indexing, and confidential shredding & recycling." />
    <meta property="og:keywords" content="Document archiving, Bulk scanning, Confidential shredding" />
@endsection
@section('title', 'Home')
@section('content')


<main class="w-full">
    <!-- Hero Slider (Slick) -->
    @php
        $heroBackgrounds = [
            'img/hero-bg.webp',
            'img/document_storage.webp',
            'img/archiving-cover.webp',
        ];
    @endphp
    <section class="relative h-[90dvh] md:h-[95vh] w-full">
        <div class="hero-slider">
            @foreach($heroBackgrounds as $background)
                <div class="hero-slide" style="background-image: url('{{ asset($background) }}');">
                    <div class="hero-overlay"></div>
                    <div class="hero-content text-white space-y-6">
                        <div class="hero-text">
                            <h1 class="text-3xl md:text-6xl lg:text-[92px] font-[montserrat] text-white">From compliance risk to <span class="text-ark-brown">business assurance</span></h1>
                            <p class="text-white mt-4 text-lg md:text-xl font-[montserrat]">PDPA Compliant: Turn records from risk to secure asset, fully Tanzania PDPA 2022 compliant.</p>
                        </div>
                        <div class="flex gap-4 pt-2 md:text-lg text-sm font-[montserrat]">
                            <a href="{{ route('services.pdpc-compliance') }}" class="px-5 py-3 rounded-md border border-ark-brown bg-ark-black hover:bg-[#121212] text-white transition" title="Learn About PDPA Compliance">Read More</a>
                            <a href="{{ route('contact') }}" class="px-5 py-3 rounded-md border border-white/20 bg-ark-black/60 hover:bg-ark-black text-white transition">Get quote</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Intro / Hello -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-10 items-start anim-section">
            <div class="space-y-4 anim-child">
                {{-- <h2 class="md:text-6xl text-4xl text-white font-medium  mb-8">HELLO!</h2> --}}
                <h2 class="md:text-5xl text-2xl text-ark-brown font-medium  mb-8">We are a <span class="text-white"> document management company</span> operating since 2016</h2>
            </div>
            <div class="space-y-6 anim-child">
                <p class="text-lg mb-6 md:w-xl text-white font-[montserrat]">ARKHIVE: PDPC Compliant Records Management company based in Dar es Salaam. We secure your paper and digital assets through certified destruction, storage, and on time retrieval services</p>
                <div class="flex flex-wrap gap-4 font-[montserrat]">
                    <a href="{{ route('services.pdpc-compliance') }}" class="px-5 py-3 rounded-md border border-ark-brown bg-ark-black/60 hover:bg-ark-black text-white">Learn More</a>
                    <a href="{{ route('contact') }}" class="px-5 py-3 rounded-md border border-white/20 bg-ark-black hover:bg-[#121212] text-white">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Offered -->
    <div class="bg-black/30 my-4">
        @include('services.sections.services-section')
    </div>

    <!-- Mid CTA Banner -->
    <div class="relative overflow-hidden md:w-7xl rounded-2xl flex mx-auto items-center py-10" style="background-image: url('img/cta-bg.webp'); background-position: bottom; background-size: cover">
        <div class="absolute inset-0 bg-black/70 bg-blend-multiply transition-all"></div>
        <div class="container flex justify-center py-5 items-center mx-auto">
            <div class="relative grid grid-cols-1 md:grid-cols-2 px-5 z-10">
                <div class="flex flex-col mb-8 md:mb-0 gap-y-4">
                    <h2 class="text-2xl text-ark-brown font-[montserrat]">Got a document headache?</h2>
                    <h2 class="text-6xl text-white">Tell us everything.</h2>
                </div>
                <div class="flex md:justify-center items-center">
                    <div class="contact-btn">
                        <a href="{{ route('contact') }}" class="bg-ark-brown text-ark-black font-medium px-6 py-3 rounded-md text-lg font-[montserrat] hover:bg-white/80 transition duration-300 ease-in-out">Contact Us <i class="bi ml-3 bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sectors -->
    @include('services.sections.industries')
</main>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<style>
.slick-dots {
    position: absolute;
    bottom: 16px;
    left: 0;
    right: 0;
    display: flex !important;
    justify-content: center;
    align-items: center;
    gap: 2px;
    z-index: 30;
}

.slick-dots li {
    width: 50px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.slick-dots li button:before {
    font-size: 0;
    content: '';
}

.slick-dots li button {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.4);
    outline: none;
    border: none;
    transition: all .3s ease;
}

.slick-dots li.slick-active button {
    background: #fff;
    width: 50px;
    border-radius: 25px;
    transform: none;
    box-shadow: none;
}

/* .slick-dots li.slick-active button::after {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    content: '';
    width: 57px;
    height: 32px;
    border-radius: 50px;
    border: 2px solid #4db5f1;
} */
</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
$(function(){
  var $slider = $('.hero-slider');
  if(!$slider.length) return;

  // Prevent double initialization
  if($slider.hasClass('slick-initialized')) {
    $slider.slick('setPosition');
    return;
  }

  var slideCount = $slider.find('.hero-slide').length;
  var enableDots = slideCount > 1;

  $slider.slick({
    dots: enableDots,
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: slideCount > 1,
    autoplay: true,
    pauseOnHover: false,
    autoplaySpeed: 5000,
    speed: 600,
    fade: true,
    cssEase: 'ease',
    prevArrow: '<button type="button" class="custom-arrow left" aria-label="Previous"><i class="bi bi-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="custom-arrow right" aria-label="Next"><i class="bi bi-chevron-right"></i></button>',
  });
});
</script>
@endpush
@endsection
