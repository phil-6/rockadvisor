<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Controller for static basic pages.
 */
class PagesController extends Controller
{
    public function root()
	{
		return redirect(route('home'));
	}

    public function home()
    {
		return view('home');
	}
}
