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
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });

        // Mapare API Regiuni Routes
        $this->mapRegiuniApiRoutes();

        // Mapare API Judete Routes
        $this->mapJudeteApiRoutes();

        // Mapare API Ordonatori Routes
        $this->mapOrdonatoriApiRoutes();

        // Mapare API Familii Ocupationale Routes
        $this->mapFamiliiOcupationaleApiRoutes();

        // Mapare API Tipuri Ordonatori Routes
        $this->mapTipuriOrdonatoriApiRoutes();
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60);
        });
    }

    protected function mapRegiuniApiRoutes(){
        Route::prefix('/api/regiuni')
            ->group(base_path('routes/regiuni.php'));
    }

    protected function mapJudeteApiRoutes(){
        Route::prefix('/api/judete')
            ->group(base_path('routes/judete.php'));
    }

    protected function mapOrdonatoriApiRoutes(){
        Route::prefix('/api/ordonatori')
            ->group(base_path('routes/ordonatori.php'));
    }

    protected function mapFamiliiOcupationaleApiRoutes(){
        Route::prefix('/api/familiiocupationale')
            ->group(base_path('routes/familiiocupationale.php'));
    }

    protected function mapTipuriOrdonatoriApiRoutes(){
        Route::prefix('/api/tipuriordonatori')
            ->group(base_path('routes/tipuriordonatori.php'));
    }
}
