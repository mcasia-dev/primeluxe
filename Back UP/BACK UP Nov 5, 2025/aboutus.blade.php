@extends('layouts.app')
@section('content')


<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
  style="background-image: url('{{ asset('images/ABOUT US/SECTION 1/1.jpg') }}');"
>
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/30"></div>

  <!-- Text Content -->
  <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl">


  </div>
</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->









<!---------------------------------------------2nd Section--------------------------------------------------------->
<section class="w-full bg-white py-20" id="about">
  <div class="max-w-4xl mx-auto px-6 flex flex-col gap-20">

    <!-- Who We Are -->
    <div class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out text-center">
      <h2 class="text-4xl font-bold text-gray-900 mb-4">ABOUT US</h2>
      <p class="text-gray-600 text-justify leading-relaxed text-lg">
        Primeluxe Living and Design Inc., we are redefining what it means to live beautifully. We believe that interior design is more than arranging spaces it’s about shaping experiences, elevating lifestyles, and creating environments that inspire.
        Driven by innovation and passion, we blend modern aesthetics, functionality, and timeless elegance to bring every client’s vision to life. Our team of design professionals is committed to delivering spaces that reflect individuality while embracing sustainability, comfort, and cutting-edge design solutions.
        From bespoke residential interiors to dynamic commercial environments, Primeluxe transforms spaces into meaningful expressions of style and purpose. By combining craftsmanship, creativity, and forward-thinking design, we continue to define the future of interior design one space at a time.
        Primeluxe Living and Design Inc.  where innovation meets elegance, and design becomes a way of life
      </p>
    </div>

  </div>
</section>
<!---------------------------------------------End of Section--------------------------------------------------------->











<!---------------------------------------------3rd Section - Photo Grid--------------------------------------------------------->
<section class="w-full bg-white py-20" id="gallery">
  <div class="ease-out max-w-7xl mx-auto px-4">


    <div class="columns-2 md:columns-3 lg:columns-4 gap-3 space-y-3">

      <img src="https://5.imimg.com/data5/SELLER/Default/2024/5/422189093/ST/BG/WO/79672000/home-interior-living-room-decor-services.jpg"
           alt="Landscape"
           class="w-full rounded-lg hover:opacity-90 transition duration-500">

      <img src="https://i.pinimg.com/originals/de/ce/ec/deceec218070571e0df7f420bcf44176.jpg"
           alt="Portrait"
           class="w-full rounded-lg hover:opacity-90 transition duration-500">

      <img src="https://edwardgeorgelondon.com/wp-content/uploads/content/11-small-home-interior-design-ideas-6.jpg"
           alt="Furniture"
           class="w-full rounded-lg hover:opacity-90 transition duration-500">

      <img src="https://www.hunarcourses.com/blog/wp-content/uploads/2021/04/home-interior-design-ideas.jpg"
           alt="Kitchen"
           class="w-full rounded-lg hover:opacity-90 transition duration-500">

      <img src="https://decormatters-blog-uploads.s3.amazonaws.com/Snapinsta_app_275777327_1041429770085974_7125702586252520560_n_1080_ea3a526140.jpg"
           alt="Interior"
           class="w-full rounded-lg hover:opacity-90 transition duration-500">

      <img src="https://hommes.studio/wp-content/uploads/Get-To-Know-12-Of-The-Most-Popular-Interior-Design-Styles_2.jpg"
           alt="Design"
           class="w-full rounded-lg hover:opacity-90 transition duration-500">

      <img src="https://hips.hearstapps.com/hmg-prod/images/hbx010124ashleygilbreath-005-66bb73da7d511.jpg?crop=0.923xw:1.00xh;0.0646xw,0"
           alt="Decor"
           class="w-full rounded-lg hover:opacity-90 transition duration-500">

      <img src="https://cdn.decorilla.com/online-decorating/wp-content/uploads/2024/12/Mountain-rustic-home-before-and-after-by-Decorilla-1024x683.jpeg?width=900"
           alt="Lighting"
           class="w-full rounded-lg hover:opacity-90 transition duration-500">

    </div>

  </div>
</section>
<!---------------------------------------------End of 3rd Section--------------------------------------------------------->















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
