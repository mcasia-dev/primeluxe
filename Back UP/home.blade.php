@extends('layouts.app')
@section('content')

<style>
html {
  scroll-behavior: smooth;
}


@keyframes fadeInFast {
  0% { opacity: 0; transform: scale(0.9); }
  100% { opacity: 1; transform: scale(1); }
}

.animate-fadeInFast {
  animation: fadeInFast 0.3s ease-in forwards;
}
</style>


<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
  style="background-image: url('{{ asset('images/HOME/HOME_1.jpg') }}');"
>
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Text Content -->
  <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl">
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-light mb-6 drop-shadow-lg">
      Redefining Spaces. Elevating Lifestyles.
    </h1>

    <p class="text-base sm:text-lg md:text-xl text-gray-100/90 mb-10 leading-relaxed text-justify">
      At Primeluxe 
      we believe that great design transforms the way people live, work, and connect. We specialize in creating elegant, functional, 
      and inspiring spaces that reflect your unique taste and lifestyle. Designing not just spaces, but experiences that inspire.
    </p>

  </div>
</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->













<!--------------------------------------------2nd Section--------------------------------------------------------->
<!-- ✅ 2nd Section: Fading Logos on Scroll -->

 
<section id="logos" class="relative w-full h-110 flex items-center justify-center bg-white">
  <div class="grid grid-cols-2 sm:grid-cols-5 md:grid-cols-5 lg:grid-cols-5 gap-6">
    <!-- Example Logos -->
    <img src="{{ asset('images/HOME/SECTION 2/1.png') }}" alt="Logo 1" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/2.png') }}" alt="Logo 2" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/3.png') }}" alt="Logo 3" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/4.png') }}" alt="Logo 4" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/5.png') }}" alt="Logo 5" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/6.png') }}" alt="Logo 6" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/7.png') }}" alt="Logo 7" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/9.png') }}" alt="Logo 8" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/10.png') }}" alt="Logo 8" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/11.png') }}" alt="Logo 8" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/12.png') }}" alt="Logo 8" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/13.png') }}" alt="Logo 8" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/14.png') }}" alt="Logo 8" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/15.png') }}" alt="Logo 8" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
    <img src="{{ asset('images/HOME/SECTION 2/16.png') }}" alt="Logo 8" class="h-34 w-auto object-contain opacity-0 transition-all duration-500 transform scale-90 logo-item">
  </div>
</section>

<!---------------------------------------------End of Section------------------------------------------------------->









<!--------------------------------------------- 3rd Section --------------------------------------------------------->
<section id="features" class="w-full py-20 bg-gray-100 flex flex-col items-center">

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 max-w-6xl px-6">
    <!-- Card 1 -->
    <a href="#living" 
       class="relative group h-72 w-52 rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
      <img src="{{ asset('images/HOME/SECTION 3/1.jpg') }}" 
           alt="Living Room" 
           class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-colors duration-300"></div>
      <div class="relative text-center z-10 flex items-center justify-center h-full text-white text-2xl font-semibold">
        Audio & Video System
      </div>
    </a>

    <!-- Card 2 -->
    <a href="#kitchen" 
       class="relative group h-72 w-52 rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
      <img src="{{ asset('images/HOME/SECTION 3/2.jpg') }}" 
           alt="Kitchen" 
           class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-colors duration-300"></div>
      <div class="relative z-10 flex items-center justify-center h-full text-white text-2xl font-semibold">
        Furniture Design
      </div>
    </a>

    <!-- Card 3 -->
    <a href="#bedroom" 
       class="relative group h-72 w-52 rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
      <img src="{{ asset('images/HOME/SECTION 3/3.jpg') }}" 
           alt="Bedroom" 
           class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-colors duration-300"></div>
      <div class="relative z-10 flex items-center justify-center h-full text-white text-2xl font-semibold">
        Kitchen Design
      </div>
    </a>


        <!-- Card 4 -->
    <a href="#bedroom" 
       class="relative group h-72 w-52 rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
      <img src="{{ asset('images/HOME/SECTION 3/4.jpg') }}" 
           alt="Bedroom" 
           class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-colors duration-300"></div>
      <div class="relative z-10 flex items-center justify-center h-full text-white text-2xl font-semibold">
        Smart Systems
      </div>
    </a>




        <!-- Card 5 -->
    <a href="#bedroom" 
       class="relative group h-72 w-52 rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300">
      <img src="{{ asset('images/HOME/SECTION 3/5.jpg') }}" 
           alt="Bedroom" 
           class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-300">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition-colors duration-300"></div>
      <div class="relative z-10 flex items-center justify-center h-full text-white text-2xl font-semibold">
        Lighting System
      </div>
    </a>

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
         style="background-image: url('{{ asset('images/HOME/SECTION 4/1.jpg') }}');">
    </div>

    <!-- Slide 2 -->
    <div class="w-full flex-shrink-0 bg-cover bg-center"
         style="background-image: url('{{ asset('images/HOME/SECTION 4/2.jpg') }}');">
    </div>

    <!-- Slide 3 -->
    <div class="w-full flex-shrink-0 bg-cover bg-center"
         style="background-image: url('{{ asset('images/HOME/SECTION 4/3.jpg') }}');">
    </div>




      <!-- Slide 4 -->
    <div class="w-full flex-shrink-0 bg-cover bg-center"
         style="background-image: url('{{ asset('images/HOME/SECTION 4/4.jpg') }}');">
    </div>
  </div>

  <!-- 🔥 Single Overlay (only one, covers active slide) -->
  <div class="absolute inset-0 bg-black/10 z-[1] pointer-events-none"></div>

  <!-- Info Box -->
  <div class="relative z-[2] text-white p-8 rounded-xl shadow-lg max-w-md text-center">
        <h2 id="carousel-title" class="text-3xl font-bold mb-4">Luxury and sophistication</h2>
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








