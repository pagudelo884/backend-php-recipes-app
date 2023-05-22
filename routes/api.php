<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\RecipeController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('myRecipes', [AuthController::class, 'myRecipes'])->name('myRecipes');
    Route::post('register', [AuthController::class, 'register']);

});

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipesApi');
Route::post('/createRecipes', [RecipeController::class, 'store'])->name('createRecipesApi');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('showRecipesApi');
Route::put('/updateRecipes/{id}', [RecipeController::class, 'update'])->name('updateRecipesApi');
Route::delete('/deleteRecipes/{id}', [RecipeController::class, 'destroy'])->name('deleteRecipesApi');