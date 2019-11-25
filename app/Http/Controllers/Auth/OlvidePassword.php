<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Sentinel;
use Reminder;
use App\User;
use Mail;

class OlvidePassword extends Controller
{
    public function olvide(){
        return view('auth.passwords.reset');
    }

    public function password(Request $request){
        $user = User::whereEmail($request->email)->first();

        if(($user == null)){
            return redirect()->back()->with(['error' => 'Ese correo no existe']);
        }

        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exist($user) ? : Remidner::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['success' => 'Se ha enviado el correo para recuperar tu contraseña']);
    }

    public function sendEmail($user, $code){
        Mail::send(
            'email.forgot',
            ['user' => $user, 'code' => code],
            function($message) use ($user){
                $message->to($user->email);
                $message->subject("$user->name, recupera tu contraseña.");
            }
        );
    }
}
