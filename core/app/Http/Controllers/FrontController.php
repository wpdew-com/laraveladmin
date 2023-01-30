<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Carbon\Carbon;
use Session;
use App;
use File;

class FrontController extends Controller
{
    //
    public function __construct()
    {
        //$path = 'default'; //food
        $path = setting('app_theme');

        View::addLocation(public_path().'/theme/'.$path.'/');
        Lang::addNamespace('theme', public_path().'/theme/'.$path.'/lang/');
        //set the date time zone from sestem
        //date_default_timezone_set(setting('timezone'));

    }

    public function index()
    {

        $maintenance = setting('app_maintenance_mode');
        $appname = setting('app_name');


        $data = [
            'users' => 'aleks',
            'currentUserInfo' => 'Sponsor',
            'appname' => $appname,
            'title' => 'Головна',
            'lang_code' => setting('app_language'),
            'lang_flag' => '$lang_flag',
            'date_format' => setting('date_format'),
            'time_format' => setting('time_format'),
            'description' => setting('app_description'),
            'keywords' => setting('app_keywords'),
            //'blocks' => 'blocks.temphome',
        ];

        if($maintenance == '1'){
            return view('maintenance', ['data' => $data]);
        }else{
            return view('index', ['data' => $data]);
        }
    }

    function changeLang($langcode){
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }
}
