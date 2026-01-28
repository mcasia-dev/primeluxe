<!-- Solution Categories Section -->
<section id="collections" class="w-full py-20 sm:py-24 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">
                Our Collections
            </h2>
        </div>

        <!-- Collections Include -->
        <x-collections.card title="Collections Include" description="" image="images/collections/collections.jpg"
            :items="[
                'Signature Kitchen Collection',
                'Atelier Kitchen Collection',
                'Provision Collection',
                'Private Wardrobe Collection',
                'Vanity Atelier Collection',
                'Bath Sanctuary Collection',
            ]"
            footerDesciption="Each collection offers a coherent aesthetic — allowing the entire home to feel intentional, balanced, and quietly luxurious."
            imagePosition="left" delay="0" />
    </div>
</section>
