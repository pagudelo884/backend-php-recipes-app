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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'imgRecipe' => 'nullable|string',
            'description' => 'required|string',
            'timeCook' => 'required|string',
            'portions' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'user_id' => 'integer|exists:users,id'
            
        ]);

        // Crear una nueva receta con los datos validados
            $recipe = Recipe::create([
                // 'user_id' => $validatedData['user_id'],
                'title' => $validatedData['title'],
                'imgRecipe' => $validatedData['imgRecipe'],
                'description' => $validatedData['description'],
                'timeCook' => $validatedData['timeCook'],
                'portions' => $validatedData['portions'],
                'ingredients' => $validatedData['ingredients'],
                'instructions' => $validatedData['instructions'],
            ]);

            return response()->json([
                'message' => 'Receta creada exitosamente',
                'data' => $recipe,
            ], 201);
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

    public function destroy($id)
    {
        // Eliminar un registro específico de la tabla 'recipes'
        // $recipe = Recipe::findOrFail($id); 
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response()->json(['error' => 'recipe not found'], 404);
        }
        $recipe->delete();
        return response()->json(['message' => 'La receta fue eliminada correctamente']);
        
    }
}
