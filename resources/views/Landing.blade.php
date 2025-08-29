<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet" />
</head>

<style>
 #card-carousel {
  perspective: 1000px;
}

.card-item {
  opacity: 0;
  transform: scale(0.7) translateX(200px);
  transition: all 0.6s ease;
}

.card-item.active {
  opacity: 1;
  z-index: 20;
  transform: scale(1) translateX(0);
}

.card-item.left {
  opacity: 0.6;
  z-index: 10;
  transform: scale(0.8) translateX(-200px);
}

.card-item.right {
  opacity: 0.6;
  z-index: 10;
  transform: scale(0.8) translateX(200px);
}

</style>

<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-transparent">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto px-6 py-4">
            
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('images/DLogo.png') }}" alt="Logo" class="h-12 w-auto" style= "filter: invert(1);"> 
                <span class="text-2xl font-bold text-white">Davao Memorial Park</span>
            </a>

            <!-- Menu -->
            <div class="flex space-x-8">
                <a href="{{ route('public.map') }}" class="flex items-center text-white hover:text-gray-300 text-lg font-medium">
                    <!-- Magnifying Glass Icon -->
                    <svg class="w-5 h-5 mr-2 text-white" fill="none" stroke="currentColor" stroke-width="2" 
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18.5 7.5 7.5 0 0016.65 16.65z">
                        </path>
                    </svg>
                    Find Loved One's
                </a>
            </div>
        </div>
    </nav>


   <!-- Fullscreen Carousel -->
    <section id="home" class="relative">
    <div id="default-carousel" class="relative w-full h-screen" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-screen overflow-hidden">
                
                <!-- Background image -->
                <img src="{{ asset('Images/SunCem.jpg') }}" alt="Slide 1" class="absolute block w-full h-full object-cover">

                <!-- Slide 1 - Modern Hero with Fixed Right Image + Highlights -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <!-- Background Image -->
                    <div class="absolute inset-0">
                        <img src="{{ asset('Images/SunCem.jpg') }}" alt="Davao Memorial Park" class="w-full h-full object-cover brightness-50">
                    </div>

                    <!-- Overlay Content -->
                    <div class="absolute inset-0 flex flex-col md:flex-row justify-between items-center px-6 md:px-20 py-12">
                        <!-- Left Text Block -->
                        <div class="text-center md:text-left md:max-w-xl space-y-6 z-10">
                            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight drop-shadow-lg">
                                Secure Your Family's Future
                            </h1>
                            <p class="text-lg md:text-xl text-gray-200 max-w-md leading-relaxed drop-shadow-md">
                                Premium memorial lots at Davao Memorial Park. Peaceful, beautiful, and exclusive spaces for your loved ones.
                            </p>
                            <a href="#about" class="mt-6 inline-block px-10 py-4 bg-yellow-500 text-black text-lg md:text-xl font-semibold rounded-xl shadow-lg
                            border-2 border-transparent hover:bg-transparent hover:text-yellow-500 hover:border-yellow-500
                            transition-all duration-300 transform hover:scale-105">
                                Learn More
                            </a>
                        </div>

                        <!-- Right Image + Highlights -->
                        <div class="relative mt-12 md:mt-0 w-full md:w-1/2 flex justify-center items-start">
                            <!-- Main Image Card -->
                            <div class="bg-white shadow-2xl overflow-hidden w-[340px] md:w-[400px] lg:w-[450px] transform hover:scale-105 transition duration-500">
                                <img src="{{ asset('Images/SunCem.jpg') }}" alt="Memorial Park" class="w-full h-[360px] object-cover">
                                <div class="p-4 text-center">
                                    <h3 class="font-bold text-lg">Davao Memorial Park</h3>
                                    <p class="text-gray-500 text-sm mt-1">Serene, safe, and premium plots for your family.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Slide 2 - Modern Lot Prices -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <!-- Background -->
                    <div class="absolute inset-0">
                        <img src="{{ asset('Images/SunCem.jpg') }}" alt="Lot Prices" class="w-full h-full object-cover brightness-50">
                    </div>

                    <!-- Overlay -->
                    <div class="absolute inset-0 flex flex-col md:flex-row items-center justify-between px-6 md:px-20 py-12">
                        <!-- Left Text -->
                        <div class="text-center md:text-left md:max-w-lg space-y-6 z-10">
                            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight drop-shadow-lg">
                                Lot Prices & Details
                            </h2>
                            <p class="text-lg md:text-xl text-gray-200 leading-relaxed max-w-md drop-shadow-md">
                                Choose the perfect lot for your family. Flexible options and packages designed to suit your needs.
                            </p>
                            <button 
                                data-modal-target="priceModal" 
                                data-modal-toggle="priceModal"
                                class="mt-6 inline-block px-10 py-4 bg-yellow-500 text-black text-lg md:text-xl font-semibold rounded-xl shadow-lg
                                border-2 border-transparent hover:bg-transparent hover:text-yellow-500 hover:border-yellow-500
                                transition-all duration-300 transform hover:scale-105">
                                More Info
                            </button>
                        </div>

                        <!-- Right Cards Carousel -->
                        <div class="relative mt-12 md:mt-0 w-full md:w-1/2 flex justify-center items-start">
                            <div id="card-carousel" class="relative w-[520px] md:w-[380px] lg:w-[450px] h-[500px]">
                                <!-- Card 1 -->
                                <div class="card-item absolute w-full h-full flex flex-col items-center justify-center p-4 text-white transition-all duration-700 hover:scale-105">
                                    <img src="https://images.squarespace-cdn.com/content/v1/5a7a8b8ba8b2b0891d4e7289/45aa7456-a547-4801-ad2e-832ac5a981f1/20240422_152952.jpg"
                                        class="w-full h-[550px] object-cover shadow-lg">
                                    <p class="mt-4 text-lg md:text-xl font-semibold">Standard Lot</p>
                                </div>
                                <!-- Card 2 -->
                                <div class="card-item absolute w-full h-full flex flex-col items-center justify-center p-4 text-white transition-all duration-700 hover:scale-105">
                                    <img src="https://everesthillsmemorialpark.com/wp-content/uploads/2021/10/premium-lot.jpg"
                                        class="w-full h-[550px] object-cover shadow-lg">
                                    <p class="mt-4 text-lg md:text-xl font-semibold">Premium Lot</p>
                                </div>
                                <!-- Card 3 -->
                                <div class="card-item absolute w-full h-full flex flex-col items-center justify-center p-4 text-white transition-all duration-700 hover:scale-105">
                                    <img src="https://himlayangpilipino.org/wp-content/uploads/2021/02/Family-Estate-1024x679-1.jpg"
                                        class="w-full h-[550px] object-cover shadow-lg">
                                    <p class="mt-4 text-lg md:text-xl font-semibold">Family Estate Lot</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              <!-- Modal -->
              <div id="priceModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-6xl h-full md:h-auto mx-auto">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Header -->
                    <div class="flex justify-between items-start p-5 rounded-t border-b border-gray-200 dark:border-gray-700">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Davao Memorial Park - Price Bulletin
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-hide="priceModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                      </button>
                    </div>

                    <!-- Body with Tabs -->
                    <div class="p-6 space-y-4">
                      <!-- Tabs -->
                      <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" id="priceTabs" data-tabs-toggle="#priceTabsContent" role="tablist">
                        <li class="mr-2" role="presentation">
                          <button class="inline-block p-4 rounded-t-lg border-b-2 border-blue-500 dark:border-blue-400" id="cash-tab" data-tabs-target="#cash" type="button" role="tab" aria-controls="cash" aria-selected="true">Cash Price</button>
                        </li>
                        <li class="mr-2" role="presentation">
                          <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="withDP-tab" data-tabs-target="#withDP" type="button" role="tab" aria-controls="withDP" aria-selected="false">Installment with DP</button>
                        </li>
                        <li role="presentation">
                          <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="noDP-tab" data-tabs-target="#noDP" type="button" role="tab" aria-controls="noDP" aria-selected="false">Installment without DP</button>
                        </li>
                      </ul>

                      <!-- Tab Contents -->
                      <div id="priceTabsContent">
                        <!-- Cash Price -->
                        <div id="cash" class="block p-4 bg-gray-50 rounded-lg dark:bg-gray-800" role="tabpanel" aria-labelledby="cash-tab">
                          <h6 class="font-bold mb-2 text-white">Cash Price (At-Need & Pre-Need)</h6>
                          <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
                              <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-200">
                                <tr>
                                  <th class="px-4 py-2">Type of Lots</th>
                                  <th class="px-4 py-2">At-Need</th>
                                  <th class="px-4 py-2">Pre-Need</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="border-b dark:border-gray-700">
                                  <td class="px-4 py-2">1-Lot Lawn Area - Regular</td>
                                  <td class="px-4 py-2">₱180,000</td>
                                  <td class="px-4 py-2">₱175,000</td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                  <td class="px-4 py-2">1-Lot Lawn Area - Premium</td>
                                  <td class="px-4 py-2">₱200,000</td>
                                  <td class="px-4 py-2">₱190,000</td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                  <td class="px-4 py-2">1-Family Estate (17-Lot)</td>
                                  <td class="px-4 py-2">₱4,250,000</td>
                                  <td class="px-4 py-2">₱3,995,000</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <!-- Installment with DP -->
                        <div id="withDP" class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" role="tabpanel" aria-labelledby="withDP-tab">
                          <h6 class="font-bold mb-2 text-white">Installment Plans with Downpayment</h6>
                          <div class="overflow-x-auto">
                            <table class="w-full text-sm text-center text-gray-700 dark:text-gray-200">
                              <thead class="bg-gray-200 dark:bg-gray-700">
                                <tr>
                                  <th rowspan="2" class="px-2 py-1">Type of Lot</th>
                                  <th colspan="2" class="px-2 py-1">12 Months</th>
                                  <th colspan="2" class="px-2 py-1">24 Months</th>
                                  <th colspan="2" class="px-2 py-1">36 Months</th>
                                  <th colspan="2" class="px-2 py-1">48 Months</th>
                                  <th colspan="2" class="px-2 py-1">60 Months</th>
                                </tr>
                                <tr>
                                  <th>DP</th><th>Monthly</th>
                                  <th>DP</th><th>Monthly</th>
                                  <th>DP</th><th>Monthly</th>
                                  <th>DP</th><th>Monthly</th>
                                  <th>DP</th><th>Monthly</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="border-b dark:border-gray-700">
                                  <td class="px-2 py-1">1-Lot Lawn Area - Regular</td>
                                  <td>₱43,750</td><td>₱11,539</td>
                                  <td>₱43,750</td><td>₱5,190</td>
                                  <td>₱43,750</td><td>₱4,235</td>
                                  <td>₱43,750</td><td>₱3,320</td>
                                  <td>₱43,750</td><td>₱2,789</td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                  <td class="px-2 py-1">1-Lot Lawn Area - Premium</td>
                                  <td>₱47,500</td><td>₱12,198</td>
                                  <td>₱47,500</td><td>₱5,671</td>
                                  <td>₱47,500</td><td>₱4,558</td>
                                  <td>₱47,500</td><td>₱3,614</td>
                                  <td>₱47,500</td><td>₱3,028</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <!-- Installment without DP -->
                        <div id="noDP" class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" role="tabpanel" aria-labelledby="noDP-tab">
                          <h6 class="font-bold mb-2 text-white">Installment Plans without Downpayment</h6>
                          <div class="overflow-x-auto">
                            <table class="w-full text-sm text-center text-gray-700 dark:text-gray-200">
                              <thead class="bg-gray-200 dark:bg-gray-700">
                                <tr>
                                  <th>Type of Lot</th>
                                  <th>12 Months</th>
                                  <th>24 Months</th>
                                  <th>36 Months</th>
                                  <th>48 Months</th>
                                  <th>60 Months</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="border-b dark:border-gray-700">
                                  <td>1-Lot Lawn Area - Regular</td>
                                  <td>₱15,549</td><td>₱8,238</td><td>₱5,813</td><td>₱4,508</td><td>₱3,893</td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                  <td>1-Lot Lawn Area - Premium</td>
                                  <td>₱16,681</td><td>₱8,944</td><td>₱6,391</td><td>₱5,003</td><td>₱4,226</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div class="mt-4 text-sm text-gray-500 text-center">
                          <p>* All lots have Double Interment Privilege (DIP)</p>
                          <p>* Prices exclude interment, transfer, and other fees</p>
                          <p>* Prices may change without prior notice</p>
                        </div>
                      </div>
                    </div>

                    <!-- Footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-700">
                      <button data-modal-hide="priceModal" type="button" class="px-6 py-2 text-white bg-gray-600 hover:bg-gray-700 rounded-lg">Close</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Slide 3 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <!-- Background -->
                <img src="{{ asset('Images/SunCem.jpg') }}" 
                    class="absolute block w-full h-full object-cover" alt="Slide 3">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/70 grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-10 items-center px-6 md:px-16 py-12">

                  <!-- Left Info Section -->
                  <div class="md:col-span-2 text-center md:text-left space-y-6">
                    <h2 class="text-4xl md:text-5xl font-extrabold leading-tight text-white drop-shadow-lg">
                      Davao Memorial Park
                    </h2>
                    <p class="text-lg md:text-xl text-gray-200 leading-relaxed">
                      Located along Maa Road, Davao City, Davao Memorial Park offers a peaceful 
                      and beautifully landscaped environment for honoring your loved ones.
                    </p>
                    <button onclick="locateMeMapbox()" 
                            class="mt-6 inline-block px-10 py-4 bg-yellow-500 text-black text-lg md:text-xl font-semibold rounded-xl shadow-lg
                            border-2 border-transparent hover:bg-transparent hover:text-yellow-500 hover:border-yellow-500
                            transition-all duration-300 transform hover:scale-105">
                      Locate Me
                    </button>
                  </div>

                  <!-- Right Map Section -->
                  <div class="md:col-span-3 relative">
                    <div id="parkMapbox" class="w-full h-[350px] md:h-[450px] shadow-2xl overflow-hidden border-4 border-white/20"></div>
                  </div>

                </div>
              </div>

            
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true" 
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-label="Slide 2" 
                        data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-label="Slide 3" 
                        data-carousel-slide-to="2"></button>
            </div>
        </div>
    </section>

    <!-- Lot Type -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll("#card-carousel .card-item");
    let index = 0;

    function updateCarousel() {
      cards.forEach((card, i) => {
        card.classList.remove("active", "left", "right");
        if (i === index) {
          card.classList.add("active");
        } else if (i === (index + 1) % cards.length) {
          card.classList.add("right");
        } else if (i === (index + cards.length - 1) % cards.length) {
          card.classList.add("left");
        }
      });
    }

    function nextSlide() {
      index = (index + 1) % cards.length;
      updateCarousel();
    }

    updateCarousel();
    setInterval(nextSlide, 4000); // auto rotate every 4s
  });
