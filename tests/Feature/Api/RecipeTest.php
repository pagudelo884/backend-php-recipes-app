<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecipeTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
    // Crear un usuario de prueba
    $user = User::factory()->create();

    // Crear algunas recetas de prueba asociadas al usuario
    $recipe1 = Recipe::factory()->create(['user_id' => $user->id, 'title' => 'Receta C']);
    $recipe2 = Recipe::factory()->create(['user_id' => $user->id, 'title' => 'Receta A']);
    $recipe3 = Recipe::factory()->create(['user_id' => $user->id, 'title' => 'Receta B']);

    // Enviar una solicitud GET al endpoint /api/recipes
    $response = $this->get('/api/recipes');

    // Verificar que la respuesta es correcta
    $response->assertStatus(200);
    $response->assertJsonCount(3);
        $response->assertJson([
        ['id' => $recipe2->id],
        ['id' => $recipe3->id],
        ['id' => $recipe1->id]
        ]);
    }

    public function testSearch()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Crear algunas recetas de prueba asociadas al usuario
        $recipe1 = Recipe::factory()->create(['user_id' => $user->id, 'title' => 'Receta de pollo']);
        $recipe2 = Recipe::factory()->create(['user_id' => $user->id, 'title' => 'Receta de pescado']);
        $recipe3 = Recipe::factory()->create(['user_id' => $user->id, 'title' => 'Receta de carne']);

        // Enviar una solicitud GET al endpoint /api/recipes/search/pollo
        $response = $this->get('/api/recipes/search/pollo');

        // Verificar que la respuesta es correcta
        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJson([
        ['id' => $recipe1->id]
        ]);
    }

    public function testDestroy()
    {
        // Crear un usuario de prueba y autenticarlo
        $user = User::factory()->create();
        $this->actingAs($user);

        // Crear una receta de prueba asociada al usuario
        $recipe = Recipe::factory()->create(['user_id' => $user->id]);

        // Enviar una solicitud DELETE para eliminar la receta
        $response = $this->delete("/api/deleteRecipes/{$recipe->id}");

        // Verificar que la respuesta es correcta
        $response->assertStatus(200);
        $response->assertJson([
        'message' => 'La receta fue eliminada correctamente'
        ]);

        // Verificar que la receta se ha eliminado de la base de datos
        $this->assertDatabaseMissing('recipes', [
        'id' => $recipe->id
        ]);
    }



    public function testDestroyUnauthorized()
    {
        // Crear dos usuarios de prueba y autenticar al primero
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $this->actingAs($user1);

        // Crear una receta de prueba asociada al segundo usuario
        $recipe = Recipe::factory()->create(['user_id' => $user2->id]);

        // Enviar una solicitud DELETE para intentar eliminar la receta del segundo usuario
        $response = $this->delete("/api/deleteRecipes/{$recipe->id}");

        // Verificar que la respuesta es un error 403 (Prohibido)
        $response->assertStatus(403);
    }

    public function testDestroyNotFound()
    {
        // Crear un usuario de prueba y autenticarlo
        $user = User::factory()->create();
        $this->actingAs($user);

        // Enviar una solicitud DELETE para intentar eliminar una receta que no existe
        $response = $this->delete('/api/deleteRecipes/999');

        // Verificar que la respuesta es un error 404 (No encontrado)
        $response->assertStatus(404);
    }


}
