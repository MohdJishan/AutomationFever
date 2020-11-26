<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class SignUpController extends Controller
{
    public function UserSignUp(Request $request){
        $user_name=$request->input('user_name');
        $user_email=$request->input('user_email');
        $user_password=$request->input('user_password');
        $mobile_number=$request->input('mobile_number');

        $user=new User();
        $user->user_name=$user_name;
        $user->user_email=$user_email;
        $user->user_password=Crypt::encrypt($user_password);
        $user->user_mobile_no=$mobile_number;
        $user->save();
        return redirect('/');
    }
}
