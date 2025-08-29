<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Management</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">User Management</h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <!-- Table header -->
        <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white">
            <!-- Action dropdown -->
            <div>
                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                    Action
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Reward</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Promote</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Activate account</a></li>
                    </ul>
                    <div class="py-1"><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete User</a></div>
                </div>
            </div>

            <!-- Search input -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for users">
            </div>
        </div>

        <!-- Table -->
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="p-4"><input type="checkbox" class="w-4 h-4"></th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Position</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy Users -->
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User 1">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Neil Sims</div>
                            <div class="font-normal text-gray-500">neil.sims@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">React Developer</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/women/2.jpg" alt="User 2">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Bonnie Green</div>
                            <div class="font-normal text-gray-500">bonnie@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Designer</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/men/3.jpg" alt="User 3">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Jese Leos</div>
                            <div class="font-normal text-gray-500">jese@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Vue JS Developer</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/women/4.jpg" alt="User 4">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Leslie Livingston</div>
                            <div class="font-normal text-gray-500">leslie@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">SEO Specialist</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/men/5.jpg" alt="User 5">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Thomas Lean</div>
                            <div class="font-normal text-gray-500">thomas@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">UI/UX Engineer</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <!-- Add 5 more dummy users similarly -->
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/women/5.jpg" alt="User 6">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Anna Bell</div>
                            <div class="font-normal text-gray-500">anna@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Backend Developer</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/men/6.jpg" alt="User 7">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Mark Twain</div>
                            <div class="font-normal text-gray-500">mark@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Project Manager</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/women/6.jpg" alt="User 8">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Mary Jane</div>
                            <div class="font-normal text-gray-500">mary@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">QA Engineer</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/men/7.jpg" alt="User 9">
                        <div class="ps-3">
                            <div class="text-base font-semibold">John Doe</div>
                            <div class="font-normal text-gray-500">john@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Intern</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
                <tr class="bg-white hover:bg-gray-50">
                    <td class="w-4 p-4"><input type="checkbox" class="w-4 h-4"></td>
                    <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                        <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/women/7.jpg" alt="User 10">
                        <div class="ps-3">
                            <div class="text-base font-semibold">Olivia Smith</div>
                            <div class="font-normal text-gray-500">olivia@example.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">Product Owner</td>
                    <td class="px-6 py-4 flex items-center"><div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online</td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline">Edit user</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>
</html>
