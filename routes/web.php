<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;


//Rota de venda
Route::get('vendas', [VendasController::class, 'index'])->name('vendas.index');
Route::get('vendas-create', [VendasController::class, 'create'])->name('vendas.create');
Route::post('create-vendas', [VendasController::class, 'store'])->name('vendas.store');
Route::get('vendas/edit/{id}',[VendasController::class, 'edit'])->name('vendas.edit');
Route::put('vendas/{id}', [VendasController::class, 'update'])->name('vendas.update');
Route::delete('vendas/{vendas}', [VendasController::class, 'destroy'])->name('vendas.destroy');

//Rotas Produtos
Route::get('welcome', [ProdutosController::class, 'index'])->name('Produtos.welcome'); 
Route::get('create', [ProdutosController::class, 'create'])->name('Produtos.create');
Route::post('produtos', [ProdutosController::class, 'store'])->name('Produtos.store');
Route::get('produtos/{produto}', [ProdutosController::class, 'show'])->name('Produtos.show');
Route::get('produtos/edit/{id}', [ProdutosController::class, 'edit'])->name('Produtos.edit');
Route::put('produtos/{id}', [ProdutosController::class, 'update'])->name('Produtos.update');
Route::delete('produtos/{id}',[ProdutosController::class, 'destroy'])->name('Produtos.destroy');

//Rotas Cliente
Route::get('cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('cliente-create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('create-cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/{cliente}',[ProdutosController::class, 'show'])->name('cliente.show'); 
Route::get('cliente/edit/{id}',[ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('cliente/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

//Rotas Funcionario
Route::get('funcionario', [FuncionarioController::class, 'index'])->name('funcionario.index');
Route::get('funcionario-create', [FuncionarioController::class, 'create'])->name('funcionario.create');
Route::post('create-funcionario', [FuncionarioController::class, 'store'])->name('funcionario.store');
Route::get('funcionario/edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionario.edit');
Route::put('funcionario/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update');
Route::delete('funcionario/{id}', [FuncionarioController::class,'destroy'])->name('funcionario.destroy');

