@extends('layouts.app')
@section('content')
    <style>
        html,
        body {
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Hide scrollbar for mobile carousel */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Button hover effects */
        button {
            transition: all 0.3s ease;
        }
    </style>

    <!-- Section 1: Hero Banner -->
    @include('components.sections.hero-section')

    <!-- Section 2: Art of Sophisticated Storage -->
    @include('components.sections.art-sophisticated-storage')

    <!-- Section 3: Photo Cards -->
    @include('components.sections.photo-cards')

    <!-- Section 4: Brand Logos -->
    @include('components.sections.brand-logos')
@endsection

<!-- Logo Animation Script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add animation when visible
                    entry.target.classList.remove("opacity-0", "scale-90");
                    entry.target.classList.add("opacity-100", "scale-100");
                }
            });
        }, {
            threshold: 0.3
        }); // Trigger when 30% of section is visible

        // Observe all logo items
        document.querySelectorAll(".logo-item").forEach((el, index) => {
            el.style.transitionDelay = `${index * 100}ms`; // Staggered fade
            observer.observe(el);
        });
    });
</script>
<!-- End of Logo Animation Script -->


<!-- Carousel Animation Script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fade-in Observer
        const sections = document.querySelectorAll(".fade-section");
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0", "translate-y-5");
                    entry.target.classList.add("opacity-100", "translate-y-0");
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });
        sections.forEach(section => observer.observe(section));

        // Carousel logic
        const slides = [{
            title: "Luxury and Sophistication"
        },
            {
                title: "Stylish Kitchen Concepts"
            },
            {
                title: "Modern Lifestyle"
            },
            {
                title: "Contemporary Innovations"
            }
        ];

        const wrapper = document.getElementById("carousel-wrapper");
        const title = document.getElementById("carousel-title");
        let current = 0;

        function showSlide(index) {
            wrapper.style.transform = `translateX(-${index * 100}%)`;
            title.textContent = slides[index].title;
        }

        // Touch swipe for mobile
        let startX = 0;
        let isDragging = false;

        wrapper.addEventListener("touchstart", e => {
            startX = e.touches[0].clientX;
            isDragging = true;
        });

        wrapper.addEventListener("touchmove", e => {
            if (!isDragging) return;
            const diff = startX - e.touches[0].clientX;
            if (diff > 50) { // swipe left
                current = (current + 1) % slides.length;
                showSlide(current);
                isDragging = false;
            } else if (diff < -50) { // swipe right
                current = (current - 1 + slides.length) % slides.length;
                showSlide(current);
                isDragging = false;
            }
        });

        wrapper.addEventListener("touchend", () => {
            isDragging = false;
        });

        // Auto-slide every 5s (for all screen sizes)
        setInterval(() => {
            current = (current + 1) % slides.length;
            showSlide(current);
        }, 5000);

        // Next/Prev buttons
        document.getElementById("next-btn").addEventListener("click", () => {
            current = (current + 1) % slides.length;
            showSlide(current);
        });

        document.getElementById("prev-btn").addEventListener("click", () => {
            current = (current - 1 + slides.length) % slides.length;
            showSlide(current);
        });
    });
</script>
<!-- End of Carousel Animation Script -->


<!-- Features Mobile Scroll Script -->


<!-- Features Mobile Scroll Script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const scrollEl = document.getElementById("features-scroll");
        if (!scrollEl) return;

        const items = Array.from(scrollEl.querySelectorAll(".snap-start"));
        const total = items.length;
        const numeric = document.getElementById("track-numeric");
        const dotsContainer = document.getElementById("track-dots");
        const prevBtn = document.getElementById("prev-btn");
        const nextBtn = document.getElementById("next-btn");

        // Create dots dynamically
        items.forEach((_, i) => {
            const dot = document.createElement("button");
            dot.className = "w-2 h-2 rounded-full bg-gray-300";
            dot.dataset.index = i;
            dot.addEventListener("click", () => scrollToIndex(i));
            dotsContainer.appendChild(dot);
        });

        const dots = Array.from(dotsContainer.children);
        let activeIndex = 0;

        function scrollToIndex(i) {
            const item = items[i];
            if (!item) return;
            scrollEl.scrollTo({
                left: item.offsetLeft - scrollEl.offsetLeft,
                behavior: "smooth"
            });
            activeIndex = i;
            updateUI();
        }

        function updateUI() {
            numeric.textContent = `${activeIndex + 1} / ${total}`;
            dots.forEach((dot, i) => {
                dot.classList.toggle("bg-blue-600", i === activeIndex);
                dot.classList.toggle("bg-gray-300", i !== activeIndex);
            });
        }

        function updateOnScroll() {
            const scrollLeft = scrollEl.scrollLeft;
            const width = scrollEl.clientWidth;
            activeIndex = Math.round(scrollLeft / width);
            updateUI();
        }

        prevBtn.addEventListener("click", () => {
            if (activeIndex > 0) scrollToIndex(activeIndex - 1);
        });

        nextBtn.addEventListener("click", () => {
            if (activeIndex < total - 1) scrollToIndex(activeIndex + 1);
        });

        scrollEl.addEventListener("scroll", () => {
            clearTimeout(scrollEl._scrollTimeout);
            scrollEl._scrollTimeout = setTimeout(updateOnScroll, 100);
        });

        updateUI();
    });
</script>
<!-- End of Features Mobile Scroll Script -->

<!-- Articles Carousel Script -->


<!---------------------------SECTION 5----------------------->
<script>
    const dots = document.querySelectorAll("#article-dots button");

    function updateDots() {
        const cardWidth = carousel.children[0].offsetWidth + 16; // 16px space-x-4
        const index = Math.round(carousel.scrollLeft / cardWidth);
        dots.forEach((dot, i) => {
            dot.classList.toggle("bg-gray-400", i === index);
            dot.classList.toggle("bg-gray-300", i !== index);
        });
    }
</script>
<!-- End of Articles Carousel Script -->
