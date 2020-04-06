<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\SystemModels\Role;
use App\User;

class RegisterationController extends Controller
{
    public function showRegForm(){
        return view('auth.register');
    }

    public function registerUser(Request $request){
        $request->validate([
            'email'=>['required','email','unique:users,email'],
            'phone'=>['required','numeric','min:11'],
            'firstname'=>['required','string','min:3'],
            'lastname'=>['required','string','min:3'],
            'password'=>['required','string','confirmed','min:8'],
        ]);

        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $password=$request->input('password');
        $this->saveUser($firstname,$lastname,$phone,$email,$password);
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('/patientdashboard');
        }else{
            return redirect('/login');
        }
        
    }


    private function saveUser($firstname,$lastname,$phone,$email,$password){
        $patient_role=Role::where('role_name','patient')->first();
        return User::create([
            'user_id'=>$this->generateUserId(),
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'phone'=>$phone,
            'email'=>$email,
            'role_id'=>$patient_role->id,
            'verification_code'=>0,
            'verification_status'=>0,
            'password'=>Hash::make($password),
        ]);
    }

     /** generate user id */
     private function generateUserId(){
        $last_user=User::latest()->first();
        $user_id= isset($last_user) ? "user-".($last_user->id+1)."".mt_rand() : "user-1".mt_rand();
        return $user_id;
    }

}
