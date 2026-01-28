@extends('layouts.app')
@section('content')


<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
  style="background-image: url('https://img.freepik.com/free-photo/handsome-carpenter-working-with-wood_1157-26129.jpg?semt=ais_hybrid&w=740&q=80');"
>
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Text Content -->
  <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl">
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight drop-shadow-lg">
      [Insert Brand]
    </h1>

    <br>
    

  </div>
</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->






<!--------------------------------------------- 2nd Section --------------------------------------------------------->
<section 
  id="about-wood-section"
  class="relative w-full min-h-[70vh] bg-white py-20 flex items-center justify-center opacity-0 translate-y-10 transition-all duration-1000"
>
  <div class="container mx-auto px-6 md:px-16 lg:px-32">

    <p class="text-gray-700 text-justify leading-relaxed text-lg">
      Wood has been one of the oldest companions of human civilization — a living material that carries both warmth and strength. 
      Long before the rise of metal or stone structures, people relied on wood for shelter, tools, and art. 
      Its presence in our homes and creations connects us to nature’s quiet rhythm, to forests that have stood for generations.
    </p>

    <p class="text-gray-700 text-justify leading-relaxed text-lg mt-4">
      Every piece of wood tells a story. The distinct lines of its grain record years of growth, the touch of sunlight, and the whisper of the wind. 
      When artisans carve, polish, or assemble it, they aren’t just shaping a material — they’re revealing the life that once pulsed through it. 
      From the smooth golden hues of pine to the deep, rich tones of mahogany, each type of wood offers a unique personality that inspires different forms of creativity.
    </p>

    <p class="text-gray-700 text-justify leading-relaxed text-lg mt-4">
      In the hands of a skilled woodworker, raw lumber transforms into something extraordinary. 
      Precision meets patience as craftsmen plane, sand, and join pieces with care. 
      Traditional methods like dovetail joints and mortise-and-tenon connections still endure today, symbolizing a commitment to durability and artistry. 
      Even with modern tools and technology, true woodworking remains an intimate dance between human touch and natural beauty.
    </p>

    <p class="text-gray-700 text-justify leading-relaxed text-lg mt-4">
      Today, woodcraft extends far beyond furniture. 
      Architects use timber to design eco-friendly structures that breathe and adapt with the seasons. 
      Artists sculpt it into expressive forms, and designers mix it with glass or steel to bring warmth into contemporary spaces. 
      Reclaimed wood from old barns and ships finds new life in modern homes, proving that even aged wood continues to tell stories long after its first purpose has ended.
    </p>

    <p class="text-gray-700 text-justify leading-relaxed text-lg mt-4">
      To appreciate wood is to appreciate time itself — the patience it takes to grow, the care it requires to preserve, and the craftsmanship needed to bring out its soul. 
      Every cut, curve, and polish reflects humanity’s deep respect for nature and our shared desire to build something that lasts. 
      Wood is not just a material — it is a legacy that bridges the past and the present, reminding us that beauty often begins with the simplest things found in the heart of the forest.
    </p>
  </div>
</section>

<!--------------------------------------------- End of Section --------------------------------------------------------->












<!------------------------------------------------2nd Section--------------------------------------------------------->

<section 
  id="wood-gallery-section"
  class="relative w-full bg-gray-100 py-20 opacity-0 translate-y-10 transition-all duration-1000"
>
  <div class="container mx-auto px-6 md:px-12">

    <!-- Masonry Grid -->
    <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
      <img src="https://media.istockphoto.com/id/510385414/photo/woodworking.jpg?s=612x612&w=0&k=20&c=6rJO3gZTDHFM0k3tbpveOrKMtMSBUAfae1NQJpadNHk=" class="gallery-img w-full rounded-lg shadow-md hover:scale-105 transition duration-300" alt="Wooden chair in workshop">
      <img src="https://images.unsplash.com/photo-1497218770144-3fea6dbc33fe?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d29vZHdvcmtpbmd8ZW58MHx8MHx8fDA%3D&fm=jpg&q=60&w=3000" class="gallery-img w-full rounded-lg shadow-md hover:scale-105 transition duration-300" alt="Carpenter sanding wood">
      <img src="https://i.pinimg.com/736x/8e/ca/bc/8ecabc10954b0f136b2dd5bf509d0ef6.jpg" class="gallery-img w-full rounded-lg shadow-md hover:scale-105 transition duration-300" alt="Handcrafted wooden table">
      <img src="https://5.imimg.com/data5/SELLER/Default/2023/7/330396434/HY/PU/TD/125999640/whatsapp-image-2023-07-26-at-11-09-10-am-500x500.jpeg" class="gallery-img w-full rounded-lg shadow-md hover:scale-105 transition duration-300" alt="Wood planks close-up">
      <img src="https://www.shutterstock.com/image-photo/wooden-chairs-other-furniture-antique-600nw-2509241025.jpg" class="gallery-img w-full rounded-lg shadow-md hover:scale-105 transition duration-300" alt="Rustic wood wall art">
      <img src="https://thearchitectsdiary.com/wp-content/uploads/2024/12/simple-house-interior-9-1024x687.jpg" class="gallery-img w-full rounded-lg shadow-md hover:scale-105 transition duration-300" alt="Wooden kitchen counter">
      <img src="https://cdn.home-designing.com/wp-content/uploads/2019/04/living-room-pendant-light-1024x768.jpg" class="gallery-img w-full rounded-lg shadow-md hover:scale-105 transition duration-300" alt="Craftsman carving wood">
      <img src="https://assets.architecturaldigest.in/photos/689080735f5f3b35ac7dbcc9/16:9/w_2560%2Cc_limit/Untitled%2520design%2520(2).png" class="gallery-img w-full rounded-lg shadow-md hover:scale-105 transition duration-300" alt="Wooden furniture set">
    </div>
  </div>
