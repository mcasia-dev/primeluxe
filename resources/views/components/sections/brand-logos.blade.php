@php
    $brands = [
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
        [
            'name' => null,
            'img' => asset('images/placeholders/no-brand.svg'),
        ],
    ];
@endphp
<section id="logos"
    class="relative w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-white via-gray-50 to-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-3">
                Our Partners
            </h2>
            <p class="text-gray-600 text-lg">
                Partnering with the world's finest brands to deliver excellence
            </p>
            <div class="h-1 w-16 bg-yellow-500 mx-auto mt-6"></div>
        </div>

        <!-- Logo Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 items-center">
            @foreach ($brands as $brand)
                <div class="flex items-center justify-center h-24 p-4 rounded-lg hover:bg-gray-100 transition-all duration-300 group cursor-pointer logo-item opacity-0 scale-90"
                    data-aos="fade-up">
                    <img src="{{ $brand['img'] }}" alt="{{ $brand['name'] }}"
                        class="max-h-20 w-auto object-contain group-hover:scale-110 transition-transform duration-300 brightness-75 group-hover:brightness-100">
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0", "scale-90");
                    entry.target.classList.add("opacity-100", "scale-100");
                }
            });
        }, {
            threshold: 0.3
        });

        document.querySelectorAll(".logo-item").forEach((el, index) => {
            el.style.transitionDelay = `${index * 80}ms`;
            observer.observe(el);
        });
    });
</script>
