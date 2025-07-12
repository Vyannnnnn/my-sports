<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isAdmin', function ($user) {
            // debug
            \Log::info('User role: ' . $user->role);
            return $user->role === 'admin';
        });
    }
}
