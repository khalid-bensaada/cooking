<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h1>
                <p class="text-gray-600">Please login to your account</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-6" method="POST" >
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input type="email" id="email" name="email" placeholder="Enter your email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 outline-none"
                        required>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Enter your password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition duration-200 outline-none"
                        required>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <label for="remember" class="ml-2 text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 transition duration-200">
                        Forgot password?
                    </a>
                </div>

                <!-- Login Button -->
                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 transition duration-200 transform hover:scale-[1.02]">
                    Login
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-500">or</span>
                </div>
            </div>

            <!-- Signup Link -->
            <div class="text-center">
                <p class="text-gray-600">
                    Don't have an account?
                    <a href="signup.html"
                        class="text-indigo-600 font-medium hover:text-indigo-800 transition duration-200">
                        Sign up
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <p class="text-center text-gray-600 text-sm mt-6">
            © 2026 Your Company. All rights reserved.
        </p>
    </div>
</body>

</html>