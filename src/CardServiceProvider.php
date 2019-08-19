<?php

namespace KuznetsovZfort\NovaLinkableMetrics;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-linkable-metrics', __DIR__.'/../dist/js/card.js');
            Nova::style('nova-linkable-metrics', __DIR__.'/../dist/css/card.css');
        });
    }

    /**
     * Register the card's routes.
     *
     * @return void
     */
    protected function routes()
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
