<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\SystemModels\Role;

class LoginController extends Controller
{

    public function showUserForm(){
        return view('auth.login');
    }

    public function loginUser(Request $request){
        $credentials=$request->only(['email', 'password']);
        if(Auth::attempt($credentials)){
            $user=Auth::user();

            if($this->userIsPatient($user)){
                return redirect('/patientdashboard');
            }

            if($this->userIsAdmin($user)){
                return redirect('/admindashboard');
            }
           
        }else{
            return back()->with("error","Invalid login credentials supplied");
        }
        
    }

    private function userIsPatient($user){
        $patient_role=Role::where('role_name','patient')->first();
        $patient_role_id=$patient_role->id;

        if($patient_role_id == $user->role_id){
           return true; 
        }

        return false;
    }

    private function userIsAdmin($user){
        $admin_role=Role::where('role_name','admin')->first();
        $admin_role_id=$admin_role->id;

        if($admin_role_id == $user->role_id){
            return true;
        }

        return false;
    }

    public function logoutUser(){
        
        Auth::logout();
        return redirect('/login');
    }

}
