@extends('layouts.home-layout')
@section('title', 'Document Shredding & Recycling')

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    const animateFeatures = () => {
        const features = document.querySelectorAll('.feature-item');
        features.forEach((feature) => {
            gsap.set(feature, { filter: 'blur(10px)' });
            gsap.fromTo(feature,
                { opacity: 0, y: 20, filter: 'blur(10px)' },
                {
                    opacity: 1,
                    y: 0,
                    filter: 'blur(0px)',
                    duration: 1,
                    scrollTrigger: {
                        trigger: feature,
                        start: 'top bottom-=100',
                        end: 'bottom center',
                        toggleActions: 'restart none none reverse'
                    }
                }
            );
        });
    };

    document.addEventListener('DOMContentLoaded', animateFeatures);
</script>
@endpush

@section('content')
<main class="w-full">
    @include('services.sections.breadcrump')
    <div id="service" class="max-w-7xl grid grid-cols-5 space-x-8 my-10 mx-auto px-10">
        <h2 class="text-6xl text-ark-brown feature-item font-medium mb-8 col-span-3">
            {{ json_decode($currentService->sub_services)[0]->title }}
        </h2>
        <div class="service-list col-span-4">
            <ul class="text-xl grid grid-cols-1 md:grid-cols-2 font-[Montserrat] gap-y-2 text-white">
                @foreach(json_decode($currentService->sub_services)[0]->features as $feature)
                <li class="flex gap-x-4 feature-item">
                    <span class="mt-2">
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg id="Layer_1" class="w-[20px] fill-ark-brown" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 26.94">
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1-2">
                            <path d="M5.35,26.94c-1.91,0-3.74-.75-5.09-2.11-.35-.35-.35-.91,0-1.26,0,0,0,0,0,0,.35-.34.9-.34,1.25,0,2.06,2.12,5.46,2.17,7.58.1.03-.03.07-.07.1-.1l12.5-12.5c2.12-2.07,2.15-5.46.08-7.58-.03-.03-.06-.06-.08-.08-2.15-2.05-5.53-2.05-7.68,0L3.75,13.67c-.91.86-.96,2.29-.1,3.21.86.91,2.29.96,3.21.1.04-.04.07-.07.11-.11l10.27-10.27c.35-.34.9-.34,1.25,0,.35.35.35.91,0,1.26h0s-10.27,10.27-10.27,10.27c-1.6,1.53-4.12,1.53-5.72,0-1.58-1.57-1.59-4.12-.02-5.71,0,0,.02-.02.02-.02L12.77,2.13c2.77-2.81,7.29-2.85,10.1-.08,1.37,1.35,2.14,3.19,2.13,5.11,0,1.91-.76,3.75-2.13,5.09l-12.5,12.5c-1.32,1.36-3.12,2.15-5.02,2.18h0Z"/>
                            </g>
                        </g>
                        </svg>
                    </span>
                    {{ $feature }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="image-slider">
        <div class="max-w-7xl mx-auto px-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2">
                <div class="image-card">
                    <img src="{{ asset('img/services/archiving-2.webp') }}" alt="Document Archiving" class="h-[100%] object-cover">
                </div>
                <div class="image-card">
                    <img src="{{ asset('img/services/archiving-3.webp') }}" alt="Document Archiving" class="h-[100%] object-cover">
                </div>
                <div class="image-card">
                    <img src="{{ asset('img/services/archiving-4.webp') }}" alt="Document Archiving" class="h-[100%] object-cover">
                </div>
                <div class="image-card">
                    <img src="{{ asset('img/services/security.webp') }}" alt="Document Archiving" class="h-[100%] object-cover">
                </div>
            </div>
        </div>
    </div>
    <div id="service" class="max-w-7xl grid grid-cols-5 space-x-8 my-10 mx-auto px-10">
        <h2 class="text-6xl text-ark-brown font-medium mb-8 col-span-3 feature-item">
            {{ json_decode($currentService->sub_services)[1]->title }}
        </h2>
        <div class="service-list col-span-4">
            <ul class="text-xl grid grid-cols-1 md:grid-cols-2 font-[Montserrat] gap-y-2 text-white">
                @foreach(json_decode($currentService->sub_services)[1]->features as $feature)
                <li class="flex gap-x-4 feature-item">
                    <span class="mt-2">
                        <svg id="Layer_1" class="w-[20px] fill-ark-brown" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.02 514.01">
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1-2">
                            <path class="cls-1" d="M102.16,514.01c-36.45.12-71.43-14.36-97.12-40.21-6.68-6.63-6.73-17.42-.1-24.1.03-.03.07-.07.1-.1,6.63-6.49,17.23-6.49,23.85,0,39.38,40.46,104.1,41.35,144.57,1.97.66-.65,1.32-1.3,1.97-1.97l238.55-238.55c40.37-39.47,41.1-104.2,1.62-144.57-.53-.55-1.08-1.09-1.62-1.62-40.98-39.21-105.56-39.21-146.54,0l-195.95,195.95c-17.42,16.36-18.28,43.75-1.92,61.18,16.36,17.42,43.75,18.28,61.18,1.92.72-.67,1.41-1.37,2.08-2.09l195.95-195.95c6.63-6.49,17.23-6.49,23.85,0,6.68,6.63,6.73,17.42.1,24.1-.03.03-.07.07-.1.1l-195.95,195.95c-30.46,29.25-78.59,29.25-109.05,0-30.21-29.95-30.42-78.71-.47-108.92.16-.16.32-.32.47-.47L243.59,40.67c52.82-53.64,139.13-54.3,192.77-1.48,26.13,25.73,40.79,60.91,40.67,97.58.03,36.5-14.58,71.48-40.55,97.12l-238.55,238.55c-25.14,26.02-59.59,40.97-95.76,41.58Z"/>
                            </g>
                        </g>
                        </svg>
                    </span>
                    {{ $feature }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @include('services.sections.industries')
    @include('services.sections.other-services')
</main>
