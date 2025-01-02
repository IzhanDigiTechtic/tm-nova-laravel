<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'home'])->name('/');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/our-core-competency-and-values', [FrontendController::class, 'ourcorecompetencyandvalues'])->name('our.core.competency.and.values');
Route::get('/success-rate', [FrontendController::class, 'successrate'])->name('success.rate');
Route::get('/reviews', [FrontendController::class, 'reviews'])->name('reviews');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');






