<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("contacts",[ContactController::class, 'index'])->name("contacts.list");

Route::get('contacts',[ContactController::class, 'create'])->name('contact.create');
Route::post('addContacts',[ContactController::class, 'store'])->name('contacts.store');

Route::get('contact/{contact}/edit',[ContactController::class, 'edit'])->name('contacts.edit');
Route::put('contact/{contact}',[ContactController::class, 'update'])->name('contacts.update');

Route::delete('contacts/{contact}',[ContactController::class, 'destroy'])->name('contacts.destroy');


Route::resource('contacts',ContactController::class);
