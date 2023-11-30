<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rota Index
Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProdutoController;

// Login Routes
Route::get('/login', [UsuarioController::class, 'login'])->name('usuarios.login');
Route::post('/logar', [UsuarioController::class, 'logar'])->name('usuarios.logar');

// Usuario Routes

// Rota para exibir a lista de usuários
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

// Rota para exibir o formulário de cadastro de usuário
Route::get('/usuarios/cadastro', [UsuarioController::class, 'cadastro'])->name('usuarios.cadastro');

// Rota para processar o cadastro de um novo usuário
Route::post('/usuarios/novo', [UsuarioController::class, 'novo'])->name('usuarios.novo');

// Rota para exibir o formulário de edição de usuário
Route::get('usuario/editar/{id}', [UsuarioController::class, 'editar'])->name('usuarios.editar')->where('id', '[0-9]+');

// Rota para processar a edição de um usuário
Route::post('usuario/edita', [UsuarioController::class, 'edita'])->name('usuarios.edita');

// Rota para excluir um usuário
Route::get('usuario/excluir/{id}', [UsuarioController::class, 'excluir'])->name('usuarios.excluir')->where('id', '[0-9]+');


// Produtos Routes

// Rota para exibir o formulário de edição de produto
Route::get('produto/editar/{id}', [ProdutoController::class, 'editar'])->name('produtos.editar')->where('id', '[0-9]+');

// Rota para processar a edição de um produto
Route::post('produto/edita', [ProdutoController::class, 'edita'])->name('produtos.edita');

// Rota para excluir um produto
Route::get('produto/excluir/{id}', [ProdutoController::class, 'excluir'])->name('produtos.excluir')->where('id', '[0-9]+');

// Rota para processar o cadastro de um novo produto
Route::post('/produto/novo', [ProdutoController::class, 'novo'])->name('produtos.novo');

// Rota para exibir a lista de produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

// Rota para exibir o formulário de cadastro de produto
Route::get('/produtos/cadastro', [ProdutoController::class, 'cadastro'])->name('produtos.cadastro');

