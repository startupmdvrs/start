<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(\Illuminate\Http\Request $request) {
        
        $validator = Validator::make($request->all(), [
                        'email'     => 'required|email',
                        'password'  => 'required',
                    ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput(Input::all());
        }

        $remember = ($request->has('remember')) ? true : false;
        $data = array("email" => $request->email, "password" => $request->password, "is_admin" => '0');
        
        if(Auth::guard('web')->attempt($data,true))
        {
            return redirect()->route("home")
                ->with(array('alert-class'=>'alert-success', 'message'=>'You are successfully logged in.'));
        }else{
            
            return redirect()->back()
                ->with(array('alert-class'=>'alert-danger','message'=>'Invalid email or password!'))->withInput(Input::all());

            //return redirect()->back()->withInput($request->only($this->username(), 'remember'))->withErrors(['active' => 'You must be active to login.']);

        }
    }
}
