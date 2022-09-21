<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});

// Route::get('/adminIndex', function () {
//     return view('admin.index');
// });

Route::get('adminIndex', [DashboardController::class, 'index'])->name('admin.index');

Route::get('/cluster', function () {
    return view('admin.cluster');
});

Route::get('adminLogin', [LoginController::class, 'index'])->name('admin.login');
Route::post('adminAuthenticate', [LoginController::class, 'authenticate'])->name('admin.authenticate');
Route::post('adminLogout', [LoginController::class, 'logout'])->name('admin.logout');

Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);

Route::get('/cluster','App\Http\Controllers\ClusterController@index');
Route::get('/cluster/create','App\Http\Controllers\ClusterController@create');
Route::post('/cluster/show','App\Http\Controllers\ClusterController@show');
Route::post('/cluster/edit/{id_cluster}','App\Http\Controllers\ClusterController@edit');;
Route::post('/cluster/store','App\Http\Controllers\ClusterController@store');;
Route::get('/cluster/destroy/{id_cluster}','App\Http\Controllers\ClusterController@destroy');
Route::get('/cluster/update/{id_cluster}', 'App\Http\Controllers\ClusterController@update');
// {{route('cluster.update,['cluster' => $cluster -> id_cluster])}}

// Laporan
Route::get('/laporan/cluster','App\Http\Controllers\LaporanClusterController@cluster');

