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
    echo "<b>bem vindo ao blog do Americo</b> ";
});

Route::get('/administrativa/', function () { 
    echo "voce esta acessando a pagina administrativa";
});

Route::get('/usuarios/{usuario_1}/{usuario_2}/{usuario_3}/{usuario_4}', function ($usuario_1, $usuario_2, $usuario_3, $usuario_4) {
    echo "<table border='1px'>
    		<tr>
    			<td>listas de usuarios</td>
    		</tr>
    		<tr>
    			<td> {$usuario_1}</td>
    		</tr>
    		<tr>
    			<td> {$usuario_2}</td>
    		</tr>
    		<tr>
    			<td> {$usuario_3}</td>
    		</tr>
    		<tr>
    			<td>{$usuario_4}</td>
    		</tr>
    	</table>";
});

Route::get('/media/{num1}/{num2}/{num3}/{num4}/{num5}', function ($num1, $num2, $num3, $num4, $num5){
	echo "parametros : {$num1},{$num2},{$num3},{$num4},{$num5}";
	$media=($num1+$num2+$num3+$num4+$num5)/5;
	echo "<br> a media é= $media";
});

Route::get('/nomes/{pessoa_1}/{pessoa_2}', function ($pessoa_1, $pessoa_2){
	echo "{$pessoa_1} e {$pessoa_2}";
	if($pessoa_1 == $pessoa_2){
		echo "<br>são nomes iguais";
	} else {
    echo  "  <br /> NÃO EXISTE NOMES IGUAIS " ;
  
  });

Route::get('/nomes_2/{p_1}/{p_2}/{p_3}', function($p_1,$p_2,$p_3){
	return view('nomes_2', ['p_1'=> $p_1,'p_2'=> $p_2, 'p_3'=> $p_3]);
	
	});

Route::get('/soma/{n_1}/{n_2}', function($n_1,$n_2,){
	return view('soma', ['n_1'=> $n_1,'n_2'=> $n_2]);
	
	});

/*-------Ultima Atividade------*/


Route::get('/tabela_usu/{usuario1}/{usuario2}/{usuario3}/{usuario4}', function ($usuario1, $usuario2, $usuario3, $usuario4) {
	return view('tabela_usu', ['usuario1'=>$usuario1, 'usuario2'=>$usuario2, 'usuario3'=>$usuario3, 'usuario4'=>$usuario4]);
    echo"<table border='1px'>
    		<tr>
    			<td>
    				listas de usuarios
    			</td>
    		</tr>
    		<tr>
    			<td>
    				 {$usuario1}
    			</td>
    		</tr>
    		<tr>
    			<td> 
    				{$usuario2}
    			</td>
    		</tr>
    		<tr>
    			<td>
    				{$usuario3}
    			</td>
    		</tr>
    		<tr>
    			<td>
    				{$usuario4}
    			</td>
    		</tr>
    	</table>";
});


