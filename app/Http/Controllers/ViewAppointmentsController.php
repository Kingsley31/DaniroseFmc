<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SystemModels\Appointment;
use App\User;

class ViewAppointmentsController extends Controller
{
    
    public function adminViewAppointments(){
        $appointments=Appointment::paginate(15);
        return view('admin.viewappointments',['appointments'=>$appointments]);
    }
}
