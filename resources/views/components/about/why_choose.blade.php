<section class="w-full bg-white py-20 sm:py-24 lg:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14 sm:mb-16" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-light text-gray-900 mb-4">{{ $about->why_choose_title ?? 'Why Choose Primeluxe' }}</h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @if(filled($about->why_choose_meta_data))
                @foreach($about->why_choose_meta_data as $metaData)
                    <div
                        class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out p-8 rounded-2xl border border-black/10 bg-white shadow-[0_14px_34px_rgba(20,20,20,0.08)] hover:shadow-[0_20px_42px_rgba(20,20,20,0.12)] transition-all">
                        <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">{{ $metaData['title'] }}</h3>
                        <div class="text-gray-600 leading-relaxed prose">
                            {!! $metaData['description'] !!}
                        </div>
                    </div>
                @endforeach
            @else
                <div
                    class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out p-8 rounded-2xl border border-black/10 bg-white shadow-[0_14px_34px_rgba(20,20,20,0.08)] hover:shadow-[0_20px_42px_rgba(20,20,20,0.12)] transition-all">
                    <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Global Design Heritage</h3>
                    <p class="text-gray-600 leading-relaxed text-justify">
                        Our team is trained in the traditions of European kitchen and wardrobe craftsmanship, bringing
                        world-class design sensibility to every project.
                    </p>
                </div>

                <div
                    class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out p-8 rounded-2xl border border-black/10 bg-white shadow-[0_14px_34px_rgba(20,20,20,0.08)] hover:shadow-[0_20px_42px_rgba(20,20,20,0.12)] transition-all"
                    style="transition-delay: 100ms;">
                    <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Uncompromising Quality Control</h3>
                    <p class="text-gray-600 leading-relaxed text-justify">
                        Modern manufacturing and strict quality systems ensure consistency, precision, and excellence
                        across
                        all product lines.
                    </p>
                </div>

                <div
                    class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out p-8 rounded-2xl border border-black/10 bg-white shadow-[0_14px_34px_rgba(20,20,20,0.08)] hover:shadow-[0_20px_42px_rgba(20,20,20,0.12)] transition-all"
                    style="transition-delay: 200ms;">
                    <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Eco-Conscious Innovation</h3>
                    <p class="text-gray-600 leading-relaxed text-justify">
                        We use EO/E1 European-standard boards and durable, waterproof, anti-rust materials to create
                        interiors that are as responsible as they are beautiful.
                    </p>
                </div>
            @endif
        </div>
    </div>
</section>
