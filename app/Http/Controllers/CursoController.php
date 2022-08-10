<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /***
     * vamos a admimistrar 3 rutas diferentes
     */

     // la primer vista (pagina principal) por convencion debe llamarse index
    public function index(){
      /* listamos los cursos  */
      $cursos = Curso::orderBy('id','desc')->paginate();
      

       // return "bienvenido a la pagia de cursos";
       return view('cursos.index',compact('cursos'));
    }

    // para hacer los formuilarios para crear algo se le llama create
    public function create(){
       // return "en esta pagina podras crear cursos";
       return view('cursos.create');
    }

    public function store(Request $request){
      // hacemos una instancia del objeto curso
      $curso = new Curso();

      $curso->name = $request->name;
      $curso->descripcion = $request->descripcion;
      $curso->categoria = $request->categoria;

      $curso->save();

      return redirect()->route('cursos.show',$curso->id);
    }

    // para mostrar algo en particular se le llama show
    public function show($id){
       // return "Bienvenido al curso: $curso";
       // metodo para recuperar un registro por id
       $curso  = Curso::find($id);
       return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
      /* este es una manera de recuperar un registro 
      $curso = Curso::find($id);
      return $curso; */
      return view('cursos.edit',compact('curso')) ;
    }
                           //Request: es todo lo del formulario
                           //Curso: estainstancia es para consulta el datos en la base de datos
    public function update(Request $request,Curso $curso){
      $curso->name = $request->name;
      $curso->descripcion = $request->descripcion;
      $curso->categoria = $request->categoria;

      $curso->save();

      return redirect()->route('cursos.show',$curso->id);
    }
}
