<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
use App\SystemModels\Appointment;

class NewUserAppointmentBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $appointment;
    public $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,Appointment $appointment,$code)
    {
        $this->user=$user;
        $this->appointment=$appointment;
        $this->code=$code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.newuserappointmentbookingmail');
    }
}
