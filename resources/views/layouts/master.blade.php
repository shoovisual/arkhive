<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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
    <meta name="author" content="Adam Shoo">
    <meta property="og:title" content="Arkhive Africa | Digital Marketing Agency Based In Dares Salaam, Tanzania" />
    <meta property="og:description" content="I am Brand Identity and Creative Designer Based in Dar Es Salaam, Tanzania." />
    <meta property="og:url" content="https://arkhive.africa/" />
    <meta property="og:site_name" content="Arkhive Africa Brand + Creative Agency" />
    <meta property="article:modified_time" content="2023-03-23T02:08:19+00:00" />

    <!-- Google site verifications -->
    <meta name="google-site-verification" content="Akk8NT3Ed5wC3AV0EwJZDcVkTNq6OD48Lgg9078xx50" />

    <title>@yield('title') | Arkhive Africa</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">



    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "@id": "https://arkhive.africa/",
                "url": "https://arkhive.africa/",
                "name": "Arkhive Africa | Digital Marketing Agency Based In Dares Salaam, Tanzania",
                "isPartOf": {
                    "@id": "https://arkhive.africa/#website"
                },
                "datePublished": "2020-06-30T16:18:56+00:00",
                "dateModified": "2023-03-23T02:08:19+00:00",
                "description": "A full-service branding, design, development, and advertising agency for ambitious, purpose-driven organizations. The future favours the bold",
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
<body>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WGHXQWYBCG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WGHXQWYBCG');
</script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>



    @include('sections.header')
    @yield('content')
    @include('sections.footer')
        <script>
            document.addEventListener('scroll', () => {
                const scrollY = window.scrollY;
                const parallax = document.getElementById('parallax-bg');

                // Zoom effect — increase background size
                const zoom = 100 + scrollY * 0.05; // adjust multiplier for strength
                parallax.style.backgroundSize = `${zoom}%`;

                // Vertical parallax movement
                const posY = 50 - scrollY * 0.2;
                parallax.style.backgroundPosition = `center ${posY}%`;
            });
        </script>

        <script>
            setTimeout(() => {
                let script = document.createElement('script');
                script.async = true;
                document.head.appendChild(script);
            }, 3000);
            const modal = document.getElementById("briefPopup");
            const modalContent = document.getElementById("briefModal");
            const openBtn = document.getElementById("openForm");
            const closeBtn = document.getElementById("closeForm");

            // Open Modal with Animation
            openBtn.addEventListener("click", () => {
                modal.classList.remove("hidden");
                modal.classList.add("flex");
                setTimeout(() => {
                    modal.classList.add("opacity-100");
                    modal.classList.remove("opacity-0");
                    modalContent.classList.add("scale-100");
                    modalContent.classList.remove("scale-95");
                }, 10);
            });

            // Close Modal with Animation
            function closeModal() {
                modal.classList.remove("opacity-100");
                modal.classList.add("opacity-0");
                modalContent.classList.remove("scale-100");
                modalContent.classList.add("scale-95");

                setTimeout(() => {
                    modal.classList.add("hidden");
                }, 300);
            }

            // Close when clicking "X" button
            closeBtn.addEventListener("click", closeModal);

            // Close when clicking outside the modal content
            modal.addEventListener("click", (event) => {
                if (event.target === modal) {
                    closeModal();
                }
            });

        </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        @stack('styles')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        @stack('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</body>
</html>

