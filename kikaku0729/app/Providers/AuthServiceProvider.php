<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        \Illuminate\Support\Facades\Auth::provider('userprovider', function($app, array $config) {
            return new UserProvider($app['hash'], $config['model']);
        });
        \Illuminate\Support\Facades\Auth::provider('adminprovider', function($app, array $config) {
            return new AdminProvider($app['hash'], $config['model']);
        });  
    }
}
