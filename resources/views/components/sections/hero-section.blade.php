<style>
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
</style>

<!-- Hero Banner Section -->
<section class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
    style="background-image: url('{{ asset('images/HOME/HOME_1.jpg') }}');">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl py-16 sm:py-0">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 drop-shadow-lg leading-tight" data-aos="fade-up"
            data-aos-delay="0" data-aos-duration="800">
            Elevated Living. Exceptional Craftsmanship.
        </h1>
        <p class="text-lg sm:text-xl md:text-2xl text-gray-100/90 mb-10 leading-relaxed max-w-3xl mx-auto"
            data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
            Bespoke wardrobe and kitchen solutions for the refined, discerning homeowner.
        </p>

        <div class="flex justify-center">
            <button
                class="px-8 py-3 border hover:bg-white text-white hover:text-black font-semibold rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105">
                Book Your Private Consultation
            </button>
        </div>
    </div>
</section>
