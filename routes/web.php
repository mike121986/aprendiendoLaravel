<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/', HomeController::class);

/**
 * pódemos agrupar las rutas para evitar estar llamando el controlador
 * tenemos que tener en cuenta que las agrupaciones deben ser con el mismo controlador
 */

 Route::controller(CursoController::class)->group(function () {
     Route::get('cursos', 'index')->name('cursos.index');
     Route::get('cursos/create', 'create')->name('cursos.create');
     Route::get('cursos/{curso}', 'show')->name('cursos.show');     
 });
/*
Route::get('cursos',function(){
    return "bienvenido a la pagia de cursos";
});

Route::get('cursos/create', function () {
    return "en esta pagina podras crear cursos";
});
*/
/* route con paramateros 
Route::get('cursos/{curso}',function($curso){
    return "Bienvenido al curso: $curso";
});*/

/* con mas de un parametro 
Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria) {
    return "bienvenido al curso $curso de la categoria $categoria";
});*/

/* podemos enviar rutas con parametro opcionales esto se logra con un signo de interrogacion en el paramatero que sera opcional
 en este caso fusionaremos las dos ultima rutas que declaramos anteriormente

 lo mas recomendable es llevar la logica en un controlador y evitar hacer este tipo de logia en las rutas

Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    if($categoria){
        return "bienvenido al curso $curso de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
});*/