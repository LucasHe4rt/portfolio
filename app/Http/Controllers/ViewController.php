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

        $rawData = $request->all();

        $contact = new Message();
        $contact->create($rawData);

        Mail::to('lucassilvabittencourt@protonmail.ch')->send(new SendMessages($rawData));

        return response('Mensagem enviada!', 200);

    }

}
