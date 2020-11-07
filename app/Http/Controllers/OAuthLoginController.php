<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class OAuthLoginController extends Controller
{
     public function getTwitterAuth($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
    public function authTwitterCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        dd($user->token);
    }
    public function logout(Request $request)
    {
      Auth::logout();
     return redirect('/');
    }
}
