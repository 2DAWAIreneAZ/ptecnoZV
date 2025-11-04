<?php
use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PaginaController::class,'index'])->name('index');
Route::get('/pisos',[PaginaController::class,'index'])->name('index');
Route::get('/pisos/{id}',[PaginaController::class,'show'])->name('show');
Route::get('/atencioncliente',[PaginaController::class,'atencion'])->name('atencion');
Route::get('/contacto',[PaginaController::class,'contacto'])->name('contacto');

