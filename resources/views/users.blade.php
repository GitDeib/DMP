<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <!-- Flaticon UIcons (solid/regular/bold depending on what you use) -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    {{-- @include('.layouts.navigation') --}}
    <div class="container mx-auto px-4 py-8">
        <!-- Header: Title + Search + Create Button -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
            <div class="mb-4 md:mb-0">
                <h1 class="text-3xl font-bold text-gray-900">User Management</h1>
                <p class="text-gray-500 mt-1">Manage all interment staff and admin accounts.</p>
            </div>
            <div class="flex items-center space-x-3">
                <!-- Search input -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search-users" placeholder="Search users"
                        class="pl-10 pr-4 py-2 w-80 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <!-- Create Account Button -->
                <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="flex items-center bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg px-4 py-2 text-sm">
                    <i class="fi fi-br-user-plus mr-2"></i> Create Account
                </button>
            </div>
        </div>


        <!-- Table -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Phone Number</th>
                        <th scope="col" class="px-6 py-3">Role</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($staffs as $staff)
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                  
                                        <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900">
                                            <img class="w-10 h-10 rounded-full"
                                                src="https://ui-avatars.com/api/?name={{ urlencode($staff->firstname . ' ' . $staff->lastname) }}"
                                                alt="{{ $staff->firstname }}">
                                            <div class="ps-3">
                                                <div class="text-base font-semibold">{{ $staff->firstname }} {{ $staff->lastname }}
                                                </div>
                                            </div>
                                        </th>
                                        <td class="px-6 py-4">{{ $staff->email }}</td>
                                        <td class="px-6 py-4">{{ $staff->phonenumber }}</td>
                                        <td class="px-6 py-4">{{ $staff->role }}</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="px-2 py-1 rounded-full text-sm font-semibold
                                                                                                {{ $staff->status === 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                {{ $staff->status }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 flex flex-wrap gap-2">
                                            <!-- Edit Button -->
                                            <button type="button" data-edit-user data-user-id="{{ $staff->id }}"
                                                data-firstname="{{ $staff->firstname }}" data-middlename="{{ $staff->middlename }}"
                                                data-lastname="{{ $staff->lastname }}" data-email="{{ $staff->email }}"
                                                data-phonenumber="{{ $staff->phonenumber }}" data-role="{{ $staff->role }}" class="inline-flex items-center text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 
                               focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                                                <i class="fi fi-br-user-pen mr-2"></i>
                                                Edit
                                            </button>

                                            <!-- Toggle Status Button -->
                                            <form action="{{ route('users.toggleStatus', $staff->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit"
                                                    class="inline-flex items-center font-medium rounded-lg text-sm px-4 py-2 focus:ring-4 focus:outline-none
                            {{ $staff->status === 'Active'
                        ? 'text-red-700 border border-red-700 hover:text-white hover:bg-red-800 focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600'
                        : 'text-green-700 border border-green-700 hover:text-white hover:bg-green-800 focus:ring-green-300 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600' }}">

                                                    @if($staff->status === 'Active')
                                                        <i class="fi fi-br-ban mr-2"></i>
                                                        Deactivate
                                                    @else
                                                        <i class="fi fi-br-check mr-2"></i>
                                                        Activate
                                                    @endif
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{-- !! CREATE ACCOUNT MODAL --}}

    @if(session('success'))
        <div id="success-toast"
            class="fixed bottom-5 right-5 z-50 flex items-center w-full max-w-xs p-4 mb-4 text-green-800 bg-green-200 rounded-lg shadow-lg dark:text-green-400 dark:bg-green-800"
            role="alert">
            <svg class="w-5 h-5 inline mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 6.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <div class="text-sm font-normal">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-200 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-300 inline-flex h-8 w-8 dark:bg-green-800 dark:text-green-400 dark:hover:bg-green-700"
                aria-label="Close" onclick="document.getElementById('success-toast').remove();">
                <span class="sr-only">Close</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif


    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Create Interment Staff Account
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('interment-staff.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">First
                                Name</label>
                            <input type="text" name="firstname" id="firstname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="John" required />
                        </div>
                        <div>
                            <label for="middlename" class="block mb-2 text-sm font-medium text-gray-900">Middle
                                Name</label>
                            <input type="text" name="middlename" id="middlename"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="A." />
                        </div>
                        <div>
                            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                            <input type="text" name="lastname" id="lastname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Doe" required />
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="john.doe@example.com" required />
                        </div>
                        <div>
                            <label for="phonenumber" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                Number</label>
                            <input type="tel" name="phonenumber" id="phonenumber"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="09123456789" required />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Create Account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- !!! EDIT USER MODAL --}}
    <!-- EDIT USER MODAL -->
    <div id="edit-user-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="relative w-full max-w-md p-4">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow-lg">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Update Interment Staff Information
                    </h3>
                    <button type="button"
                        class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                        data-modal-hide="edit-user-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4">
                    <form id="edit-user-form" class="space-y-4" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="user_id" id="edit-user-id">

                        <div>
                            <label for="edit-firstname" class="block mb-2 text-sm font-medium text-gray-900">First
                                Name</label>
                            <input type="text" name="firstname" id="edit-firstname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>

                        <div>
                            <label for="edit-middlename" class="block mb-2 text-sm font-medium text-gray-900">Middle
                                Name</label>
                            <input type="text" name="middlename" id="edit-middlename"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                        </div>

                        <div>
                            <label for="edit-lastname" class="block mb-2 text-sm font-medium text-gray-900">Last
                                Name</label>
                            <input type="text" name="lastname" id="edit-lastname"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>

                        <div>
                            <label for="edit-email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="edit-email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>

                        <div>
                            <label for="edit-phonenumber" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                Number</label>
                            <input type="tel" name="phonenumber" id="edit-phonenumber"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required />
                        </div>

                        <div>
                            <label for="edit-role" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                            <select name="role" id="edit-role"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="admin">Admin</option>
                                <option value="interment_staff">Interment Staff</option>
                            </select>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Update User
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script>
        // Auto hide after 4 seconds
        setTimeout(() => {
            const toast = document.getElementById('success-toast');
            if (toast) toast.remove();
        }, 4000);

        const searchInput = document.getElementById('table-search-users');
        const table = document.querySelector('table'); // simpler selector
        const rows = table.querySelectorAll('tbody tr');

        searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase();

            rows.forEach(row => {

                const nameCell = row.querySelector('th div div');
                const name = nameCell ? nameCell.textContent.toLowerCase() : '';


                const emailCell = row.querySelector('td:nth-of-type(1) + td');
                const email = emailCell ? emailCell.textContent.toLowerCase() : '';


                const phoneCell = row.querySelector('td:nth-of-type(2) + td');
                const phone = phoneCell ? phoneCell.textContent.toLowerCase() : '';


                if (name.includes(query) || email.includes(query) || phone.includes(query)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });




        // !! EDIT USER MODAL FUNCTIONALITY

        const editButtons = document.querySelectorAll('button[data-edit-user]');
        const editModal = document.getElementById('edit-user-modal');
        const editForm = document.getElementById('edit-user-form');

        editButtons.forEach(button => {
            button.addEventListener('click', () => {
                const userId = button.dataset.userId;
                const firstname = button.dataset.firstname;
                const middlename = button.dataset.middlename;
                const lastname = button.dataset.lastname;
                const email = button.dataset.email;
                const phonenumber = button.dataset.phonenumber;
                const role = button.dataset.role;

                // Fill the form fields
                document.getElementById('edit-user-id').value = userId;
                document.getElementById('edit-firstname').value = firstname;
                document.getElementById('edit-middlename').value = middlename;
                document.getElementById('edit-lastname').value = lastname;
                document.getElementById('edit-email').value = email;
                document.getElementById('edit-phonenumber').value = phonenumber;
                document.getElementById('edit-role').value = role;


                editForm.action = `/users/${userId}`; // assumes your Laravel route: Route::patch('/users/{id}', ...)


                editModal.classList.remove('hidden');
            });
        });


        editModal.querySelector('[data-modal-hide]').addEventListener('click', () => {
            editModal.classList.add('hidden');
        });


        editModal.addEventListener('click', (e) => {
            if (e.target === editModal) {
                editModal.classList.add('hidden');
            }
        });


    </script>
</body>

</html>