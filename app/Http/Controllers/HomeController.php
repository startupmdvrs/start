<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front/home');
    }

    public function postService(Request $request)
    {
        
        $vehicle_type = $request->input('vehicle_type');
        $vehicle_company = $request->input('vehicle_company');
        $vehicle_model = $request->input('vehicle_model');

        $request->session()->put('vehicle_type', $vehicle_type);
        $request->session()->put('vehicle_company', $vehicle_company);
        $request->session()->put('vehicle_model', $vehicle_model);


        // $request->session()->push('vehicle_type', $vehicle_type);
        // $request->session()->push('vehicle_company', $vehicle_company);
        // $request->session()->push('vehicle_model', $vehicle_model);


        //echo "<pre>";print_r($request->session()->all());exit;
        //echo "<pre>";print_r($request->all());exit;

        return redirect('service-detail');

    }
}
