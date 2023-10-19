<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Books\BooksController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Home\HomeController;

Route::group([ 'prefix' => LaravelLocalization::setLocale() ], function() {
    
    Route::get('/', [ HomeController::class, 'index'])->name('home');
    
    Route::get('/contact', [ ContactController::class, 'index' ])->name('contact.index');
    Route::post('/contact', [ ContactController::class, 'send' ])->name('contact.send');

    Route::resource('books', BooksController::class);
}); 
