<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//route pagina
Route::get('/', function () {
    return view('layouts.web.index');
});

Route::get('/', function () {
    return view('layouts.web.conteudo');
});

Route::get('/registar', function () {
    return view('layouts.web.registar');
});

Route::get('/admin', function () {
    return view('layouts.admin.admin');
});

Route::resource('/distritos', 'ControloDistrito');
Route::resource('/bairros', 'ControloBairro');
Route::resource('/categorias', 'ControloCategoria');
Route::resource('/cidades', 'ControloCidade');
Route::resource('/clientes', 'ControloCliente');
Route::resource('/produtos', 'ControloProduto');
Route::resource('/detalhes', 'ControloDetalhesProduto');
Route::resource('/enderecos', 'ControloEndereco');
Route::resource('/pedidos', 'ControloPedido');
Route::resource('/cozinhas', 'ControloCozinha');
Route::resource('/pagamentos', 'ControloPagamento');
Route::resource('/usuarios', 'ControloUsuario');