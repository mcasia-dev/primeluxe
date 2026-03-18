<footer class="relative bg-[#121212] text-gray-300 border-t border-white/10">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,215,120,0.08),transparent_45%)]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24">
        @php
            $navLinks = [
                ['name' => 'Home', 'url' => route('home')],
                ['name' => 'Solutions', 'url' => route('solutions')],
                ['name' => 'Materials', 'url' => route('materials')],
                ['name' => 'Products', 'url' => route('products')],
            ];

            $companyLinks = [
                ['name' => 'About Us', 'url' => route('about')],
                ['name' => 'Contact', 'url' => route('contact')],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-16 mb-14">
            <div class="sm:col-span-2 md:col-span-1">
                <a href="{{ route('home') }}" class="inline-flex items-center mb-6">
                    <img src="{{ asset('images/PRIMELUXE_LOGO.png') }}" alt="Primeluxe Logo"
                        class="h-12 sm:h-14 w-auto brightness-125 hover:brightness-150 transition duration-300">
                </a>
                <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                    Elevating spaces through sophisticated design and exceptional craftsmanship.
                </p>

                <div class="flex gap-2.5">
                    <a href="javascript:void(0)" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-yellow-400 transition duration-300 p-2 rounded-lg border border-white/10 hover:border-yellow-500/40 hover:bg-white/[0.03]"
                        aria-label="Facebook">
                        @include('components.icons.facebook-icon')
                    </a>
                    <a href="javascript:void(0)" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-yellow-400 transition duration-300 p-2 rounded-lg border border-white/10 hover:border-yellow-500/40 hover:bg-white/[0.03]"
                        aria-label="Instagram">
                        @include('components.icons.instagram-icon')
                    </a>
                    <a href="javascript:void(0)" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-yellow-400 transition duration-300 p-2 rounded-lg border border-white/10 hover:border-yellow-500/40 hover:bg-white/[0.03]"
                        aria-label="Tiktok">
                        @include('components.icons.tiktok-icon')
                    </a>
                    <a href="javascript:void(0)" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-yellow-400 transition duration-300 p-2 rounded-lg border border-white/10 hover:border-yellow-500/40 hover:bg-white/[0.03]"
                        aria-label="Twitter">
                        @include('components.icons.twitter-icon')
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-white text-xs font-semibold uppercase tracking-[0.2em] mb-7">Solutions</h3>
                <ul class="space-y-3.5">
                    @foreach ($navLinks as $link)
                        <li>
                            <a href="{{ $link['url'] }}"
                                class="text-gray-400 hover:text-yellow-400 transition-colors duration-300 text-sm">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="text-white text-xs font-semibold uppercase tracking-[0.2em] mb-7">Company</h3>
                <ul class="space-y-3.5">
                    @foreach ($companyLinks as $link)
                        <li>
                            <a href="{{ $link['url'] }}"
                                class="text-gray-400 hover:text-yellow-400 transition-colors duration-300 text-sm">
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="text-white text-xs font-semibold uppercase tracking-[0.2em] mb-7">Contact</h3>
                <div class="space-y-5">
                    <div>
                        <p class="text-gray-500 text-[11px] uppercase tracking-[0.2em] font-semibold mb-1.5">Address</p>
                        <a href="https://maps.google.com/?q=Unit+3A+410+NS+Amoranto+Sta+Mesa+Heights+Maharlika+QC" target="_blank"
                            rel="noopener noreferrer"
                            class="text-sm text-gray-400 hover:text-yellow-400 transition-colors duration-300 leading-relaxed">
                            Unit 3A 410 N.S Amoranto<br>Sta. Mesa Heights<br>Brgy. Maharlika, Q.C
                        </a>
                    </div>

                    <div>
                        <p class="text-gray-500 text-[11px] uppercase tracking-[0.2em] font-semibold mb-1.5">Phone</p>
                        <a href="tel:+63270000383"
                            class="text-sm text-gray-400 hover:text-yellow-400 transition-colors duration-300 font-medium">
                            +63 (2) 7000-0383
                        </a>
                        <p class="text-xs text-gray-600 mt-1">Mon-Fri, 9am-6pm</p>
                    </div>

                    <div>
                        <p class="text-gray-500 text-[11px] uppercase tracking-[0.2em] font-semibold mb-1.5">Email</p>
                        <a href="mailto:info@primeluxe.com"
                            class="text-sm text-gray-400 hover:text-yellow-400 transition-colors duration-300 font-medium break-all">
                            info@primeluxe.com
                        </a>
                        <p class="text-xs text-gray-600 mt-1">We'll respond within 24h</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-white/10"></div>

        <div class="py-7">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-5 text-xs text-gray-500">
                <p>&copy; {{ date('Y') }} Primeluxe Living & Design Inc. All rights reserved.</p>
                <div class="flex gap-7">
                    <a href="#" class="hover:text-yellow-400 transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors duration-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
