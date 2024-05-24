@extends('layouts.layout')

@section('title', 'student')
    
@section('content')

<h4>Student Create</h4>
<form action="{{route('student.store')}}" method="POST">
    @csrf

<div class="form-floating">
<input type="text" name="name" class="form-control" id="name" placeholder="Name">
<label for="name">Ingrese el nombre</label>
<br>
</div>
<div class="form-floating">
<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last name">
<label for="last_name">Ingrese el apellido</label>
<br>
</div>
<div class="form-floating">
<input type="number" name="module_id" class="form-control" id="module_id" placeholder="module_id">
<label for="module_id">Ingrese el id del modulo</label>
<br>
<button type="submit" class="btn btn-outline-success">Guardar</button>

@endsection