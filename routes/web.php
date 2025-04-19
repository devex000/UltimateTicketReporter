<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\SnapshotController;
use App\Http\Controllers\StatusController;
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

Route::get('/status/index', [StatusController::class, 'index'])->name('status.index');
Route::post('/status/store', [StatusController::class, 'store'])->name('status.store');
Route::put('/status/update/{status}', [StatusController::class, 'update'])->name('status.update');
Route::delete('/status/delete/{status}', [StatusController::class, 'delete'])->name('status.delete');
Route::put('/status/set_as_new/{status}', [StatusController::class, 'set_as_new'])->name('status.set_as_new');

Route::get('/snapshot/export', [SnapshotController::class, 'export'])->name('snapshot.export');
Route::post('/snapshot/export_gen', [SnapshotController::class, 'export_gen'])->name('snapshot.export_gen');
Route::get('/snapshot/import', [SnapshotController::class, 'import'])->name('snapshot.import');
Route::post('/snapshot/import_gen', [SnapshotController::class, 'import_gen'])->name('snapshot.import_gen');

