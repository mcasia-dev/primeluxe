<!-- Latest Articles Section -->
<section id="articles"
    class="w-full py-20 sm:py-24 bg-white flex flex-col items-center fade-section opacity-0 translate-y-5 transition-all duration-700">

    <!-- Section Heading -->
    <div class="text-center mb-12 sm:mb-16 max-w-2xl px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Latest Articles & Insights</h2>
        <p class="text-gray-600 text-lg">Explore our latest design trends, tips, and inspiration for modern living.</p>
    </div>

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
                        At Primeluxe, we don't just follow design trends — we create them. Our mission is to redefine
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
                    At Primeluxe, we don't just follow design trends — we create them. Our mission is to redefine
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
                    Today's kitchens are more than just spaces for cooking — they are where technology and design come
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Fade-in Observer for articles section
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
    });
</script>
