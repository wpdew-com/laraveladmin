<?php

namespace App\Http\Middleware;

use Closure;namespace App\Http\Middleware;

use Closure;
use App;
class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->has("lang_code")){
            App::setLocale(session()->get("lang_code"));
            Config::set('app.locale',  session()->get("lang_code"));
        }
        return $next($request);
    }
}
