@extends('layouts.app')
@section('content')
    <style>
        html,
        body {
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        @keyframes fadeInFast {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fadeInFast {
            animation: fadeInFast 0.3s ease-in forwards;
        }

        /* Hide scrollbar for mobile carousel */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <!--------------------------------------------- 1st Section --------------------------------------------------------->
    <section class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
        style="background-image: url('{{ asset('images/HOME/HOME_1.jpg') }}');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Text Content -->
        <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl">
            <h1 class="text-[60px] whitespace-wrap sm:text-5xl md:text-5xl font-bold mb-6 drop-shadow-lg">
                Redefining Spaces. Elevating Lifestyles.
            </h1>
            <p class="text-[23px] sm:text-[18px] md:text-[20px] text-gray-100/90 mb-10 leading-relaxed text-justify max-w-[90%] sm:max-w-[85%] md:max-w-3xl mx-auto px-4 break-words">
                At Primeluxe we believe that great design transforms the way people live, work, and connect.
                We specialize in creating elegant, functional, and inspiring spaces that reflect your unique
                taste and lifestyle. Designing not just spaces, but experiences that inspire.
            </p>
        </div>
    </section>
    <!--------------------------------------------- End of Section --------------------------------------------------------->











    <!--------------------------------------------2nd Section--------------------------------------------------------->
    <!-- 2nd Section: Fading Logos on Scroll -->


    <section id="logos" class="relative w-full h-full flex justify-center items-center bg-white py-10">
        <div
            class="grid grid-cols-2 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 -gap-30 w-full justify-items-center items-center">
            <!-- Example Logos -->
            <img src="{{ asset('images/HOME/SECTION 2/1.png') }}" alt="Logo 1"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/2.png') }}" alt="Logo 2"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/3.png') }}" alt="Logo 3"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/4.png') }}" alt="Logo 4"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/5.png') }}" alt="Logo 5"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/6.png') }}" alt="Logo 6"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/7.png') }}" alt="Logo 7"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/9.png') }}" alt="Logo 8"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/10.png') }}" alt="Logo 9"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/11.png') }}" alt="Logo 10"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/12.png') }}" alt="Logo 11"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/13.png') }}" alt="Logo 12"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/14.png') }}" alt="Logo 13"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/15.png') }}" alt="Logo 14"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
            <img src="{{ asset('images/HOME/SECTION 2/16.png') }}" alt="Logo 15"
                class="max-h-30 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
        </div>
    </section>

    <!---------------------------------------------End of Section------------------------------------------------------->









    <!--------------------------------------------- 3rd Section --------------------------------------------------------->
    <!--------------------------------------------- 3rd Section --------------------------------------------------------->
    <section id="features" class="w-full py-16 bg-gray-100 flex flex-col items-center">
        <div class="w-full px-4 sm:px-8 lg:px-12 max-w-6xl">

            <!-- Tracker: visible only on mobile -->
            <div class="flex items-center justify-between mb-4 sm:hidden">
                <div id="track-numeric" class="text-sm text-gray-600">1 / 5</div>
                <div id="track-dots" class="flex gap-2 items-center"></div>
            </div>

            <!-- Mobile scrollable section -->
            <div class="relative sm:hidden">
                <!-- Navigation Buttons -->
                <button id="prev-btn"
                    class="absolute left-2 top-1/2 -translate-y-1/2 z-20 bg-white/90 hover:bg-white p-2 rounded-full shadow-md">
                    ❮
                </button>
                <button id="next-btn"
                    class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white/90 hover:bg-white p-2 rounded-full shadow-md">
                    ❯
                </button>

                <!-- Scroll Container -->
                <div id="features-scroll" class="flex overflow-x-auto scroll-smooth snap-x snap-mandatory -mx-4 px-4"
                    style="-webkit-overflow-scrolling: touch;">
                    @foreach ([['1.jpg', 'Audio & Video System'], ['2.jpg', 'Furniture Design'], ['3.jpg', 'Kitchen Design'], ['4.jpg', 'Smart Systems'], ['5.jpg', 'Lighting System']] as [$img, $title])
                        <a href="#" class="snap-start flex-shrink-0 w-full px-2">
                            <div class="relative rounded-xl overflow-hidden shadow-lg h-56 sm:h-64 lg:h-80">
                                <img src="{{ asset('images/HOME/SECTION 3/' . $img) }}" alt="{{ $title }}"
                                    class="w-full h-full object-cover" />
                                <div class="absolute inset-0 bg-black/40"></div>
                                <div
                                    class="absolute inset-0 flex items-center justify-center text-white text-xl font-semibold px-4">
                                    {{ $title }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Desktop/tablet grid layout -->
            <div class="hidden sm:grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6 lg:gap-8">
                @foreach ([['1.jpg', 'Audio & Video System'], ['2.jpg', 'Furniture Design'], ['3.jpg', 'Kitchen Design'], ['4.jpg', 'Smart Systems'], ['5.jpg', 'Lighting System']] as [$img, $title])
                    <a href="#"
                        class="relative group h-56 sm:h-64 lg:h-80 w-full rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
                        <img src="{{ asset('images/HOME/SECTION 3/' . $img) }}" alt="{{ $title }}"
                            class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300" />
                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-colors duration-300">
                        </div>
                        <div
                            class="relative z-10 flex items-center justify-center h-full text-center text-white text-lg sm:text-xl lg:text-2xl font-semibold px-2">
                            {{ $title }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <!--------------------------------------------- End of Section --------------------------------------------------------->








    <!--------------------------------------------- 4th Section --------------------------------------------------------->
    <section id="carousel-section"
        class="relative w-full h-[70vh] sm:h-[80vh] lg:h-screen overflow-hidden flex items-center justify-center fade-section opacity-0 translate-y-5 transition-all duration-700 bg-gray-900">
        <!-- Slider Wrapper -->
        <div id="carousel-wrapper" class="absolute inset-0 flex transition-transform duration-500 ease-in-out">
            <div class="w-full flex-shrink-0 bg-cover bg-center"
                style="background-image: url('{{ asset('images/HOME/SECTION 4/1.jpg') }}');"></div>
            <div class="w-full flex-shrink-0 bg-cover bg-center"
                style="background-image: url('{{ asset('images/HOME/SECTION 4/2.jpg') }}');"></div>
            <div class="w-full flex-shrink-0 bg-cover bg-center"
                style="background-image: url('{{ asset('images/HOME/SECTION 4/3.jpg') }}');"></div>
            <div class="w-full flex-shrink-0 bg-cover bg-center"
                style="background-image: url('{{ asset('images/HOME/SECTION 4/4.jpg') }}');"></div>
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50 md:bg-black/30 z-[1] pointer-events-none"></div>

        <!-- Info Box -->
        <div
            class="relative z-[2] text-white px-4 py-6 sm:px-8 sm:py-10 rounded-xl shadow-lg max-w-[90%] sm:max-w-md text-center bg-black/60 sm:bg-transparent backdrop-blur-sm sm:backdrop-blur-none">
            <h2 id="carousel-title"
                class="text-2xl sm:text-4xl lg:text-5xl font-bold mb-2 sm:mb-4 leading-snug sm:leading-tight">
                Luxury and Sophistication
            </h2>
        </div>

    </section>
    <!--------------------------------------------- End of 4th Section --------------------------------------------------------->








    <!---------------------------------------------5th Section--------------------------------------------------------->
    <section id="articles"
        class="w-full py-20 bg-white flex flex-col items-center fade-section opacity-0 translate-y-5 transition-all duration-700">

        <!-- Mobile Carousel -->
        <div class="relative w-full sm:hidden overflow-hidden">
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


        </div>

        <!-- Desktop Grid -->
        <div class="hidden sm:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl px-6">

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

        </div>
    </section>

    <!---------------------------------------------End of 5th Section--------------------------------------------------------->
@endsection





<!----------------------------------------------------SECTION 2------------------------------------------>
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
<!----------------------------------------------------SECTION 2------------------------------------------>









<!----------------------------------------------------SECTION 4------------------------------------------>
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
<!----------------------------------------------------SECTION 4------------------------------------------>














<!----------------------------SECTION 3---------------------->
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

<!----------------------------SECTION 3---------------------->







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
<!------------------------------------------------------------>
