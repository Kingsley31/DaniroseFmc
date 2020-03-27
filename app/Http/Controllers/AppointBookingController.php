<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\SystemModels\Specialization;
use App\SystemModels\City;
use App\SystemModels\Appointment;
use App\SystemModels\ChangePassword;
use Illuminate\Http\Request;
use App\User;
use App\SystemModels\Role;

class AppointBookingController extends Controller
{
    public function homeCreate(Request $request){
        if($request->has('city') || $request->has('specialization')){
            $request->validate([
                'city' => ['required','string','min:2','exists:cities,city_name'],
                'specialization' => ['required','string','exists:specializations,name'],
            ]);
        }
        
        $specialization=$request->specialization;
        $city=$request->city;
        $specializations=Specialization::all();
        $cities=City::all();

        return view('homeappointmentbooking',['specialization'=>$specialization,'city'=>$city,'specializations'=>$specializations,'cities'=>$cities]);
    }

    public function homeBook(Request $request){
        $request->validate([
            'firstname' => ['required','string','min:2'],
            'lastname' => ['required','string','min:2'],
            'phone' => ['required','numeric','min:10'],
            'email' => ['required','email'],
            'date' => ['required','string','min:2'],
            'time' => ['required','string','min:2'],
            'complaint' => ['required','string','min:5'],
            'city' => ['required','string','min:2','exists:cities,city_name'],
            'specialization' => ['required','string','exists:specializations,name'],
        ]);

        $email=$request->input('email');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $phone=$request->input('phone');
        $date=$request->input('date');
        $time=$request->input('time');
        $complaint=$request->input('complaint');
        $city=$request->input('city');
        $specialization=$request->input('specialization');

        if($this->userExists($email)){
            $user=User::where('email',$email)->first();
            $appointment=$this->saveAppointment($user,$date,$time,$complaint,$specialization);
            try {
                Mail::to($user->email)->send(new OldUserAppointmentBookingMail($user,$appointment));
            } catch (\Throwable $th) {
               
            }
            return back()->with('status','success');
        }else{
            $user=$this->saveUser($email,$firstname,$lastname,$phone);
            $appointment=$this->saveAppointment($user,$date,$time,$complaint,$specialization);
            $change_password=$this->createChangePasswordCode($user->email);
            try {
                Mail::to($user->email)->send(new NewUserAppointmentBookingMail($user,$appointment,$change_password->code));
            } catch (\Throwable $th) {
               
            }
            return back()->with('status','success');
        }
        
    }

    private function saveAppointment($user,$date,$time,$compliaint,$specialization){
        return Appointment::create([
                'user_id'=> $user->id,
                'doctor_id' => 0,
                'complaint' => $compliaint,
                'specialization' => $specialization,
                'date' => $date,
                'time' => $time,
                'amount' => 0,
                'status' => 0,
            ]);
    }


    private function saveUser($email,$firstname,$lastname,$phone){
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
            'password'=>'aaaa',
        ]);
    }

     /** generate user id */
     private function generateUserId(){
        $last_user=User::latest()->first();
        $user_id= isset($last_user) ? "user-".($last_user->id+1)."".mt_rand() : "user-1".mt_rand();
        return $user_id;
    }

    private function userExists($email){
        $user=User::where('email',$email)->first();
        if($user){
            return true;
        }
        return false;
    }

    private function createChangePasswordCode($email){
        $code=Str::random(12);
        
        $change_password=ChangePassword::create([
            'email'=>$email,
            'code'=>$code,
        ]);
        $change_password->refresh();
        return $change_password;
    }
}
