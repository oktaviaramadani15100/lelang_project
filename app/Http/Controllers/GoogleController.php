<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $userdata = Socialite::driver('google')->user();

        $user = User::where('email',$userdata->email)->where('auth_type','google')->first();
        if($user)
        {
            // do login
            Auth::login($user);
            return redirect('/lobby');
        }
        else{
        // dd($userdata);
        $uuid = Str::uuid()->toString();

        $user =new user();
        $user->name =$userdata->name;
        $user->email =$userdata->email;
        $user->username =$userdata->name;
        $user->password =Hash::make($uuid.now());
        $user->auth_type ='google';
        $user->save();
        Auth::login($user);
        return redirect('/lobby');
        }
    }
}




    //         $google_user =Socialite::driver('google')->user();
            
    //         $user = User::where('google_id', $google_user->getId())->first();

    //         if (!$user) {
                
    //             $new_user = User::create([
    //                 'name'=>$google_user->getName(),
    //                 'email'=>$google_user->getEmail(),
    //                 'google_id'=>$google_user->getId(),
    //             ]);


    //             Auth::login($new_user);

    //             return redirect('/lobby');

    //         }
    //         else{
    //             Auth::login($user);
                
    //             return redirect('/register'); 
    //         }

    //     } catch (Throwable $th){
    //         // dd($th);
    //     };
    // 