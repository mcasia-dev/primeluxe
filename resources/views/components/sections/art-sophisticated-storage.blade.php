@php
    $storageParagraphs = collect($homepage?->storage_paragraphs ?: [
        ['text' => '<p>Your home deserves more than ordinary cabinets.</p>'],
        ['text' => '<p>It deserves furniture that elevates your daily rituals - from selecting the perfect ensemble to preparing a meal for loved ones.</p>'],
        ['text' => '<p>We create showpiece-standard wardrobes and kitchens tailored to your lifestyle. Each piece is meticulously crafted to combine timeless elegance with modern functionality.</p>'],
        ['text' => '<p>For homes that reflect refined taste and thoughtful functionality.</p>'],
    ]);

    $storageImage = filled($homepage?->getFirstMediaUrl('homepage-storage'))
        ? $homepage->getFirstMediaUrl('homepage-storage')
        : asset('images/HOME/sophisticated-house.jpg');
@endphp

<section class="relative w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-gray-50 via-white to-gray-50 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 sm:mb-16 max-w-3xl mx-auto" data-aos="fade-up">
            <p class="text-[11px] sm:text-xs uppercase tracking-[0.28em] text-gray-500 mb-4">{{ $homepage?->storage_eyebrow ?? 'Elevates your daily rituals' }}</p>
            <h3 class="text-4xl md:text-5xl font-light text-gray-900 leading-tight">
                {{ $homepage?->storage_title ?? 'The Art of Sophisticated Storage' }}
            </h3>
            <div class="h-[2px] w-20 bg-yellow-500 mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div class="space-y-6 text-justify" data-aos="fade-right" data-aos-delay="120">
                @foreach ($storageParagraphs as $paragraph)
                    <div class="text-gray-700 text-lg leading-relaxed [&_p]:m-0 [&_strong]:font-semibold [&_em]:italic [&_a]:text-yellow-700 [&_a]:underline">
                        {!! $paragraph['text'] ?? '' !!}
                    </div>
                @endforeach
            </div>

            <div class="relative" data-aos="fade-left" data-aos-delay="180">
                <div class="absolute -inset-3 sm:-inset-4 "></div>
                <div class="relative h-[360px] sm:h-[440px] lg:h-[520px] rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(18,18,18,0.16)]">
                    <img src="{{ $storageImage }}" alt="Sophisticated Storage Solution"
                        class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>
