<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('siswa.index');
});

Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create']);
Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'store']);
Route::get('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'show']);
Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit']);
Route::put('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy']);

