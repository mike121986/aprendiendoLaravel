@extends('layouts.plantilla')

@section('title','create curso')

@section('content')
    <h1>en esta pagina podras editar el curso <strong><u>{{$curso->name}}</u></strong></h1>

    <form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf {{-- agregamos el token que requiere laravel --}}
        @method('put') {{-- como vamos a actualizar y usamos el metod put en las rutas y aqui tambien lo mandamos a llamar --}}
        <label>Nombre</label>
        <br>
        <input type="text" name="name" value='{{old('name',$curso->name)}}' >
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>Descripcion</label>
        <br>
        <textarea name="descripcion" cols="30" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        @error('descripcion')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>Categoria</label>
        <br>
        <input type="text" name="categoria" value='{{old('categoria',$curso->categoria)}}'>
        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection