<?php
namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class DisableCsrfForRegister extends Middleware
{
    protected $except = [
        'register',
    ];
}
