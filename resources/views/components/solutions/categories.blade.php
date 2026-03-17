<section id="solutions" class="w-full py-20 sm:py-24 lg:py-28 bg-gradient-to-b from-gray-50 via-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-solutions.card
            title="Kitchen Environments"
            tagline="Where Architecture and culinary ritual meet."
            description="Primeluxe kitchens are designed as sculptural yet highly functional spaces — equally suited to intimate daily use and elegant entertaining."
            image="images/solutions/kitchen.jpg"
            :items="[
                'Signature Kitchen Collection',
                'Secondary Kitchen Collection',
                'Stainless Steel Kitchen Systems',
                'Pantry & Food Storage Systems'
            ]"
            imagePosition="left"
            delay="0"
        />

        <x-solutions.card
            title="Wardrobe Environments"
            tagline=""
            description="Private dressing spaces designed with clarity, elegance, and precision. Our wardrobes transform storage into a quiet luxury — where every garment, accessory, and ritual has its place."
            image="images/solutions/wardrobe.jpg"
            :items="[
                'Walk-in Closet Collection',
                'Modular Wardrobe Collection',
            ]"
            imagePosition="right"
            delay="100"
        />

        <x-solutions.card
            title="Bath & Vanity Environments"
            tagline=""
            description="Serene, water-resistant spaces conceived as personal sanctuaries. From vanities to complete bath systems, Primeluxe designs environments that bring calm, balance, and beauty into daily self-care routines."
            image="images/solutions/bath_and_vanity.jpg"
            :items="[
                'Bath Collection',
                'Vanity Collection'
            ]"
            imagePosition="left"
            delay="200"
        />

        <x-solutions.card
            title="Interior Door Systems"
            tagline=""
            description="Architectural door systems that bring continuity, elegance, and precision to every interior. From classic swing doors to contemporary sliding, invisible, and ghost door systems, each solution is designed to integrate seamlessly with surrounding spaces — enhancing spatial flow while maintaining the refined simplicity that defines the Primeluxe aesthetic."
            image="images/solutions/door-system.jpg"
            :items="[
                'Swing Door Systems',
                'Sliding Door Systems',
                'Invisible Door Systems',
                'Ghost Door Systems',
            ]"
            imagePosition="right"
            delay="200"
        />

        <x-solutions.card
            title="Living & Utility Environments"
            tagline=""
            description="From refined storage walls to discreet laundry systems, these spaces support everyday life with understated sophistication — beautifully integrated, quietly efficient."
            image="images/solutions/living_and_utility.jpg"
            :items="[
                'Laundry Systems',
                'Storage Walls',
                'Living Area'
            ]"
            imagePosition="left"
            delay="300"
        />
    </div>
</section>
