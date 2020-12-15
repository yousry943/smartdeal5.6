<?php

namespace App\Http\Controllers;

use http\Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthSocController extends Controller
{
    //

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {


        $user = Socialite::driver($provider)->stateless()->user();
        dd($user);



        // $user->token;
    }
}
