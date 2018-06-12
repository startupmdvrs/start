<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Models\Vehicle_company;
use App\Models\vehicle_model;
use App\Models\Models;
use App\Http\Controllers\CommonController as Common;

class ModelController extends Controller
{
    private $tableName;
    public function __construct()
	{
		parent::__construct();
		$this->tableName = 'vehicle_company';
		//$this->middleware('web');
	}

	/* === List brand Start ===*/
	public function getmodellishting(Request $request)
	{

		//$brands = DB::table('vehicle_model')->get();

		//echo "<pre>";print_r($request->vehicle_type);exit;

		$brands = vehicle_model::all()->where('status', '=', 'active')->where('company_name', '=', $request->company_name);

		return response()->json($brands);
	
	}
}
