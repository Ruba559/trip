<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Place;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{


    public function getAccount()
    {
      
      
      $user =   Auth::user();

         dd($user);
       // return view('profile', ['user' => Auth::user()]);

    }

    
    public function index()
    {
       
        return view('auth.register');
    }


    function create(RegisterRequest $req)
    {
              
        $filePath = "";

      if ($req->has('picture')) {

           $filePath = uploadImage($req->picture,'images');
        }

            $user= new User;
    
            $user->first_name=$req->first_name;
            $user->last_name=$req->last_name;
            $user->Email=$req->Email;
            $user->password=Hash::make( $req->password);
            $user->phone_number=$req->phone_number;
            $user->picture= $filePath;
            $user->birthday=$req->birthday;
    
            Auth::login($user);

             $user->save();
    
             return redirect('/');
     }

    
     public function getLogout()
     {
         Auth::logout();
 
         return redirect('/');
     }


}
