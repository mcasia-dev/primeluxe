<section class="w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-[#f7f6f4] via-white to-[#f3f3f1]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl sm:text-5xl font-light text-gray-900 mb-7 leading-tight">
                    {{ $product->subtitle ?? 'Curated Interior Expressions' }}
                </h2>
                <div class="space-y-6 text-lg text-gray-700 leading-relaxed text-justify">
                    @if(!is_null($product->description))
                        <div class="text-gray-700 prose">{!! $product->description !!}</div>
                    @else
                        <p class="text-gray-700">
                            Primeluxe collections express distinct design sensibilities — each a complete visual and
                            functional language that flows across kitchens, wardrobes, doors, and living spaces.
                        </p>
                    @endif
                    <div class="pt-3">
                        <a href="#products"
                           class="inline-flex items-center gap-2 px-5 py-2.5 border border-yellow-500 text-yellow-700 hover:text-yellow-800 hover:border-yellow-600 rounded-lg transition-all duration-300 hover:bg-yellow-50">
                            {{ $product->button_label ?? 'Explore More' }}
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left">
                <div class="relative">
                    <div class="absolute -inset-3 sm:-inset-4 border border-black/10 rounded-2xl"></div>
                    <div
                        class="relative rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(18,18,18,0.16)] h-96 lg:h-[520px]">
                        <img
                            src="{{ filled($product->getFirstMediaUrl('product-image')) ? $product->getFirstMediaUrl('product-image') :asset('images/materials/banner.jpg') }}"
                            alt="Premium Interior Materials"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/38 via-black/10 to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
