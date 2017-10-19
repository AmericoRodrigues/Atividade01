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

Route::get('/blog/', function () {
    echo "<b>bem vindo ao blog da janaina</b> ";
});

Route::get('/administrativa/', function () {
    echo "voce esta acessando a pagina administrativa";
});

Route::get('/usuarios/{usuario1}/{usuario2}/{usuario3}/{usuario4}', function ($usuario1, $usuario2, $usuario3, $usuario4) {
    echo "<table border='1px'><tr><td>listas de usuarios</td></tr><tr><td> {$usuario1}</td></tr><tr><td> {$usuario2}</td></tr><tr><td> {$usuario3}</td></tr><tr> <td>{$usuario4}</td></tr></table>";
});

Route::get('/media/{n1}/{n2}/{n3}/{n4}/{n5}', function ($n1, $n2, $n3, $n4, $n5){
	echo "a soma de {n1}/{n2} é ";


});