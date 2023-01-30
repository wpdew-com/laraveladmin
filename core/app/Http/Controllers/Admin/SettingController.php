<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Models\Page;
use App\Models\Setting;
use App\Models\Settingstyle;
use App\Models\Settingapi;
use App\Models\User;
use illuminate\Paginator\Paginator;
use Illuminate\Support\Arr;
use App;

class SettingController extends Controller
{
    //



    public function index()
    {

        $lang_code = User::where('id', auth()->user()->id)->first()->lang_code;
        if(!session()->get('lang_code')) {
            App::setLocale( $lang_code );
            session()->put("lang_code", $lang_code);
        }

        //$pages = Page::all();
        //$pages = Page::orderBy('id','desc')->paginate(20);

        $data = [
           // 'pages' => $pages,
            'lang_code' => $lang_code,
        ];
        return view('admin.settings', compact('data'));
    }

    //style
    public function style()
    {

        $lang_code = User::where('id', auth()->user()->id)->first()->lang_code;
        if(!session()->get('lang_code')) {
            App::setLocale( $lang_code );
            session()->put("lang_code", $lang_code);
        }

        //$pages = Page::all();
        $pages = Page::orderBy('id','desc')->paginate(20);

        $data = [
            'pages' => $pages,
            'lang_code' => $lang_code,
        ];
        return view('admin.settings_style', compact('data'));
    }

    //api
    public function api()
    {

        $lang_code = User::where('id', auth()->user()->id)->first()->lang_code;
        if(!session()->get('lang_code')) {
            App::setLocale( $lang_code );
            session()->put("lang_code", $lang_code);
        }

        //$pages = Page::all();
        $pages = Page::orderBy('id','desc')->paginate(20);

        $data = [
            'pages' => $pages,
            'lang_code' => $lang_code,
        ];
        return view('admin.settings_api', compact('data'));
    }







    public function store(Request $request)
    {
        $rules = Setting::getValidationRules();
        $data = $this->validate($request, $rules);

        $validSettings = array_keys($rules);

        foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
                Setting::add($key, $val, Setting::getDataType($key));
            }
        }

        return redirect()->back()->with('success', __('app.success_message'));

    }

    //store_style
    public function store_style(Request $request)
    {
        $rules = Settingstyle::getValidationRules();
        $data = $this->validate($request, $rules);

        $validSettings = array_keys($rules);

        foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
                Setting::add($key, $val, Setting::getDataType($key));
            }
        }

        return redirect()->back()->with('success', __('app.success_message'));

    }

    //Settingapi
    public function store_api(Request $request)
    {
        $rules = Settingapi::getValidationRules();
        $data = $this->validate($request, $rules);

        $validSettings = array_keys($rules);

        foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
                Setting::add($key, $val, Setting::getDataType($key));
            }
        }

        return redirect()->back()->with('success', __('app.success_message'));

    }



}
