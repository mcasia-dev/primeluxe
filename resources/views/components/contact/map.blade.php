@php
    $mapEmbedUrl = $contact?->map_embed_url
        ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.484306425555!2d120.99754507475346!3d14.628427985861263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b612b36001a5%3A0x2108c635a31201ed!2sADECS%20International%20Corp!5e0!3m2!1sen!2sph!4v1773792926252!5m2!1sen!2sph';
@endphp

<section class="w-full bg-gradient-to-b from-[#f7f6f4] via-white to-[#f3f3f1] py-20 sm:py-24 lg:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12 sm:mb-14" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-light text-gray-900 mb-4">{{ $contact?->map_title ?? 'Find Us Here' }}</h2>
            <p class="text-lg text-gray-600">{{ $contact?->map_subtitle ?? 'Visit our showroom or connect with us virtually' }}</p>
        </div>

        <div class="rounded-2xl overflow-hidden border border-black/10 shadow-[0_20px_50px_rgba(18,18,18,0.14)]"
             data-aos="fade-up" data-aos-delay="100">
            <iframe
                src="{{ $mapEmbedUrl }}"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
        </div>
    </div>
</section>
