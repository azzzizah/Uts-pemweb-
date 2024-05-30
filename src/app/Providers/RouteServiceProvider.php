<?php
namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Routes;

class RoutesServiceProvider extends ServiceProvider
{
    public const HOME = '/admin/dashboard';

    public function boot()
    {

    }
}
