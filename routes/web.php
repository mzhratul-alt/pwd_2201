<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/create', function () {
    return view('todo.create');
})->name('todo.create');

Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todos', [TodoController::class, 'getAllTodo'])->name('todo.all');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/update/{id}', [TodoController::class, 'update'])->name('todo.update');


