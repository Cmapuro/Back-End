<?php

use App\Http\Controllers\Api\AuthController; // Capital A
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 

Route::get('/token-test', function () {
    // Use Capital A in App and Capital M in Models
    $user = \App\Models\User::first();
    
    if (!$user) {
        return response()->json(['error' => 'No user found'], 404);
    }

    return $user->createToken('test-token')->plainTextToken;
});

Route::post('/login', [AuthController::class, 'login']);