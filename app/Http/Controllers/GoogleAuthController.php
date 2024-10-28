<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Users;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            
            // Debug info
            dd($google_user); 
            
            $user = Users::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = Users::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                Auth::login($new_user);

                return redirect()->intended('dashboard');
            } else {
                Auth::login($user);

                return redirect()->intended('dashboard');
            }

        } catch (\Throwable $th) {
            // Tampilkan error lebih detail
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile()
            ], 500);
        }
    }
}