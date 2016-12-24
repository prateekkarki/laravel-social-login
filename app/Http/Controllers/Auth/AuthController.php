<?php

namespace App\Http\Controllers\Auth;

use Socialite;

use App\Http\Controllers\Controller;
use App\Student;
// use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }


    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
        $registered = User::where('email', $user->email)->first();
        // dump($user->email);
        // die();

        if($registered){
            echo "Auth attempt matched";
            Auth::login($registered);
        }else{
            echo "auth  attempt not matched";
            $row = new User;
            $row->email = $user->email;
            // $row->avatar = $user->avatar;
            $row->name = $user->name;
            $row->save();
        }
        echo Auth::user()->name;

        $user->token;
        dump($user);
        die();

    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $registered = Student::where('email', $user->email)->first();
        // dump($user->email);
        // die();

        if($registered){
            echo "Auth attempt matched. Student already saved in DB";
            
        }else{
            echo "auth  attempt not matched. Student now saved";
            $row = new Student;
            $row->email = $user->email;
            $row->avatar = $user->avatar;
            $row->name = $user->name;
            $row->save();
        }

        dump($user);
        die();
        // $user->token;
    }
}
