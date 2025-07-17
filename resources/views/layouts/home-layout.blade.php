<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WGHXQWYBCG"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-WGHXQWYBCG');
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};
    </script>

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="canonical" href="index.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta name="description" content="Arkhive Africa provides professional document management solutions: secure archiving and retrieval, efficient bulk scanning and indexing, and confidential shredding and recycling services. Streamline your records management.">
    <meta name="keywords" content="document archiving africa, records management tanzania, document retrieval services, bulk document scanning, paper scanning services, professional indexing, secure document shredding, confidential shredding africa, document recycling services">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="10 days">
    <meta name="author" content="Arkhive Africa">
    <meta property="og:title" content="Arkhive Africa | @yield('title')" />
    <meta property="og:description" content="Arkhive Africa provides professional document management solutions: secure archiving and retrieval, efficient bulk scanning and indexing, and confidential shredding and recycling services. Streamline your records management." />
    <meta property="og:url" content="https://arkhive.africa/" />
    <meta property="og:site_name" content="Arkhive Africa" />
    <meta property="article:modified_time" content="2023-03-23T02:08:19+00:00" />

    <!-- Google site verifications -->
    <meta name="google-site-verification" content="Akk8NT3Ed5wC3AV0EwJZDcVkTNq6OD48Lgg9078xx50" />

    <title>@yield('title') | Arkhive Africa</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">


    @include('layouts.vendor-css')
    @vite(['resources/css/app.css'])

    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "@id": "https://arkhive.africa/",
                "url": "https://arkhive.africa/",
                "name": "Arkhive Africa",
                "isPartOf": {
                    "@id": "https://arkhive.africa/#website"
                },
                "datePublished": "2020-06-30T16:18:56+00:00",
                "dateModified": "2023-03-23T02:08:19+00:00",
                "description": "Arkhive Africa provides professional document management solutions: secure archiving and retrieval, efficient bulk scanning and indexing, and confidential shredding and recycling services. Streamline your records management.",
                "breadcrumb": {
                    "@id": "https://arkhive.africa/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://arkhive.africa/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://arkhive.africa/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home"
                }]
            }, {
                "@type": "WebSite",
                "@id": "https://arkhive.africa/#website",
                "url": "https://arkhive.africa/",
                "name": "Arkhive Africa",
                "description": "Change is Good.",
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https://arkhive.africa/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }],
                "inLanguage": "en-US"
            }]
        }
    </script>
</head>
<body class="antialiased">
    <!-- Preloader -->
<div id="preloader" class="fixed inset-0 z-50 bg-ark-black flex items-center justify-center">
  <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-ark-brown border-opacity-75"></div>
</div>
    @include('sections.header')
    @yield('content')
    @if(!Request::is('/'))
        @include('sections.footer')
    @endif



    @include('layouts.vendor-js')
<script>
    window.addEventListener('load', function () {
        const preloader = document.getElementById('preloader');
        if (preloader) {
        preloader.classList.add('opacity-0');
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500); // Wait for fade-out transition
        }
    });
</script>
</body>
</html>

