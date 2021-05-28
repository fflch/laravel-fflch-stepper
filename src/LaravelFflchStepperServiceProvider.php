<?php

namespace Fflch\LaravelFflchStepper;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Events\Dispatcher;

class LaravelFflchStepperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(
        Factory $view,
        Dispatcher $events,
        Repository $config
    ) {
        $this->loadViews();
        $this->publishAssets();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function packagePath($path)
    {
        return __DIR__."/../$path";
    }

    private function loadViews()
    {
        $viewsPath = $this->packagePath('resources/views');
        $this->loadViewsFrom($viewsPath, 'laravel-fflch-stepper');
        $this->publishes([
            $viewsPath => base_path('resources/views/vendor/laravel-fflch-stepper'),
        ], 'views');
    }

    private function publishAssets()
    {
        $this->publishes([
            $this->packagePath('resources/assets') => public_path('vendor/laravel-fflch-stepper'),
        ], 'assets');
    }

}
