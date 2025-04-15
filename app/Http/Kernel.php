<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'staff' => \App\Http\Middleware\StaffMiddleware::class,
    ];
}
