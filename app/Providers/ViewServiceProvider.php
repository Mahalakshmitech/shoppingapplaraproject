<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ViewServiceProvider extends ServiceProvider
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
        // Share cart count data across all views
        View::composer('*', function ($view) {
            $cartCount = 0;
            $username = Session::get('username'); // Get username from session

            if ($username) {
                // Fetch the cart count for the logged-in user
                $cartCount = DB::table('cart')
                    ->where('username', $username)
                    ->sum('quantity');
            }

            // Share the cart count variable with all views
            $view->with('cartCount', $cartCount);
        });
    }
}
