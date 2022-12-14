<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

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

    public function store(StoreCurso $request){
      
      //validacion
      /* 
      esta validacion como ejemplo se encuentra en Request->StoreCurso
      $request->validate([
        'name'=>'required|max:10',
        'descripcion'=>'required|min:10',
        'categoria'=>'required'
      ]); */

      $slug = Str::slug($request->name,'-');
      
      // hacemos una instancia del objeto curso
      
     /*se comenta para hacer la asicnacion masiva */
      $curso = new Curso();

      $curso->name = $request->name;
      $curso->slug = $slug;
      $curso->descripcion = $request->descripcion;
      $curso->categoria = $request->categoria;

      $curso->save(); 

      /*$curso = Curso::create($request->all());*/
      return redirect()->route('cursos.show',$curso);
    }

    // para mostrar algo en particular se le llama show
    public function show(Curso $curso){
      
       // return "Bienvenido al curso: $curso";
       // metodo para recuperar un registro por id
      //$cursos  = Curso::find($curso);
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
       //validacion
       $request->validate([
        'name'=>'required',
        'descripcion'=>'required',
        'categoria'=>'required'
      ]);

      /* editar por asignacion masiva
      $curso->name = $request->name;
      $curso->descripcion = $request->descripcion;
      $curso->categoria = $request->categoria;

      $curso->save(); */
      $curso->update($request->all());
      return redirect()->route('cursos.show',$curso->id);
    }

    public function destroy(Curso $curso){
      $curso->delete();

      return redirect()->route('cursos.index');
    }
}
