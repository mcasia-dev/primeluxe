<!-- Solution Categories Section -->
<section id="solutions" class="w-full py-20 sm:py-24 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Our Solution Categories
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Comprehensive design solutions tailored to every environment in your home
            </p>
        </div>

        <!-- Kitchen Environments -->
        <x-solutions.card
            title="Kitchen Environments"
            tagline="Where Architecture and culinary ritual meet."
            description="Primeluxe kitchens are designed as sculptural yet highly functional spaces — equally suited to intimate daily use and elegant entertaining."
            image="images/solutions/kitchen.jpg"
            :items="[
                'Signature Kitchen Collection',
                'Atelier Kitchen Collection',
                'Stainless Steel Kitchen Systems',
                'Pantry & Provision Systems'
            ]"
            imagePosition="right"
            delay="0"
        />

        <!-- Wardrobe Environments -->
        <x-solutions.card
            title="Wardrobe Environments"
            tagline="Elegant spaces of quiet luxury."
            description="Private dressing spaces designed with clarity, elegance, and precision. Our wardrobes transform storage into a quiet luxury — where every garment, accessory, and ritual has its place."
            image="images/solutions/wardrobe.jpg"
            :items="[
                'Private Wardrobe Collection',
                'Modular Wardrobe Systems',
                'Standard Wardrobes'
            ]"
            imagePosition="left"
            delay="100"
        />

        <!-- Bath & Vanity Environments -->
        <x-solutions.card
            title="Bath & Vanity Environments"
            tagline="Personal sanctuaries of calm and beauty."
            description="Serene, water-resistant spaces conceived as personal sanctuaries. From vanities to complete bath systems, Primeluxe designs environments that bring calm, balance, and beauty into daily self-care routines."
            image="images/solutions/bath_and_vanity.jpg"
            :items="[
                'Bath Sanctuary Collection',
                'Vanity Atelier Collection'
            ]"
            imagePosition="right"
            delay="200"
        />

        <!-- Living & Utility Environments -->
        <x-solutions.card
            title="Living & Utility Environments"
            tagline="Efficiency with understated sophistication."
            description="From refined storage walls to discreet laundry systems, these spaces support everyday life with understated sophistication — beautifully integrated and quietly efficient."
            image="images/solutions/living_and_utility.jpg"
            :items="[
                'Laundry Systems',
                'Storage Walls',
                'Study & Media Cabinets'
            ]"
            imagePosition="left"
            delay="300"
        />
    </div>
</section>
