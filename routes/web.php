<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('admin.login.index');
});

Route::prefix('customer')->group(function () {
    Route::get('/beranda', [CustomerController::class, 'index'])->name('customer.beranda');
    Route::get('/produk', [CustomerController::class, 'product'])->name('customer.produk');
    Route::get('/hubungi-kami', [CustomerController::class, 'contact'])->name('customer.contact');
    // Route::get('/{id}', [CustomerTypeController::class, 'detail']);
    // Route::post('/add', [CustomerTypeController::class, 'add']);
    // Route::put('/{id}', [CustomerTypeController::class, 'update']);
    // Route::delete('/{id}', [CustomerTypeController::class, 'delete']);
    // Route::get('/home', function () {
    //     return view('customer.index');
    // });
});

//Dashboard
Route::get('adminIndex', [DashboardController::class, 'index'])->name('admin.index');

//Login
Route::get('adminLogin', [LoginController::class, 'index'])->name('admin.login');
Route::post('adminAuthenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
Route::post('adminLogout', [LoginController::class, 'logout'])->name('admin.logout');

//Category
Route::resource('category',CategoryController::class);
Route::get('/category/destroy/{id_kategori}','App\Http\Controllers\CategoryController@destroy');

//Product
Route::resource('product',ProductController::class);
Route::get('/product/destroy/{id_produk}','App\Http\Controllers\ProductController@destroy');

//Cluster
Route::get('/cluster','App\Http\Controllers\ClusterController@index')->name('admin.cluster');
Route::get('/cluster/create','App\Http\Controllers\ClusterController@create');
Route::post('/cluster/show','App\Http\Controllers\ClusterController@show');
Route::post('/cluster/edit/{id_cluster}','App\Http\Controllers\ClusterController@edit');;
Route::post('/cluster/store','App\Http\Controllers\ClusterController@store');;
Route::get('/cluster/destroy/{id_cluster}','App\Http\Controllers\ClusterController@destroy');
Route::get('/cluster/update/{id_cluster}', 'App\Http\Controllers\ClusterController@update');

// Laporan
Route::get('/laporan/cluster','App\Http\Controllers\LaporanClusterController@cluster')->name('laporan.cluster');

//Order
Route::resource('order', OrderController::class);
