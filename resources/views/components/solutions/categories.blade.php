@php
    use Illuminate\Support\Facades\Storage;

    $fallbackCards = [
        [
            'title' => 'Kitchen Environments',
            'subtitle' => 'Where Architecture and culinary ritual meet.',
            'description' => 'Primeluxe kitchens are designed as sculptural yet highly functional spaces - equally suited to intimate daily use and elegant entertaining.',
            'image' => 'images/solutions/kitchen.jpg',
            'items' => [
                'Signature Kitchen Collection',
                'Secondary Kitchen Collection',
                'Stainless Steel Kitchen Systems',
                'Pantry & Food Storage Systems',
            ],
        ],
        [
            'title' => 'Wardrobe Environments',
            'subtitle' => '',
            'description' => 'Private dressing spaces designed with clarity, elegance, and precision. Our wardrobes transform storage into a quiet luxury - where every garment, accessory, and ritual has its place.',
            'image' => 'images/solutions/wardrobe.jpg',
            'items' => [
                'Walk-in Closet Collection',
                'Modular Wardrobe Collection',
            ],
        ],
        [
            'title' => 'Bath & Vanity Environments',
            'subtitle' => '',
            'description' => 'Serene, water-resistant spaces conceived as personal sanctuaries. From vanities to complete bath systems, Primeluxe designs environments that bring calm, balance, and beauty into daily self-care routines.',
            'image' => 'images/solutions/bath_and_vanity.jpg',
            'items' => [
                'Bath Collection',
                'Vanity Collection',
            ],
        ],
        [
            'title' => 'Interior Door Systems',
            'subtitle' => '',
            'description' => 'Architectural door systems that bring continuity, elegance, and precision to every interior. From classic swing doors to contemporary sliding, invisible, and ghost door systems, each solution is designed to integrate seamlessly with surrounding spaces - enhancing spatial flow while maintaining the refined simplicity that defines the Primeluxe aesthetic.',
            'image' => 'images/solutions/door-system.jpg',
            'items' => [
                'Swing Door Systems',
                'Sliding Door Systems',
                'Invisible Door Systems',
                'Ghost Door Systems',
            ],
        ],
        [
            'title' => 'Living & Utility Environments',
            'subtitle' => '',
            'description' => 'From refined storage walls to discreet laundry systems, these spaces support everyday life with understated sophistication - beautifully integrated, quietly efficient.',
            'image' => 'images/solutions/living_and_utility.jpg',
            'items' => [
                'Laundry Systems',
                'Storage Walls',
                'Living Area',
            ],
        ],
    ];

    $metaData = $solution->meta_data ?? [];

    if (filled($metaData) && array_key_exists('title', $metaData)) {
        $metaData = [$metaData];
    }

    $cards = filled($metaData) ? $metaData : $fallbackCards;
    $fallbackImages = array_column($fallbackCards, 'image');
@endphp

<section id="solutions" class="w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($cards as $index => $card)
            @php
                $items = collect($card['items'] ?? [])
                    ->map(fn ($item) => is_array($item) ? ($item['title'] ?? null) : $item)
                    ->filter()
                    ->values()
                    ->all();
            @endphp

            <x-solutions.card
                :title="$card['title'] ?? ''"
                :tagline="$card['subtitle'] ?? ''"
                :description="strip_tags($card['description'] ?? '')"
                :image="filled($card['image'] ?? null)
                    ? Storage::disk('public')->url($card['image'])
                    : ($card['image'] ?? ($fallbackImages[$index] ?? $fallbackImages[$index % count($fallbackImages)]))"
                :items="$items"
                :image-position="$index % 2 === 0 ? 'left' : 'right'"
                :delay="$index * 100"
            />
        @endforeach
    </div>
</section>
