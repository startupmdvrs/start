<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    	View::share('recordsPerPage', [
            '0' => "0",
            '1' => "10",
            '2' => "20",
            '3' => "50",
            '4' => "100",
            '5' => "200",
            '6' => "500",
            '7' => "1000"
        ]);

    }

    public static function recordsPerPage($page, $new=null) {
        if(session()->has($page)) {
            if(isset($new)) {
                session()->put($page, $new);
            }
        } else {
            if(isset($new)) {
                session()->put($page, $new);
            } else {
                session()->put($page, env('DEFAULT_ROWSIZE_PERPAGE'));
            }
        }
        return session()->get($page) == 0 ? PHP_INT_MAX : session()->get($page);
    }
}
