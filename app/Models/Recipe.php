<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class Recipe
 *
 * @property $id
 * @property $title
 * @property $imgRecipe
 * @property $description
 * @property $timeCook
 * @property $portions
 * @property $ingredients
 * @property $instructions
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recipe extends Model
{
  use HasFactory;

    static $rules = [
		'title' => 'required',
		'imgRecipe' => 'required',
		'description' => 'required',
		'timeCook' => 'required',
		'portions' => 'required',
		'ingredients' => 'required',
		'instructions' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','imgRecipe','description','timeCook','portions','ingredients','instructions','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
  {
      return $this->belongsTo(User::class);
  }
    

}
