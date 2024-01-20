<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // public function sendMail(Request $request){

    //     // $name = $request['name'];
    //     // $subject = $request['subject'];
    //     // $e_mail_address = $request['e_mail_address'];
    //     $message = $request['message'];

    //     Mail::to('aldn7da@gmail.com')->send(new SendMail($message));

    //     return 'yey';
    // }

    public function sendMail(){

        $data = request([
             'name', 'subject', 'e_mail_address', 'message',
        ]);
        Mail::to('aldn7da@gmail.com')->send(new SendMail($data));

        return view('welcome');
    }

}
