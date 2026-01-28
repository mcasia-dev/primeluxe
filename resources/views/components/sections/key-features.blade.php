<!-- Key Features Section -->
<section id="features" class="w-full py-20 sm:py-24 bg-gray-100 flex flex-col items-center">
    <div class="w-full px-4 sm:px-8 lg:px-12 max-w-6xl mx-auto">

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
