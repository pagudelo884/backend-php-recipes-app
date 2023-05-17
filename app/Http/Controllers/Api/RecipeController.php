<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de la tabla 'recipes'
        $recipes = Recipe::all();

        return response()->json($recipes);
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'title' => 'required',
            'imgRecipe' => 'required',
            'description' => 'required',
            'timeCook' => 'required',
            'portions' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'user_id' => 'required|exists:users,id'
        ]);

        // Crear un nuevo registro en la tabla 'recipes'
        $recipe = Recipe::create($request->all());

        return response()->json($recipe, 201);
    }

    public function show($id)
    {
        // Obtener un registro específico de la tabla 'recipes'
        $recipe = Recipe::findOrFail($id);

        return response()->json($recipe);
    }

    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $request->validate([
            'title' => 'required',
            'imgRecipe' => 'required',
            'description' => 'required',
            'timeCook' => 'required',
            'portions' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'user_id' => 'required|exists:users,id'
        ]);

        // Actualizar un registro específico en la tabla 'recipes'
        $recipe = Recipe::findOrFail($id);
        $recipe->update($request->all());

        return response()->json($recipe);
    }

    public function destroy($id)
    {
        // Eliminar un registro específico de la tabla 'recipes'
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();

        return response()->json(null, 204);
    }
}
