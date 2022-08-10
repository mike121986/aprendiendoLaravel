@extends('layouts.plantilla')

@section('title','create curso')

@section('content')
    <h1>en esta pagina podras crear cursos</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>Nombre</label>
        <br>
        <input type="text" name="name" id="">
        <br>
        <label>Descripcion</label>
        <br>
        <textarea name="descripcion" cols="30" rows="5"></textarea>
        <br>
        <label>Categoria</label>
        <br>
        <input type="text" name="categoria">
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection