@include('layouts.head')
@section('meta')
    <meta property="og:description" content="Welcome to Arkhive Africa, your trusted partner for all your document management needs. We provide professional document management solutions: secure archiving and retrieval, efficient bulk scanning and indexing, and confidential shredding and recycling services. Streamline your records management." />
    <meta property="og:keywords" content="Document storage, Document archiving, document archiving africa, records management tanzania, document retrieval services, bulk document scanning, paper scanning services, professional indexing, secure document shredding, confidential shredding africa, document recycling services" />
@endsection
<body class="antialiased">
    <!-- Preloader -->
<div id="preloader" class="fixed inset-0 z-50 bg-ark-black flex items-center justify-center">
  <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-ark-brown border-opacity-75"></div>
</div>
    @include('sections.header')
    @yield('content')
        @include('sections.footer')



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

