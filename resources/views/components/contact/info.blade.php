<section class="w-full bg-gradient-to-b from-white via-gray-50 to-white py-20 sm:py-24 lg:py-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14 sm:mb-16" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-light text-gray-900 mb-4">{{ $contact?->info_title ?? 'Other Ways to Connect' }}</h2>
            <p class="text-lg text-gray-600">{{ $contact?->info_subtitle ?? 'Reach out to us through your preferred channel' }}</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 sm:gap-8">
            <div
                class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out bg-white rounded-2xl p-8 border border-black/10 shadow-[0_14px_34px_rgba(20,20,20,0.08)] hover:shadow-[0_20px_42px_rgba(20,20,20,0.12)] transition-all">
                <div class="w-14 h-14 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-7 h-7 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3 text-center">{{ $contact?->phone_label ?? 'Phone' }}</h3>
                <p class="text-gray-600 text-center">
                    <a href="{{ $contact?->phone_href ?? 'tel:+6327000383' }}" class="hover:text-yellow-600 transition-colors font-semibold">{{ $contact?->phone_display ?? '(02) 700 0383' }}</a>
                </p>
                <p class="text-gray-500 text-sm text-center mt-2">{{ $contact?->phone_caption ?? 'Available Monday - Friday, 9AM - 6PM' }}</p>
            </div>

            <div
                class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out bg-white rounded-2xl p-8 border border-black/10 shadow-[0_14px_34px_rgba(20,20,20,0.08)] hover:shadow-[0_20px_42px_rgba(20,20,20,0.12)] transition-all"
                style="transition-delay: 100ms;">
                <div class="w-14 h-14 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-7 h-7 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3 text-center">{{ $contact?->email_label ?? 'Email' }}</h3>
                <p class="text-gray-600 text-center">
                    <a href="mailto:{{ $contact?->email_address ?? 'info@primeluxe.com' }}"
                       class="hover:text-yellow-600 transition-colors font-semibold break-all">{{ $contact?->email_address ?? 'info@primeluxe.com' }}</a>
                </p>
                <p class="text-gray-500 text-sm text-center mt-2">{{ $contact?->email_caption ?? "We'll respond within 24 hours" }}</p>
            </div>

            <div
                class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out bg-white rounded-2xl p-8 border border-black/10 shadow-[0_14px_34px_rgba(20,20,20,0.08)] hover:shadow-[0_20px_42px_rgba(20,20,20,0.12)] transition-all"
                style="transition-delay: 200ms;">
                <div class="w-14 h-14 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6 mx-auto">
                    <svg class="w-7 h-7 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900 mb-3 text-center">{{ $contact?->showroom_label ?? 'Visit Our Showroom' }}</h3>
                <p class="text-gray-600 text-center text-sm">
                    {!! nl2br(e($contact?->showroom_address ?? "410 N.S Amoranto St. Sta. Mesa Heights\nBrgy. Maharlika, Quezon City\nMetropolitan Manila, Philippines, 1114")) !!}
                </p>
                <p class="text-gray-500 text-sm text-center mt-2">{{ $contact?->showroom_caption ?? 'Schedule a tour by appointment' }}</p>
            </div>
        </div>
    </div>
</section>
