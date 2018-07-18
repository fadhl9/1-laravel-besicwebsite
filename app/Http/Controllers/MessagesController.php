<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    // submit
    public function submit(Request $request){
        // Requests
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        // Execute
        Message::create($request->all());
        return redirect('/')->with('success', 'Message Sent');
    }
    // GetMessages
    public function getMessages(){
        // Variables
        $messages = Message::all();
        // Execute
        return view('messages')->with('messages', $messages);
    }
}
