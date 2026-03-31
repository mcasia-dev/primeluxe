@php
    use Illuminate\Support\Facades\Storage;

    $fallbackBrands = array_fill(0, 16, [
        'name' => null,
        'image' => 'images/placeholders/no-brand.svg',
    ]);

    $brands = filled($homepage?->brands) ? $homepage->brands : $fallbackBrands;
@endphp

<style>
    @keyframes brand-marquee {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }
    .brand-marquee-track {
        width: max-content;
        animation: brand-marquee 102s linear infinite;
    }
    .brand-marquee-wrap::before,
    .brand-marquee-wrap::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 60px;
        pointer-events: none;
        z-index: 10;
    }
    .brand-marquee-wrap::before {
        left: 0;
        background: linear-gradient(to right, #f3f4f6 0%, rgba(243, 244, 246, 0) 100%);
    }
    .brand-marquee-wrap::after {
        right: 0;
        background: linear-gradient(to left, #f3f4f6 0%, rgba(243, 244, 246, 0) 100%);
    }
    @media (max-width: 640px) {
        .brand-marquee-track {
            animation-duration: 74s;
        }
    }
</style>

<section id="logos" class="relative w-full py-16 sm:py-20 bg-gray-100 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 sm:mb-12 text-center sm:text-left" data-aos="fade-up">
            <p class="text-[11px] sm:text-xs uppercase tracking-[0.28em] text-gray-500 mb-4">{{ $homepage?->partners_eyebrow ?? 'Our Partners' }}</p>
            <h2 class="text-3xl sm:text-4xl font-light text-gray-900">
                {{ $homepage?->partners_title ?? "Partnering with the world's finest brands to deliver excellence" }}
            </h2>
        </div>

        <div class="brand-marquee-wrap relative overflow-hidden">
            <div class="brand-marquee-track flex items-center gap-4 sm:gap-6 lg:gap-8 py-2">
                @foreach (array_merge($brands, $brands) as $brand)
                    @php
                        $imageValue = $brand['image'] ?? null;
                        $image = filled($imageValue)
                            ? (str($imageValue)->startsWith(['http://', 'https://', '/storage/', 'images/'])
                                ? asset($imageValue)
                                : Storage::disk('public')->url($imageValue))
                            : asset('images/placeholders/no-brand.svg');
                    @endphp

                    <div class="h-20 sm:h-24 w-[140px] sm:w-[170px] lg:w-[190px] flex items-center justify-center shrink-0">
                        <img src="{{ $image }}" alt="{{ $brand['name'] ?? 'Brand logo' }}"
                            class="max-h-14 sm:max-h-16 w-auto object-contain transition duration-300">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
