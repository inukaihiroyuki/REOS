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
        
        Gate::define('system-only', function ($user) {
        return ($user->role == 1);
        });
        // 管理者以上（管理者＆システム管理者）に許可
        Gate::define('admin-higher', function ($user) {
            return ($user->role > 0 && $user->role <= 2);
        });
        // サプライヤー
        Gate::define('supplier', function ($user) {
            return ($user->role == 4 || $user->role <= 2);
        });
    
        // バイヤー
        Gate::define('buyer', function ($user) {
            return ($user->role == 5 || $user->role <= 2);
        });
        
        Gate::define('all_user', function ($user) {
            return ($user->role > 0 && $user->role <= 10);
        });

        
    }
}
