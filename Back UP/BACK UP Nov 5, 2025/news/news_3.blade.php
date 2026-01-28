
@extends('layouts.app')
@section('content')

<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-[70vh] sm:min-h-[85vh] lg:min-h-screen flex items-center justify-center text-center bg-cover bg-center overflow-hidden"
  style="background-image: url('{{ asset('images/HOME/SECTION 5/inside news/NEWS 3/1.jpg') }}');"
>
  <!-- 🔥 Overlay -->
  <div class="absolute inset-0 bg-black/40 sm:bg-black/30 md:bg-black/20 z-[1] pointer-events-none"></div>

</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->




<!---------------------------------------------2nd Section--------------------------------------------------------->
<section class="w-full bg-white py-20" id="about">
  <div class="max-w-4xl mx-auto px-6 flex flex-col gap-20">

    <!-- Who We Are -->
    <div class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out text-center">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">How Technology Elevates Modern Kitchens</h2>
      <p class="text-gray-600 text-justify leading-relaxed text-lg">

      Today’s kitchens are more than just spaces for cooking they are the heart of the home, where technology and design come together to create efficiency, comfort, and style. At Primeluxe Living and Design Inc., we believe that innovation transforms the way people experience everyday living, and the modern kitchen is a true reflection of that transformation.
      Through the integration of smart appliances, intelligent lighting systems, and space-saving solutions, we design kitchens that are not only visually stunning but also remarkably functional. Technology allows us to create seamless experiences from touchless fixtures and automated ventilation to energy-efficient systems that make daily routines effortless and sustainable.
      Our approach goes beyond convenience; it’s about redefining how the kitchen enhances connection, creativity, and the rhythm of modern life. By combining cutting-edge design with smart innovation, we craft spaces that empower homeowners to live smarter, cook better, and enjoy more meaningful moments at home.
      At Primeluxe, we design kitchens where technology and artistry meet elevating the heart of every home.   

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
        rootMargin: "0px 0px -10% 0px", // start slightly before full visibility
      }
    );

    sections.forEach((section) => observer.observe(section));
  });
</script>

