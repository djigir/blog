<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\WriterPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        /* отобразить ссылку на админку  */
        Gate::define('admin-panel-link', function (User $user) {
            return $user->role_id === User::ROLE_ADMIN;
        });

        /* отобразить ссылку на личный кабинет пользователя  */
        Gate::define('personal-cabinet-link', function (User $user) {
            return $user->role_id === User::ROLE_USER;
        });
    }
}
