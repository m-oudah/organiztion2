<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return redirect(app()->getLocale());
 });


Route::group([
    'middleware' => ['auth'],
    'prefix' => '{locale}', 
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setLocale'], function() {

        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::get('about', [HomeController::class, 'about'])->name('about');
        Route::get('services', [HomeController::class, 'services'])->name('services');
        Route::get('servicedet', [HomeController::class, 'serviceDetails'])->name('serviceDetails');
        Route::get('articleedet', [HomeController::class, 'articleDetails'])->name('articleDetails');
        Route::get('programdet', [HomeController::class, 'programDetails'])->name('programDetails');
        Route::get('storydet', [HomeController::class, 'storyDetails'])->name('storyDetails');

        Route::get('ourimages', [HomeController::class, 'ourImages'])->name('ourImages');
        Route::get('ourvideos', [HomeController::class, 'ourVideos'])->name('ourVideos');
        Route::get('blog', [HomeController::class, 'blog'])->name('blog');
        Route::get('news', [HomeController::class, 'news'])->name('news');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::get('programs', [HomeController::class, 'programs'])->name('programs');
        Route::get('successs', [HomeController::class, 'successStories'])->name('successStories');
        Route::get('reports', [HomeController::class, 'annualReports'])->name('annualReports');
        Route::get('complaints', [HomeController::class, 'complaints'])->name('complaints');
        Route::get('contributions', [HomeController::class, 'contributions'])->name('contributions');


});


