<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /***
     * vamos a admimistrar 3 rutas diferentes
     */

     // la primer vista (pagina principal) por convencion debe llamarse index
    public function index(){
       // return "bienvenido a la pagia de cursos";
       return view('cursos.index');
    }

    // para hacer los formuilarios para crear algo se le llama create
    public function create(){
       // return "en esta pagina podras crear cursos";
       return view('cursos.create');
    }

    // para mostrar algo en particular se le llama show
    public function show( $curso){
       // return "Bienvenido al curso: $curso";
       return view('cursos.show',compact('curso'));
    }
}
