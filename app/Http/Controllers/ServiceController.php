<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use view;

class ServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function serviceDetail(){

    	
    	return view('front/serviceDetail');
    }

}
