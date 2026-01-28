@extends('layouts.app')
@section('content')

<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
  style="background-image: url('{{ asset('images/HOME/SECTION 5/inside news/NEWS 3/1.jpg') }}');"
>
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/30"></div>

  <!-- Text Content -->
  <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl">


    <br>
    

  </div>
</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->






<!--------------------------------------------- 2nd Section --------------------------------------------------------->
<section class="w-full bg-white py-20" id="about">
  <div class="max-w-4xl mx-auto px-6 flex flex-col gap-20">

    <!-- Who We Are -->
    <div class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out text-center">
       <div class="container mx-auto px-6 md:px-12">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Find Us Here</h2>
    <div class="rounded-lg overflow-hidden shadow-lg">

      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d811.5564961277616!2d120.99817532252506!3d14.631229248459263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sph!4v1762151076371!5m2!1sen!2sph" 
        width="1000" 
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









<!---------------------------------------------3rd Section--------------------------------------------------------->
<section class="fade-on-scroll w-full bg-white py-20" id="contact_us_details">
  <div class="fade-on-scroll opacity-0 translate-y-10 transition-all duration-1000 ease-out text-center">
    <div class="container mx-auto px-6 md:px-12">
      
      <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Contact Us</h2>
      
      <div class="rounded-lg overflow-hidden shadow-lg bg-gray-50 p-8 max-w-2xl mx-auto">
          <!-- Name Fields -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
              <label for="first_name" class="block text-gray-700 font-medium mb-1">First Name</label>
              <input type="text" id="first_name" name="first_name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
            </div>
            <div>
              <label for="middle_name" class="block text-gray-700 font-medium mb-1">Middle Name</label>
              <input type="text" id="middle_name" name="middle_name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-yellow-500 focus:outline-none">
            </div>
            <div>
              <label for="last_name" class="block text-gray-700 font-medium mb-1">Last Name</label>
              <input type="text" id="last_name" name="last_name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
            </div>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
          </div>

          <!-- Phone -->
          <div>
            <label for="phone" class="block text-gray-700 font-medium mb-1">Phone (PH)</label>
            <input type="tel" id="phone" name="phone" placeholder="+63 9XXXXXXXXX" pattern="^(\+63|0)9\d{9}$" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
          </div>

          <!-- Message -->
          <div>
            <label for="message" class="block text-gray-700 font-medium mb-1">Message</label>
            <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-yellow-500 focus:outline-none" placeholder="Write your message here..." required></textarea>
          </div>

          <!-- Submit Button -->
          <div class="text-center pt-4">
            <button type="submit" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-md transition-all duration-300">
              Submit
            </button>
          </div>
      </div>

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





