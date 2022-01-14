<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    /// route di bagian tabel kategori
    $router->get('kategori', ['uses' => 'KategoriController@index']); // untuk menampilkan
    $router->get('kategori/{id}', ['uses' => 'KategoriController@show']); // memanggil 1 data
    $router->delete('kategori/{id}', ['uses' => 'KategoriController@destroy']); // menghapus
    $router->put('kategori/{id}', ['uses' => 'KategoriController@update']); //
    $router->post('kategori', ['uses' => 'KategoriController@create']);
    /// route di bagian tabel pelanggan
    $router->get('pelanggan', ['uses' => 'PelangganController@index']);
    $router->get('pelanggan/{id}', ['uses' => 'PelangganController@show']);
    $router->post('pelanggan', ['uses' => 'PelangganController@create']);
    $router->delete('pelanggan/{id}', ['uses' => 'PelangganController@destroy']);
    $router->put('pelanggan/{id}', ['uses' => 'PelangganController@update']);

    $router->post('barang', ['uses' => 'BarangController@create']);
});
