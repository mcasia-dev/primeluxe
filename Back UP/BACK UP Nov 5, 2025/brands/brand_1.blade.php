@extends('layouts.app')
@section('content')


<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
  style="background-image: url('https://cdn.home-designing.com/wp-content/uploads/2019/04/living-room-pendant-light-1024x768.jpg');"
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



<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            
            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                <img src="https://kreo-tech.com/cdn/shop/files/Artboard_1_9.png?v=1760334166" alt="Headphone" class="w-full h-60 object-cover">
                <div class="p-4 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-800">Headphone</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                <img src="https://cdn.thewirecutter.com/wp-content/media/2024/03/computer-speaker-2048px-3550.jpg" alt="Speakers" class="w-full h-60 object-cover">
                <div class="p-4 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-800">Speakers</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                <img src="https://hisense.hgecdn.net/medias/Unpacking-a-new-TV-blog-uk-900x500.webp?context=bWFzdGVyfGltYWdlc3wzMzIzMnxpbWFnZS93ZWJwfGFEaGxMMmd3T0M4NU5UZ3pOVFF3TURjMk5UYzBMMVZ1Y0dGamEybHVaeTFoTFc1bGR5MVVWaTFpYkc5bkxYVnJMVGt3TUhnMU1EQXVkMlZpY0F8ZjViOGI4NDcwYjAzNWI1ZTE3YjEyYjcwYjNjZTczMjYyZGE4OWExZjMzOTU0YWQyN2VlNzdjNDc2N2U1MWVmNg" alt="Television" class="w-full h-60 object-cover">
                <div class="p-4 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-800">Television</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                <img src="https://media.wired.com/photos/67f43d02de87fd70c23f21b5/master/w_1600%2Cc_limit/Review--TCL-Q6310-Soundbar-4-Gear.jpg" alt="Soundbars" class="w-full h-60 object-cover">
                <div class="p-4 flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-800">Soundbars</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>




<!--------------------------------------------- End of Section --------------------------------------------------------->











<!--------------------------------------------- 3rd Section --------------------------------------------------------->
<section class="py-12 bg-white">
    <div class="container mx-auto px-6 max-w-3xl text-center">
        
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Iconic quality since 1925</h2>
        
        <!-- Section Description -->
        <p class="text-gray-600 mb-6">
            Since 1925 Bang & Olufsen has created iconic audio and home entertainment products to the highest standards of sound, craft and design.
        </p>
        
        <!-- Embedded YouTube Player -->
        <div class="relative" style="padding-top: 56.25%;"> <!-- 16:9 Aspect Ratio -->
            <iframe class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg"
                src="https://www.youtube.com/embed/qr4rFw-PVwA?si=mbDj6V-hy7H2b6wJ"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>




        




    </div>
</section>

<!--------------------------------------------- End of Section --------------------------------------------------------->











<!---------------------------------------------4th Section--------------------------------------------------------->
<section 
  id="carousel-section"
  class="relative w-full min-h-screen overflow-hidden flex items-center justify-center fade-section opacity-0 translate-y-5 transition-all duration-700 bg-gray-900"
>
  <!-- Slider Wrapper -->
  <div id="carousel-wrapper" class="absolute inset-0 flex transition-transform duration-700 ease-in-out">
    <!-- Slide 1 -->
    <div class="w-full flex-shrink-0 bg-cover bg-center"
         style="background-image: url('https://cdn.prod.website-files.com/6334a8d89862a1cc15eae9e1/648c61fdb62eb4ca56e3e8fc_a72252d6.jpeg');">
    </div>

    <!-- Slide 2 -->
    <div class="w-full flex-shrink-0 bg-cover bg-center"
         style="background-image: url('https://d3gq2merok8n5r.cloudfront.net/living-room-02-1-1675195291-njdSB.jpg');">
    </div>

    <!-- Slide 3 -->
    <div class="w-full flex-shrink-0 bg-cover bg-center"
         style="background-image: url('https://goodhomes.wwmindia.com/content/2022/jun/infusing-wood-in-this-neutral-themed-home.jpg');">
    </div>
  </div>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50 z-[1] pointer-events-none"></div>

  <!-- Info Box -->
  <div class="relative z-[2] bg-white/90 text-gray-900 p-8 rounded-xl shadow-lg max-w-md text-center transition-all duration-700" id="info-box">
    <h2 id="carousel-title" class="text-3xl font-bold mb-4">Sustainable Wood Craftsmanship</h2>
    <p id="carousel-desc" class="text-base mb-6">
      Our furniture is built using responsibly sourced hardwoods, combining strength with sustainability. Each piece is hand-finished to preserve its natural texture while ensuring long-lasting durability and elegance in every detail.
    </p>
    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all">
      Learn More
    </button>
  </div>

  <!-- Navigation Buttons -->
  <button id="prev" 
          class="absolute left-6 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-700 p-3 rounded-full shadow-md transition z-[2]">
    ❮
  </button>

  <button id="next" 
          class="absolute right-6 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-700 p-3 rounded-full shadow-md transition z-[2]">
    ❯
  </button>
