<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\MotoRepository;
use App\Repositories\Interfaces\MotoRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Aquí decimos que cada vez que se inyecte la interface,
        // Laravel use el Repository concreto
        $this->app->bind(MotoRepositoryInterface::class, MotoRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

