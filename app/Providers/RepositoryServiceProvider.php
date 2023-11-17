<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\LanguageRepositoryInterface;
use App\Repositories\LanguageRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(LanguageRepositoryInterface::class, LanguageRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
