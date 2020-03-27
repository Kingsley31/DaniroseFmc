<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SystemModels\Doctor;
use App\SystemModels\Specialization;
use App\SystemModels\City;
use App\SystemModels\Role;

class AddDoctorController extends Controller
{
    public function create(){
        $doctors=Doctor::paginate(8);
        $specializations=Specialization::all();
        $cities=City::all();
        return view("admin.adddoctor",['specializations'=>$specializations,'cities'=>$cities,'doctors'=>$doctors]);
    }

    public function store(Request $request){
        $request->validate([
            'firstname' => ['required','string','min:2'],
            'lastname' => ['required','string','min:2'],
            'phone' => ['required','numeric','min:10'],
            'email' => ['required','email','unique:users,email'],
            'avatar' => ['required','image','mimes:png,jpeg'],
            'city' => ['required','string','min:2','exists:cities,city_name'],
            'specialization' => ['required','string','exists:specializations,name'],
        ]);

        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $phone=$request->input('phone');
        $email=$request->input('email');
        $city=$request->input('city');
        $specialization=$request->input('specialization');
        $avartar_file=$request->file('avatar');
        $avatar_name=$this->uploadAndReturnAvartarName($avartar_file);
        $user=$this->saveUser($firstname,$lastname,$phone,$email,$city,$avatar_name);
        $doctor=$this->saveDoctor($user->id,$specialization);
        if($doctor){
            return back()->with('status','Doctor Added successfully');
        }

        return back()->withInputs();
    }

    private function saveUser($firstname,$lastname,$phone,$email,$city,$avatar_name){
        $doctor_role=Role::where('role_name','doctor')->first();
        return User::create([
            'user_id'=>$this->generateUserId(),
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'phone'=>$phone,
            'email'=>$email,
            'city'=>$city,
            'avatar_path'=>$avatar_name,
            'role_id'=>$doctor_role->id,
            'verification_code'=>0,
            'verification_status'=>0,
            'password'=>'aaaa',
        ]);
    }

    /** generate user id */
    private function generateUserId(){
        $last_user=User::latest()->first();
        $user_id= isset($last_user) ? "user-".($last_user->id+1)."".mt_rand() : "user-1".mt_rand();
        return $user_id;
    }

    private function saveDoctor($user_id,$specialization){
        return Doctor::create([
            'user_id'=> $user_id,
            'specialization'=> $specialization,
        ]);
    }

    /** Upload and return the image name */
    private function uploadAndReturnAvartarName($image){
        $image_name_with_extension=$image->getClientOriginalName();
        $image->move(public_path('avatars'),$image_name_with_extension);
        return $image_name_with_extension;
    }
}
