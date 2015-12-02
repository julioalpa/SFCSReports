<?php

namespace SFCSReports\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \SFCSReports\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \SFCSReports\Http\Middleware\VerifyCsrfToken::class,

        \Styde\Html\Alert\Middleware::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \SFCSReports\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \SFCSReports\Http\Middleware\RedirectIfAuthenticated::class,
        'role' => \Bican\Roles\Middleware\VerifyRole::class,
	    'permission' => \Bican\Roles\Middleware\VerifyPermission::class,
	    'level' => \Bican\Roles\Middleware\VerifyLevel::class,
    ];
}
