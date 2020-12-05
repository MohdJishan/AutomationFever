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
        $user->name=$user_name;
        $user->email=$user_email;
        $user->password=Crypt::encrypt($user_password);
        $user->user_mobile_no=$mobile_number;
        $sign_up_status=$user->save();

        if($sign_up_status>0) {
            $request->session()->put('name',ucfirst($user->name));
            $request->session()->put('email',$user->email);
        }

        return redirect()->back();
    }


    public function CheckUserExistance(Request $request){
        $email=$request->input('login_user_email');
        $password=$request->input('login_user_password');

        $user=User::select('email','password')
                    ->where('email',$email)
                    ->first();

        if($user){
            $user_password=Crypt::decrypt($user->password);
            if($user_password==$password){
                return response()->json(true);
            } else{
                return response()->json(false);
            }
        } else{
            return response()->json(false);
        }           
    }


    public function IsUserAvailable(Request $request){
        $user_email=$request->user_email;

        $user_exists_count=User::where('email',$user_email)
                                ->count();
        
         if($user_exists_count>0){
            return response()->json(false);
         }    else{
            return response()->json(true);
         }                   
    }

    public function UserSignIn(Request $request){
        $email=$request->input('login_user_email');
        $password=$request->input('login_user_password');

        $user=User::select('email','password','name','user_mobile_no')
                    ->where('email',$email)
                    ->first();

        if($user){
            $user_password=Crypt::decrypt($user->password);
            if($user_password==$password){
                $request->session()->put('name',ucfirst($user->name));
                $request->session()->put('email',$user->email);
                if($user->user_mobile_no<>null){
                    $request->session()->put('user_mobile_no',$user->user_mobile_no);
                }
               
                return redirect()->back();
            } else{
                return "Incorrect User Credentials";
            }
        } else{
            return "Incorrect User Credentials";
        }           
    }
}
