<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * List of all administrative user types
     */
    private const ADMINISTRATORS = ['admin', 'editor'];

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // This Gate checks whether the user has any business in the admin dashboard
        Gate::define('administrate', function (User $user) {
            return in_array($user->role, self::ADMINISTRATORS)
                || $user->events->count() > 0
                || $user->posts->count() > 0;
        });
    }
}
