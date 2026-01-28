@extends('layouts.app')
@section('content')


<!--------------------------------------------- 1st Section --------------------------------------------------------->
<section 
  class="relative w-full min-h-screen flex items-center justify-center text-center bg-cover bg-center"
  style="background-image: url('https://blog.kryton.com/wp-content/uploads/2020/05/Construction-Pandemic-News-Round-Up-2-980x460.jpg');"
>
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Text Content -->
  <div class="relative z-10 text-white px-6 sm:px-10 max-w-4xl">
    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight drop-shadow-lg">
      NEWS
    </h1>

    <br>
    

  </div>
</section>
<!--------------------------------------------- End of Section --------------------------------------------------------->





<!---------------------------------------------2nd Section--------------------------------------------------------->
<section 
  id="articles"
  class="w-full py-20 bg-white flex flex-col items-center"
>

  <!-- Cards Container -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-7xl px-6">
    
    <!-- Card 1 -->
    <div class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
      <div class="relative w-full h-64 overflow-hidden">
        <img src="{{ asset('images/HOME/SECTION 5/1.jpeg') }}" 
             alt="Interior Design" 
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">MAFBEX 2025</h3>
        <p class="text-gray-600 mb-5">
          MAFBEX 2025 was held at the World Trade Center Manila, and McAsia Foodtrade Corporation was proud to be part of this exciting event.
        </p>
        <a href="#" 
           class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
          Read More
        </a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
      <div class="relative w-full h-64 overflow-hidden">
        <img src="{{ asset('images/HOME/SECTION 5/2.jpg') }}" 
             alt="Kitchen Designs" 
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">WOFEX lloilo 2025</h3>
        <p class="text-gray-600 mb-5">
          McAsia Foodtrade Corporation brought bold flavors and kitchen excitement to WOFEX Iloilo 2025! We proudly joined the event to showcase our wide range of sauces, condiments, and Asian ingredients that bring authentic flavors to every kitchen.
        </p>
        <a href="#" 
           class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
          Read More
        </a>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="group bg-gray-100 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2">
      <div class="relative w-full h-64 overflow-hidden">
        <img src="{{ asset('images/HOME/SECTION 5/3.jpeg') }}" 
             alt="Bedroom Styles" 
             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">WOFEX Manila 2025</h3>
        <p class="text-gray-600 mb-5">
          McAsia Foodtrade Corporation brought authentic Asian flavors to life at the recently concluded WOFEX Manila World Food Expo 2025, the country’s biggest stage for food and beverage innovation.
        </p>
        <a href="#" 
           class="inline-block bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition-all">
          Read More
        </a>
      </div>
    </div>
  </div>
</section>
<!---------------------------------------------End of 2nd Section--------------------------------------------------------->


















@endsection


