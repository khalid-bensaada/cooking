<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recettes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
        Liste des recettes
    </h1>

    @if($recipes->isEmpty())
        <p class="text-center text-gray-500">
            Aucune recette disponible.
        </p>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($recipes as $recipe)
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    
                    {{-- Image --}}
                    @if($recipe->image)
                        <img 
                            src="{{ $recipe->image }}" 
                            alt="{{ $recipe->title }}"
                            class="w-full h-48 object-cover"
                        >
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                            No image
                        </div>
                    @endif

                    {{-- Content --}}
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800">
                            {{ $recipe->title }}
                        </h2>

                        <p class="text-sm text-gray-500 mt-2">
                            Catégorie : 
                            <span class="font-medium text-gray-700">
                                {{ $recipe->category }}
                            </span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

</body>
</html>
