<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
Route::post('/ticket/store', [TicketController::class, 'store'])->name('ticket.store');
Route::get('/ticket/index', [TicketController::class, 'index'])->name('ticket.index');
