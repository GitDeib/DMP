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

  <nav class="fixed w-full z-50 bg-transparent border-b border-transparent">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-4">

      <!-- Logo -->
      <a href="#" class="flex items-center space-x-3">
        <img src="{{ asset('images/DLogo.png') }}" alt="Logo" class="h-10 w-auto invert">
        <span class="self-center text-2xl font-bold text-white">Davao Memorial Park</span>
      </a>

      <!-- Right Side -->
      <div class="flex md:order-2 space-x-3 md:space-x-6 rtl:space-x-reverse">
        <!-- Find Loved One's Button -->
        <a href="{{ route('public.map') }}"
          class="flex items-center px-5 py-2 border-2 border-yellow-400 text-yellow-400 rounded-lg font-medium hover:bg-yellow-400 hover:text-black transition duration-300">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 18.5 7.5 7.5 0 0016.65 16.65z"></path>
          </svg>
          Find Loved One's
        </a>


        <!-- Mobile Menu Button -->
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-200 rounded-lg md:hidden hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-yellow-400"
          aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>

      <!-- Collapsible Menu -->
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul
          class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg bg-black/40 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-transparent">
          <ul
            class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg bg-black/40 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-transparent">
            <li>
              <a href="#" id="goHome" class="block py-2 px-3 text-white hover:text-yellow-400 transition">Memorial
                Care</a>
            </li>
            <li>
              <a href="#" id="goHome2" class="block py-2 px-3 text-white hover:text-yellow-400 transition">Lot
                Options</a>
            </li>
            <li>
              <a href="#" id="goAbout" class="block py-2 px-3 text-white hover:text-yellow-400 transition">Location</a>
            </li>
          </ul>

        </ul>
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
            <img src="{{ asset('Images/SunCem.jpg') }}" alt="Davao Memorial Park"
              class="w-full h-full object-cover brightness-50">
          </div>

          <!-- Overlay Content -->
          <div class="absolute inset-0 flex flex-col justify-center items-center px-6 md:px-20 py-12 text-center z-10">
            <div class="max-w-3xl space-y-6">

              <!-- Heading -->
              <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight drop-shadow-xl">
                Secure Your <span class="text-yellow-400">Family's Future</span>
              </h1>

              <!-- Description -->
              <p class="text-base md:text-lg lg:text-xl text-gray-200 leading-relaxed drop-shadow-md">
                At <span class="font-semibold">Davao Memorial Park</span>, we provide more than just premium lots —
                we offer a lasting legacy of peace, love, and remembrance.
                Surrounded by serene landscapes, our memorial spaces ensure that your family’s future
                is honored with dignity and care.
              </p>
              <p class="text-sm md:text-base text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Whether you’re planning ahead or securing a resting place for your loved ones,
                our team is here to assist you every step of the way. Choose peace of mind today.
              </p>

              <!-- Buttons -->
              <div class="mt-6 flex flex-col sm:flex-row items-center justify-center gap-4">
                <!-- Solid Yellow Button -->
                <!-- Learn More Button -->
                <button data-modal-target="learnmore-modal" data-modal-toggle="learnmore-modal" class="px-6 py-2 bg-yellow-500 text-black text-base font-semibold rounded-md shadow-md
               border-2 border-transparent hover:bg-transparent hover:text-yellow-500 hover:border-yellow-500
               transition-all duration-300">
                  Learn More
                </button>

                <!-- Outlined Yellow Button -->
                <button data-modal-target="timeline-modal" data-modal-toggle="timeline-modal" class="px-6 py-2 bg-transparent text-yellow-500 text-base font-semibold rounded-md shadow-md
               border-2 border-yellow-500 hover:bg-yellow-500 hover:text-black
               transition-all duration-300">
                  Contact Us
                </button>
              </div>
            </div>
          </div>
        </div>


        {{-- ! MODAL FOR CONTACT US Start --}}
        <div id="timeline-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
            justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                  Contact Us
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
                       rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center"
                  data-modal-toggle="timeline-modal">
                  ✕
                </button>
              </div>


              <div class="p-4 md:p-5">
                <ol class="relative border-s border-gray-200 ms-3.5 mb-4 md:mb-5">

                  <!-- Phone -->
                  <li class="mb-10 ms-8">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full 
                         -start-3.5 ring-8 ring-white">
                      📞
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Phone</h3>
                    <time class="block mb-3 text-sm font-normal leading-none text-gray-500">
                      +63 912 345 6789
                    </time>
                  </li>

                  <!-- Email -->
                  <li class="mb-10 ms-8">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-green-100 rounded-full 
                         -start-3.5 ring-8 ring-white">
                      ✉️
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Email</h3>
                    <time class="block mb-3 text-sm font-normal leading-none text-gray-500">
                      info@davaomemorialpark.com
                    </time>
                  </li>

                  <!-- Address -->
                  <li class="ms-8">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-red-100 rounded-full 
                         -start-3.5 ring-8 ring-white">
                      📍
                    </span>
                    <h3 class="mb-1 text-lg font-semibold text-gray-900">Address</h3>
                    <time class="block mb-3 text-sm font-normal leading-none text-gray-500">
                      27 Roxas Ave, Poblacion District, Davao City, 8000 Davao del Sur
                    </time>
                  </li>
                </ol>

                <!-- Footer Button -->
                <button data-modal-toggle="timeline-modal" class="text-black inline-flex w-full justify-center bg-yellow-500 hover:bg-yellow-600 
               focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg 
               text-sm px-5 py-2.5 text-center">
                  Close
                </button>

              </div>
            </div>
          </div>
        </div>
        {{-- ! MODAL FOR CONTACT US END --}}


        {{-- ! LEARN MORE MODAL START --}}

        <!-- Learn More Modal -->
        <div id="learnmore-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 
            justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm">

              <!-- Header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold text-gray-900">
                  About Davao Memorial Park
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 
                       rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center"
                  data-modal-toggle="learnmore-modal">
                  ✕
                </button>
              </div>

              <!-- Body -->
              <div class="p-4 md:p-6 space-y-6 text-gray-700">
                <p>
                  At <span class="font-semibold">Davao Memorial Park</span>, we provide more than just premium lots —
                  we offer a lasting legacy of peace, love, and remembrance. Surrounded by serene landscapes,
                  our memorial spaces ensure your family’s future is honored with dignity and care.
                </p>

                <!-- Features -->
                <div>
                  <h4 class="text-md font-bold text-gray-900 mb-3">Why Choose Us</h4>
                  <ul class="space-y-2">
                    <li class="flex items-start gap-2"><span class="text-yellow-500">🌿</span> Peaceful Landscapes</li>
                    <li class="flex items-start gap-2"><span class="text-yellow-500">📍</span> Accessible Location</li>
                    <li class="flex items-start gap-2"><span class="text-yellow-500">🤝</span> Compassionate Support
                    </li>
                    <li class="flex items-start gap-2"><span class="text-yellow-500">💰</span> Flexible Pre-Need Plans
                    </li>
                  </ul>
                </div>

                <!-- Testimonial -->
                <blockquote class="border-l-4 border-yellow-500 pl-4 italic text-gray-700">
                  “Our family found peace of mind knowing our loved one rests in a serene and dignified place.”
                </blockquote>
              </div>

              <!-- Footer -->
              <div class="flex justify-end p-4 md:p-5 border-t border-gray-200">
                <button data-modal-toggle="learnmore-modal"
                  class="px-5 py-2 bg-yellow-500 text-black rounded-md font-medium hover:bg-yellow-600 transition">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>

        {{-- ! LEARN MORE MODAL END --}}


        <!-- Slide 2 - Modern Lot Prices -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <!-- Background -->
          <div class="absolute inset-0">
            <img src="{{ asset('Images/SunCem.jpg') }}" alt="Lot Prices"
              class="w-full h-full object-cover brightness-50">
          </div>

          <!-- Overlay -->
          <div
            class="absolute inset-0 flex flex-col items-center justify-center px-6 md:px-20 py-12 text-center z-10 space-y-8">
            <!-- Centered Text Section -->
            <div class="max-w-3xl space-y-4">
              <h2 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight drop-shadow-lg">
                Lot Prices & Options
              </h2>
              <p class="text-m md:text-m text-gray-200 drop-shadow-md">
                Discover the perfect resting place for your family. Our lots are designed with peace, comfort, and
                long-term legacy in mind. Choose from Standard, Premium, or Family Estate options, each offering its own
                unique benefits and serene environment. Secure a lot today and ensure a lasting space for generations to
                come.
              </p>
              <button data-modal-target="priceModal" data-modal-toggle="priceModal" class="mt-4 px-6 py-2 bg-yellow-500 text-black text-base font-semibold rounded-lg
                     border-2 border-transparent hover:bg-transparent hover:text-yellow-500 hover:border-yellow-500
                     transition-all duration-300 transform hover:scale-105">
                More Info
              </button>
            </div>

            <!-- Cards Section Below -->
            <div class="mt-10 w-full flex flex-wrap justify-center gap-6">
              <!-- Card 1 -->
              <div class="w-[300px] md:w-[360px] flex flex-col items-center text-white">
                <img
                  src="https://images.squarespace-cdn.com/content/v1/5a7a8b8ba8b2b0891d4e7289/45aa7456-a547-4801-ad2e-832ac5a981f1/20240422_152952.jpg"
                  class="w-full h-60 object-cover shadow-lg rounded-lg">
                <h3 class="mt-2 text-xl font-semibold">Standard Lot</h3>
              </div>
              <!-- Card 2 -->
              <div class="w-[300px] md:w-[360px] flex flex-col items-center text-white">
                <img src="https://everesthillsmemorialpark.com/wp-content/uploads/2021/10/premium-lot.jpg"
                  class="w-full h-60 object-cover shadow-lg rounded-lg">
                <h3 class="mt-2 text-xl font-semibold">Premium Lot</h3>
              </div>
              <!-- Card 3 -->
              <div class="w-[300px] md:w-[360px] flex flex-col items-center text-white">
                <img src="https://himlayangpilipino.org/wp-content/uploads/2021/02/Family-Estate-1024x679-1.jpg"
                  class="w-full h-60 object-cover shadow-lg rounded-lg">
                <h3 class="mt-2 text-xl font-semibold">Family Estate Lot</h3>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div id="priceModal" tabindex="-1" aria-hidden="true"
          class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
          <div class="relative p-4 w-full max-w-6xl h-full md:h-auto mx-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
              <!-- Header -->
              <div class="flex justify-between items-start p-5 rounded-t border-b border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">
                  Davao Memorial Park - Price Bulletin
                </h3>
                <button type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                  data-modal-hide="priceModal">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>

              <!-- Body with Tabs -->
              <div class="p-6 space-y-4">
                <!-- Tabs -->
                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200"
                  id="priceTabs" data-tabs-toggle="#priceTabsContent" role="tablist">
                  <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-blue-500" id="cash-tab"
                      data-tabs-target="#cash" type="button" role="tab" aria-controls="cash" aria-selected="true">Cash
                      Price</button>
                  </li>
                  <li class="mr-2" role="presentation">
                    <button
                      class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                      id="withDP-tab" data-tabs-target="#withDP" type="button" role="tab" aria-controls="withDP"
                      aria-selected="false">Installment with DP</button>
                  </li>
                  <li role="presentation">
                    <button
                      class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300"
                      id="noDP-tab" data-tabs-target="#noDP" type="button" role="tab" aria-controls="noDP"
                      aria-selected="false">Installment without DP</button>
                  </li>
                </ul>

                <!-- Tab Contents -->
                <div id="priceTabsContent">
                  <!-- Cash Price -->
                  <div id="cash" class="block p-4 bg-gray-50 rounded-lg" role="tabpanel" aria-labelledby="cash-tab">
                    <h6 class="font-bold mb-2 text-gray-900">Cash Price (At-Need & Pre-Need)</h6>
                    <div class="overflow-x-auto">
                      <table class="w-full text-sm text-left text-gray-700">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                          <tr>
                            <th class="px-4 py-2">Type of Lots</th>
                            <th class="px-4 py-2">At-Need</th>
                            <th class="px-4 py-2">Pre-Need</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="border-b">
                            <td class="px-4 py-2">1-Lot Lawn Area - Regular</td>
                            <td class="px-4 py-2">₱180,000</td>
                            <td class="px-4 py-2">₱175,000</td>
                          </tr>
                          <tr class="border-b">
                            <td class="px-4 py-2">1-Lot Lawn Area - Premium</td>
                            <td class="px-4 py-2">₱200,000</td>
                            <td class="px-4 py-2">₱190,000</td>
                          </tr>
                          <tr class="border-b">
                            <td class="px-4 py-2">1-Family Estate (17-Lot)</td>
                            <td class="px-4 py-2">₱4,250,000</td>
                            <td class="px-4 py-2">₱3,995,000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <!-- Installment with DP -->
                  <div id="withDP" class="hidden p-4 bg-gray-50 rounded-lg" role="tabpanel"
                    aria-labelledby="withDP-tab">
                    <h6 class="font-bold mb-2 text-gray-900">Installment Plans with Downpayment</h6>
                    <div class="overflow-x-auto">
                      <table class="w-full text-sm text-center text-gray-700">
                        <thead class="bg-gray-200">
                          <tr>
                            <th rowspan="2" class="px-2 py-1">Type of Lot</th>
                            <th colspan="2" class="px-2 py-1">12 Months</th>
                            <th colspan="2" class="px-2 py-1">24 Months</th>
                            <th colspan="2" class="px-2 py-1">36 Months</th>
                            <th colspan="2" class="px-2 py-1">48 Months</th>
                            <th colspan="2" class="px-2 py-1">60 Months</th>
                          </tr>
                          <tr>
                            <th>DP</th>
                            <th>Monthly</th>
                            <th>DP</th>
                            <th>Monthly</th>
                            <th>DP</th>
                            <th>Monthly</th>
                            <th>DP</th>
                            <th>Monthly</th>
                            <th>DP</th>
                            <th>Monthly</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="border-b">
                            <td class="px-2 py-1">1-Lot Lawn Area - Regular</td>
                            <td>₱43,750</td>
                            <td>₱11,539</td>
                            <td>₱43,750</td>
                            <td>₱5,190</td>
                            <td>₱43,750</td>
                            <td>₱4,235</td>
                            <td>₱43,750</td>
                            <td>₱3,320</td>
                            <td>₱43,750</td>
                            <td>₱2,789</td>
                          </tr>
                          <tr class="border-b">
                            <td class="px-2 py-1">1-Lot Lawn Area - Premium</td>
                            <td>₱47,500</td>
                            <td>₱12,198</td>
                            <td>₱47,500</td>
                            <td>₱5,671</td>
                            <td>₱47,500</td>
                            <td>₱4,558</td>
                            <td>₱47,500</td>
                            <td>₱3,614</td>
                            <td>₱47,500</td>
                            <td>₱3,028</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <!-- Installment without DP -->
                  <div id="noDP" class="hidden p-4 bg-gray-50 rounded-lg" role="tabpanel" aria-labelledby="noDP-tab">
                    <h6 class="font-bold mb-2 text-gray-900">Installment Plans without Downpayment</h6>
                    <div class="overflow-x-auto">
                      <table class="w-full text-sm text-center text-gray-700">
                        <thead class="bg-gray-200">
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
                          <tr class="border-b">
                            <td>1-Lot Lawn Area - Regular</td>
                            <td>₱15,549</td>
                            <td>₱8,238</td>
                            <td>₱5,813</td>
                            <td>₱4,508</td>
                            <td>₱3,893</td>
                          </tr>
                          <tr class="border-b">
                            <td>1-Lot Lawn Area - Premium</td>
                            <td>₱16,681</td>
                            <td>₱8,944</td>
                            <td>₱6,391</td>
                            <td>₱5,003</td>
                            <td>₱4,226</td>
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
              <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button data-modal-hide="priceModal" type="button"
                  class="px-6 py-2 text-black bg-yellow-500 hover:bg-yellow-600 rounded-lg font-semibold">Close</button>
              </div>
            </div>
          </div>
        </div>



        <!-- Slide 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
  <img src="{{ asset('Images/SunCem.jpg') }}" class="absolute block w-full h-full object-cover" alt="Slide 3">

  <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30 grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-12 items-center px-6 md:px-16 py-12">

    <!-- Info Section -->
    <div class="md:col-span-2 text-center md:text-left space-y-6">
      <h2 class="text-5xl md:text-6xl font-extrabold leading-tight text-white drop-shadow-lg">
        Davao Memorial Park <span class="text-yellow-400">Your Family's Legacy</span>
      </h2>
      <p class="text-md md:text-lg text-gray-200 leading-relaxed max-w-md mx-auto md:mx-0">
        Located along Maa Road, Davao City, Davao Memorial Park offers a peaceful, beautifully landscaped environment for honoring your loved ones.
      </p>
      <button onclick="locateMeMapbox()" class="mt-6 inline-flex items-center gap-2 px-6 py-3 bg-yellow-500 text-black font-semibold rounded-lg shadow-md
            hover:bg-transparent hover:text-yellow-500 hover:border hover:border-yellow-500 transition-all duration-300 transform hover:scale-105">
        Locate Me <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 0l3 6H7l3-6z"/></svg>
      </button>
    </div>

    <!-- Map Section -->
    <div class="md:col-span-3 relative">
      <div id="parkMapbox" class="w-full h-[350px] md:h-[450px] rounded-2xl shadow-2xl border-4 border-white/20 overflow-hidden transition-transform duration-500 hover:scale-105"></div>
    </div>

  </div>
</div>



        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
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
    document.addEventListener("DOMContentLoaded", () => {
      // grab the slide indicators
      const indicators = document.querySelectorAll(
        '#default-carousel [data-carousel-slide-to]'
      );

      // nav buttons
      document.getElementById("goHome").addEventListener("click", (e) => {
        e.preventDefault();
        indicators[0].click(); // go to 2nd slide
      });

      document.getElementById("goHome2").addEventListener("click", (e) => {
        e.preventDefault();
        indicators[1].click(); // go to 2nd slide
      });

      document.getElementById("goAbout").addEventListener("click", (e) => {
        e.preventDefault();
        indicators[2].click(); // go to 3rd slide
      });
    });

  </script>
</body>

</html>