<?php

namespace Tests\Feature\Api;

use App\Models\Recipe;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecipeTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfRecipesListedInJsonFile()
    {
        Recipe::factory(2)->create();
        $response = $this->get(route('recipesApi'));
        $response->assertStatus(200)->assertJsonCount(2);
    }

    public function test_CheckIfCanCreateAnRecipeWithJsonFile()
    {

        $data = [
            'title' => 'Paella',
            'imgRecipe' => 'https://nomen.es/wp-content/uploads/2020/09/trucos-paella-perfecta.jpg',
            'description' => 'Plato de arroz seco, con carne, pescado, mariscos, legumbres, etc., característico de la región valenciana, en España.',
            'timeCook' => '25 minutos',
            'portions' => '4 porciones',
            'ingredients' => 'Arroz, pimineto rojo, cebolla, ajo, aceite de oliva, sal, mejillones, anillas de calamar, gambas, cigalas',
            'instructions' => 'intructions'
        ];

        $response = $this->post(route('createRecipesApi'), $data);
        $response->assertStatus(201)->assertJsonFragment($data);
    }

    public function test_CheckIfCanUpdateRecipeWithJsonFile()
    {
        // Crear una receta de prueba
        $recipe = Recipe::factory()->create();

        // Datos actualizados para la receta
        $data = [
            'title' => 'Título actualizado',
            'description' => 'Descripción actualizada',
            'imgRecipe' => 'Descripción actualizada',
            'timeCook' => 'Descripción actualizada',
            'portions' => 'Descripción actualizada',
            'ingredients' => 'Descripción actualizada',
            'instructions' => 'Descripción actualizada'
        ];

        // Enviar una solicitud PUT a la ruta de actualización de recetas
        $response = $this->put(route('updateRecipesApi', $recipe->id), $data);

        // Verificar que el código de estado de la respuesta sea 200
        $response->assertStatus(201);

        // Verificar que los datos de la receta se hayan actualizado correctamente
        $this->assertDatabaseHas('recipes', [
            'id' => $recipe->id,
            'title' => 'Título actualizado',
            'description' => 'Descripción actualizada',
            'imgRecipe' => 'Descripción actualizada',
            'timeCook' => 'Descripción actualizada',
            'portions' => 'Descripción actualizada',
            'ingredients' => 'Descripción actualizada',
            'instructions' => 'Descripción actualizada'
        ]);

    }

        public function test_IfRecipeDeletedInJsonFile()
    {
        $recipe = Recipe::factory()->create();
        $response = $this->delete(route('deleteRecipesApi', $recipe->id));
        $response->assertStatus(200);
        $this->assertDatabaseMissing('recipes', ['id' => $recipe->id]);
    }

}
