<?php

namespace App\Providers;

use App\Models\Func;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        
        //Paginator use bootstrap.
        Paginator::useBootstrap();
        
        //Backend
        View::composer(['backend.widget.slidebar'], function ($view) {
            $user = auth()->user();
            if ($user->id) {
                $menus = Func::_listmenuforuser($user->id);
                $view->with('menus', $menus);
                $view->with('uid', $user->id);
            }
        });
    }
}
