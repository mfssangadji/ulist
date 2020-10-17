<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $jenis = array(
            1 => 'Taman',
            2 => 'Lapangan',
            3 => 'Makam',
        );

        View::share('jenis', $jenis);
        Schema::defaultStringLength(191);
    }
}
