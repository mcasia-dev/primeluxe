<style>
    @keyframes heroZoom {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.08);
        }
    }

    @keyframes heroGlow {
        0%,
        100% {
            opacity: 0.35;
        }

        50% {
            opacity: 0.58;
        }
    }

    .hero-visual {
        animation: heroZoom 16s ease-in-out infinite alternate;
    }

    .hero-glow {
        animation: heroGlow 7s ease-in-out infinite;
    }
</style>

<section class="relative w-full min-h-[78vh] sm:min-h-[85vh] lg:min-h-screen overflow-hidden">
    <div class="hero-visual absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset('images/HOME/HOME_1.jpg') }}');"></div>

    <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,211,120,0.18),transparent_45%)] hero-glow"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/35 via-black/28 to-black/52"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_45%,rgba(0,0,0,0.42)_100%)]"></div>

    <div class="absolute left-0 top-0 h-full w-px bg-white/15"></div>
    <div class="absolute right-0 top-0 h-full w-px bg-white/15"></div>
    <div class="absolute left-0 top-0 h-px w-full bg-white/10"></div>
    <div class="absolute left-0 bottom-0 h-px w-full bg-white/10"></div>

    <div class="absolute bottom-0 left-0 w-full h-32 sm:h-40 bg-gradient-to-t from-black/55 to-transparent"></div>

    <div class="relative z-20 min-h-[78vh] sm:min-h-[85vh] lg:min-h-screen flex items-center justify-center px-6 sm:px-10">
        <div class="text-center text-white max-w-4xl">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-light mb-6 leading-tight" data-aos="fade-up" data-aos-delay="0"
                data-aos-duration="800">
                Elevated Living. Exceptional Craftsmanship.
            </h1>
            <p class="text-lg sm:text-xl text-gray-100/90 mb-10 leading-relaxed max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="800">
                Bespoke interior systems for the refined, discerning homeowner.
            </p>
{{--            <div class="flex justify-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">--}}
{{--                <button--}}
{{--                    class="px-8 py-3 border border-white/70 hover:bg-white text-white hover:text-black font-medium rounded-lg shadow-lg transition-all duration-300">--}}
{{--                    Book Your Private Consultation--}}
{{--                </button>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="absolute bottom-8 sm:bottom-10 left-1/2 -translate-x-1/2">
        <span class="block h-10 w-[2px] bg-white/45"></span>
    </div>
</section>
