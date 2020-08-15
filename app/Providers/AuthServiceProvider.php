<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-users', function($user)
        {
            return $user->hasRole('admin');
        });

        Gate::define('manage-users', function($user)
        {
            return $user->hasAnyRole('admin','manager');
        });

        Gate::define('delete-users', function($user)
        {
            return $user->hasRole('admin');
        });

        Gate::define('approve-users', function($user)
        {
            return $user->hasRole('admin');
        });

        Gate::define('security-users', function($user)
        {
            return $user->hasAnyRole('admin','security');
        });

        Gate::define('reports-users', function($user)
        {
            return $user->hasRole('admin');
        });

        Gate::define('complains-users', function($user)
        {
            return $user->hasRole('admin');
        });
    }
}
