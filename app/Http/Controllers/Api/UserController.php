<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show(Request $request)
    {
        return response()->json($request->user());
    }


    public function update(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $request->user()->id,
        'avatar' => 'nullable|string|max:255',
        ]);

        $request->user()->update($request->only('name', 'email', 'avatar'));

        return response()->json(['message' => 'Perfil actualizado con éxito']);
    }

}
