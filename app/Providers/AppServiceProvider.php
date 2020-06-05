<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\User;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('users')) {
            $random_user = User::take(2)->get();
            //$more_random_user=User::all()->pluck('name')->random(5);
            View::share('random_user', $random_user);
            //View::share('more_random_user',$more_random_user);
        }
    }
}
