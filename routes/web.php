<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');

// Route::get('/recipe/create',function (){
//    return  view('create');
// });
Route::resource('recipes', RecipeController::class);

// Route::get('/recipes/create', [RecipeController::class, 'create'])->name('create');


Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');


Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');


Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');


Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');


