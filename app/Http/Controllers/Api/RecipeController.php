<?php

namespace App\Http\Controllers\Api;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show', 'search']);
    }

    public function index()
    {
        // Obtener todos los registros de la tabla 'recipes' ordenados por orden alfabetico
        $recipes = Recipe::orderBy('title')->get();

        return response()->json($recipes);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'imgRecipe' => 'required',
            'description' => 'required',
            'timeCook' => 'required',
            'portions' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required'
        ]);

        $recipe = Recipe::create([
            'user_id' => auth()->id(),
            'title' => $validatedData['title'],
            'imgRecipe' => $validatedData['imgRecipe'],
            'description' => $validatedData['description'],
            'timeCook' => $validatedData['timeCook'],
            'portions' => $validatedData['portions'],
            'ingredients' => $validatedData['ingredients'],
            'instructions' =>$validatedData['instructions'],
        ]);

        return response()->json([
            'message' => 'Receta creada con éxito',
            'data' => $recipe
        ], 201);
    }

    public function show($id)
    {
        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response()->json(['error' => 'recipe not found'], 404);
        }

        return response()->json($recipe);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'imgRecipe' => 'required',
            'description' => 'required',
            'timeCook' => 'required',
            'portions' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required'
        ]);

        $recipe = Recipe::find($id);
        // Verificar si el usuario autenticado es el mismo que creó la receta
        if (auth()->id() !== $recipe->user_id) {
            return response()->json(['error' => 'No tienes permiso para modificar esta receta'], 403);
        }

        if (!$recipe) {
            return response()->json(['error' => 'recipe not found'], 404);
        }


        $recipe->update($validatedData);

        return response()->json([
            'message' => 'Receta modificada con éxito',
            'data' => $recipe
        ], 201);
    }

    public function destroy($id)
    {

        $recipe = Recipe::find($id);

        if (!$recipe) {
            return response()->json(['error' => 'recipe not found'], 404);
        }

        if (auth()->id() !== $recipe->user_id) {
            return response()->json(['error' => 'No tienes permiso para eliminar esta receta'], 403);
        }


        $recipe->delete();
        return response()->json(['message' => 'La receta fue eliminada correctamente']);
        
    }

    public function search($title)
    {
        $recipes = DB::table('recipes')
                    ->where('title', 'like', '%' . $title . '%')
                    ->get();

        return response()->json($recipes);
    }

    public function myRecipes()
    {
        $recipes = Recipe::where('user_id', auth()->id())->get();
        return response()->json($recipes);
    }
    
}
