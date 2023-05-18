<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEven

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Recipe;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        User::factory()->create([
            'name' => 'Himo',
            'email' => 'himo@gmail.com',
            
        ]);

        User::factory()->create([
            'name' => 'Camila',
            'email' => 'camila@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Paula',
            'email' => 'paula@gmail.com',

        ]);

        Recipe::factory()->create([
                'title' => 'Receta 1',
                'imgRecipe' => 'imagen1.jpg',
                'description' => 'Descripción de la receta 1',
                'timeCook' => '30 minutos',
                'portions' => '4 porciones',
                'ingredients' => 'Ingrediente 1, Ingrediente 2',
                'instructions' => 'Instrucción 1, Instrucción 2',
        ]);

        Recipe::factory()->create([
                'title' => 'Receta 2',
                'imgRecipe' => 'imagen2.jpg',
                'description' => 'Descripción de la receta 2',
                'timeCook' => '45 minutos',
                'portions' => '6 porciones',
                'ingredients' => 'Ingrediente 3, Ingrediente 4',
                'instructions' => 'Instrucción 3, Instrucción 4',
        ]);
    }
}

