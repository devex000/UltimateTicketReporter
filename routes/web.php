<?php

use App\Http\Controllers\PriorityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
Route::post('/ticket/store', [TicketController::class, 'store'])->name('ticket.store');
Route::get('/ticket/index', [TicketController::class, 'index'])->name('ticket.index');

Route::get('/priority/index', [PriorityController::class, 'index'])->name('priority.index');
Route::post('/priority/store', [PriorityController::class, 'store'])->name('priority.store');
Route::delete('/priority/delete/{priority}', [PriorityController::class, 'delete'])->name('priority.delete');
Route::put('/priority/update/{priority}', [PriorityController::class, 'update'])->name('priority.update');