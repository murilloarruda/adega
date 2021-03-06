<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'IndexController@index');

Route::get('/busca', 'AdegaController@busca');

Route::get('/about', 'AdegaController@about');

Route::get('/deliveryway', 'AdegaController@deliveryway');

Route::get('/returnOrder', 'AdegaController@returnOrder');

Route::get('/login', 'UsuariosController@loginView')->name('login');

Route::post('/login', 'UsuariosController@login');

Route::get('/logout', 'UsuariosController@logout');

Route::get('/register', 'UsuariosController@registerView');

Route::post('/register', 'UsuariosController@store');


// ROTAS DO PAINEL DOS FAVORITOS - ! início !
Route::get('/favourites', 'ProductController@favouritesView')->middleware('auth');
Route::get('/remove/{id}', 'ProductController@removeFav')->middleware('auth');
Route::get('/favoritar/{id}', 'ProductController@insertFav')->middleware('auth');
// ROTAS DO PAINEL DOS FAVORITOS - ! fim !


// ROTAS DO PAINEL DO USUÁRIO - ! início !
Route::get('/panel', 'PanelController@panel')->middleware('auth');
Route::get('/panel/orders', 'PanelController@orders')->middleware('auth');
Route::get('/panel/orders/{id}', 'PanelController@showOrder')->middleware('auth');
Route::get('/panel/address', 'PanelController@addressShow')->middleware('auth');
Route::get('/panel/address/edit', 'PanelController@addressEdit')->middleware('auth');
Route::post('/panel/address/edit', 'PanelController@addressEdit')->middleware('auth');
Route::get('/panel/account/edit', 'PanelController@account_edit')->middleware('auth');
Route::post('/panel/account/edit', 'PanelController@account_edit')->middleware('auth')->name('account');
// ROTAS DO PAINEL DO USUÁRIO - ! fim !


// ROTAS DO CARRINHOS DE COMPRAS - ! início !
// Route::get('/shoppingCart', 'carrinhoController@index');
Route::get('/adicionar/{id}', 'ShoppingCartController@adicionar');
Route::get('/retirar/{id}', 'ShoppingCartController@retirar');
Route::get('/exibir', 'ShoppingCartController@exibir');
Route::get('/remover/{id}', 'ShoppingCartController@remover');

Route::get('/finalizarCompra', 'ShoppingCartController@finalizarCompra')->middleware('auth');
Route::get('/pedidoFinalizado', 'ShoppingCartController@show')->middleware('auth');

Route::get('/checkout', 'ShoppingCartController@checkout')->middleware('auth');
// ROTAS DO CARRINHOS DE COMPRAS - ! fim !


Route::post('/newsletter', 'NewsletterController@registerNewsletter');
Route::get('/newsletter/{id}', 'NewsletterController@outNewsletter');

Route::get('/product/{id}', 'ProductController@showProduct');



Route::get('/products/wines', 'ProductController@wineList');

// Route::get('/products/promotions', 'ProductController@promotionsList');

Route::get('/products/beers', 'ProductController@beersList');

// Route::get('/products/kits', 'ProductController@kitsList');

Route::get('/products/distilleds', 'ProductController@distilledsList');

Route::get('/products/nonAlcoholics', 'ProductController@nonAlcoholicsList');

Route::get('/createProduct', 'CreateProductController@addProduct');



