<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Models\Vehicle_company;
use App\Models\Models;
use App\Http\Controllers\CommonController as Common;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
	private $tableName;
    public function __construct()
	{
		parent::__construct();
		$this->tableName = 'vehicle_company';
		//$this->middleware('web');
	}

	/* === List brand Start ===*/
	public function getbrandlishting(Request $request)
	{

		//$brands = DB::table('vehicle_model')->get();

		//echo "<pre>";print_r($request->vehicle_type);exit;

		$brands = Vehicle_company::all()->where('status', '=', 'active')->where('vehicle_type', '=', $request->vehicle_type);

		return response()->json($brands);

		//$flights = Vehicle_company::all();

		// foreach ($brands as $flight) {
		//     echo $flight->company_name;
		// }

		// exit;

		//$state = States::whth()->orderBy('id','DESC')->paginate(5);

		//$q = Brands::select('*');

		dd($brands);exit;
		//echo "<pre>";print_r($items);exit;
        
        foreach ($brands as $key => $value) {
        	echo "<pre>";print_r($value);exit;
        }	
	}
}
