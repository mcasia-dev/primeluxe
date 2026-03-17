@props(['title', 'tagline', 'description', 'image', 'items', 'imagePosition' => 'right', 'delay' => 0])

<div class="mb-12 sm:mb-16 lg:mb-20 overflow-hidden rounded-2xl border border-black/10 shadow-[0_20px_48px_rgba(18,18,18,0.14)] bg-white"
    data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
        <div
            class="relative h-80 sm:h-[600px] overflow-hidden bg-gray-200 {{ $imagePosition === 'left' ? 'order-2 lg:order-1' : 'order-2 lg:order-2' }}">
            <img src="{{ asset($image) }}" alt="{{ $title }}"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/35 via-black/8 to-transparent"></div>
        </div>

        <div
            class="p-8 sm:p-10 lg:p-14 flex flex-col justify-center {{ $imagePosition === 'left' ? 'order-1 lg:order-2' : 'order-1 lg:order-1' }}">
            <h3 class="text-3xl sm:text-4xl font-light text-gray-900 mb-4 leading-tight">{{ $title }}</h3>
            @if (!empty($tagline))
                <p class="text-lg text-yellow-700 font-medium mb-4">{{ $tagline }}</p>
            @endif
            <p class="text-gray-700 mb-6 leading-relaxed">{{ $description }}</p>
            <div>
                <h4 class="font-medium text-gray-900 mb-3 tracking-wide">Includes:</h4>
                <ul class="space-y-3 text-gray-700">
                    @foreach ($items as $item)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="leading-relaxed">{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
