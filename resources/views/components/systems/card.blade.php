<!-- Solution Environment Card Component -->
@props(['title', 'description', 'image', 'items', 'imagePosition' => 'right', 'delay' => 0])

<div class="mb-20 overflow-hidden rounded-xl shadow-lg bg-white" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
        <!-- Image -->
        <div
            class="relative h-96 overflow-hidden bg-gray-200 {{ $imagePosition === 'left' ? 'order-2 lg:order-1' : 'order-2 lg:order-2' }}">
            <img src="{{ asset($image) }}" alt="{{ $title }}"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
        </div>

        <!-- Content -->
        <div
            class="p-8 sm:p-12 lg:p-16 flex flex-col justify-center {{ $imagePosition === 'left' ? 'order-1 lg:order-2' : 'order-1 lg:order-1' }}">
            <h3 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h3>
            <p class="text-gray-700 mb-6 leading-relaxed">{{ $description }}</p>
            <div class="space-y-2">
                <ul class="space-y-2 text-gray-700">
                    @foreach ($items as $item)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-1" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
