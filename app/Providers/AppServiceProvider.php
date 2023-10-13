<?php

namespace App\Providers;

use App\Factories\ConcreteSupplierRepositoryFactory;
use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\SupplierRepositoryFactoryInterface;
use App\Interfaces\SupplierRepositoryInterface;
use App\Interfaces\UserGroupRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Models\Func;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SupplierRepository;
use App\Repositories\UserGroupRepository;
use App\Repositories\UserRepository;
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
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        $this->app->bind(UserGroupRepositoryInterface::class, UserGroupRepository::class);

        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

        $this->app->bind(SupplierRepositoryInterface::class, SupplierRepository::class);

        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);

        $this->app->bind(SupplierRepositoryFactoryInterface::class, ConcreteSupplierRepositoryFactory::class);
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
