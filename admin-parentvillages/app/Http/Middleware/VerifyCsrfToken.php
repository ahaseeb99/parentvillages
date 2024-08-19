<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/time-trackings/delete/*',
        '/mileage-logs/delete/*',
        '/receipts/delete/*',
        '/expenses/delete/*',
        '/appointments/delete/*',
        '/evaluations/accessibility/delete/*'
    ];
}