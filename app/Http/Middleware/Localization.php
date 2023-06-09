<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param Request  $request
     * @param \Closure $next
     * @return void
     */

    public function __construct(Application $app, Request $request)
    {
        $this->app = $app;
        $this->request = $request;
    }

    public function handle(Request $request, Closure $next)
    {
        $this->app->setLocale(session()->get('locale') ?? 'en');
        return $next($request);
    }
}
