<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookBook - Share & Discover Recipes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-6">
            <div class="flex items-center justify-center">
                <span class="text-3xl mr-2">👨‍🍳</span>
                <h1 class="text-3xl font-bold text-orange-600">CookBook</h1>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient from-orange-100 to-yellow-100 py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Share & Discover Amazing Recipes
            </h2>
            <p class="text-lg md:text-xl text-gray-700 max-w-2xl mx-auto">
                Explore delicious recipes from around the world and share your culinary creations with our community
            </p>
        </div>
    </section>

    <!-- Recipes Preview Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-gray-800 text-center mb-12">Featured Recipes</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Recipe Card 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient from-red-200 to-orange-200 flex items-center justify-center">
                        <span class="text-6xl">🍕</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Margherita Pizza</h4>
                        <p class="text-gray-600">
                            Classic Italian pizza with fresh mozzarella, tomatoes, and basil on a crispy thin crust.
                        </p>
                    </div>
                </div>

                <!-- Recipe Card 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient from-green-200 to-teal-200 flex items-center justify-center">
                        <span class="text-6xl">🥗</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Caesar Salad</h4>
                        <p class="text-gray-600">
                            Fresh romaine lettuce with grilled chicken, parmesan cheese, and homemade Caesar dressing.
                        </p>
                    </div>
                </div>

                <!-- Recipe Card 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient from-pink-200 to-purple-200 flex items-center justify-center">
                        <span class="text-6xl">🍰</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Chocolate Cake</h4>
                        <p class="text-gray-600">
                            Rich and moist chocolate cake with smooth chocolate ganache and fresh berries.
                        </p>
                    </div>
                </div>

                <!-- Recipe Card 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient from-yellow-200 to-orange-200 flex items-center justify-center">
                        <span class="text-6xl">🍝</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Pasta Carbonara</h4>
                        <p class="text-gray-600">
                            Traditional Italian pasta with crispy bacon, eggs, parmesan cheese, and black pepper.
                        </p>
                    </div>
                </div>

                <!-- Recipe Card 5 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient from-blue-200 to-cyan-200 flex items-center justify-center">
                        <span class="text-6xl">🍹</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Tropical Smoothie</h4>
                        <p class="text-gray-600">
                            Refreshing blend of mango, pineapple, banana, and coconut milk for a taste of paradise.
                        </p>
                    </div>
                </div>

                <!-- Recipe Card 6 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient from-amber-200 to-yellow-200 flex items-center justify-center">
                        <span class="text-6xl">🍔</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-800 mb-2">Gourmet Burger</h4>
                        <p class="text-gray-600">
                            Juicy beef patty with melted cheddar, crispy bacon, and special sauce on a brioche bun.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-gray-800 text-center mb-12">Recipe Categories</h3>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <!-- Category 1 -->
                <div
                    class="bg-gradient from-orange-50 to-orange-100 rounded-xl p-8 text-center shadow-md hover:shadow-lg transition duration-300 cursor-pointer">
                    <div class="text-5xl mb-3">🥗</div>
                    <h4 class="text-lg font-bold text-gray-800">Entrées</h4>
                </div>

                <!-- Category 2 -->
                <div
                    class="bg-gradient from-yellow-50 to-yellow-100 rounded-xl p-8 text-center shadow-md hover:shadow-lg transition duration-300 cursor-pointer">
                    <div class="text-5xl mb-3">🍝</div>
                    <h4 class="text-lg font-bold text-gray-800">Plats</h4>
                </div>

                <!-- Category 3 -->
                <div
                    class="bg-gradient from-pink-50 to-pink-100 rounded-xl p-8 text-center shadow-md hover:shadow-lg transition duration-300 cursor-pointer">
                    <div class="text-5xl mb-3">🍰</div>
                    <h4 class="text-lg font-bold text-gray-800">Desserts</h4>
                </div>

                <!-- Category 4 -->
                <div
                    class="bg-gradient from-blue-50 to-blue-100 rounded-xl p-8 text-center shadow-md hover:shadow-lg transition duration-300 cursor-pointer">
                    <div class="text-5xl mb-3">🍹</div>
                    <h4 class="text-lg font-bold text-gray-800">Boissons</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm">© 2026 CookBook. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>