<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Recettes - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen font-sans">

    <!-- Navbar -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">Recettes</h1>
            <nav class="flex items-center space-x-6">
                <a href="{{ route('recipes.index') }}" class="text-gray-600 hover:text-indigo-600 transition">Home</a>
                <a href="{{ route('recipes.create') }}" class="text-gray-600 hover:text-indigo-600 transition">Add
                    Recipe</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Liste des recettes</h2>

        @if($recipes->isEmpty())
            <p class="text-center text-gray-500 text-lg">
                Aucune recette disponible.
            </p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($recipes as $recipe)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                        @if($recipe->image)
                            <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-56 object-cover">
                        @else
                            <div class="w-full h-56 bg-gray-200 flex items-center justify-center text-gray-400">
                                <span class="text-sm">No image available</span>
                            </div>
                        @endif

                        <div class="p-5">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $recipe->title }}</h3>
                            <p class="text-sm text-gray-500 mt-2">Catégorie:
                                <span class="font-medium text-gray-700">{{ $recipe->category }}</span>
                            </p>
                            <p class="text-xs text-gray-400 mt-2 truncate">{{ $recipe->ingredients }}</p>
                            <div class="mt-4 flex justify-between items-center">
                                <a href="{{ route('recipes.show', $recipe->id) }}"
                                    class="text-indigo-600 font-medium hover:underline">Voir détails</a>
                                <div class="space-x-2">
                                    <a href="{{ route('recipes.edit', $recipe->id) }}"
                                        class="text-yellow-600 hover:underline text-sm">Edit</a>
                                    <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline text-sm"
                                            onclick="return confirm('Voulez-vous vraiment supprimer cette recette ?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </main>

    <!-- Footer -->
    <footer class="bg-white mt-12 shadow-inner">
        <div class="max-w-6xl mx-auto px-6 py-6 text-center text-gray-500 text-sm">
            &copy; 2026 Recettes. Tous droits réservés.
        </div>
    </footer>

</body>

</html>