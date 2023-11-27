<?php
namespace App\Http\Middleware;

use App;
use Closure;
use Session;

class Localization {
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */

    public function handle($request, Closure $next) {
        if (!Session::has('locale'))
        {
           Session::put('locale', 'en');
        }
        App::setLocale(session('locale'));
        return $next($request);
    }
}
