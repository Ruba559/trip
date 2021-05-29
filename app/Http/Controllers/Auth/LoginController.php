<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Models\ServiceManegar;
use App\Models\Place;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('guest')->except('logout');
         $this->middleware('guest:admin')->except('logout');
         $this->middleware('guest:serviceManegar')->except('logout');
         $this->middleware('guest:user')->except('logout');
     }
 
     public function showAdminLoginForm()
     {
         return view('auth.login', ['url' => 'admin']);
     }
 
     public function Login(Request $request)
     {
         $this->validate($request, [
             'email'   => 'required|email',
             'password' => 'required|min:3'
         ]);
         if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
             return view('admin.index');
         }
 
         if (Auth::guard('serviceManegar')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
           
            $id_manegar = ServiceManegar::find( auth('serviceManegar')->user()->id);


            $place = Place::find($id_manegar->place_id);

          //  dd(auth("serviceManegar")->user()->id);
             return view('manegar.index' , ['places' => $place ]);
         }
 
         if (Auth::guard('api')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $request->session()->put('user');
            return redirect()->intended('/');
         }
         else {
            return redirect()->intended('/login')->with(['message' => 'not match']);
         }
       
         return back()->withInput($request->only('email', 'remember'));
     }
 

}
