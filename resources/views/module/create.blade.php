@extends('layouts.layout')

@section('title', 'module')
    
@section('content')

<h4>Module Create</h4>
<form action="{{route('module.store')}}" method="POST">
    @csrf

<div class="form-floating">
<input type="text" name="name" class="form-control" id="name" placeholder="Name">
<label for="name">Ingrese el nombre</label>
<br>
</div>
<div class="form-floating">
<input type="number" name="teacher_id" class="form-control" id="teacher_id" placeholder="teacher_id">
<label for="teacher_id">Ingrese el id del teacher</label>
<br>
<button type="submit" class="btn btn-outline-success">Guardar</button>

@endsection