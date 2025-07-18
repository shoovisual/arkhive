@include('layouts.head')
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

