@extends('layouts.layout')

@section('title', 'module')
    
@section('content')


<h4>Module Edit</h4>
<form action="{{route('module.update',$module)}}" method="POST">
    @csrf
    @method('put')

<div class="form-floating">
<input type="text" name="name" class="form-control" id="name" placeholder="name"
value="{{old('Name:',$module->name)}}">
<label for="name">Ingrese el nombre</label>
<br>
</div>
<div class="form-floating">
<input type="text" name="teacher_id" class="form-control" id="teacher_id" placeholder="teacher_id"
value="{{old('teacher_id:',$module->teacher_id)}}">
<label for="teacher_id">Ingrese el id del profesor</label>
<br>
    <br>
<button type="submit" class="btn btn-outline-success">Guardar</button>

@endsection