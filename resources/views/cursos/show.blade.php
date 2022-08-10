@extends('layouts.plantilla')

@section('title','curso: '.$curso->name)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">volver a cursos</a><br>
    <a href="{{route('cursos.edit',$curso)}}">Editar cursos</a>
    <p><strong>Categoria:</strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
@endsection