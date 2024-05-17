<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SupportRepositoryInterface;
use App\Repositories\SupportEloquentORM;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SupportRepositoryInterface::class,SupportEoquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
