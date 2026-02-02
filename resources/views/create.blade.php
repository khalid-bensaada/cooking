<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Recettes</h1>
            <nav class="flex items-center space-x-6">
                <a href="{{ route('recipes.index') }}" class="text-gray-600 hover:text-indigo-600 transition">Home</a>
                <a href="{{ route('recipes.create') }}" class="text-gray-600 hover:text-indigo-600 transition">Add
                    Recipe</a>
            </nav>
            <button class="flex items-center gap-2 bg-indigo-600 text-white px-5 py-2 rounded-lg
           font-medium hover:bg-indigo-700 transition shadow">

                <span>Add Recipe</span>
            </button>
        </div>


    </header>
    <main class="max-w-4xl mx-auto px-6 py-10">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Add New Recipe
            </h2>

            <form method="POST" action="{{ route('recipes.store') }}" class="space-y-6">
                @csrf

                <!-- Title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" name="title" placeholder="Recipe title"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea name="description" rows="3" placeholder="Short description"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>
                </div>

                <!-- Ingredients -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Ingredients</label>
                    <textarea name="ingredients" rows="4" placeholder="List ingredients"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>
                </div>

                <!-- Steps -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Steps</label>
                    <textarea name="steps" rows="5" placeholder="Explain preparation steps"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"></textarea>
                </div>

                <!-- Image + Category -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Image URL</label>
                        <input type="text" name="image" placeholder="https://example.com/image.jpg"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                        <input type="text" name="category" placeholder="Dessert, Plat, Salad..."
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    </div>
                </div>

                <!-- Button -->
                <div class="flex justify-end pt-4">
                    <button type="submit"
                        class="bg-indigo-600 text-white px-8 py-2 rounded-lg hover:bg-indigo-700 transition font-medium">
                        Save Recipe
                    </button>
                </div>

            </form>
        </div>
    </main>

</body>

</html>