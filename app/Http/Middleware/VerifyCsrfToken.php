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
        '/ssl-commerz/success',
        '/ssl-commerz/cancel',
        '/ssl-commerz/fail',
        '/ssl-commerz/ipn',
        '/aamar-pay/success',
        '/aamar-pay/fail',
        '/aamar-pay/cancel',
    ];
}