</section>
<!--------------------------------------------------------------------------------------------------------------------->










<!------------------------------------------------3rd Section--------------------------------------------------------->
<section 
  id="card-section"
  class="w-full bg-gray-50 py-20 opacity-0 translate-y-10 transition-all duration-1000"
>
  <div class="container mx-auto px-6 md:px-12">

    <!-- Card Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Card 1 -->
      <div class="card opacity-0 translate-y-5 bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-700">
        <img src="https://images.ctfassets.net/rg5y8r6t6cjr/6OtgaBRnouvW7gdQNRtCEA/a277d04af7a42c63f8d5a418fa2d9b58/nojhproduct-moderncoastal-interior-3birdsrenovations-house14-jameshardie-198.jpg" class="w-full h-48 object-cover" alt="Wood Materials">
        <div class="p-5 flex items-center justify-between">
          <h3 class="text-lg font-semibold text-gray-800">Premium Wood Materials</h3>
          <span class="text-yellow-600 text-xl">➜</span>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card opacity-0 translate-y-5 bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-700">
        <img src="https://cdn.decorilla.com/online-decorating/wp-content/uploads/2024/05/Classy-Rustic-home-interior-with-exposed-beams-1024x683.jpeg?width=900" class="w-full h-48 object-cover" alt="Custom Furniture">
        <div class="p-5 flex items-center justify-between">
          <h3 class="text-lg font-semibold text-gray-800">Custom Furniture</h3>
          <span class="text-yellow-600 text-xl">➜</span>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card opacity-0 translate-y-5 bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-700">
        <img src="https://i.pinimg.com/736x/f3/a8/a6/f3a8a6547478330f82e46c43a8e643d0.jpg" class="w-full h-48 object-cover" alt="Wood Finishing">
        <div class="p-5 flex items-center justify-between">
          <h3 class="text-lg font-semibold text-gray-800">Polishing & Finishing</h3>
          <span class="text-yellow-600 text-xl">➜</span>
        </div>
      </div>

    </div>
  </div>
</section>
<!---------------------------------------------End of 3rd Section--------------------------------------------------------->




@endsection




<script>
  document.addEventListener("DOMContentLoaded", () => {
    const aboutSection = document.querySelector("#about-wood-section");
    const paragraphs = aboutSection.querySelectorAll("p");
    
    // ✅ Add transition + hidden state initially
    paragraphs.forEach(p => {
      p.classList.add("opacity-0", "translate-y-4", "transition-all", "duration-700");
    });

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Unhide section background first
          aboutSection.classList.remove("opacity-0", "translate-y-10");
          aboutSection.classList.add("opacity-100", "translate-y-0");

          // Stagger reveal each paragraph
          paragraphs.forEach((p, index) => {
            setTimeout(() => {
              p.classList.remove("opacity-0", "translate-y-4");
              p.classList.add("opacity-100", "translate-y-0");
            }, index * 250);
          });

          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    observer.observe(aboutSection);
  });
</script>







<script>
  document.addEventListener("DOMContentLoaded", () => {
    const gallerySection = document.querySelector("#wood-gallery-section");
    const images = document.querySelectorAll(".gallery-img");

    // Start hidden
    images.forEach(img => {
      img.classList.add("opacity-0", "scale-95", "transition-all", "duration-700");
    });

    // Observer for section visibility
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Fade in section container
          gallerySection.classList.remove("opacity-0", "translate-y-10");
          gallerySection.classList.add("opacity-100", "translate-y-0");

          // Stagger each image fade-in
          images.forEach((img, index) => {
            setTimeout(() => {
              img.classList.remove("opacity-0", "scale-95");
              img.classList.add("opacity-100", "scale-100");
            }, index * 150);
          });

          // Stop observing after triggered once
          observer.unobserve(gallerySection);
        }
      });
    }, { threshold: 0.2 }); // 20% visible triggers it

    observer.observe(gallerySection);
  });
</script>










<script>
  document.addEventListener("DOMContentLoaded", () => {
    const cardSection = document.querySelector("#card-section");
    const cards = document.querySelectorAll(".card");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          cardSection.classList.remove("opacity-0", "translate-y-10");
          cardSection.classList.add("opacity-100", "translate-y-0");

          // Animate cards one by one
          cards.forEach((card, index) => {
            setTimeout(() => {
              card.classList.remove("opacity-0", "translate-y-5");
              card.classList.add("opacity-100", "translate-y-0");
            }, index * 200);
          });

          observer.unobserve(cardSection);
        }
      });
    }, { threshold: 0.2 });

    observer.observe(cardSection);
  });
</script>
