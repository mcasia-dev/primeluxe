<section id="products" class="w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-products.card
            title="Kitchen Collections"
            description=""
            image="images/collections/collections.jpg"
            :items="[
                'Signature Kitchen Collection (Main/primary kitchens)',
                'Secondary Kitchen Collection (Auxiliary/service kitchens)',
            ]"
            imagePosition="left"
            delay="0"
        />

        <x-products.card
            title="Storage Collections"
            description=""
            image="images/systems/storage-system.jpg"
            :items="[
                'Pantry Collection (Food storage and culinary organization)',
                'Walk-In Closet Collection (Private dressing and wardrobe systems)',
            ]"
            imagePosition="right"
            delay="0"
        />

        <x-products.card
            title="Living Entertainment Spaces"
            description=""
            image="images/products/living-entertainment.jpg"
            :items="[
                'Vanity Collection (Dressing tables and beauty rooms)',
                'Bath Collection (Toilet and bath cabinetry systems)',
                'Interior Door Collections',
                'Swing Door Collection (Classic interior doors with refined finishes)',
                'Sliding Door Collection (Space-saving doors with modern functionality)',
                'Invisible Door Collection (Seamless doors designed to blend with surrounding walls)',
                'Ghost Door Collection (Contemporary minimalist doors with sleek architectural lines)',
            ]"
            imagePosition="left"
            delay="100"
        />

        <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
            <p class="text-gray-700">
                Every Primeluxe collection is fully customizable to suit the unique character of your home and the way
                you live. Clients may choose from a refined palette of materials, including premium wood cabinetry and
                advanced
                stainless steel systems — each selected for its beauty, durability, and performance. From finishes and
                hardware to internal configurations and spatial layouts, every element can be tailored to your
                preferences,
                ensuring a result that feels both deeply personal and seamlessly integrated into you home's design.
            </p>
        </div>
    </div>
</section>