</script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  // === CONFIG ===
  mapboxgl.accessToken = 'pk.eyJ1IjoiZWx0b25kYXZlZGVvbm8iLCJhIjoiY21hM2VmY3J5MDdqbDJrb2hvZHE2YWlqNSJ9.geC5I_J_EIfffyxTFccFQA';
  const parkCoords = [125.5844, 7.0615]; // [lng, lat]

  // === STATE ===
  let mapboxInitialized = false;
  let geoControl = null;

  // === initialize map (only once) ===
  function initMap() {
    if (mapboxInitialized) return;
    const mapDiv = document.getElementById('parkMapbox');
    if (!mapDiv) return;

    const map = new mapboxgl.Map({
      container: 'parkMapbox',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: parkCoords,
      zoom: 16
    });

    map.on('load', () => {
      // Add park marker
      new mapboxgl.Marker({ color: '#ffc107' })
        .setLngLat(parkCoords)
        .setPopup(new mapboxgl.Popup().setText('Davao Memorial Park'))
        .addTo(map);

      // Add controls
      map.addControl(new mapboxgl.NavigationControl(), 'top-right'); // zoom & compass
      map.addControl(new mapboxgl.FullscreenControl(), 'top-right'); // fullscreen
    });

    window.parkMapboxInstance = map;
    mapboxInitialized = true;
  }

  // === show map when container is visible ===
  function showParkMapbox() {
    const mapDiv = document.getElementById('parkMapbox');
    if (!mapDiv) return;

    if (getComputedStyle(mapDiv).display === 'none' || mapDiv.offsetHeight === 0) {
      // Wait until container becomes visible
      const observer = new MutationObserver((mutations, obs) => {
        if (getComputedStyle(mapDiv).display !== 'none' && mapDiv.offsetHeight > 0) {
          initMap();
          obs.disconnect();
        }
      });
      observer.observe(mapDiv, { attributes: true, attributeFilter: ['class', 'style'] });
      return;
    }

    initMap();
  }

  // === locate user with GeolocateControl ===
  function locateMeMapbox() {
    showParkMapbox();
    const map = window.parkMapboxInstance;
    if (!map) return;

    if (!geoControl) {
      geoControl = new mapboxgl.GeolocateControl({
        positionOptions: { enableHighAccuracy: true },
        trackUserLocation: true,
        showUserHeading: true
      });
      map.addControl(geoControl, 'top-right');
    }

    geoControl.trigger(); // fly to user location
  }

  // expose globally
  window.showParkMapbox = showParkMapbox;
  window.locateMeMapbox = locateMeMapbox;

  // === detect 3rd slide visibility ===
  const slides = Array.from(document.querySelectorAll('[data-carousel-item]'));
  if (slides.length === 0) return;

  const carouselRoot = document.querySelector('#default-carousel') || document.body;
  const observer = new MutationObserver(() => {
    slides.forEach((slide, idx) => {
      if (!slide.classList.contains('hidden') && idx === 2) {
        setTimeout(showParkMapbox, 300);
      }
    });
  });
  observer.observe(carouselRoot, { attributes: true, childList: true, subtree: true });

  // initial check in case 3rd slide is already active
  slides.forEach((slide, idx) => {
    if (!slide.classList.contains('hidden') && idx === 2) {
      setTimeout(showParkMapbox, 300);
    }
  });
});
</script>
</body>
</html>
