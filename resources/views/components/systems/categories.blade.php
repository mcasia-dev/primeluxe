<section id="systems" class="w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-systems.card
            title="Cabinet Systems"
            description="A refined framework for kitchens, wardrobes, and storage spaces - offering flexibility without compromising on architectural integrity."
            image="images/systems/cabinet-system.jpg"
            :items="[
                'Modular Cabinet Systems',
                'Custom-Built Cabinetry',
                'Stainless Steel Cabinet Systems',
            ]"
            imagePosition="left"
            delay="0"
        />

        <x-systems.card
            title="Door Systems"
            description="Doors are not accessories - they are architectural elements. Our door systems move effortlessly between rooms, enhancing flow, privacy, and visual harmony."
            image="images/systems/door-system.jpg"
            :items="[
                'Swing Door Systems',
                'Sliding Door Systems',
                'Invisible Door Systems',
                'Ghost Door Systems',
            ]"
            imagePosition="right"
            delay="100"
        />

        <x-systems.card
            title="Storage Systems"
            description="Highly adaptable storage architectures designed to evolve with the home and the people who live in it."
            image="images/systems/storage-system.jpg"
            :items="[
                'Walk-In Closet Systems',
                'Wardrobe Systems',
                'Pantry Systems'
            ]"
            imagePosition="left"
            delay="200"
        />
    </div>
</section>
