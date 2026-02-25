@php
    $offerings = [
        [
            'title' => 'Solutions',
            'tagline' => 'Tailored concepts for elevated living spaces.',
            'route' => 'solutions',
            'image' => asset('images/HOME/SECTION 3/1.jpg'),
            'delay' => '80',
            'span' => 'col-span-12 lg:col-span-7 lg:row-span-2 min-h-[320px] sm:min-h-[380px] lg:min-h-[520px]',
        ],
        [
            'title' => 'Systems',
            'tagline' => 'Engineered details that optimize every zone.',
            'route' => 'systems',
            'image' => asset('images/HOME/SECTION 3/2.jpg'),
            'delay' => '140',
            'span' => 'col-span-12 sm:col-span-6 lg:col-span-5 min-h-[250px] sm:min-h-[280px]',
        ],
        [
            'title' => 'Materials',
            'tagline' => 'Premium finishes selected for longevity and character.',
            'route' => 'materials',
            'image' => asset('images/HOME/SECTION 3/3.jpg'),
            'delay' => '200',
            'span' => 'col-span-12 sm:col-span-6 lg:col-span-5 min-h-[250px] sm:min-h-[280px]',
        ],
        [
            'title' => 'Collections',
            'tagline' => 'Curated selections inspired by modern luxury.',
            'route' => 'collections',
            'image' => asset('images/HOME/SECTION 3/4.jpg'),
            'delay' => '260',
            'span' => 'col-span-12 sm:col-span-6 lg:col-span-4 min-h-[250px] sm:min-h-[280px]',
        ],
        [
            'title' => 'Process',
            'tagline' => 'From concept to installation, meticulously handled.',
            'route' => 'process',
            'image' => asset('images/HOME/SECTION 3/5.jpg'),
            'delay' => '320',
            'span' => 'col-span-12 sm:col-span-6 lg:col-span-8 min-h-[250px] sm:min-h-[280px]',
        ],
    ];
@endphp

<style>
    .offering-card::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg, transparent 35%, rgba(255, 255, 255, 0.18) 50%, transparent 65%);
        transform: translateX(-140%);
        transition: transform 0.7s ease;
        pointer-events: none;
    }

    .offering-card:hover::after {
        transform: translateX(140%);
    }
</style>

<section id="photo-cards" class="relative w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-[#f7f6f4] via-white to-[#f3f3f1]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 sm:mb-16" data-aos="fade-up">
            <p class="text-[11px] sm:text-xs tracking-[0.28em] uppercase text-gray-500 mb-4">Refined Selections</p>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-gray-900">
                Explore Our Offerings
            </h2>
            <p class="text-gray-600 text-base sm:text-lg max-w-2xl mx-auto mt-5">
                Discover comprehensive solutions tailored to transform your living spaces
            </p>
        </div>

        <div class="grid grid-cols-12 gap-5 sm:gap-6 lg:gap-7 auto-rows-fr">
            @foreach ($offerings as $index => $offering)
                <a href="{{ route($offering['route']) }}"
                    class="offering-card group {{ $offering['span'] }} relative isolate overflow-hidden rounded-2xl border border-black/10 shadow-[0_18px_40px_rgba(20,20,20,0.12)] hover:shadow-[0_28px_56px_rgba(20,20,20,0.2)] transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="{{ $offering['delay'] }}">
                    <img src="{{ $offering['image'] }}" alt="{{ $offering['title'] }}"
                        class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">

                    <div class="absolute inset-0 bg-gradient-to-b from-black/10 via-black/30 to-black/75"></div>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,215,120,0.22),transparent_50%)]"></div>

                    <div class="relative z-10 h-full flex flex-col justify-end p-5 sm:p-6">
                        <div class="max-w-[90%]">
                            <p class="text-[11px] sm:text-xs tracking-[0.25em] uppercase text-white/70 mb-2">
                                Primeluxe
                            </p>
                            <h3 class="text-2xl sm:text-3xl lg:text-4xl font-light tracking-wide text-white leading-tight">
                                {{ strtoupper($offering['title']) }}
                            </h3>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
