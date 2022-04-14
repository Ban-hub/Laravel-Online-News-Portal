<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\crudController;
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

Route::get('/', [frontController::class, 'index']);
Route::get('category', [frontController::class, 'category']);
Route::get('post', [frontController::class, 'post']);

Route::get('admin', [adminController::class, 'index']);
// category
Route::get('view-category', [adminController::class, 'view_category']);
Route::post('add-category', [crudController::class, 'insert_data']);
Route::get('edit-category/{id}', [adminController::class, 'edit_category']);
Route::post('update-category/{id}', [crudController::class, 'update_data']);
Route::post('multiple-delete', [adminController::class, 'multiple_delete']);
// settings
Route::get('settings', [adminController::class, 'settings']);
Route::post('add-settings', [crudController::class, 'insert_data']);
Route::post('update-settings/{id}', [crudController::class, 'update_data']);
// posts
Route::get('add-post', [adminController::class, 'add_post']);
Route::post('make-post', [crudController::class, 'insert_data']);
Route::get('all-posts', [adminController::class, 'all_posts']);
Route::get('edit-post/{id}',  [adminController::class, 'edit_post']);
Route::post('update-post/{id}', [crudController::class, 'update_data']);


