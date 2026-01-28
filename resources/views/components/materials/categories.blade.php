<!-- Solution Categories Section -->
<section id="materials" class="w-full py-20 sm:py-24 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Our Materials Categories
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Comprehensive design materials tailored to every environment in your home
            </p>
        </div>

        <!-- Stainless Steel Systems -->
        <x-materials.card
            title="Stainless Steel Systems"
            description="Water-resistant, anti-rus, and antimicrobial — engineered for kitchens, baths, and utility spaces where hygiene and durability matter most."
            image="images/materials/stainless-steel-system.jpg"
            :items="[]"
            imagePosition="right"
            delay="0"
        />

        <!-- Wood & Laminates -->
        <x-materials.card
            title="Wood & Laminates"
            description="Italian laminates, eco-certified E0/E1 boards, veneers, and lacquered finishes — crafted to bring warmth, texture, and depth to every interior."
            image="images/materials/woods-and-laminate.jpg"
            :items="[]"
            imagePosition="left"
            delay="100"
        />

        <!-- Hardware -->
        <x-materials.card
            title="Hardware"
            description="Precision mechanisms from global leaders such as Blum and Hettich ensure every door, drawer, and panel moves with discreet, effortless control."
            image="images/materials/hardware.jpg"
            :items="[]"
            imagePosition="right"
            delay="200"
        />
    </div>
</section>
