<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        Mail::send('emails.contribute', ['name' => $name, 'email' => $email, 'message' => $message], function ($message)
        {

            $message->from('521289@swansea.ac.uk', 'Phil Reynolds');

            $message->to("L.P.OReilly@swansea.ac.uk");

        });

        return response()->json(['sucess' => true]);
    }

}