<!---------------------------------------------5th Section--------------------------------------------------------->
<section 
  id="articles"
  class="w-full py-20 bg-white flex flex-col items-center fade-section opacity-0 translate-y-5 transition-all duration-700"
>

  <!-- Cards Container -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl px-6">
    
    <!-- Card 1 -->
    <div class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
      <div class="relative w-full h-64 overflow-hidden">
        <img src="{{ asset('images/HOME/SECTION 5/inside news/2.jpg') }}" 
             alt="Interior Design" 
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold text-gray-800 mb-3">Defining the Future of Interior Design</h3>
        <p class="text-gray-600 text-justify mb-5">
          At Primeluxe, we don’t just follow design trends we create them. As lifestyles evolve and technology reshapes the way we live, work, and connect, our mission is to redefine interior design for the modern world.
        </p>
        <a href="/news_1" 
           class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
          Read More
        </a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
      <div class="relative w-full h-64 overflow-hidden">
        <img src="{{ asset('images/HOME/SECTION 5/inside news/NEWS 2/1.jpg') }}" 
             alt="Kitchen Designs" 
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold text-gray-800 mb-3">Interior Design Crafted for Filipino Residences</h3>
        <p class="text-gray-600 text-justify mb-5">
          At Primeluxe Living and Design Inc., we take pride in creating interiors that reflect the warmth, spirit, and elegance of the Filipino home.
        </p>
        <a href="/news_2" 
           class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
          Read More
        </a>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
      <div class="relative w-full h-64 overflow-hidden">
        <img src="{{ asset('images/HOME/SECTION 5/inside news/NEWS 3/1.jpg') }}" 
             alt="Bedroom Styles" 
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold text-gray-800 mb-3">How Technology Elevates Modern Kitchens</h3>
        <p class="text-gray-600 text-justify mb-5">
          Today’s kitchens are more than just spaces for cooking they are the heart of the home, where technology and design come together to create efficiency, comfort, and style. At Primeluxe Living and Design Inc.,
        </p>
        <a href="news_3" 
           class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
          Read More
        </a>
      </div>
    </div>
  </div>
</section>
<!---------------------------------------------End of 5th Section--------------------------------------------------------->

















@endsection





<!----------------------------------------------------SECTION 2------------------------------------------>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Add animation when visible
        entry.target.classList.remove("opacity-0", "scale-90");
        entry.target.classList.add("opacity-100", "scale-100");
      }
    });
  }, { threshold: 0.3 }); // Trigger when 30% of section is visible

  // Observe all logo items
  document.querySelectorAll(".logo-item").forEach((el, index) => {
    el.style.transitionDelay = `${index * 100}ms`; // Staggered fade
    observer.observe(el);
  });
});
</script>
<!----------------------------------------------------SECTION 2------------------------------------------>









<!----------------------------------------------------SECTION 4------------------------------------------>
<script>
document.addEventListener("DOMContentLoaded", () => {
  // ✅ Fade-in Observer
  const sections = document.querySelectorAll(".fade-section");
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove("opacity-0", "translate-y-5");
        entry.target.classList.add("opacity-100", "translate-y-0");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  sections.forEach(section => observer.observe(section));

  // ✅ Slider Logic
  const slides = [
    {
      title: "Luxury and sophistication",
      desc: ""
    },
    {
      title: "Stylish Kitchen Concepts",
      desc: "Experience elegance and functionality with our premium kitchen collections."
    },
    {
      title: "Modern Lifestyle",
      desc: "Transform your home with timeless pieces that reflect your lifestyle."
    },
    {
      title: "Contemporary Innovations",
      desc: "test"
    }
  ];

  const wrapper = document.getElementById("carousel-wrapper");
  const title = document.getElementById("carousel-title");
  const desc = document.getElementById("carousel-desc");
  let current = 0;

  function showSlide(index) {
    wrapper.style.transform = `translateX(-${index * 100}%)`;
    title.textContent = slides[index].title;
    desc.textContent = slides[index].desc;
  }

  document.getElementById("prev").addEventListener("click", () => {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
  });

  document.getElementById("next").addEventListener("click", () => {
    current = (current + 1) % slides.length;
    showSlide(current);
  });

  // Optional auto-slide
  setInterval(() => {

    current = (current + 1) % slides.length;
    showSlide(current);
    
  }, 5000);


});
</script>

<!----------------------------------------------------SECTION 4------------------------------------------>
