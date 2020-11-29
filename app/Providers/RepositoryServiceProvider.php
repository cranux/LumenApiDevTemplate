<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\Interfaces\UsersRepository::class, \App\Repositories\UsersRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\MemberRepository::class, \App\Repositories\MemberRepositoryEloquent::class);

        //:end-bindings:
    }
}
