<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {return view('homepage');});
Route::get('/', [PublicController::class , 'homepage'])->name('homepage');

// Route::get('/Clothing', function () {return view('clothing');});
Route::get('/Clothing', [PublicController::class , 'clothing'])->name('clothing');
Route::get('Clothing/detttaglio/{name}', [PublicController::class , 'dettaglioClothing'])->name('dettaglio');


// Route::get('/Accessories', function () {return view('accessories');});
Route::get('/Accessories', [PublicController::class , 'accessories'])->name('accessories');


// Route::get('/About_Us', function () {return view('about');});
Route::get('/About_Us', [PublicController::class , 'about'])->name('about');

// Route::get('/Contact_us', function () {return view('contact');});
Route::get('/Contact_us', [PublicController::class , 'contact'])->name('contact');

// Route::get('/Customer_Support', function () {return view('customer');});
Route::get('/Customer_Support', [PublicController::class , 'customer'])->name('customer');

// Route::get('/Privacy_&_Condition', function () {return view('privacy');});
Route::get('/Privacy_&_Condition', [PublicController::class , 'privacy'])->name('privacy');

// Route::get('/Terms_&_Condition', function () {return view('terms');});
Route::get('/CloTerms_&_Conditionthing', [PublicController::class , 'terms'])->name('terms');