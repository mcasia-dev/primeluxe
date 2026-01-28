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
{{-- 
    <!-- Section 5: Key Features -->
    @include('components.sections.key-features')

    <!-- Section 6: Showcase Carousel -->
    @include('components.sections.showcase-carousel')

    <!-- Section 7: Latest Articles -->
    @include('components.sections.latest-articles') --}}


    <!-- Section Heading -->
    {{-- <div class="text-center mb-12 sm:mb-16 max-w-2xl px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Latest Articles & Insights</h2>
        <p class="text-gray-600 text-lg">Explore our latest design trends, tips, and inspiration for modern living.</p>
    </div> --}}

    <!-- Mobile Carousel -->
    {{-- <div class="relative w-full sm:hidden overflow-hidden">
        <div id="article-carousel"
            class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-hide space-x-4 px-6">

            <!-- Card 1 -->
            <div
                class="flex-shrink-0 w-80 snap-center bg-gray-100 rounded-xl overflow-hidden shadow-md transition-all duration-500 transform hover:-translate-y-2">
                <div class="relative w-full h-56 overflow-hidden">
                    <img src="{{ asset('images/HOME/SECTION 5/inside news/2.jpg') }}" alt="Interior Design"
                        class="w-full h-full object-cover transition-transform duration-700" />
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">Defining the Future of Interior Design</h3>
                    <p class="text-gray-600 text-sm mb-5 text-justify">
                        At Primeluxe, we don’t just follow design trends — we create them. Our mission is to redefine
                        interior design for the modern world.
                    </p>
                    <a href="/news_1"
                        class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
                        Read More
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="flex-shrink-0 w-80 snap-center bg-gray-100 rounded-xl overflow-hidden shadow-md transition-all duration-500 transform hover:-translate-y-2">
                <div class="relative w-full h-56 overflow-hidden">
                    <img src="{{ asset('images/HOME/SECTION 5/inside news/NEWS 2/1.jpg') }}" alt="Kitchen Designs"
                        class="w-full h-full object-cover transition-transform duration-700" />
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">Interior Design Crafted for Filipino Residences
                    </h3>
                    <p class="text-gray-600 text-sm mb-5 text-justify">
                        We create interiors that reflect the warmth and spirit of the Filipino home.
                    </p>
                    <a href="/news_2"
                        class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
                        Read More
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="flex-shrink-0 w-80 snap-center bg-gray-100 rounded-xl overflow-hidden shadow-md transition-all duration-500 transform hover:-translate-y-2">
                <div class="relative w-full h-56 overflow-hidden">
                    <img src="{{ asset('images/HOME/SECTION 5/inside news/NEWS 3/1.jpg') }}" alt="Bedroom Styles"
                        class="w-full h-full object-cover transition-transform duration-700" />
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">How Technology Elevates Modern Kitchens</h3>
                    <p class="text-gray-600 text-sm mb-5 text-justify">
                        Technology and design combine to create efficiency and style in the heart of the home.
                    </p>
                    <a href="/news_3"
                        class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
                        Read More
                    </a>
                </div>
            </div>
        </div>


    </div> --}}

    <!-- Desktop Grid -->
    {{-- <div class="hidden sm:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl px-6">

        <!-- Card 1 -->
        <div
            class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
            <div class="relative w-full h-64 overflow-hidden">
                <img src="{{ asset('images/HOME/SECTION 5/inside news/2.jpg') }}" alt="Interior Design"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
            </div>
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-3">Defining the Future of Interior Design</h3>
                <p class="text-gray-600 text-justify mb-5">
                    At Primeluxe, we don’t just follow design trends — we create them. Our mission is to redefine
                    interior design for the modern world.
                </p>
                <a href="/news_1"
                    class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
                    Read More
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div
            class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
            <div class="relative w-full h-64 overflow-hidden">
                <img src="{{ asset('images/HOME/SECTION 5/inside news/NEWS 2/1.jpg') }}" alt="Kitchen Designs"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
            </div>
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-3">Interior Design Crafted for Filipino Residences</h3>
                <p class="text-gray-600 text-justify mb-5">
                    At Primeluxe Living and Design Inc., we take pride in creating interiors that reflect the warmth,
                    spirit, and elegance of the Filipino home.
                </p>
                <a href="/news_2"
                    class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
                    Read More
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div
            class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
            <div class="relative w-full h-64 overflow-hidden">
                <img src="{{ asset('images/HOME/SECTION 5/inside news/NEWS 3/1.jpg') }}" alt="Bedroom Styles"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
            </div>
            <div class="p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-3">How Technology Elevates Modern Kitchens</h3>
                <p class="text-gray-600 text-justify mb-5">
                    Today’s kitchens are more than just spaces for cooking — they are where technology and design come
                    together to create efficiency, comfort, and style.
                </p>
                <a href="news_3"
                    class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
                    Read More
                </a>
            </div>
        </div>

    </div> --}}
    </section>

    <!-- End of Latest Articles Section -->
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
