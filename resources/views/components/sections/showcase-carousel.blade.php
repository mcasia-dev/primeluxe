<!-- Showcase Carousel Section -->
<section id="carousel-section"
    class="relative w-full h-[70vh] sm:h-[80vh] lg:h-screen overflow-hidden flex items-center justify-center fade-section opacity-0 translate-y-5 transition-all duration-700 bg-gray-900">
    <!-- Carousel Slider -->
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

        // Auto-slide every 5s
        setInterval(() => {
            current = (current + 1) % slides.length;
            showSlide(current);
        }, 5000);
    });
</script>
