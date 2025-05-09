<?php

namespace App\Providers;

use App\Models\Beranda;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $beranda = Beranda::first(); // Ubah sesuai dengan model dan kondisi Anda
            $view->with('beranda', $beranda);
        });
    }
}
