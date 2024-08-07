<?php

namespace App\Providers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        //
        Gate::define('update', function(User $user , Listing $listing ){
            return $user->id === $listing->by_user_id;
        });
    }
}
