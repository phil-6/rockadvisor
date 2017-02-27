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
        $messageContent = $request->input('messageContent');

        Mail::send('emails.contribute', ['name' => $name, 'email' => $email, 'messageContent' => $messageContent], function ($m)
        {

            $m->from('521289@swansea.ac.uk', 'Phil Reynolds');

            $m->to("L.P.OReilly@swansea.ac.uk");
            $m->subject("Fun!!!");

        });

        return response()->json(['sucess' => true]);
        

    }

}
