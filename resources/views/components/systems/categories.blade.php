<!-- Solution Categories Section -->
<section id="systems" class="w-full py-20 sm:py-24 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Our System Categories
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Intelligent architectural systems engineered for timeless performance and refined living
            </p>
        </div>

        <!-- Cabinet Systems -->
        <x-systems.card
            title="Cabinet Systems"
            description="A refined framework for kitchens, wardrobes, and storage spaces — offering flexibility without compromising on architectural integrity."
            image="images/systems/cabinet-system.jpg"
            :items="[
                'Modular Cabinet Systems',
                'Custom-Built Cabinetry',
                'Stainless Steel Cabinet Systems',
            ]"
            imagePosition="right"
            delay="0"
        />

        <!-- Door Systems -->
        <x-systems.card
            title="Door Systems"
            description="Doors are not accessories — they are architectural elements. Our door systems move effortlessly between rooms, enhancing flow, privacy, and visual harmony."
            image="images/systems/door-system.jpg"
            :items="[
                'Swing Door Systems',
                'Sliding Door Systems',
                'Invisible Door Systems',
                'Ghost Door Systems',
            ]"
            imagePosition="left"
            delay="100"
        />

        <!-- Storage Systems -->
        <x-systems.card
            title="Storage Systems"
            description="Highly adaptable storage architectures designed to evolve with the home and the people who live in it."
            image="images/systems/storage-system.jpg"
            :items="[
                'Walk-In Closet Systems',
                'Wardrobe Systems',
                'Pantry Systems'
            ]"
            imagePosition="right"
            delay="200"
        />
    </div>
</section>
