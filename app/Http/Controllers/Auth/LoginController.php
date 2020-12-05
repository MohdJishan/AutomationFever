<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use app\Http\Controllers\Auth\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }




    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();
        
        
        $request->session()->put('name',ucfirst($user->name));
        $request->session()->put('email',$user->email);
        
        // return $current_route;
        return redirect()->route('home');
      // return view('home', ['user'=>$user]);// $user->name;
    }




    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookCallback(Request $request)
    {
        $user = Socialite::driver('facebook')->user();

        

        $request->session()->put('name',ucfirst($user->name));
        $request->session()->put('email',$user->email);
        
        $this->_registerOrLoginUser($user);

         return redirect()->route('home');
      // return view('home', ['user'=>$user]);// $user->name;
    }

    protected function _registerOrLoginUser($data){
        $user=User::where('email','=',$data->email)->first();
        if(!$user) {
            $user=new User();
            $user->name=$data->name;
            $user->email=$data->email;
            // $user->provider_id=$data->provider_id;
            $user->avatar=$data->avatar;
            $user->save();
        }

        // Auth::login($user);
    }
}

