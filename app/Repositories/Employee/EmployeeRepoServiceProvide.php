<?php

namespace App\Repositories\Employee;


use Illuminate\Support\ServiceProvider;


class EmployeeRepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    { }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Employee\EmployeeInterface', 'App\Repositories\Employee\EmployeeRepository');
    }
}
