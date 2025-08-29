<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payments - Dapit Himlay</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
  <style>
    body { margin: 0; padding: 0; }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Side Drawer -->
  <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 shadow-lg" tabindex="-1">
    <h5 class="text-base font-semibold text-gray-500 uppercase mb-4">Menu</h5>
    <button type="button" data-drawer-hide="drawer-navigation" class="absolute top-2.5 end-2.5 text-gray-400 hover:bg-gray-200 rounded-lg w-8 h-8 flex items-center justify-center">
      <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
      <span class="sr-only">Close menu</span>
    </button>

    <ul class="space-y-2 font-medium">
      <li><a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100">Dashboard</a></li>
      <li><a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100">Burials</a></li>
      <li><a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100">Map</a></li>
      <li><a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100 bg-gray-200">Payments</a></li>
      <li><a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-100">Reports</a></li>
    </ul>
  </div>

  <!-- Navbar -->
  <header class="fixed top-0 left-0 right-0 bg-white shadow px-6 py-4 flex justify-between items-center z-50">
    <div class="flex items-center">
      <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" class="text-gray-900 p-2 rounded-md hover:bg-gray-100">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <h1 class="text-2xl font-semibold ms-4">Payments</h1>
    </div>
    <div class="flex items-center space-x-4">
      <button class="flex items-center space-x-2 p-2 rounded-lg hover:bg-gray-100">
        <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/40" alt="Admin">
        <span>Admin</span>
      </button>
    </div>
  </header>

  <!-- Main content -->
  <main class="pt-24 ml-0 md:ml-64 px-6">
    <h2 class="text-xl font-semibold mb-4">Payment Records</h2>

    <!-- Payment Table -->
    <div class="overflow-x-auto shadow rounded-lg bg-white">
      <table class="w-full text-left text-sm text-gray-700">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-4 py-2">Invoice #</th>
            <th class="px-4 py-2">Customer</th>
            <th class="px-4 py-2">Amount</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Date</th>
            <th class="px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">INV001</td>
            <td class="px-4 py-2">Juan Dela Cruz</td>
            <td class="px-4 py-2">₱5,000</td>
            <td class="px-4 py-2 text-green-600 font-medium">Paid</td>
            <td class="px-4 py-2">2025-08-28</td>
            <td class="px-4 py-2">
              <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">View</button>
              <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Refund</button>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-50">
            <td class="px-4 py-2">INV002</td>
            <td class="px-4 py-2">Maria Santos</td>
            <td class="px-4 py-2">₱2,500</td>
            <td class="px-4 py-2 text-yellow-600 font-medium">Pending</td>
            <td class="px-4 py-2">2025-08-27</td>
            <td class="px-4 py-2">
              <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">View</button>
              <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Refund</button>
            </td>
          </tr>
          <!-- more rows -->
        </tbody>
      </table>
    </div>
  </main>

</body>
</html>
