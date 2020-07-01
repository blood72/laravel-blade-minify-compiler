<?php

namespace Blood72\Minify\Compilers;

use Blood72\Minify\Compilers\BladeMinifyCompiler;
use Illuminate\Support\ServiceProvider;

class BladeCompilerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/blade-minify.php' => config_path("blade-minify.php"),
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-minify.php', 'blade-minify');

        $this->app->singleton('blade.compiler', function ($app) {
            return new BladeMinifyCompiler($app['files'], $app['config']['view.compiled']);
        });
    }
}
