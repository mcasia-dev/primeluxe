<header class="sticky top-0 z-50 border-b border-black/10 bg-white/88 backdrop-blur-xl shadow-[0_8px_24px_rgba(18,18,18,0.08)] my-0 sm:my-2 py-2 sm:py-3">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 lg:h-20 items-center justify-between">

            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="inline-flex items-center group">
                    <img src="{{ asset('images/PRIMELUXE_LOGO.png') }}" alt="Primeluxe Logo"
                         class="h-10 sm:h-12 lg:h-24 w-auto transition-transform duration-300 group-hover:scale-[1.02]">
                </a>
            </div>

            @php
                $navLinks = [
                    ['name' => 'Home', 'url' => route('home'), 'path' => ''],
                    ['name' => 'Solutions', 'url' => route('solutions'), 'path' => 'solutions'],
//                    ['name' => 'Systems', 'url' => route('systems'), 'path' => 'systems'],
                    ['name' => 'Materials', 'url' => route('materials'), 'path' => 'materials'],
//                    ['name' => 'Collections', 'url' => route('collections'), 'path' => 'collections'],
//                    ['name' => 'Process', 'url' => route('process'), 'path' => 'process'],
                    ['name' => 'Products', 'url' => route('products'), 'path' => 'products'],
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
                   class="hidden lg:inline-flex items-center px-5 py-2.5 border border-yellow-500 bg-white text-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 hover:text-white text-sm font-medium rounded-sm shadow-sm hover:shadow-[0_8px_20px_rgba(191,141,0,0.28)] transition-all duration-300">
                    Book Private Consultation
                </a>

                <button id="mobile-menu-btn"
                        class="lg:hidden p-2.5 rounded-lg border border-black/10 text-gray-700 hover:bg-black/[0.04] transition-colors duration-300"
                        aria-label="Toggle mobile menu" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="relative block h-6 w-6">
                        <span id="menu-line-top"
                              class="absolute left-0 top-1 h-0.5 w-6 rounded-full bg-current transition-all duration-300 ease-out"></span>
                        <span id="menu-line-middle"
                              class="absolute left-0 top-1/2 h-0.5 w-6 -translate-y-1/2 rounded-full bg-current transition-all duration-300 ease-out"></span>
                        <span id="menu-line-bottom"
                              class="absolute left-0 bottom-1 h-0.5 w-6 rounded-full bg-current transition-all duration-300 ease-out"></span>
                    </span>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden mt-2 rounded-xl border border-black/10 bg-white/95 backdrop-blur-md shadow-[0_16px_30px_rgba(18,18,18,0.12)]">
            <div class="px-2 sm:px-3 pt-2 pb-3 space-y-1">
                @foreach ($navLinks as $link)
                    @php
                        $isActive = $currentPath === $link['path'];
                    @endphp
                    <a href="{{ $link['url'] }}"
                       class="block px-3 py-3 text-base rounded-md transition-all duration-200
                        {{ $isActive ? 'text-yellow-700 bg-yellow-500/10 border border-yellow-500/30' : 'text-gray-700 hover:text-yellow-700 hover:bg-black/[0.03] border border-transparent' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                <a href="{{ route('contact') }}"
                    class="inline-flex w-full mt-3 items-center justify-center px-4 py-3 border border-yellow-500 bg-white text-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 hover:text-white font-medium rounded-lg transition-all duration-300 text-center">
                    Book Private Consultation
                </a>
            </div>
        </div>
    </div>

    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuLineTop = document.getElementById('menu-line-top');
        const menuLineMiddle = document.getElementById('menu-line-middle');
        const menuLineBottom = document.getElementById('menu-line-bottom');

        if (mobileMenuBtn && mobileMenu) {
            const setMenuIconState = (isOpen) => {
                if (!menuLineTop || !menuLineMiddle || !menuLineBottom) return;

                menuLineTop.classList.toggle('translate-y-[8px]', isOpen);
                menuLineTop.classList.toggle('rotate-45', isOpen);

                menuLineMiddle.classList.toggle('opacity-0', isOpen);
                menuLineMiddle.classList.toggle('scale-x-0', isOpen);

                menuLineBottom.classList.toggle('-translate-y-[8px]', isOpen);
                menuLineBottom.classList.toggle('-rotate-45', isOpen);
            };

            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                const isOpen = !mobileMenu.classList.contains('hidden');
                this.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                setMenuIconState(isOpen);
            });

            document.querySelectorAll('#mobile-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                    setMenuIconState(false);
                });
            });

            document.addEventListener('click', (event) => {
                if (!mobileMenu.classList.contains('hidden') &&
                    !mobileMenu.contains(event.target) &&
                    !mobileMenuBtn.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                    setMenuIconState(false);
                }
            });
        }
    </script>
</header>
