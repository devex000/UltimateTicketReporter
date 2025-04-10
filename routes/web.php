<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TopicController;
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

Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::delete('/category/delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');

Route::post('/subcategory/store', [SubcategoryController::class, 'store'])->name('subcategory.store');
Route::delete('/subcategory/delete/{subcategory}', [SubcategoryController::class, 'delete'])->name('subcategory.delete');
Route::put('/subcategory/update/{subcategory}', [SubcategoryController::class, 'update'])->name('subcategory.update');

Route::post('/topic/store', [TopicController::class, 'store'])->name('topic.store');
Route::delete('/topic/delete/{topic}', [TopicController::class, 'delete '])->name('topic.delete');
Route::put('/topic/update/{topic}', [TopicController::class, 'update'])->name('topic.update');