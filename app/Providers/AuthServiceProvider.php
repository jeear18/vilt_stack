<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Listing;
use App\Policies\ListingPolicy;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // 'Illuminate\Notifications\DatabaseNotification' => 'App\Policies\NotificationPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Gate::define('update', [ListingPolicy::class, 'update']);
        Gate::define('update-post', function (User $user, Listing $listing) {
            return $user->id === $listing->by_user_id;
        });

        
    }
}