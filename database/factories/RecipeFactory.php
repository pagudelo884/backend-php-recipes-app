<?php

namespace Database\Factories;

use App\Models\Recipe;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'imgRecipe' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
            'timeCook' => $this->faker->numberBetween(10, 120),
            'portions' => $this->faker->numberBetween(1, 10),
            'ingredients' => $this->faker->paragraph,
            'instructions' => $this->faker->paragraph,
        ];
    }
}
