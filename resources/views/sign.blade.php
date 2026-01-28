<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient from-purple-50 to-pink-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Create Account</h1>
                <p class="text-gray-600">Sign up to get started</p>
            </div>

            <!-- Signup Form -->
            <form class="space-y-5" method="POST">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Full Name
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name"
                        placeholder="Enter your full name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 outline-none"
                        required
                    >
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        placeholder="Enter your email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 outline-none"
                        required
                    >
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        placeholder="Create a password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 outline-none"
                        required
                    >
                </div>

                <!-- Confirm Password Field -->
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-2">
                        Confirm Password
                    </label>
                    <input 
                        type="password" 
                        id="confirm-password" 
                        name="confirm-password"
                        placeholder="Confirm your password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200 outline-none"
                        required
                    >
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-start">
                    <input 
                        type="checkbox" 
                        id="terms" 
                        name="terms"
                        class="w-4 h-4 mt-1 text-purple-600 border-gray-300 rounded focus:ring-purple-500"
                        required
                    >
                    <label for="terms" class="ml-2 text-sm text-gray-700">
                        I agree to the <a href="#" class="text-purple-600 hover:text-purple-800 transition duration-200">Terms and Conditions</a> and <a href="#" class="text-purple-600 hover:text-purple-800 transition duration-200">Privacy Policy</a>
                    </label>
                </div>

                <!-- Signup Button -->
                <button 
                    type="submit"
                    class="w-full bg-purple-600 text-white py-3 rounded-lg font-medium hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 transition duration-200 transform hover:scale-[1.02]"
                >
                    Sign Up
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

            <!-- Login Link -->
            <div class="text-center">
                <p class="text-gray-600">
                    Already have an account? 
                    <a href="login.html" class="text-purple-600 font-medium hover:text-purple-800 transition duration-200">
                        Login
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