<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipes::latest()->get();
        return view('index', ['recipes' => $recipes]);
    }

    public function create()
    {
        $recipes = Recipes::latest()->get();
        return view('create', ['recipes' => $recipes]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'steps'       => 'required|string',
            'image'       => 'nullable|string|max:255',
            'category'    => 'required|string|max:255',
        ]);

        Recipes::create($validated);

        return redirect()
            ->route('recipes.index')
            ->with('success', 'Recette créée avec succès');
    }

    public function edit(Recipes $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, Recipes $recipe)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'steps'       => 'required|string',
            'image'       => 'nullable|string|max:255',
            'category'    => 'required|string|max:255',
        ]);

        $recipe->update($validated);

        return redirect()
            ->route('recipes.create')
            ->with('success', 'Recette mise à jour avec succès');
    }

    public function destroy(Recipes $recipe)
    {
        $recipe->delete();

        return redirect()
            ->route('recipes.create')
            ->with('success', 'Recette supprimée avec succès');
    }
    public function show(Recipes $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }
}
