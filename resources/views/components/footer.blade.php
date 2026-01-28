<footer class="bg-gray-950 text-gray-300 border-t border-gray-800">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 lg:gap-16 mb-12">

            <!-- Column 1: Brand & Social -->
            <div class="sm:col-span-2 md:col-span-1">
                <a href="/" class="inline-flex items-center mb-6">
                    <img src="{{ asset('images/PRIMELUXE_LOGO.png') }}" alt="Primeluxe Logo"
                        class="h-12 w-auto brightness-200 hover:brightness-100 transition-all duration-300">
                </a>
                <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                    Elevating spaces through sophisticated design and exceptional craftsmanship.
                </p>
                <!-- Social Media Icons -->
                <div class="flex space-x-3">
                    <a href="https://facebook.com/primeluxe" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-yellow-500 transition-all duration-300 p-2 rounded-lg hover:bg-gray-800"
                        aria-label="Facebook">
                        @include('components.icons.facebook-icon')
                    </a>
                    <a href="https://instagram.com/primeluxe" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-yellow-500 transition-all duration-300 p-2 rounded-lg hover:bg-gray-800"
                        aria-label="Instagram">
                        @include('components.icons.instagram-icon')
                    </a>
                    <a href="https://linkedin.com/company/primeluxe" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-yellow-500 transition-all duration-300 p-2 rounded-lg hover:bg-gray-800"
                        aria-label="Tiktok">
                        @include('components.icons.tiktok-icon')
                    </a>
                    <a href="https://twitter.com/primeluxe" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-yellow-500 transition-all duration-300 p-2 rounded-lg hover:bg-gray-800"
                        aria-label="Twitter">
                        @include('components.icons.twitter-icon')
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-white text-sm font-bold uppercase tracking-wider mb-8">Solutions</h3>
                <ul class="space-y-4">
                    <li><a href="/"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">Home</a>
                    </li>
                    <li><a href="/solutions"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">Our
                            Solutions</a></li>
                    <li><a href="/systems"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">Systems</a>
                    </li>
                    <li><a href="/materials"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">Materials</a>
                    </li>
                    <li><a href="/collections"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">Collections</a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Company Info -->
            <div>
                <h3 class="text-white text-sm font-bold uppercase tracking-wider mb-8">Company</h3>
                <ul class="space-y-4">
                    <li><a href="/about"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">About
                            Us</a></li>
                    <li><a href="/process"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">Our
                            Process</a></li>
                    <li><a href="/careers"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">Careers</a>
                    </li>
                    <li><a href="/news"
                            class="text-gray-400 hover:text-yellow-500 transition-colors duration-300 text-sm">News &
                            Blog</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Details -->
            <div>
                <h3 class="text-white text-sm font-bold uppercase tracking-wider mb-8">Contact</h3>
                <div class="space-y-6">
                    <!-- Address -->
                    <div class="group">
                        <div class="flex items-start gap-3 mb-2 hover:translate-x-1 transition-transform duration-300">
                            <div class="flex-shrink-0 text-yellow-500 mt-1">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-widest font-semibold mb-1">Address</p>
                                <a href="https://maps.google.com/?q=Unit+3A+410+NS+Amoranto+Sta+Mesa+Heights+Maharlika+QC" target="_blank" 
                                    class="text-sm text-gray-400 hover:text-yellow-500 transition-colors duration-300 group-hover:text-yellow-500">
                                    Unit 3A 410 N.S Amoranto<br>Sta. Mesa Heights<br>Brgy. Maharlika, Q.C
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="group">
                        <div class="flex items-center gap-3 mb-2 hover:translate-x-1 transition-transform duration-300">
                            <div class="flex-shrink-0 text-yellow-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-widest font-semibold mb-1">Phone</p>
                                <a href="tel:+63270000383" class="text-sm text-gray-400 hover:text-yellow-500 transition-colors duration-300 group-hover:text-yellow-500 font-medium">
                                    +63 (2) 7000-0383
                                </a>
                                <p class="text-xs text-gray-600 mt-1">Mon-Fri, 9am-6pm</p>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="group">
                        <div class="flex items-center gap-3 mb-2 hover:translate-x-1 transition-transform duration-300">
                            <div class="flex-shrink-0 text-yellow-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs uppercase tracking-widest font-semibold mb-1">Email</p>
                                <a href="mailto:contact@primeluxe.com" class="text-sm text-gray-400 hover:text-yellow-500 transition-colors duration-300 group-hover:text-yellow-500 font-medium break-all">
                                    contact@primeluxe.com
                                </a>
                                <p class="text-xs text-gray-600 mt-1">We'll respond within 24h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-800"></div>

        <!-- Bottom Bar -->
        <div class="py-8">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-6 text-xs text-gray-500">
                <p>© {{ date('Y') }} Primeluxe Living & Design Inc. All rights reserved.</p>
                <div class="flex gap-8">
                    <a href="#" class="hover:text-yellow-500 transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="hover:text-yellow-500 transition-colors duration-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
