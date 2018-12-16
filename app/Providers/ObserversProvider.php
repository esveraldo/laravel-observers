<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cliente;
use App\Observers\ClienteObservers;

class ObserversProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Cliente::observe(ClienteObservers::class);
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
}
