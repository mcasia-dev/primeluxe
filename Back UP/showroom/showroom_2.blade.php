@extends('layouts.app')
@section('content')


<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  id="contact-section"
  class="w-full bg-white py-20 opacity-0 translate-y-10 transition-all duration-1000"
>
  <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-10">
    
    <!-- Left: Image -->
    <div class="md:w-1/2 order-1 md:order-1">
      <img 
        src="https://i.ytimg.com/vi/vNZOQiQHBaY/maxresdefault.jpg" 
        alt="Wood Workshop" 
        class="rounded-lg shadow-lg w-full object-cover h-[400px]"
      >
    </div>

    <!-- Right: Info -->
    <div class="md:w-1/2 space-y-4 order-2 md:order-2">
      <h2 class="text-3xl font-bold text-gray-800">Our Workshop & Store</h2>
      <p class="text-gray-600">Address: 123 Woodcraft Avenue, Timber City, PH</p>
      <div class="text-gray-700">
        <p><strong>Monday to Friday:</strong> 8:00 AM - 5:00 PM</p>
        <p><strong>Saturday:</strong> 11:00 AM - 5:00 PM</p>
        <p><strong>Sunday:</strong> Closed</p>
        <p class="mt-2"><em>Sunday & Holidays by Appointment Only</em></p>
      </div>
      <p class="text-gray-700 mt-3">
        <strong>Phone:</strong> +63 912 345 6789
      </p>
      <button class="mt-6 bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-lg transition">Contact Us</button>
    </div>

  </div>
</section>

<!--------------------------------------------- End of Section --------------------------------------------------------->













<!--------------------------------------------- 2nd Section --------------------------------------------------------->

<section 
  id="map-section"
  class="w-full bg-gray-100 py-20 opacity-0 translate-y-10 transition-all duration-1000"
>
  <div class="container mx-auto px-6 md:px-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Find Us Here</h2>
    <div class="rounded-lg overflow-hidden shadow-lg">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3856.9792075804007!2d121.07551616564562!3d14.826425024626378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTTCsDQ5JzM1LjEiTiAxMjHCsDA0JzQwLjkiRQ!5e0!3m2!1sen!2sph!4v1762130357124!5m2!1sen!2sph" 
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->













@endsection






<script>
  document.addEventListener("DOMContentLoaded", () => {
    const fadeSections = document.querySelectorAll("#contact-section, #map-section");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.remove("opacity-0", "translate-y-10");
          entry.target.classList.add("opacity-100", "translate-y-0");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    fadeSections.forEach(section => observer.observe(section));
  });
</script>
