<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
<<<<<<< HEAD

use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
<<<<<<< HEAD
        Post::class => PostPolicy::class
=======
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

<<<<<<< HEAD
        Gate::define('edit-update-profile', fn (User $user, User $other ) => $user->id === $other->id);
=======
        //
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044
    }
}
