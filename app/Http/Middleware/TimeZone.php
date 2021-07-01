<?php

namespace App\Http\Middleware;
use App\Models\Setting;
use Closure;

class TimeZone
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
        if(Setting::where('name', 'timezone')->count() > 0) {
            $zone = Setting::where('name', 'timezone')->first();
            date_default_timezone_set($zone->value);
        }

        return $next($request);
    }
}
