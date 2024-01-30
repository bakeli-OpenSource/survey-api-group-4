<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // / Inscription
    public function Signup


    (Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Si la validation échoue, renvoyer une réponse avec les erreurs
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Créer un nouvel utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Renvoyer une réponse avec l'utilisateur créé
        return response()->json(['user' => $user], 201);
    }

    // Connexion login
    public function Login(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Si la validation échoue, renvoyer une réponse avec les erreurs
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Tentative de connexion de l'utilisateur
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            // Renvoyer une réponse avec l'utilisateur connecté
            return response()->json(['user' => $user], 200);
        } else {
            // Renvoyer une réponse d'échec de connexion
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }}

