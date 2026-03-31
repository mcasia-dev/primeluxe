<style>
    @keyframes aboutHeroZoom {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.06);
        }
    }
    .about-hero-visual {
        animation: aboutHeroZoom 14s ease-in-out infinite alternate;
    }
</style>

<section class="relative w-full min-h-[70vh] sm:min-h-[80vh] lg:min-h-screen flex items-center justify-center overflow-hidden">
    <div class="about-hero-visual absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ filled($about->getFirstMediaUrl('about-us-banner')) ? $about->getFirstMediaUrl('about-us-banner') : asset('images/ABOUT US/SECTION 1/1.jpg') }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/45 to-black/62"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,215,120,0.2),transparent_45%)]"></div>
    <div class="absolute left-0 top-0 h-full w-px bg-white/10"></div>
    <div class="absolute right-0 top-0 h-full w-px bg-white/10"></div>

    <div class="relative z-10 text-white text-center px-6 max-w-4xl">
        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-light mb-6 leading-tight" data-aos="fade-up">
            {{ $about->title ?? 'About Us' }}
        </h1>
    </div>
</section>
