<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
   public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    // Tenter la connexion avec Auth::attempt, option remember possible
    if (!Auth::attempt($credentials, $request->boolean('remember'))) {
        return response()->json(['message' => 'Identifiants invalides'], 401);
    }

    // Régénérer la session pour éviter fixation de session
    $request->session()->regenerate();

    // Retourner les infos utilisateur
    return response()->json([
        'message' => 'Connexion réussie',
        'user' => Auth::user()
    ]);
}

}
