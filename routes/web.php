<?php

use App\Models\Vehicle_type;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (App\Models\Vehicle_type $vehicle_type) {
    
    $vehicle_types = $vehicle_type->all();
    // //dd($vehicle_type);exit;
    // echo "<pre>";print_r( $vehicle_type);exit;
    // foreach ($vehicle_type as $key => $value) {
    //     echo "<pre>";print_r( $value);exit;
    // }
    return view('welcome', ['vehicle_types' => $vehicle_types]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','Auth\AuthController@getLogout')->name('getUserLogOutPage');

Route::get('/brandlist', 'Frontend\BrandController@getbrandlishting')->name('brandlist');
Route::get('/vehicle-model-list', 'Frontend\ModelController@getmodellishting')->name('vehicle-model-list');

Route::post('service-store','HomeController@postService')->name('service.store');

Route::get('/service-detail', 'ServiceController@serviceDetail')->name('service-detail');



//front routes
Route::group(['namespace'=>'Auth'], function () {
    Route::get('/login','AuthController@getLogin')->name('getUserLoginPage');
    Route::post('/login','AuthController@postLogin')->name('postUserLoginPage');
    Route::get('/logout','AuthController@getLogout')->name('getUserLogOutPage');
    Route::get('/register', 'AuthController@showRegistrationForm')->name('getUserRegisterPage');
    Route::post('/register', 'RegisterController@register')->name('postUserRegisterPage');
});


//admin routes
Route::group(['prefix'=>'admin', 'middleware' => ['web']], function () {

    Route::group(['namespace'=>'Backend\AdminAuth'], function () {
        //Login Routes...
        Route::get('/','AuthController@getLogin')->name("getAdminLoginPage");
        Route::get('/login','AuthController@getLogin')->name('getAdminLoginPage');
        Route::post('/login','AuthController@postLogin')->name('postAdminLoginPage');
        Route::get('/logout','AuthController@getLogout')->name('getAdminLogOutPage');
        // Registration Routes...
        Route::get('/register', 'AuthController@showRegistrationForm')->name('getAdminRegisterPage');
        //Route::post('/register', 'AuthController@register')->name('postAdminRegisterPage');
        Route::post('/register', 'RegisterController@register')->name('postAdminRegisterPage');
    });

    Route::group(['namespace'=>'Backend'],function(){
        
    	/*=== Home routes ==== */		
		//Route::get('/','DashboardController@index')->name("dashboard");
        Route::get('/dashboard','DashboardController@index')->name("dashboard");
		/*=== Home routes End ==== */
        

        /*=== Brand routes ==== */  
        Route::get('/brand','BrandController@getbrandlishting')->name("brandslisting");
        Route::post('/brand','BrandController@postbrandlishting')->name("post-brandslisting");

        Route::get('/add-brand','BrandController@getAdminAddnewBrand')->name("getAdminAddBrand");
        Route::post('/add-brand','BrandController@postAdminAddnewBrand')->name("postAdminAddBrand");

        Route::get('/edit-brand/{Brand}','BrandController@getAdminEditBrand')->name("getAdminEditBrand");
        Route::post('/edit-brand/{Brand}','BrandController@postAdminEditBrand')->name("postAdminEditBrand");

        Route::get('/delete-brand/{Brand}','BrandController@getAdminDeleteBrand')->name("postAdminDeleteBrand");
        /*=== Brand routes End ==== */



		Route::get('get-ajax-model/','ModelDetailsController@getAjaxModel')->name("getAdminModelByAjax");
    });


    //for bed url
    Route::get('/{name?}', function ($name = null) {
        return redirect('/admin/login');
    });

});


// public routes
Route::get('/recordperpage',['uses'=>"CommonController@getRecordPerPage","as"=>'api-public-recordPerPage']);
Route::get('/change-status',['uses'=>"CommonController@getChangeStatus","as"=>'api-public-change-status']);
