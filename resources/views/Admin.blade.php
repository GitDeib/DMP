<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - Dapit Himlay</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://unpkg.com/flowbite@1.7.0/dist/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">

<!-- drawer component -->
<div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400 mb-4">Menu</h5>

    <!-- Close button -->
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <div class="py-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
        <!-- Dashboard -->
        <li>
            <a href="{{ route('Admin') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5"/>
                </svg>
                <span class="ms-3">Dashboard</span>
            </a>
        </li>

        <!-- Burial Management -->
        <li>
            <button type="button" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group" data-collapse-toggle="burial-menu">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 8H4m0-2v13a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-5.032a1 1 0 0 1-.768-.36l-1.9-2.28a1 1 0 0 0-.768-.36H5a1 1 0 0 0-1 1Z"/>
                </svg>
                <span class="flex-1 ms-3 text-left">Burial Management</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 0 1 1.414 0L10 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
            <ul id="burial-menu" class="hidden py-2 space-y-2">
                <li>
                    <a href="#" class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.005 11.19V12l6.998 4.042L19 12v-.81M5 16.15v.81L11.997 21l6.998-4.042v-.81M12.003 3 5.005 7.042l6.998 4.042L19 7.042 12.003 3Z"/>
                        </svg>
                        <span class="ms-2">Burials</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
                        </svg>
                        <span class="ms-2">Contracts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Payment') }}" class="flex items-center p-2 pl-11 w-full text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                        <span class="ms-2">Payments</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Map Management -->
        <li>
            <a href="{{ route('Map') }}" class="flex items-center p-2 w-full text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <!-- Map icon -->
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A2 2 0 0 1 3 15.382V5.618a2 2 0 0 1 2.553-1.894L9 6l6-3 5.447 2.724A2 2 0 0 1 21 8.618v9.764a2 2 0 0 1-1.553 1.894L15 18l-6 3z"/>
                </svg>
                <span class="ms-3">Map</span>
            </a>
        </li>

        <!-- Reports -->
        <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
                </svg>
                <span class="ms-3">Reports</span>
            </a>
        </li>

        <!-- User Management -->
        <li>
            <a href="{{ route('users') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                </svg>
                <span class="ms-3">User Management</span>
            </a>
        </li>

        <!-- Settings -->
        <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>
                <span class="ms-3">Settings</span>
            </a>
        </li>
    </ul>
    </div>
</div>


<!-- Main content -->
<div class="ml-0 md:ml-64 transition-all duration-300">
    <!-- Navbar -->
    <header class="bg-white dark:bg-gray-800 shadow px-6 py-4 flex justify-between items-center">
        <!-- drawer init and show icon -->
        <div class="flex items-center">
            <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-900 dark:text-white p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                <!-- Hamburger icon -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <h1 class="text-2xl font-semibold ms-4">Dashboard</h1>
        </div>
        <div class="flex items-center space-x-4">
            <div class="relative">
                <button class="flex items-center space-x-2 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img class="w-8 h-8 rounded-full" src="{{ asset('images/user.png') }}" alt="User">
                    <span>Admin</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Stats cards -->
    <main class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Available Plots -->
        <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md transform hover:scale-105 transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-700">Available Plots</p>
                    <p class="text-2xl font-bold mt-2 text-gray-900">45</p>
                </div>
                <div class="bg-gray-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Pending Contracts -->
        <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md transform hover:scale-105 transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-700">Pending Contracts</p>
                    <p class="text-2xl font-bold mt-2 text-gray-900">12</p>
                </div>
                <div class="bg-gray-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l2 2 4-4"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Current Month Client Installments -->
        <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md transform hover:scale-105 transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-700">Current Month Client Installments</p>
                    <p class="text-2xl font-bold mt-2 text-gray-900">7</p>
                </div>
                <div class="bg-gray-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Overdue Payments -->
        <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-md transform hover:scale-105 transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-700">Overdue Payments</p>
                    <p class="text-2xl font-bold mt-2 text-gray-900">58</p>
                </div>
                <div class="bg-gray-100 p-3 rounded-full">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5v14"/>
                    </svg>
                </div>
            </div>
        </div>
    </main>


    <section class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg mt-6">
    <h2 class="text-xl font-semibold mb-4">Upcoming Payments</h2>

    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4 space-y-4 md:space-y-0">
        <!-- Search bar -->
        <div class="relative w-full md:w-1/2">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <div class="relative w-64"> <!-- smaller width -->
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 20 20">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search-users" class="block w-full pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for plot owners">
            </div>
        </div>

        <!-- Month calendar filter -->
        <div>
            <input type="month" id="month-filter" class="text-sm px-3 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-black focus:ring-blue-500 focus:border-blue-500">
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="p-3 border-b border-gray-200 dark:border-gray-600">Plot Owner</th>
                    <th class="p-3 border-b border-gray-200 dark:border-gray-600">Plot</th>
                    <th class="p-3 border-b border-gray-200 dark:border-gray-600">Contract Status</th>
                    <th class="p-3 border-b border-gray-200 dark:border-gray-600">Payment Status</th>
                    <th class="p-3 border-b border-gray-200 dark:border-gray-600">Consecutive Overdue Payments</th>   
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">John Doe</td>
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">Phase 1 - Plot 12</td>
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">
                        <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-yellow-800 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                            <span class="w-2.5 h-2.5 mr-2 rounded-full bg-yellow-500"></span>
                            Pending
                        </span>
                    </td>
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">
                        <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-800 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                            <span class="w-2.5 h-2.5 mr-2 rounded-full bg-red-500"></span>
                            Unpaid
                        </span>
                    </td>
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600 text-red-600 font-semibold">3</td>
                </tr>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">Jane Smith</td>
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">Phase 2 - Plot 3</td>
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">
                        <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            <span class="w-2.5 h-2.5 mr-2 rounded-full bg-green-500"></span>
                            Active
                        </span>
                    </td>
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">
                        <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            <span class="w-2.5 h-2.5 mr-2 rounded-full bg-green-500"></span>
                            Paid
                        </span>
                    </td>
                    <td class="p-3 border-b border-gray-200 dark:border-gray-600">2</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

</div>

<script src="https://unpkg.com/flowbite@1.7.0/dist/flowbite.min.js"></script>
</body>
</html>