</section>

<!---------------------------------------------End of 4th Section--------------------------------------------------------->






<!------------------------------------------------5th Section--------------------------------------------------------->
<section 
  id="find-store-section"
  class="relative w-full min-h-screen flex items-center justify-center bg-gray-100 overflow-hidden opacity-0 translate-y-10 transition-all duration-1000"
>
  <div class="container mx-auto flex flex-col md:flex-row items-center px-6 md:px-12">
    <!-- Left: Image -->
    <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
      <img 
        src="https://images.squarespace-cdn.com/content/v1/6581fd2d9a7c875e912e0907/19116ab1-4f67-4632-851b-8f0cf510b417/Sleek+Objects+1.jpg" 
        alt="Store Front" 
        class="w-full max-w-md rounded-2xl shadow-lg"
      >
    </div>

    <!-- Right: Text -->
    <div class="md:w-1/2 text-center md:text-left space-y-6 ml-15">
      <h2 class="text-4xl font-bold text-gray-800">Find a Store Near You</h2>
      <p class="text-gray-600 text-lg leading-relaxed">
        Discover our nearest branches and experience our quality products firsthand. 
        Use the store locator to find one near you!
      </p>
      <a 
        href="/stores" 
        class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition duration-300"
      >
        Find Store
      </a>
    </div>
  </div>
</section>
<!---------------------------------------------End of 5th Section--------------------------------------------------------->












@endsection


<!-- 🔥 JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const carouselWrapper = document.getElementById("carousel-wrapper");
  const slides = carouselWrapper.children;
  const totalSlides = slides.length;
  const prevBtn = document.getElementById("prev");
  const nextBtn = document.getElementById("next");
  const titleEl = document.getElementById("carousel-title");
  const descEl = document.getElementById("carousel-desc");
  const section = document.getElementById("carousel-section");

  // Slide data
  const slideData = [
    {
      title: "Sustainable Wood Craftsmanship",
      desc: "Our furniture is built using responsibly sourced hardwoods, combining strength with sustainability. Each piece is hand-finished to preserve its natural texture while ensuring long-lasting durability and elegance in every detail."
    },
    {
      title: "Premium Composite Innovation",
      desc: "We blend modern composite materials with advanced engineering to create products that are lightweight, sturdy, and resistant to wear. The result — designs that look refined yet remain practical for everyday living."
    },
    {
      title: "Acoustic Fabric Perfection",
      desc: "Our sound-absorbing fabrics not only elevate the aesthetic of your space but also enhance acoustic comfort. Ideal for living rooms and studios, they strike the perfect balance between beauty and performance."
    }
  ];

  let currentIndex = 0;
  let isVisible = false;

  function updateCarousel() {
    carouselWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
    titleEl.classList.add("opacity-0", "translate-y-3");
    descEl.classList.add("opacity-0", "translate-y-3");

    setTimeout(() => {
      titleEl.textContent = slideData[currentIndex].title;
      descEl.textContent = slideData[currentIndex].desc;
      titleEl.classList.remove("opacity-0", "translate-y-3");
      descEl.classList.remove("opacity-0", "translate-y-3");
    }, 300);
  }

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
  });

  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
  });

  // Optional auto-slide
  setInterval(() => {
    if (isVisible) {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateCarousel();
    }
  }, 5000);

  // Fade-in on scroll
  function handleScroll() {
    const rect = section.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      section.classList.remove("opacity-0", "translate-y-5");
      isVisible = true;
      window.removeEventListener("scroll", handleScroll);
    }
  }

  window.addEventListener("scroll", handleScroll);
});
</script>





<script>
  // Fade in when section enters viewport
  document.addEventListener("DOMContentLoaded", () => {
    const section = document.querySelector("#find-store-section");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.remove("opacity-0", "translate-y-10");
          section.classList.add("opacity-100", "translate-y-0");
          observer.unobserve(section);
        }
      });
    }, { threshold: 0.3 });

    observer.observe(section);
  });
</script>

