<?php

namespace App\Http\Controllers;

use App\Mail\SendMessages;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ViewController extends Controller
{

    public function sendMessage(Request $request)
    {

        $rawMessage = $request->all();

        $contact = new Message();
        $contact->name = $rawMessage['name'];
        $contact->email = $rawMessage['email'];
        $contact->subject = $rawMessage['subject'];
        $contact->message = $rawMessage['message'];
        $contact->read = 0;
        $contact->save();

        Mail::to('lucassilvabittencourt@protonmail.ch')->send(new SendMessages($rawMessage));

       return response('mensagem enviada', 200)
           ->header('Content-Type', 'text/plain');

    }

}
