<?php

namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contact() {
        return view('guest.contact');
    }
    public function mailSend(Request $request){
        Mail::to("violet.violet@gmail.com")->send(new SendNewMail($request->guest_name, $request->guest_email, $request->guest_message));

        return redirect()->route('guest.thanks');
    }
    public function thanks(){

        return view('guest.thanks');
    }
}
