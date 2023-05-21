<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// Pagina de Registro
Route::post('/registration', [AuthManager::class, 'registration']);

// Pagina de Login
Route::post('/login', [AuthManager::class, 'login']);

// Listar Produto Sozinho
Route::get('/product/{id}', [ProductsController::class, "show"]);

// Listar Produtos
Route::get('/products', [ProductsController::class, "index"]);

// Criar novo Produto
Route::post('/product', [ProductsController::class, "store"]);

// Atualizar Produto
Route::put('/product/{id}', [ProductsController::class, "update"]);

// deletar Produto
Route::delete('/product/{id}', [ProductsController::class, "delete"]);

// Acessar minha Dashboard apos Login
Route::get('/dashboard', [AuthManager::class, 'dashboard']);
