@extends('layouts.app')
@section('content')

<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-[70vh] sm:min-h-[80vh] lg:min-h-screen flex flex-col items-center justify-center text-center bg-cover bg-center bg-no-repeat overflow-hidden transition-all duration-700"
  style="background-image: url('{{ asset('images/HOME/SECTION 5/inside news/NEWS 2/1.jpg') }}');"
>
  <!-- 🔥 Overlay -->
  <div class="absolute inset-0 bg-black/40 sm:bg-black/30 md:bg-black/20 z-[1] pointer-events-none"></div>


  </div>
</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->




<!---------------------------------------------2nd Section--------------------------------------------------------->
<section class="w-full bg-white py-20" id="about">
  <div class="max-w-4xl mx-auto px-6 flex flex-col gap-20">

    <!-- Who We Are -->
    <div class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out text-center">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">Defining the Future of Interior Design</h2>
      <p class="text-gray-600 text-justify  text-lg">

      At Primeluxe Living and Design Inc., we take pride in creating interiors that reflect the warmth, spirit, and elegance of the Filipino home. Our design philosophy celebrates the unique blend of tradition and modernity that defines Filipino living where family, comfort, and connection are at the heart of every space.
      We craft interiors that adapt beautifully to the Philippine lifestyle balancing functionality with style, and sophistication with practicality. From urban condominiums to spacious family homes, each project is thoughtfully designed to embrace natural light, tropical textures, and timeless aesthetics suited to our local climate and culture.
      Our mission is simple: to design homes that feel authentically Filipino yet distinctly modern spaces that inspire, nurture, and elevate everyday living.
      Primeluxe crafting spaces that honor Filipino values, beauty, and the art of living well.    

    </p>
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





