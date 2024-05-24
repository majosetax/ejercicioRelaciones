@extends('layouts.layout')

@section('title', 'student')
    
@section('content')


<h4>Student Edit</h4>
<form action="{{route('student.update',$student)}}" method="POST">
    @csrf
    @method('put')

<div class="form-floating">
<input type="text" name="name" class="form-control" id="name" placeholder="name"
value="{{old('Name:',$student->name)}}">
<label for="name">Ingrese el nombre</label>
<br>
</div>
<div class="form-floating">
<input type="text" name="last_name" class="form-control" id="last_name" placeholder="last_name"
value="{{old('last_name:',$student->last_name)}}">
<label for="last_name">Ingrese el apellido</label>
<br>
</div>
<div class="form-floating">
    <input type="number" name="module_id" class="form-control" id="module_id" placeholder="module_id"
    value="{{old('module_id:',$student->module_id)}}">
    <label for="name">Ingrese el id del modulo</label>
    <br>
<button type="submit" class="btn btn-outline-success">Guardar</button>

@endsection