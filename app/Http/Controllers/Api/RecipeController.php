<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de la tabla 'recipes' ordenados por orden alfabetico
        $recipes = Recipe::orderBy('title')->get();

        return response()->json($recipes);
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'imgRecipe' => 'nullable|string',
            'description' => 'required|string',
            'timeCook' => 'required|string',
            'portions' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'user_id' => 'required|integer|exists:users,id'
        ]);

        // Crear una nueva receta con los datos validados
        $recipe = Recipe::create($data);

        return response()->json($recipe, 201);
    }

    public function show(Recipe $recipe)
    {
        // Devolver la receta en formato JSON
        return response()->json($recipe);
    }

    public function update(Request $request, Recipe $recipe)
    {
        // Validar los datos de entrada
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'imgRecipe' => 'nullable|string',
            'description' => 'required|string',
            'timeCook' => 'required|string',
            'portions' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
        ]);

        // Crear una nueva receta con los datos validados
        $recipe = Recipe::update($data);

        return response()->json($recipe, 201);
    }

    public function destroy(Recipe $recipe)
    {
        // Eliminar un registro específico de la tabla 'recipes'
        //$recipe = Recipe::findOrFail($id); 
        $recipe->delete();

        return response()->json(null, 204);
    }
}
