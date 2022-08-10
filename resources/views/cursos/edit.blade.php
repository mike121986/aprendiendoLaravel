@extends('layouts.plantilla')

@section('title','create curso')

@section('content')
    <h1>en esta pagina podras editar el curso <strong><u>{{$curso->name}}</u></strong></h1>

    <form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf {{-- agregamos el token que requiere laravel --}}
        @method('put') {{-- como vamos a actualizar y usamos el metod put en las rutas y aqui tambien lo mandamos a llamar --}}
        <label>Nombre</label>
        <br>
        <input type="text" name="name" value='{{$curso->name}}''>
        <br>
        <label>Descripcion</label>
        <br>
        <textarea name="descripcion" cols="30" rows="5">{{$curso->descripcion}}</textarea>
        <br>
        <label>Categoria</label>
        <br>
        <input type="text" name="categoria" value='{{$curso->categoria}}'>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection