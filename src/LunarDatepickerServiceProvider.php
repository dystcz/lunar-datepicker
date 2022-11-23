<?php

namespace Dystcz\LunarDatepicker;

use Illuminate\Support\ServiceProvider;
use Lunar\Facades\FieldTypeManifest;
use Lunar\Hub\LunarHub;

class LunarDatepickerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'lunar-datepicker');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lunar-datepicker');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        FieldTypeManifest::add(
            Datepicker::class
        );
    }
}
