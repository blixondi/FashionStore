<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\AdminPolicy;
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
        User::class => AdminPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();



        Gate::define('is-admin', function (User $user) {
            if ($user->role == "owner" || $user->role == "staff") {
                return true;
            } else {
                return false;
            }
        });

        Gate::define('is-owner', function (User $user) {
            if ($user->role == "owner") {
                return true;
            } else {
                return false;
            }
        });

        //
    }
}
