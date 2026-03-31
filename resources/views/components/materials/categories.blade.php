@php
    use Illuminate\Support\Facades\Storage;

    $fallbackCards = [
        [
            'title' => 'Stainless Steel Systems',
            'description' => 'Made of 304 <strong>food grade stainless steel</strong>, Water-resistant, anti-rust, and antimicrobial - engineered for kitchens, baths, and utility spaces where hygiene and durability matter most. Durable and lasts a lifetime.',
            'image' => 'images/materials/stainless-steel-system.jpg',
            'items' => [],
        ],
        [
            'title' => 'Wood & Laminates',
            'description' => 'Italian laminates, eco-certified E0/E1 boards, veneers, and lacquered finishes - crafted to bring warmth, texture, and depth to every interior.',
            'image' => 'images/materials/woods-and-laminate.jpg',
            'items' => [],
        ],
        [
            'title' => 'Hardware',
            'description' => 'Precision mechanisms from global leaders such as Blum, Higold, and Nuomi ensure every door, drawer, and panel moves with discreet, effortless control.',
            'image' => 'images/materials/hardware.jpg',
            'items' => [],
        ],
    ];

    $metaData = $material->meta_data ?? [];

    if (filled($metaData) && array_key_exists('title', $metaData)) {
        $metaData = [$metaData];
    }

    $cards = filled($metaData) ? $metaData : $fallbackCards;
    $fallbackImages = array_column($fallbackCards, 'image');
@endphp

<section id="materials" class="w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($cards as $index => $card)
            @php
                $items = collect($card['items'] ?? [])
                    ->map(fn ($item) => is_array($item) ? ($item['title'] ?? null) : $item)
                    ->filter()
                    ->values()
                    ->all();
            @endphp

            <x-materials.card
                :title="$card['title'] ?? ''"
                :description="$card['description'] ?? ''"
                :image="filled($card['image'] ?? null)
                    ? Storage::disk('public')->url($card['image'])
                    : ($fallbackImages[$index] ?? $fallbackImages[$index % count($fallbackImages)])"
                :items="$items"
                :image-position="$index % 2 === 0 ? 'left' : 'right'"
                :delay="$index * 100"
            />
        @endforeach
    </div>
</section>
