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

    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="canonical" href="index.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="10 days">
    <meta name="author" content="Arkhive Africa">
    @yield('meta')
    <meta property="og:title" content="@yield('title') | Arkhive Africa" />

    <meta property="og:url" content="https://arkhive.africa/" />
    <meta property="og:image" content="{{ asset('img/arkhive-icon.png') }}" />
    <meta property="og:site_name" content="Arkhive Africa" />

    <!-- Google site verifications -->
    <meta name="google-site-verification" content="Akk8NT3Ed5wC3AV0EwJZDcVkTNq6OD48Lgg9078xx50" />

    <title>@yield('title') | Arkhive Africa</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">

        <script src="https://www.google.com/recaptcha/api.js"></script>

        <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">


</head>
