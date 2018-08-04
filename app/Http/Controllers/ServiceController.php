<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use view;
use App\Models\Maintenance;

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

    public function serviceDetail()
    {

    	//$maintenanceTypes = Maintenance::all()->where('status', '=', 'active');

    	//$maintenanceTypes = Maintenance::find(1)->maintenance_subs()->where('status', '=', 'active')->all();

    	$maintenanceTypes = Maintenance::all()->where('status', '=', 'active');


    	//dd($maintenanceTypes);
    	
    	return view('front/serviceDetail', ['maintenance_types' => $maintenanceTypes]);
    }

}
