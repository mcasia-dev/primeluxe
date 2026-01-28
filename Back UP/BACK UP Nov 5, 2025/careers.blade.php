@extends('layouts.app')
@section('content')


<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
  style="background-image: url('https://simplifiedsafety.com/media/wysiwyg/articles/contractor-meeting.jpg');"
>
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Text Content -->
  <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl">
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight drop-shadow-lg">
      CAREERS
    </h1>

    <br>
    

  </div>
</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->





<!---------------------------------------------5th Section - Call to Action--------------------------------------------------------->
<section 
  class="w-full bg-gray-50 py-24"
  id="cta"
>
  <div class="max-w-4xl mx-auto text-center px-6">
    <!-- Title -->
    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
      Join The McAsia Foodtrade Corporation 
    </h2>

    <!-- Description -->
    <p class="text-lg text-gray-600 mb-10 leading-relaxed">
      Discover how we combine elegance, innovation, and craftsmanship 
      to create interiors that truly inspire. Partner with us to bring 
      your vision to life.
    </p>

    <!-- Buttons -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="#contact"
         class="bg-gray-900 text-white px-8 py-3 rounded-md font-medium hover:bg-gray-700 transition-colors duration-300">
         Apply in Jobstreet
      </a>
      <a href="#gallery"
         class="border border-gray-900 text-gray-900 px-8 py-3 rounded-md font-medium hover:bg-gray-900 hover:text-white transition-colors duration-300">
         Apply in Indeed
      </a>


      
    </div>
  </div>
</section>
<!---------------------------------------------End of 5th Section--------------------------------------------------------->


















@endsection


