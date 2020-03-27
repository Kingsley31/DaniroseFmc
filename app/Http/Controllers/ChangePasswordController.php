<?php

namespace App\Http\Controllers;

use App\User;
use App\ChangePassword;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
   public function sendLink(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
        $email=$request->input('email');
        $user=User::where('email',$email)->first();
        $code=Str::random(12);
        
        $change_password=ChangePassword::create([
            'email'=>$user->email,
            'code'=>$code,
        ]);
        $change_password->refresh();

        try {
            Mail::to($user->email)->send(new PasswordResetEmail($code,$user));
        } catch (\Throwable $th) {
           
        }
        return redirect()->back()->with('success', 'Password reset link sent successfully!! Please check your email for your password reset link');
        
   }

   public function showChangePasswordForm($code,$email){
       $change_password=ChangePassword::where('email',$email)->where('code',$code)->first();
       if($change_password){
           return view('auth.changepassword',['email'=>$change_password->email,'code'=>$change_password->code]);
           
       }

       return redirect()->away('https://www.google.com');
       
   }

   public function changePassword(Request $request){
        $v=Validator::make($request->all(),[
            'email' => ['required', 'string', 'email', 'max:255', 'exists:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'code' => ['required','string','min:9'],
        ])->validate();

        $email=$request->input('email');
        $code=$request->input('code');
        $password=$request->input('password');
        $change_password=ChangePassword::where('email',$email)->where('code',$code)->first();
        if($change_password){
            $user=User::where('email',$email)->first();
            $user->password=Hash::make($password);
            $user->save();
            return redirect()->intended('/login')->with('success', 'Password changed successfully!! Please Login');
        }

        return redirect()->away('https://www.google.com');
   }
}
