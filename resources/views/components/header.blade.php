<header
    class="bg-white/95 backdrop-blur-md shadow-md sticky top-0 z-50 transition-all duration-300 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 sm:h-20">

            <!-- Left: Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="inline-flex items-center group">
                    <img src="{{ asset('images/PRIMELUXE_LOGO.png') }}" alt="Primeluxe Logo"
                        class="h-12 sm:h-16 w-auto transition-transform duration-300 group-hover:scale-105">
                </a>
            </div>

            <!-- Center: Navigation Links (Desktop) -->
            @php
                $navLinks = [
                    ['name' => 'Home', 'url' => '/'],
                    ['name' => 'Solutions', 'url' => '/solutions'],
                    ['name' => 'Systems', 'url' => '/systems'],
                    ['name' => 'Materials', 'url' => '/materials'],
                    ['name' => 'Collections', 'url' => '/collections'],
                    ['name' => 'Process', 'url' => '/process'],
                    ['name' => 'About', 'url' => '/about'],
                    ['name' => 'Contact', 'url' => '/contact'],
                ];
            @endphp
            <nav class="hidden lg:flex items-center space-x-1">
                @foreach ($navLinks as $link)
                    <a href="{{ $link['url'] }}"
                        class="px-3 py-2 text-sm font-medium rounded-md transition-all duration-300 
                        {{ request()->path() === ltrim($link['url'], '/') || (request()->path() === '' && $link['url'] === '/') 
                            ? 'text-yellow-600 border-b-2 rounded-b-none border-yellow-600' 
                            : 'text-gray-700 hover:text-yellow-600 hover:bg-gray-50' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
            </nav>

            <!-- Right: CTA Button + Mobile Menu Button -->
            <div class="flex items-center space-x-4">
                <button
                    class="hidden sm:inline-block px-6 py-2 border border-yellow-500 hover:border-yellow-600 text-yellow-600 hover:text-yellow-700 text-sm font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105 bg-transparent hover:bg-yellow-50">
                    Book Private Consultation
                </button>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn"
                    class="lg:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition-colors duration-300"
                    aria-label="Toggle mobile menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                @foreach ($navLinks as $link)
                    <a href="{{ $link['url'] }}"
                        class="block px-3 py-2 text-base font-medium rounded-md transition-all duration-300
                        {{ request()->path() === ltrim($link['url'], '/') || (request()->path() === '' && $link['url'] === '/') 
                            ? 'text-yellow-600 border-b-2 border-yellow-600' 
                            : 'text-gray-700 hover:text-yellow-600 hover:bg-gray-50' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                <button
                    class="w-full mt-4 px-4 py-2 border border-yellow-500 hover:border-yellow-600 text-yellow-600 hover:text-yellow-700 font-medium rounded-lg transition-all duration-300 text-center bg-transparent hover:bg-yellow-50">
                    Book Private Consultation
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const btn = this;
            menu.classList.toggle('hidden');
            btn.setAttribute('aria-expanded', btn.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
        });

        // Close menu when a link is clicked
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
                document.getElementById('mobile-menu-btn').setAttribute('aria-expanded', 'false');
            });
        });
    </script>
</header>
