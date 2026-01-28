<!-- The Art of Sophisticated Storage Section -->
<section class="relative w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12 sm:mb-16 max-w-3xl mx-auto" data-aos="fade-up">
            <h3 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                The Art of Sophisticated Storage
            </h3>
            <div class="h-1 w-20 bg-yellow-500 mx-auto mb-8"></div>
            <p class="text:base md:text-lg text-gray-700 font-medium">
                Your home deserves more than ordinary cabinets.
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left Content -->
            <div class="space-y-6" data-aos="fade-right" data-aos-delay="200">
                <p class="text-gray-700 text-lg leading-relaxed">
                    It deserves furniture that elevates your daily rituals — from selecting the perfect ensemble to
                    preparing a meal for loved ones.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed">
                    We create showpiece-standard wardrobes and kitchens tailored to your lifestyle. Each piece is
                    meticulously crafted to combine timeless elegance with modern functionality.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed">
                    For homes that reflect refined taste and thoughtful design.
                </p>

                <!-- CTA Button -->
                <div class="pt-4">
                    <button
                        class="px-8 py-3 border border-yellow-500 text-yellow-600 hover:text-yellow-700 hover:border-yellow-600 font-medium rounded-lg transition-all duration-300 hover:bg-yellow-50 hover:cursor-pointer"
                        onclick="window.location = '{{ route('collections') }}'">
                        Explore Our Collections
                    </button>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="relative h-96 sm:h-[450px] lg:h-[500px] rounded-xl overflow-hidden shadow-xl"
                data-aos="fade-left" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-gray-900/20 to-transparent z-10"></div>
                <img src="{{ asset('images/HOME/sophisticated-house.jpg') }}" alt="Sophisticated Storage Solution"
                    class="w-full h-full object-cover" />
            </div>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mt-20 pt-16 border-t border-gray-200">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl font-bold text-yellow-500 mb-3">✓</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Timeless Elegance</h3>
                <p class="text-gray-600">Crafted designs that transcend trends and remain beautiful for decades.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl font-bold text-yellow-500 mb-3">✓</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Modern Functionality</h3>
                <p class="text-gray-600">Smart storage solutions that enhance your daily lifestyle and organization.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl font-bold text-yellow-500 mb-3">✓</div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Custom Tailored</h3>
                <p class="text-gray-600">Bespoke pieces designed specifically for your home and lifestyle.</p>
            </div>
        </div>
    </div>
</section>
