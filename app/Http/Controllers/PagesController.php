<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{

	public function getHome() {

		if (Auth::check()) {
			return redirect('home');
		}

	    return view('auth.login');

	}

	public function getCreate() {
		return view('create');
	}

}
