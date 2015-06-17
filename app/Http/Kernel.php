<?php namespace Grace\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
        'Grace\Http\Middleware\VerifyCsrfToken',
        'Grace\Http\Middleware\CacheKiller',
        'Krucas\Notification\Middleware\NotificationMiddleware'
    ];
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'before'               => 'Grace\Http\Middleware\BeforeMiddleware',
        'sentry.auth'          => 'Grace\Http\Middleware\SentryAuth',
        'auth.basic'           => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'guest'                => 'Grace\Http\Middleware\RedirectIfAuthenticated',
        'localize'             => 'Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes',
        'localizationRedirect' => 'Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter',
        'Krucas\Notification\Middleware\NotificationMiddleware'
    ];
}
