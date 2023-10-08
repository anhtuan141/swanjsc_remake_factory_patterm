<?php

use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController as BackendCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\ShapeController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\SystemController as BackendSystemController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\UserGroupController;
use App\Http\Controllers\Frontend\MailController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\SystemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| BackEnd
|--------------------------------------------------------------------------
*/
Route::get('/kietadmin/login', [UserController::class, 'login'])->name('b.login');
Route::post('/kietadmin/login', [UserController::class, 'loginPost'])->name('b.loginpost');
Route::get('/kietadmin/logout', [UserController::class, 'logOut'])->name('b.logout');
Route::get('/kietadmin/403', [BackendSystemController::class, '_403'])->name('b.403');
Route::get('/kietadmin/404', [BackendSystemController::class, '_404'])->name('b.404');

Route::group(
    ['prefix' => '/kietadmin', 'middleware' => ['auth.web', 'role.admin']],
    function () {
        Route::get('/', [BackendSystemController::class, 'index'])->name('b.home');

        Route::resource('users', UserController::class);
        Route::get('/profile-user', [UserController::class, 'profile'])->name('b.profile');
        Route::put('/profile-user', [UserController::class, 'profileUpdate'])->name('b.profile.update');
        Route::get('/change-password', [UserController::class, 'changePassword'])->name('b.changepass');
        Route::put('/change-password', [UserController::class, 'changePasswordSave'])->name('b.changepass.update');

        Route::resource('roles', RoleController::class);

        Route::resource('products', ProductController::class);

        Route::resource('suppliers', SupplierController::class);

        Route::resource('brands', BrandController::class);

        Route::resource('shapes', ShapeController::class);

        Route::resource('categories', BackendCategoryController::class);

        Route::resource('usergroups',UserGroupController::class);
    }
);

/*
|--------------------------------------------------------------------------
| FrontEnd
|--------------------------------------------------------------------------
*/
Route::get('/', [SystemController::class, 'index'])->name('f.home');
Route::get('/about-us', [SystemController::class, 'about'])->name('f.about');
Route::get('/404', [SystemController::class, '_404'])->name('f.404');

Route::get('/contact', [MailController::class, 'contact'])->name('f.contact');
Route::post('/contact', [MailController::class, 'sendMail'])->name('f.sendmail');

Route::get('/product', [CategoryController::class, 'index'])->name('f.product');
Route::get('/product/nong-san', [CategoryController::class, 'catechild'])->name('f.catechild');

Route::get('/product/{a}', [FrontendProductController::class, 'index'])->name('f.product.index');
Route::get('/product/detail/{a}', [FrontendProductController::class, 'detail'])->name('f.product.detail');
