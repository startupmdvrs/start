<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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
