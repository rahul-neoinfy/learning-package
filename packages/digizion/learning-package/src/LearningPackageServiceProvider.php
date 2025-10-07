<?php

namespace Digizion\LearningPackage;

use Illuminate\Support\ServiceProvider;

class LearningPackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Load package routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load package views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'learning');

        // Publish config
        $this->publishes([
            __DIR__ . '/../config/learning.php' => config_path('learning.php'),
        ], 'config');
    }

    public function register(): void
    {
        // Merge default config
        $this->mergeConfigFrom(
            __DIR__ . '/../config/learning.php',
            'learning'
        );
    }
}
