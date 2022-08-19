<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            //新增
            $this->map();
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    //
    public function map()
    {
        $this->mapAdminRoutes();
        $this->mapMemberRoutes();
        $this->mapUserRoutes();
        $this->mapTestRoutes();
    }

    protected function mapAdminRoutes()
    {
        Route::prefix('admin')
            ->name('admin.')
            ->middleware(['middleware' => 'web'])
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }


    protected function mapMemberRoutes()
    {
        Route::prefix('member')
            ->name('member.')
            ->middleware(['middleware' => 'web'])
            ->namespace($this->namespace)
            ->group(base_path('routes/member.php'));
    }

    protected function mapUserRoutes()
    {
        Route::prefix('/')
            ->middleware(['middleware' => 'web'])
            ->namespace($this->namespace)
            ->group(base_path('routes/user.php'));
    }

    protected function mapTestRoutes()
    {
        Route::prefix('test')
            ->name('test.')
            ->middleware(['middleware' => 'web'])
            ->namespace($this->namespace)
            ->group(base_path('routes/test.php'));
    }
}
