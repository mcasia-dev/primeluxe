@php
    $galleryImages = [
        [
            'src' => 'https://5.imimg.com/data5/SELLER/Default/2024/5/422189093/ST/BG/WO/79672000/home-interior-living-room-decor-services.jpg',
            'alt' => 'Living room interior',
            'span' => 'sm:col-span-2 lg:col-span-2 lg:row-span-2',
        ],
        [
            'src' => 'https://i.pinimg.com/originals/de/ce/ec/deceec218070571e0df7f420bcf44176.jpg',
            'alt' => 'Modern wardrobe design',
            'span' => 'lg:row-span-2',
        ],
        [
            'src' => 'https://edwardgeorgelondon.com/wp-content/uploads/content/11-small-home-interior-design-ideas-6.jpg',
            'alt' => 'Refined interior corner',
            'span' => '',
        ],
        [
            'src' => 'https://www.hunarcourses.com/blog/wp-content/uploads/2021/04/home-interior-design-ideas.jpg',
            'alt' => 'Kitchen interior',
            'span' => '',
        ],
        [
            'src' => 'https://decormatters-blog-uploads.s3.amazonaws.com/Snapinsta_app_275777327_1041429770085974_7125702586252520560_n_1080_ea3a526140.jpg',
            'alt' => 'Premium bathroom interior',
            'span' => '',
        ],
        [
            'src' => 'https://cdn.decorilla.com/online-decorating/wp-content/uploads/2024/12/Mountain-rustic-home-before-and-after-by-Decorilla-1024x683.jpeg?width=900',
            'alt' => 'Warm rustic-modern interior',
            'span' => '',
        ],
        [
            'src' => 'https://hips.hearstapps.com/hmg-prod/images/hbx010124ashleygilbreath-005-66bb73da7d511.jpg?crop=0.923xw:1.00xh;0.0646xw,0',
            'alt' => 'Contemporary decor detail',
            'span' => 'sm:col-span-2 lg:col-span-2',
        ],
    ];
@endphp

<section class="w-full bg-gradient-to-b from-gray-50 via-white to-gray-50 py-20 sm:py-24 lg:py-28" id="gallery">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{--        <div class="text-center mb-12 sm:mb-14" data-aos="fade-up">--}}
        {{--            <h2 class="text-4xl sm:text-5xl font-light text-gray-900 mb-4">Gallery</h2>--}}
        {{--            <p class="text-gray-600 text-lg max-w-2xl mx-auto">A closer look at refined spaces shaped by Primeluxe design principles.</p>--}}
        {{--        </div>--}}

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 auto-rows-[190px] sm:auto-rows-[210px] lg:auto-rows-[180px] gap-4 sm:gap-5">
            @foreach ($galleryImages as $index => $image)
                <figure
                    class="group relative overflow-hidden rounded-2xl border border-black/10 shadow-[0_12px_28px_rgba(20,20,20,0.1)] {{ $image['span'] }}"
                    data-aos="fade-up" data-aos-delay="{{ 60 + ($index * 40) }}">
                    <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}" loading="lazy"
                         class="h-full w-full object-cover transition duration-700 group-hover:scale-105"/>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/35 via-black/5 to-transparent opacity-70 group-hover:opacity-85 transition-opacity duration-500"></div>
                </figure>
            @endforeach
        </div>
    </div>
</section>
