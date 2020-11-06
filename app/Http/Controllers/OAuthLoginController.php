<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;

class OAuthLoginController extends Controller
{
     public function getTwitterAuth($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
       public function logout(Request $request)
    {
         Auth::logout();
        return redirect('/');
    }

    public function authTwitterCallback()
    {
        $data = Socialite::driver('twitter')->user();
        print_r($data);
        die;
    }
}
