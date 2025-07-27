
@include('layouts.head')
<body>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Preloader -->
<div id="preloader" class="fixed inset-0 z-50 bg-ark-black flex items-center justify-center">
  <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-ark-brown border-opacity-75"></div>
</div>


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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        @stack('styles')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        @stack('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</body>
</html>

