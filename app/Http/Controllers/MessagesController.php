<?php

namespace App\Http\Controllers;

use App\Messages;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function messageNew(Request $request) {
        $msg = new Messages;
        $msg->id = Uuid::generate()->string;
        $msg->firstname = $request->firstname;
        $msg->lastname = $request->lastname;
        $msg->subject = $request->subject;
        $msg->email = $request->email;
        $msg->message = $request->message;
        $saved = $msg->save();

        if( $saved ) {
            return redirect('/')
                ->with("message-sent", "Thanks for the message")
                ->withInput();
        }else {
            return redirect('/')
                ->with("message-notsent", "Something went wrong. Try again")
                ->withInput($request->input());
        }
    }
}
