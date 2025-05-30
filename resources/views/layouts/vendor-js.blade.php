

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>

    gsap.registerPlugin(ScrollTrigger);

    const counters = document.querySelectorAll(".count-up");

    function runCounters(section) {
    const counters = section.querySelectorAll(".count-up");
    counters.forEach(counter => {
        const target = +counter.dataset.count;
        gsap.fromTo(counter,
            { innerText: 0 },
            {
                innerText: target,
                duration: 2,
                ease: "power1.out",
                snap: { innerText: 1 },
                onUpdate() {
                    const value = Math.floor(counter.innerText);
                    counter.innerText =
                        value.toLocaleString() + (target >= 100 ? "+" : "");
                }
            }
        );
    });
    }


    gsap.utils.toArray(".anim-section").forEach(section => {
    const children = section.querySelectorAll(".anim-child");

    ScrollTrigger.create({
        trigger: section,
        start: "top 85%",
        end: "bottom 0",
        toggleActions: "play none none none",

        // Animate IN when entering from top (scrolling down)
        onEnter: () => {
            gsap.to(children, {
                opacity: 1,
                y: 0,
                filter: "blur(0px)",
                duration: 1.1,
                ease: "power3.out",
                stagger: 0.15
            });

            if (section.querySelector(".count-up")) runCounters(section);
        },

        // Animate OUT when scrolling back up past this section
        onLeaveBack: () => {
            gsap.to(children, {
                opacity: 0,
                y: 50,
                filter: "blur(8px)",
                duration: 0.6,
                ease: "power2.in",
                stagger: {
                    each: 0.1,
                    from: "end"
                }
            });

            // Reset counters
            children.forEach(c => {
                if (c.classList.contains("count-up")) c.innerText = "0";
            });
        }
    });
});


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@stack('styles')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@stack('scripts')
