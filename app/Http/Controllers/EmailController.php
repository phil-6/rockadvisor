<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $formName = $request->input('formName');
        $formEmail = $request->input('formEmail');
        $formMessage = $request->input('formMessage');

        Mail::send('emails.contribute', ['formName' => $formName, 'formEmail' => $formEmail, 'formMessage' => $formMessage], function ($m)
        {

            $m->from('RockAdvisor@ElasticParsley.uk', 'Phil Reynolds');

            $m->to("Contributor.RockAdvisor@ElasticParsley.uk", 'Phil Reynolds');
            $m->subject("Can I help out please?");

        });

        return response()->json(['success' => true]);

    }

}
