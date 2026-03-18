<style>
    @keyframes materialsHeroZoom {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.06);
        }
    }
    .materials-hero-visual {
        animation: materialsHeroZoom 14s ease-in-out infinite alternate;
    }
</style>

<section class="relative w-full min-h-[60vh] sm:min-h-[65vh] flex items-center justify-center overflow-hidden">
    <div class="materials-hero-visual absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset('images/HOME/SECTION 3/3.jpg') }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/45 to-black/60"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,215,120,0.2),transparent_45%)]"></div>
    <div class="absolute left-0 top-0 h-full w-px bg-white/10"></div>
    <div class="absolute right-0 top-0 h-full w-px bg-white/10"></div>

    <div class="relative z-10 text-white text-center px-6 max-w-4xl">
        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-light mb-6 leading-tight" data-aos="fade-up">
            Materials
        </h1>
        <p class="text-lg sm:text-xl md:text-2xl text-gray-100 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            A Palette of Enduring Materials
        </p>
    </div>
</section>
