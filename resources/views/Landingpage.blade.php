<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet" />
</head>

<body class="bg-gray-50">

    <!-- Content 1: Fullscreen Background Image with Styled Text & Buttons -->
    <section class="relative w-full h-screen">
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
    </section>


    <!-- Section 2: Lot Pricing & Options (Modern Formal Design) -->
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-16 flex flex-col space-y-12">

            <!-- Header -->
            <div class="flex flex-col items-center text-center space-y-4">
                <span class="text-yellow-500 font-semibold uppercase tracking-widest text-sm">Our Offerings</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">Lot Prices & Options</h2>
                <p class="text-gray-600 md:text-lg max-w-3xl">
                    At Davao Memorial Park, we provide a selection of <span
                        class="font-semibold text-yellow-500">premium lots</span> designed for tranquility and legacy.
                    Explore our options and find the one that best suits your family’s needs.
                </p>
            </div>

            <!-- Carousel -->
            <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-96 md:h-[500px] overflow-hidden rounded-2xl">

                    <!-- Slide 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="https://images.squarespace-cdn.com/content/v1/5a7a8b8ba8b2b0891d4e7289/45aa7456-a547-4801-ad2e-832ac5a981f1/20240422_152952.jpg"
                            class="absolute block w-full h-full object-cover top-0 left-0" alt="Standard Lot">
                    </div>

                    <!-- Slide 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://everesthillsmemorialpark.com/wp-content/uploads/2021/10/premium-lot.jpg"
                            class="absolute block w-full h-full object-cover top-0 left-0" alt="Premium Lot">
                    </div>

                    <!-- Slide 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://himlayangpilipino.org/wp-content/uploads/2021/02/Family-Estate-1024x679-1.jpg"
                            class="absolute block w-full h-full object-cover top-0 left-0" alt="Family Estate Lot">
                    </div>
                </div>

                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300" aria-current="false"
                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full bg-gray-300" aria-current="false"
                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/70 group-hover:bg-white transition">
                        <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/70 group-hover:bg-white transition">
                        <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <!-- Call to Action -->
            <div class="flex justify-center mt-8">
                <button data-modal-target="priceModal" data-modal-toggle="priceModal"
                    class="px-8 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-semibold rounded-lg hover:scale-105 transition-transform duration-300 flex items-center space-x-2">
                    <span>View Full Price List</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
            </div>

        </div>
    </section>



    <!-- Section 3: Our Location / Find Us (Modern Card Style) -->
    <section id="content3" class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-16 flex flex-col space-y-12">

            <!-- Header -->
            <div class="flex flex-col items-center text-center space-y-4">
                <span class="text-yellow-500 font-semibold uppercase tracking-widest text-sm">Our Location</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">Find Davao Memorial Park</h2>
                <p class="text-gray-600 md:text-lg max-w-3xl">
                    Easily accessible from all parts of Davao City, our park provides a peaceful and serene environment
                    to honor your loved ones. Visit us today or plan your arrangements with ease.
                </p>
            </div>

            <!-- Map Card -->
            <div class="bg-white rounded-2xl shadow-xl border-4 border-yellow-500 overflow-hidden">
                <div id="parkMapbox" class="w-full h-[400px] md:h-[500px]"></div>
            </div>

            <!-- Call to Action -->
            <div class="flex justify-center mt-6">
                <a href="https://goo.gl/maps/your-map-link" target="_blank"
                    class="px-8 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-semibold rounded-lg hover:scale-105 transition-transform duration-300 flex items-center space-x-2">
                    <span>Get Directions</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="w-full bg-gray-800 text-gray-200">
        <div class="w-full max-w-screen-xl mx-auto p-6 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold text-white whitespace-nowrap">Flowbite</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium sm:mb-0">
                    <li><a href="#" class="hover:underline mr-4 md:mr-6">About</a></li>
                    <li><a href="#" class="hover:underline mr-4 md:mr-6">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline mr-4 md:mr-6">Licensing</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <hr class="my-6 border-gray-600 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-gray-400 sm:text-center">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>








    {{-- !! MODAL AREA RIGHT HERE --}}


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
                        At <span class="font-semibold">Davao Memorial Park</span>, we provide more than just premium
                        lots —
                        we offer a lasting legacy of peace, love, and remembrance. Surrounded by serene landscapes,
                        our memorial spaces ensure your family’s future is honored with dignity and care.
                    </p>

                    <!-- Features -->
                    <div>
                        <h4 class="text-md font-bold text-gray-900 mb-3">Why Choose Us</h4>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2"><span class="text-yellow-500">🌿</span> Peaceful
                                Landscapes</li>
                            <li class="flex items-start gap-2"><span class="text-yellow-500">📍</span> Accessible
                                Location</li>
                            <li class="flex items-start gap-2"><span class="text-yellow-500">🤝</span> Compassionate
                                Support
                            </li>
                            <li class="flex items-start gap-2"><span class="text-yellow-500">💰</span> Flexible Pre-Need
                                Plans
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




   <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {

    // ----------------------------
    // 1️⃣ Initialize Mapbox
    // ----------------------------
    mapboxgl.accessToken = 'pk.eyJ1IjoiZWx0b25kYXZlZGVvbm8iLCJhIjoiY21hM2VmY3J5MDdqbDJrb2hvZHE2YWlqNSJ9.geC5I_J_EIfffyxTFccFQA';
    const parkCoords = [125.5844, 7.0615]; // Davao Memorial Park

    const mapDiv = document.getElementById('parkMapbox');
    if (mapDiv) {
        const map = new mapboxgl.Map({
            container: 'parkMapbox',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: parkCoords,
            zoom: 16
        });

        new mapboxgl.Marker({ color: '#ffc107' })
            .setLngLat(parkCoords)
            .setPopup(new mapboxgl.Popup().setText('Davao Memorial Park'))
            .addTo(map);

        map.addControl(new mapboxgl.NavigationControl(), 'top-right');
        map.addControl(new mapboxgl.FullscreenControl(), 'top-right');
        map.addControl(new mapboxgl.GeolocateControl({
            positionOptions: { enableHighAccuracy: true },
            trackUserLocation: true,
            showUserHeading: true
        }), 'top-right');
    }

    // ----------------------------
    // 2️⃣ Modal Toggle Logic
    // ----------------------------
    const modals = document.querySelectorAll('[data-modal-toggle], [data-modal-hide]');
    modals.forEach(btn => {
        const modalId = btn.dataset.modalToggle || btn.dataset.modalHide;
        const modal = document.getElementById(modalId);
        if (!modal) return;

        btn.addEventListener('click', () => {
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        });

        // Close modal when clicking outside content
        modal.addEventListener('click', e => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    });

    // ----------------------------
    // 3️⃣ Price Modal Tabs
    // ----------------------------
    const tabButtons = document.querySelectorAll('[data-tabs-target]');
    tabButtons.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.tabsTarget);

            // Hide all tab content
            document.querySelectorAll('#priceTabsContent > div').forEach(div => div.classList.add('hidden'));
            // Remove border highlight on all tabs
            tabButtons.forEach(t => t.classList.remove('border-blue-500'));

            // Show selected tab
            target.classList.remove('hidden');
            tab.classList.add('border-blue-500');
        });
    });

});
</script>

    </script>

</body>

</html>