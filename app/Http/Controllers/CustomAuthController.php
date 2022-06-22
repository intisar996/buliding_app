<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class CustomAuthController extends Controller
{
    public function login(){


        $user = User::first();

        Auth::login($user);

        return redirect('/servise');


    }




    public function Customlogin($id){


        $user = User::find($id);
        if (! $user){

         return redirect('login');

        }



        Auth::login($user);

        return redirect('/servise');


    }
}
