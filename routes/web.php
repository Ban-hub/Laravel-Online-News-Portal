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
Route::get('article/{slug}',[frontController::class, 'article']);
Route::get('category/{slug}', [frontController::class, 'category']);
Route::get('page/{slug})', [frontController::class, 'page']);
Route::get('contact-us', [frontController::class, 'contact_us']);
Route::post('send-message',[crudController::class, 'insert_data']);

Route::get('search-content', [frontController::class, 'search_content']);
// admin
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
// pages
Route::get('add-page', [adminController::class, 'add_page']);
Route::post('make-page', [crudController::class, 'insert_data']);
Route::get('all-pages', [adminController::class, 'all_pages']);
Route::get('edit-page/{id}',  [adminController::class, 'edit_page']);
Route::post('update-page/{id}', [crudController::class, 'update_data']);
// messages
Route::get('messages', [adminController::class, 'messages']);
// advertisements
Route::get('add-adv', [adminController::class, 'add_adv']);
Route::post('make-adv', [crudController::class, 'insert_data']);
Route::get('all-advs', [adminController::class, 'all_advs']);
Route::get('edit-adv/{id}',  [adminController::class, 'edit_adv']);
Route::post('update-adv/{id}', [crudController::class, 'update_data']);

