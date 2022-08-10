<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index() {
        $message = Message::first();

        return view('Messages.index', [
            'message' => $message,
        ]);
    }

    public function update(Request $request){
        $message = Message::first();

        $message->text = $request->message;
        $message->save();

        return view('Messages.success');
    }
}
