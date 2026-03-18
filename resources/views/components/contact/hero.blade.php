<style>
    @keyframes contactHeroZoom {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.06);
        }
    }
    .contact-hero-visual {
        animation: contactHeroZoom 14s ease-in-out infinite alternate;
    }
</style>

<section class="relative w-full min-h-[70vh] sm:min-h-[80vh] lg:min-h-screen flex items-center justify-center overflow-hidden">
    <div class="contact-hero-visual absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset('images/HOME/SECTION 5/inside news/NEWS 3/1.jpg') }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/45 to-black/62"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,215,120,0.2),transparent_45%)]"></div>
    <div class="absolute left-0 top-0 h-full w-px bg-white/10"></div>
    <div class="absolute right-0 top-0 h-full w-px bg-white/10"></div>

    <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl text-center" data-aos="fade-up">
        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-light mb-6">Get In Touch</h1>
        <p class="text-xl sm:text-2xl text-gray-100">We'd love to hear from you. Let's create something extraordinary together.</p>
    </div>
</section>
