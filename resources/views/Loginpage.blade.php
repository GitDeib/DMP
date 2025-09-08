<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white w-full max-w-6xl rounded-2xl shadow-md grid grid-cols-1 md:grid-cols-2 overflow-hidden">

        <div class="p-12">

            <h1 class="text-sm font-medium mb-6 text-yellow-500"><span class="text-yellow-500">●</span> Dapit Himlay</h1>

            <h2 class="text-3xl font-bold mb-2">System Access Login</h2>
            <p class="text-gray-500 mb-6">Sign in with your official credentials..</p>

            <form action="#">
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" placeholder="Enter your email"
                        class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 text-base p-3" />
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" placeholder="••••••••"
                        class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring-purple-500 text-base p-3" />
                </div>

                <div class="flex items-center justify-between mb-8">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox"
                            class="h-4 w-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                        <span class="ml-2">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-yellow-600 hover:underline">Forgot password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-700 text-white font-medium py-3 rounded-lg text-base">
                    Sign in
                </button>

                <p class="text-sm text-gray-600 mt-8 text-center">
                    For assistance, please <a href="#" class="text-yellow-600 hover:underline">contact the
                        administrator</a>.
                </p>
            </form>
        </div>
        <div class="hidden md:flex items-center justify-center bg-gray-50 relative overflow-hidden">

            <div class="relative">
                <div class="w-40 h-40 bg-yellow-600 rounded-full"></div>
            </div>


            <div class="absolute bottom-0 left-0 w-full h-1/2 
              bg-white/40 backdrop-blur-3xl"></div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>