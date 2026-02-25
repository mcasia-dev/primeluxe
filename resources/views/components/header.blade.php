<header class="sticky top-0 z-50 border-b border-black/10 bg-white/88 backdrop-blur-xl shadow-[0_8px_24px_rgba(18,18,18,0.08)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 sm:h-20 items-center justify-between">

            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="inline-flex items-center group">
                    <img src="{{ asset('images/PRIMELUXE_LOGO.png') }}" alt="Primeluxe Logo"
                        class="h-12 sm:h-16 w-auto transition-transform duration-300 group-hover:scale-[1.02]">
                </a>
            </div>

            @php
                $navLinks = [
                    ['name' => 'Home', 'url' => route('home'), 'path' => ''],
                    ['name' => 'Solutions', 'url' => route('solutions'), 'path' => 'solutions'],
                    ['name' => 'Systems', 'url' => route('systems'), 'path' => 'systems'],
                    ['name' => 'Materials', 'url' => route('materials'), 'path' => 'materials'],
                    ['name' => 'Collections', 'url' => route('collections'), 'path' => 'collections'],
                    ['name' => 'Process', 'url' => route('process'), 'path' => 'process'],
                    ['name' => 'About', 'url' => route('about'), 'path' => 'about'],
                    ['name' => 'Contact', 'url' => route('contact'), 'path' => 'contact'],
                ];
                $currentPath = request()->path() === '/' ? '' : request()->path();
            @endphp
            <nav class="hidden lg:flex items-center gap-1.5">
                @foreach ($navLinks as $link)
                    @php
                        $isActive = $currentPath === $link['path'];
                    @endphp
                    <a href="{{ $link['url'] }}"
                        class="px-3 py-2 text-sm tracking-[0.02em] rounded-md transition-all duration-250
                        {{ $isActive ? 'text-yellow-700 bg-yellow-500/10 border border-yellow-500/30' : 'text-gray-700 hover:text-yellow-700 hover:bg-black/[0.03] border border-transparent' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-3 sm:gap-4">
                <a href="{{ route('contact') }}"
                    class="hidden sm:inline-flex items-center px-5 py-2.5 border border-yellow-500 bg-yellow-500 text-white hover:bg-yellow-600 hover:border-yellow-600 text-sm font-medium rounded-lg shadow-[0_8px_20px_rgba(191,141,0,0.28)] transition-all duration-300">
                    Book Private Consultation
                </a>

                <button id="mobile-menu-btn"
                    class="lg:hidden p-2 rounded-lg border border-black/10 text-gray-700 hover:bg-black/[0.04] transition-colors duration-300"
                    aria-label="Toggle mobile menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden border-t border-black/10 bg-white/95 backdrop-blur-md">
            <div class="px-2 pt-3 pb-4 space-y-1 sm:px-3">
                @foreach ($navLinks as $link)
                    @php
                        $isActive = $currentPath === $link['path'];
                    @endphp
                    <a href="{{ $link['url'] }}"
                        class="block px-3 py-2.5 text-base rounded-md transition-all duration-200
                        {{ $isActive ? 'text-yellow-700 bg-yellow-500/10 border border-yellow-500/30' : 'text-gray-700 hover:text-yellow-700 hover:bg-black/[0.03] border border-transparent' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                <a href="{{ route('contact') }}"
                    class="inline-flex w-full mt-3 items-center justify-center px-4 py-2.5 border border-yellow-500 bg-yellow-500 text-white hover:bg-yellow-600 hover:border-yellow-600 font-medium rounded-lg transition-all duration-300 text-center">
                    Book Private Consultation
                </a>
            </div>
        </div>
    </div>

    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
            });

            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                });
            });
        }
    </script>
</header>
