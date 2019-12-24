<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){

        $messages = Message::all();
        return view('admin.index', ['messages' => $messages]);

    }

}
