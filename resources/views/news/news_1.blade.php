@extends('layouts.app')
@section('content')

<!--------------------------------------------- 4th Section --------------------------------------------------------->
<section 
  id="carousel-section"
  class="relative w-full min-h-screen sm:min-h-[80vh] lg:min-h-screen overflow-hidden flex items-center justify-center fade-section opacity-0 translate-y-5 transition-all duration-700 bg-gray-900"
>
  <!-- Slider Wrapper -->
  <div id="carousel-wrapper" class="absolute inset-0 flex transition-transform duration-700 ease-in-out">
    <!-- Slide 1 -->
    <div class="w-full flex-shrink-0">
      <img 
        src="{{ asset('images/HOME/SECTION 5/inside news/1.jpg') }}" 
        alt="inside news Slide 1"
        class="w-full h-full object-cover object-center"
      />
    </div>

    <!-- Slide 2 -->
    <div class="w-full flex-shrink-0">
      <img 
        src="{{ asset('images/HOME/SECTION 5/inside news/2.jpg') }}" 
        alt="inside news Slide 2"
        class="w-full h-full object-cover object-center"
      />
    </div>

    <!-- Slide 3 -->
    <div class="w-full flex-shrink-0">
      <img 
        src="{{ asset('images/HOME/SECTION 5/inside news/3.jpg') }}" 
        alt="inside news Slide 3"
        class="w-full h-full object-cover object-center"
      />
    </div>

  </div>

<!-- 🔥 Overlay -->
<div class="absolute inset-0 bg-black/30 sm:bg-black/20 md:bg-black/10 z-[1] pointer-events-none"></div>

<!-- ⬅️ Previous Button -->
<button 
  id="prev"
  class="absolute left-3 sm:left-5 md:left-8 top-1/2 -translate-y-1/2
         bg-white/80 hover:bg-white text-gray-700 
         p-2 sm:p-3 md:p-4 rounded-full shadow-md transition z-[2]"
  aria-label="Previous Slide"
>
  ❮
</button>

<!-- ➡️ Next Button -->
<button 
  id="next"
  class="absolute right-3 sm:right-5 md:right-8 top-1/2 -translate-y-1/2
         bg-white/80 hover:bg-white text-gray-700 
         p-2 sm:p-3 md:p-4 rounded-full shadow-md transition z-[2]"
  aria-label="Next Slide"
>
  ❯
</button>

</section>
<!--------------------------------------------- End of 4th Section --------------------------------------------------------->




<!---------------------------------------------2nd Section--------------------------------------------------------->
<section class="w-full bg-white py-20" id="about">
  <div class="max-w-4xl mx-auto px-6 flex flex-col gap-20">

    <!-- Who We Are -->
    <div class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out text-center">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">Defining the Future of Interior Design</h2>
      <p class="text-gray-600 text-justify leading-relaxed text-lg">
      At Primeluxe, we don’t just follow design trends we create them. As lifestyles evolve and technology reshapes the way we live, work, and connect, our mission is to redefine interior design for the modern world.
      We believe the future of design lies in the seamless fusion of innovation, functionality, and emotion. Every space we create tells a story one that reflects the individuality of its owner while embracing sustainability, adaptability, and timeless elegance.
      Our approach goes beyond aesthetics. By integrating smart technologies, sustainable materials, and human-centered design principles, we craft environments that enhance comfort, inspire creativity, and support wellbeing.
      From luxury residences to dynamic workspaces, Primeluxe envisions spaces that not only meet today’s needs but anticipate tomorrow’s possibilities. We are shaping a future where design is more than beauty it’s a way of living with purpose, harmony, and imagination.      </p>
    </div>


  </div>
</section>
<!---------------------------------------------End of Section--------------------------------------------------------->






@endsection



<script>
  document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".fade-on-scroll");

    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          // Trigger when the *bottom* of the section enters the viewport
          if (entry.isIntersecting) {
            entry.target.classList.remove("opacity-0", "translate-y-10");
            entry.target.classList.add("opacity-100", "translate-y-0");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 1.0, // 1.0 means trigger only when the whole section is visible (bottom reached)
        rootMargin: "0px 0px 40% 0px", // start slightly before full visibility
      }
    );

    sections.forEach((section) => observer.observe(section));
  });
</script>






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
    }
  ];

  const wrapper = document.getElementById("carousel-wrapper");
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
