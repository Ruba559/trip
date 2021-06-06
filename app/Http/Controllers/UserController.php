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
         
     return view('profile', ['user' => Auth::user()]);

    }


    public function updateProfile(RegisterRequest $request)
    {
        $filePath = "";

        if ($request->has('picture')) {
  
             $filePath = uploadImage($request->picture ,'images');
          }

        $user = User::find($request->id);

        $user->first_name  = $request->first_name ;
        $user->last_name  = $request->last_name ;
        $user->email  = $request->email ;
        $user->password  = Hash::make( $request->password);
        $user->phone_number  = $request->phone_number;
        $user->picture  = $filePath;

        $user->update();
      

       return redirect('/');

    }
    
    public function index()
    {
       
        return view('auth.register');
    }


    function create(RegisterRequest $request)
    {
              
        $filePath = "";

      if ($request->has('picture')) {

           $filePath = uploadImage($request->picture,'images');
        }

            $user= new User;
    
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->email=$request->email;
            $user->password=Hash::make( $request->password);
            $user->phone_number=$request->phone_number;
            $user->picture= $filePath;
            $user->birthday=$request->birthday;

             $user->save();
    
             return redirect('/');
     }

    
    


     public function getLogout()
     {
         Auth::logout();
 
         return redirect('/');
     }


}
