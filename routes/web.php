<?php

use App\Http\Controllers\WelcomePage;
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


Route::get('/', [\App\Http\Controllers\WelcomePage::class, 'index']);

Route::get('/about',function () {
    return view('about',["ime" => "Aleksandra",
        "prezime" => "Cvetic",]);
});

Route::get('/shop',[\App\Http\Controllers\shopPage::class, 'index']);

use Illuminate\Http\Request;

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']
);

Route::post('/contact', function (Request $request) {
    // You can handle form logic here (store, email, etc.)
    return back()->with('success', 'Message sent successfully!');
})->name('contact.submit');

Route::get('/AllContact', [\App\Http\Controllers\ContactController::class, 'AllContact']);

Route::post('/send-contact', [\App\Http\Controllers\ContactController::class, 'sendContact']);

Route::get('/admin/add-product', function () {
    return view('addproduct');
});

Route::post('/admin/add-product', [\App\Http\Controllers\shopPage::class, 'addProduct']);

Route::get('/admin/add-product', [\App\Http\Controllers\shopPage::class, 'showForm']);
