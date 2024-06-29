<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);

Route::get('/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/edit/{id}', [StudentController::class, 'change'])->name('student.change');
Route::post('/student/{id}', [StudentController::class, 'hapus'])->name('student.hapus');


