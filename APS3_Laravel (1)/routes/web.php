<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
Route::get('/categorias',[CategoriaController::class,'index'])->name('categorias.index');
Route::post('/categorias',[CategoriaController::class,'store'])->name('categorias.store');
Route::get('/produtos',[ProdutoController::class,'index'])->name('produtos.index');
Route::post('/produtos',[ProdutoController::class,'store'])->name('produtos.store');