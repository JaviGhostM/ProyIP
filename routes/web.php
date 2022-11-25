<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\WeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceAdminController;
use App\Http\Controllers\PsychologistController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\NewController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('Nosotros', [WeController::class, 'index'])->name('we.index');
Route::get('Servicios', [ServiceController::class, 'index'])->name('service.index');
Route::get('Servicios/{Serv}', [ServiceController::class, 'showservice'])->name('service.show');
Route::get('Servicios/Programas/{Prog}', [ServiceController::class, 'showprogram'])->name('program.show');
Route::get('Psicólogos', [PsychologistController::class, 'index'])->name('psy.index');
Route::get('Psicólogos/Información-de-psicólogo/{Psy}', [PsychologistController::class, 'show'])->name('psy.show');
Route::get('Noticias', [NewController::class, 'index'])->name('news.index');
Route::get('Noticias/{New}', [NewController::class, 'show'])->name('news.show');
Route::get('Contacto', [ContactController::class, 'index'])->name('contact.index');
Route::get('Blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('Blog/{Blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('Presupuesto', [BudgetController::class, 'index'])->name('budget.index');
Route::get('Admin', [HomeAdminController::class, 'index'])->name('admin.index');
Route::get('Enlaces/{Ad}', [HomeController::class, 'showads'])->name('home.ads.show');


Route::post('Admin/Slider/Update', [HomeAdminController::class, 'storeslider'])->name('admin.store.slider');
Route::post('Admin/Banner/Update', [HomeAdminController::class, 'storebanner'])->name('admin.store.banner');
Route::post('Admin/Ad/Update', [HomeAdminController::class, 'storead'])->name('admin.store.ad');
Route::post('Admin/New/Update', [HomeAdminController::class, 'storenew'])->name('admin.store.new');
Route::post('Admin/Psy/Update', [HomeAdminController::class, 'storepsy'])->name('admin.store.psy');
Route::post('Admin/Service/Update', [ServiceAdminController::class, 'storeservice'])->name('admin.store.service');
Route::post('Admin/Program/Update', [ServiceAdminController::class, 'storeprogram'])->name('admin.store.program');
Route::post('Admin/Blog/Update', [HomeAdminController::class, 'storeblog'])->name('admin.store.blog');
Route::post('Contacto', [ContactController::class, 'storecontact'])->name('contact.store');
Route::post('Contacto/Presupuesto', [ContactController::class, 'storebudget'])->name('budget.store');

Route::get('/clear-cache', function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
    echo Artisan::call('view:clear');
 });
